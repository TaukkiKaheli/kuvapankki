<?php

function custom_theme_setup() {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('custom-header');
}

add_action('after_setup_theme', 'custom_theme_setup');

function rekisteroi_menu(){
    register_nav_menu('reuna', 'Paavalikko');
}

add_action('init', 'rekisteroi_menu');

?>