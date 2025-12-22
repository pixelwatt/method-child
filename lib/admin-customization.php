<?php

function method_child_admin_scripts() {
    wp_enqueue_style( 'method-child-admin', get_stylesheet_directory_uri() . '/assets/css/admin.css', '', THEME_VERSION );
}

add_action( 'admin_enqueue_scripts', 'method_child_admin_scripts' );