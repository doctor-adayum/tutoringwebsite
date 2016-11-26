<?php

// Add scripts and stylesheets
function onthemarktutoring_scripts() {
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/materialize.css', array(), '3.3.6' );
	wp_enqueue_style( 'style', get_template_directory_uri() . '/css/styles.css' );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '3.3.6', true );
}

add_action( 'wp_enqueue_scripts', 'startwordpress_scripts' );
add_theme_support( 'title-tag' );
