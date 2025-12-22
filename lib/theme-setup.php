<?php

//-----------------------------------------------------
// Enqueue scripts and styles
//-----------------------------------------------------

function method_child_scripts() {
	// Uncomment below if using front.css
    // wp_enqueue_style( 'method-child-front', get_stylesheet_directory_uri() . '/assets/css/front.min.css', '', THEME_VERSION );
}

add_action( 'wp_enqueue_scripts', 'method_child_scripts' );