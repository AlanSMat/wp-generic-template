<?php
/**
 * Theme Functions
 * 
 * 
 */

define('ASSETS_URI', get_template_directory_uri() . '/assets');
define('ASSETS_LIBRARY_URI', get_template_directory_uri() . '/assets/src/library');
define('ASSETS_LIBRARY_CSS_URI', get_template_directory_uri() . '/assets/src/library/css');
define('ASSETS_LIBRARY_JS_URI', get_template_directory_uri() . '/assets/src/library/js');

function asm_enqueue_scripts() 
{
    //wp_enqueue_style( 'main-css', get_template_directory_uri() . '/main-css', ['stylesheet'] );
    wp_register_style( 'style', get_stylesheet_uri(), [], filemtime( get_template_directory() . '/style.css' ), 'all' );
    wp_register_script( 'main', get_template_directory_uri() . '/assets/src/js/main.js', [], filemtime( get_template_directory() . '/assets/src/js/main.js' ), true );

    //
    wp_register_style( 'bootstrap', ASSETS_LIBRARY_CSS_URI . '/bootstrap.min.css', [] );
    wp_register_script( 'bootstrap', ASSETS_LIBRARY_JS_URI . '/bootstrap.min.js', [ 'jquery' ], false, 'all' );
    
    wp_enqueue_style( 'style');
    wp_enqueue_script( 'main');

    wp_enqueue_style( 'bootstrap' );
    wp_enqueue_script( 'bootstrap' );
}


add_action( 'wp_enqueue_scripts', 'asm_enqueue_scripts' );