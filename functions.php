<?php
/**
 * Kinesilk theme bootstrap.
 *
 * Keep this file lean: a block (FSE) theme gets most of its configuration from
 * theme.json and the templates/ folder. Here we only wire up the external
 * stylesheet, theme supports and the custom block-pattern category.
 *
 * @package Kinesilk
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! defined( 'KINESILK_VERSION' ) ) {
	define( 'KINESILK_VERSION', '1.0.0' );
}

/**
 * Theme supports.
 */
function kinesilk_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'html5', array( 'search-form', 'gallery', 'caption', 'style', 'script', 'navigation-widgets' ) );
	add_theme_support( 'custom-logo', array( 'height' => 96, 'width' => 320, 'flex-height' => true, 'flex-width' => true ) );
	add_theme_support( 'automatic-feed-links' );

	// Load our external stylesheet inside the block editor too, so the design
	// matches 1:1 between the editor and the front end.
	add_editor_style( 'assets/css/styles.css' );

	load_theme_textdomain( 'kinesilk_new', get_template_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'kinesilk_setup' );

/**
 * Front-end assets.
 *
 * All custom component CSS lives in a single external file (assets/css/styles.css)
 * as required: no inline styles, no CSS inside HTML. Versioned by file mtime so
 * LocalWP / browsers never serve a stale copy while we iterate.
 */
function kinesilk_enqueue_assets() {
	$rel  = 'assets/css/styles.css';
	$path = get_template_directory() . '/' . $rel;
	$ver  = file_exists( $path ) ? filemtime( $path ) : KINESILK_VERSION;

	wp_enqueue_style(
		'kinesilk-styles',
		get_template_directory_uri() . '/' . $rel,
		array(),
		$ver
	);
}
add_action( 'wp_enqueue_scripts', 'kinesilk_enqueue_assets' );

/**
 * Register the "Kinesilk" block-pattern category so our section patterns are
 * grouped together in the editor inserter.
 */
function kinesilk_register_pattern_category() {
	if ( function_exists( 'register_block_pattern_category' ) ) {
		register_block_pattern_category(
			'kinesilk',
			array(
				'label'       => __( 'Kinesilk', 'kinesilk_new' ),
				'description' => __( 'Secciones de la landing de Kinesilk.', 'kinesilk_new' ),
			)
		);
	}
}
add_action( 'init', 'kinesilk_register_pattern_category' );
