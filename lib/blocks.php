<?php

//======================================================================
// THEME BLOCK FUNCTIONS
//======================================================================

//-----------------------------------------------------
// Register global stylesheet
//-----------------------------------------------------

function method_child_block_assets() {
    wp_enqueue_style( 'method-child-global', get_stylesheet_directory_uri() . '/assets/css/global.css', ( ! is_admin() ? array('wp-block-library', 'wp-block-library-theme', 'global-styles') : '' ), THEME_VERSION );
}

add_action( 'enqueue_block_assets', 'method_child_block_assets' );