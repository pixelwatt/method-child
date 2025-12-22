<?php

//======================================================================
// THEME OPTIONS
//======================================================================

add_action( 'cmb2_admin_init', 'method_child_register_theme_options_metabox' );

function method_child_register_theme_options_metabox() {

	/**
	 * Registers options page menu item and form.
	 */
	$cmb_options = new_cmb2_box(
		array(
			'id'           => 'method_child_theme_options_metabox',
			'title'        => __( '<span class="method-logo-wrap">&nbsp;</span><span class="visually-hidden">Method </span>Child Theme Settings | v' . THEME_VERSION, 'method' ),
			'object_types' => array( 'options-page' ),

			/*
			 * The following parameters are specific to the options-page box
			 * Several of these parameters are passed along to add_menu_page()/add_submenu_page().
			 */

			'option_key'      => 'method_child_options', // The option key and admin menu page slug.
			'icon_url'        => 'data:image/svg+xml;base64,' . base64_encode('<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 153 153" fill="none"><path d="M122.09,40.67v79.72h-7.19v-63.54l-11.72,10.73-26.1,23.88-26.1-23.87-18.75-17.19v-9.64l9.29,8.6,30.83,28.2,4.72,4.32,4.72-4.32,30.83-28.21,9.46-8.68M32.22,96.02l7.02,6.43v17.95h-7.02v-24.38M129.09,24.75l-21.2,19.44-30.83,28.2-30.83-28.2-21.02-19.44v28.73l21.02,19.27,30.83,28.2,30.83-28.2v54.65h21.2V24.75h0ZM25.22,80.1v47.29h21.02v-28.03l-21.02-19.27h0Z" fill="currentColor"/></svg>'), // Menu icon. Only applicable if 'parent_slug' is left empty.
			'menu_title'      => esc_html__( 'Theme Settings', 'method' ), // Falls back to 'title' (above).
			// 'parent_slug'     => 'themes.php', // Make options page a submenu item of the themes menu.
			// 'capability'      => 'manage_options', // Cap required to view options-page.
			'position'        => 3, // Menu position. Only applicable if 'parent_slug' is left empty.
			// 'admin_menu_hook' => 'network_admin_menu', // 'network_admin_menu' to add network-level options page.
			// 'display_cb'      => false, // Override the options-page form output (CMB2_Hookup::options_page_output()).
			'save_button'     => esc_html__( 'Update Settings', 'myprefix' ), // The text for the options-page save button. Defaults to 'Save'.
			'classes' => 'method-options-panel',
		)
	);

}