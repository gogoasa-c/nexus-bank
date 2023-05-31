<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo get_the_title(get_the_ID()); ?></title>
    <?php wp_head(); ?>
</head>
<body>
<header>
    <div class="container">
        <p id="image-paragraph">
            <a class="home-link" href="<?php echo home_url(); ?>">
                <img class="logo" id="logo" src="http://localhost/wordpress/wp-content/uploads/2023/05/logo.png" alt="logo">
            </a>
            <a class="home-link" id="tagline" href="<?php echo home_url(); ?>">
                Nexus Bank - Empowering Your Financial Journey
            </a>
        </p>

        <?php wp_nav_menu(
            array(
                'theme_location' => 'top-menu',
                'menu_class' => 'top-bar'
            )
        ); ?>
    </div>
</header>
