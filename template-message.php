<?php

/*
 * Template Name: Message
 */


$servername = "localhost";
$username = "admin";
$password = "1610";
$dbname = "personal";
$conn = createConnection($servername, $username, $password, $dbname);

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

reformatInput($fname, $lname, $email, $phone, $message);


if(!userExists($email)) {
    insertNewUser($fname, $lname, $email, $phone, $message);
}
addMessageFromUser($email, $message);

$conn->close();

wp_redirect(home_url());


function addMessageFromUser($email, $message): void
{
    //plange la fk, no clue why
    global $conn;
    $sql = "INSERT INTO wp_user_messages (mail, message) VALUES ('$email', '$message')";
    var_dump($sql);
    $conn->query($sql);
}

function userExists($email): bool
{
    global $conn;
    $sql = "SELECT * FROM wp_users WHERE mail = '$email'";
    $result = $conn->query($sql);
    return $result->num_rows > 0;
}

function insertNewUser($fname, $lname, $email, $phone, $message): void
{
    global $conn;
    $sql = "INSERT INTO wp_users (mail, firstname, lastname, phone) VALUES ('$email', '$fname', '$lname', '$phone')";
    $conn->execute_query($sql);
}

function createConnection($servername, $username, $password, $dbname)
{
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed. " . $conn->connect_error);
    }
    return $conn;
}

function reformatInput(&$fname, &$lname, &$email, &$phone, &$message){
    $fname = htmlspecialchars(stripslashes(trim($fname)));
    $lname = htmlspecialchars(stripslashes(trim($lname)));
    $email = htmlspecialchars(stripslashes(trim($email)));
    $phone = htmlspecialchars(stripslashes(trim($phone)));
    $message = htmlspecialchars(stripslashes(trim($message)));
}