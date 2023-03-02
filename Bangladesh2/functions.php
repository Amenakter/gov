<?php

/**
 * Proper way to enqueue scripts and styles.
 */
// function wpdocs_theme_name_scripts() {
// 	wp_enqueue_style( 'style-name', get_stylesheet_uri() );
//     wp_enqueue_style( 'style-boot', get_template_directory_uri() . '/assets/css/bootstrap.min.css' , array() );
// 	wp_enqueue_script( 'script-name', get_template_directory_uri() .'/assets/js/bootstrap.bundle.min.js', array(), '1.0.0', true );
// }
// add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );

// wp_enqueue_style( 'style-name', get_stylesheet_uri() );
// wp_enqueue_style( 'style-boot', get_template_directory_uri() . '/assets/css/bootstrap.min.css' , array() );

// // wp_enqueue_script( 'script-name', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array(), '1.0.0', true );
// function wpdocs_scripts_method() {
// 	wp_enqueue_script( 'custom-script', get_stylesheet_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array() );
// }
// add_action( 'wp_enqueue_scripts', 'wpdocs_scripts_method' );

function wpdocs_theme_name_scripts() {
	wp_enqueue_style( 'style-name', get_stylesheet_uri() );
	wp_enqueue_style( 'style-boot', get_template_directory_uri() .'/assets/css/bootstrap.min.css',  array());
   wp_enqueue_script( 'script-name', get_template_directory_uri() .'/assets/js/bootstrap.bundle.min.js', array());
}
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );

add_theme_support('title');
add_theme_support("custom-logo");
add_theme_support( 'post-thumbnails' );

register_nav_menus( array(
	'primary_menu' => 'PluginBuddy Mobile Navigation Menu',
	'footer_menu' => 'My Custom Footer Menu',
) );

register_sidebar([
	"name" =>"Banner",
	"id"=>"banner",
	'before_widget'=>'',
    'after_widget'=>'',
]);

// register_sidebar([
// 	"name" =>"Slider",
// 	"id" =>"slider",

// ]);
