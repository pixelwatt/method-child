<?php

//======================================================================
//
// CONFIG.PHP
//
// CUSTOMIZE ALL THE THINGS!!!
//
//======================================================================

//-----------------------------------------------------
// The METHOD_CHILD_OPTIONS constant can be used to customize
// several different parts of Method, including many of
// the blocks that are included with it.
//-----------------------------------------------------

define('METHOD_CHILD_OPTIONS', array(
    'breakpoints' => array(
        'units' => 'px',
        'dimensions' => array(
            'xs' => 0,
            'sm' => 576,
            'md' => 768,
            'lg' => 992,
            'xl' => 1200,
            'xxl' => 1600,
        ),
        'mobile_max' => 'md',
        'tablet_min' => 'md',
        'tablet_max' => 'xl',
        'wide_min' => 'xxl',
    ),
    'breakpoint-colors' => array(
        'enabled' => true, // if false, the default blue (#007CBA) will be passed to Method controls
        'mobile' => '#865EBF',
        'tablet' => '#D94A64',
        'wide' => '#F28729',
    ),
    'typography' => array(
        'font-size-presets' => array(
            array(
                'name' => 'Small',
                'slug' => 'sm',
                'size' => '1rem',
            ),
            array(
                'name' => 'Medium',
                'slug' => 'md',
                'size' => '1.25rem',
            ),
            array(
                'name' => 'Large',
                'slug' => 'lg',
                'size' => '1.5rem',
            ),
            array(
                'name' => 'Extra Large',
                'slug' => 'xl',
                'size' => '2rem',
            ),
        ),
    ),
));