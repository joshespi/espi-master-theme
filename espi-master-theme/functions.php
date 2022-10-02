<?php
//load site styles
function espi_theme_assets()
{
	wp_enqueue_style('normalize-reset', get_template_directory_uri() . '/assets/css/normalize.min.css', null, '8.0.1');
	wp_enqueue_style('parent-style', get_template_directory_uri() . '/assets/css/styles.css', array('normalize-reset'), '0.0.1');
	// wp_enqueue_script('my-scripts', get_template_directory_uri() . '/assets/js/mainScripts.js', array('jquery'), '0.0.1');
}
add_action('wp_enqueue_scripts', 'espi_theme_assets', 20);
// Add Featured Image Support
add_theme_support('post-thumbnails');
// lets wordpress build our <title> tags
add_theme_support('title-tag');
