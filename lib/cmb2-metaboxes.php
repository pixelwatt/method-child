<?php

//======================================================================
// CMB2 METABOXES
//======================================================================

/**
 * Front Page Metabox
 */

/*
add_action( 'cmb2_admin_init', 'method_child_register_page_front_metabox' );

function method_child_register_page_front_metabox() {
	$cmb_options = new_cmb2_box(
		array(
			'id'            => '_method_child_metabox_page_front',
			'title'         => esc_html__( 'Front Page Options', 'method-child' ),
			'object_types'  => array( 'page' ),
			'show_on' => array(
				'key' => 'front-page',
				'value' => '',
			),
		)
	);

	method_child_load_cmb2_options( $cmb_options, array( 'elements' ) );

}
*/

/**
 * Default Page Metabox
 */

/*
add_action( 'cmb2_admin_init', 'method_child_register_page_default_metabox' );

function method_child_register_page_default_metabox() {
	$cmb_options = new_cmb2_box(
		array(
			'id'            => '_method_child_metabox_page_default',
			'title'         => esc_html__( 'Additional Options', 'method-child' ),
			'object_types'  => array( 'page' ),
			'show_on' => array(
				'key' => 'default-page-template',
				'value' => '',
			),
		)
	);

	method_child_load_cmb2_options( $cmb_options, array( 'example' ) );

}
*/

/*
Example CMB2 registration for a custom page template:

/*
add_action( 'cmb2_admin_init', 'method_child_register_page_template_tmpname_metabox' );

function method_child_register_page_template_tmpname_metabox() {
	$cmb_options = new_cmb2_box(
		array(
			'id'            => '_method_child_metabox_page_template_tmpname',
			'title'         => esc_html__( 'Template Options', 'method-child' ),
			'object_types'  => array( 'page' ),
			'priority'     => 'high',
			'show_on'      => array(
				'key'   => 'page-template',
				'value' => 'templates/page-template-tmpname.php',
			),
		)
	);

	method_child_load_cmb2_options( $cmb_options, array( 'elements' ) );
}

*/
