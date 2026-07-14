<?php

//======================================================================
//
// FUNCTIONS.PHP
//
// File Overview:
//
// 1.  lib/config.php
//     This file includes theme-specific configurations for breakpoints
//     and various other options.
//
// 2.  lib/theme-setup.php
//     This file includes functions that setup theme features, custom
//     image sizes, required plugins, enqueued styles and scripts, and
//     navigation menu theme locations.
//
// 3.  lib/blocks.php
//     This file is where custom block types are imported, block
//     categories are configured, and other things related to the
//     block editor happen.
//
// 4.  lib/post-types-and-taxonomies.php
//     This file is where custom post types and taxonomies are declared.
//
// 5.  lib/cmb2-helper-functions.php
//     Helper functions for CMB2.
//
// 6. lib/cmb2-options-loader.php
//     This is where you set up options for CMB2 metaboxes.
//
// 7. lib/cmb2-metaboxes.php
//     This is where you declare CMB2 metaboxes and specify which
//     of the options each box loads.
//
// 8.  lib/admin-customization.php
//     This file contains admin customizations and optimizations.
//
//======================================================================


define( 'THEME_VERSION', wp_get_theme()->get( 'Version' ) );

//-----------------------------------------------------
// Import theme files.
//-----------------------------------------------------

// Uncomment to override Method's core config.
// require_once('lib/config.php');

require_once('lib/theme-setup.php');
require_once('lib/blocks.php');
require_once('lib/post-types-and-taxonomies.php');
require_once('lib/cmb2-helper-functions.php');
require_once('lib/cmb2-options-loader.php');
require_once('lib/cmb2-metaboxes.php');
require_once('lib/admin-customization.php');
