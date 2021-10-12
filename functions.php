<?php
/**
 * Doyel Lite functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Doyel Lite
 */

if ( ! defined( 'DOYEL_LITE_VERSION' ) ) {
	$doyel_lite_theme = wp_get_theme();
	define( 'DOYEL_LITE_VERSION', $doyel_lite_theme->get( 'Version' ) );
}


/**
 * Enqueue scripts and styles.
 */
function doyel_lite_scripts() {
    wp_enqueue_style( 'doyel-lite-parent-style', get_template_directory_uri() . '/style.css',array('bootstrap','slicknav','doyel-default-block','doyel-style'), '', 'all');
    wp_enqueue_style( 'doyel-lite-main-style',get_stylesheet_directory_uri() . '/assets/css/main-style.css',array(), DOYEL_LITE_VERSION, 'all');

    wp_enqueue_script( 'masonry', get_stylesheet_directory_uri() . '/assets/js/masonry.pkgd.min.js',array('jquery'), DOYEL_LITE_VERSION, true );
    wp_enqueue_script( 'doyel-lite-main-js', get_stylesheet_directory_uri() . '/assets/js/doyel-lite-main.js',array('jquery','doyel-script'), DOYEL_LITE_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'doyel_lite_scripts' );


/**
 * Load Doyel Lite Header.
 */
require get_stylesheet_directory() . '/inc/header/header-2.php';
require get_stylesheet_directory() . '/inc/footer/footer-2.php';