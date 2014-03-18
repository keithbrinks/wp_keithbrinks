<?php

/**
 * Setup our theme defaults
 */
function keithbrinks_setup() {

	// Add feed links to <head>
	add_theme_support('automatic-feed-links');
	
	// Add support for post formats
	add_theme_support('post-formats', array('link', 'quote', 'image', 'gallery', 'video'));
	
	// Register nav menu
	register_nav_menu( 'primary', __( 'Primary Navigation Menu', 'keithbrinks') );
	
}
add_action('after_setup_theme', 'keithbrinks_setup');

/**
 * Enqueue scripts and styles
 */
function keithbrinks_scripts_styles() {

	// Load our main stylesheet
	wp_enqueue_style('keithbrinks-style', get_stylesheet_uri(), false, '5.0');
	
}
add_action('wp_enqueue_scripts', 'keithbrinks_scripts_styles');

/**
 * Add custom image resize option
 */
function keithbrinks_image_resize($sizes) {
	return array_merge($sizes, array(
		'iphone-vertical' => __('iPhone Vertical'),
	) );
}
add_filter('image_size_names_choose', 'keithbrinks_image_resize');

/**
 * Highlight blog nav menu item
 * when viewing single.php or category.php
 */
function keithbrinks_highlight_home_nav_item($classes, $item) {
	
	if (is_single() && $item->title == 'Blog' || is_category() && $item->title == 'Blog') {
		
		$classes[] = 'current-menu-parent';
		
	}
	
	return $classes;
	
}
add_filter('nav_menu_css_class', 'keithbrinks_highlight_home_nav_item', 10, 2);

?>