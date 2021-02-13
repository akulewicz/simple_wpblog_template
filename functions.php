<?php

function simpleblog_theme_support() {
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'simpleblog_theme_support');

// =============== MENUS ========================

/* Create menu locations */
function simpleblog_menus() {
    $locations = array(
        'footer' => "Footer Menu"
    );
    register_nav_menus($locations);
}

add_action('init', 'simpleblog_menus');


/* Add specific class for footer menu li */
function simpleblog_add_class_footermenu_li( $classes, $item, $args ) {
    if( $args->theme_location == 'footer') {
        $classes[] = 'footer-navigation__item';
    }
    return $classes;

}

add_filter('nav_menu_css_class', 'simpleblog_add_class_footermenu_li', 1, 3);


/* Add specific class for footer menu anchor */
function simpleblog_add_class_footermenu_a( $atts, $item, $args ) {
    if( $args->theme_location == 'footer' ) {
      $atts['class'] = 'footer-navigation__link';
    }
    return $atts;
}

add_filter( 'nav_menu_link_attributes', 'simpleblog_add_class_footermenu_a', 10, 3 );


// ==================== REGISTER STYLES AND SCRIPTS =================

function simpleblog_register_styles() {

    $version = wp_get_theme()->get( 'Version' );
    wp_enqueue_style('simpleblog-main', get_template_directory_uri() . "/style.css", array('simpleblog-fontawsome'), $version, 'all');
    wp_enqueue_style('simpleblog-fontawsome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css", array('simpleblog-normalize'), '5.15.2', 'all');
    wp_enqueue_style('simpleblog-normalize', "https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css", array(), '8.0.1', 'all');
}

add_action('wp_enqueue_scripts', 'simpleblog_register_styles');

?>

