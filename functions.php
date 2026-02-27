<?php
/**
 * IUS GENTIUM theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package IUS GENTIUM
 */

if ( ! function_exists( 'ius_gentium_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 */
	function ius_gentium_setup() {
		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 */
		add_theme_support( 'post-thumbnails' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );
	}
endif;
add_action( 'after_setup_theme', 'ius_gentium_setup' );

/**
 * Enqueue scripts and styles.
 */
function ius_gentium_scripts() {
	wp_enqueue_style( 'ius_gentium-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'ius_gentium_scripts' );
