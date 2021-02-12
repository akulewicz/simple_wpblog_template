<?php

function simpleblog_theme_support() {
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'simpleblog_theme_support');

function simpleblog_register_styles() {

    $version = wp_get_theme()->get( 'Version' );
    wp_enqueue_style('simpleblog-main', get_template_directory_uri() . "/style.css", array('simpleblog-fontawsome'), $version, 'all');
    wp_enqueue_style('simpleblog-fontawsome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css", array('simpleblog-normalize'), '5.15.2', 'all');
    wp_enqueue_style('simpleblog-normalize', "https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css", array(), '8.0.1', 'all');
    
    

}

add_action('wp_enqueue_scripts', 'simpleblog_register_styles');

?>

