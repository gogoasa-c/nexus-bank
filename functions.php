<?php

function load_css(){
    wp_register_style("bootstrap", get_template_directory_uri() . "/css/bootstrap.min.css", array(), false, "all");
    wp_enqueue_style("bootstrap");

    wp_register_style("main", get_template_directory_uri() . "/css/main.css", array(), false, "all");
    wp_enqueue_style("main");

    wp_register_style("style", get_template_directory_uri() . "style.css", array(), false, "all");
    wp_enqueue_style("style");
}
add_action("wp_enqueue_scripts", "load_css");

function load_js(){
    wp_enqueue_script("jquery");
    wp_register_script("bootstrap", get_template_directory_uri() . "/js/bootstrap.min.js", "jquery", false, true);
    wp_enqueue_script("bootstrap");
    wp_register_script("script", get_template_directory_uri() . "/js/script.js", "jquery", false, true);
    wp_enqueue_script("script");
}
add_action("wp_enqueue_scripts", "load_js");

add_theme_support("menus");
add_theme_support("post-thumbnails");

register_nav_menus(
    array(
        "top-menu" => "Top Menu Location",
    )
);


