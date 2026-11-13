<?php
/**
 * Theme setup for BrightSmile.
 *
 * @package BrightSmile
 */

/**
 * Load the theme stylesheet.
 */
function brightsmile_enqueue_assets() {
	wp_enqueue_style( 'style', get_stylesheet_uri(), array(), '1.0' );
}
add_action( 'wp_enqueue_scripts', 'brightsmile_enqueue_assets' );

/**
 * Turn on theme features and register the menu location.
 */
function brightsmile_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	register_nav_menus(
		array(
			'primary' => 'Primary Menu',
		)
	);
}
add_action( 'after_setup_theme', 'brightsmile_setup' );
