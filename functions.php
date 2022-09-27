<?php
/*
Theme Name: Museu Paulista
Description: Museu Paulista - a child theme of Blocksy
Author: wetah
Version: 0.1.0
Text Domain: museupaulista
*/

if (! defined('WP_DEBUG')) {
	die( 'Direct access forbidden.' );
}

/** Child Theme version */
const MUSEU_PAULISTA_VERSION = '0.1.0';

/* Enqueues necessary JS and CSS files */
add_action( 'wp_enqueue_scripts', function () {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'museupaulista-style', get_stylesheet_directory_uri() . '/style.min.css', array('parent-style'), MUSEU_PAULISTA_VERSION );
	wp_enqueue_style( 'dashicons' ); // Used in some parts of the theme, even if not logged.
	wp_enqueue_script( 'museupaulista-search-scripts', get_stylesheet_directory_uri() . '/js/search-scripts.js', array(), MUSEU_PAULISTA_VERSION );
});

/* Enqueues block side CSS files */
function museupaulista_editor_side_enqueues() {
	wp_enqueue_style( 'museupaulista-editor-styles', get_stylesheet_directory_uri() . '/editor.min.css', array(), MUSEU_PAULISTA_VERSION );
}
add_action( 'enqueue_block_editor_assets', 'museupaulista_editor_side_enqueues');

/* Theme special features */
function museupaulista_theme_supported_features() {
	add_theme_support( 'custom-units', 'px', 'rem', 'em', '%', 'vh', 'vw' );
	add_theme_support( 'custom-spacing' );
	add_theme_support( 'custom-line-height' );
}
add_action( 'after_setup_theme', 'museupaulista_theme_supported_features' );


// Updates to the search modal
require get_stylesheet_directory() . '/inc/search-modal.php';

// Registers Block styles
require get_stylesheet_directory() . '/inc/block-styles.php';

// Adds action to insert share and back buttons on headers
require get_stylesheet_directory() . '/inc/elements.php';

// Curadoria post types
require get_stylesheet_directory() . '/inc/post-types.php';

// Adds blocksy palette color
require get_stylesheet_directory() . '/inc/customizer.php';

