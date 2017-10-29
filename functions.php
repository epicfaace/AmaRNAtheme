<?php

function scripts() {
	// Add custom fonts, used in the main stylesheet.
	wp_enqueue_style( 'main', get_stylesheet_uri(), array(), null );
}
add_action( 'wp_enqueue_scripts', 'scripts' );


function fb_move_admin_bar() {
    echo '
    <style type="text/css">
    body { 
    margin-top: -28px;
    padding-bottom: 28px;
    }
    body.admin-bar #wphead {
       padding-top: 0;
    }
    body.admin-bar #footer {
       padding-bottom: 28px;
    }
    #wpadminbar {
        top: auto !important;
        bottom: 0;
    }
    #wpadminbar .quicklinks .menupop ul {
        bottom: 28px;
    }
    </style>';
}
// on backend area
add_action( 'admin_head', 'fb_move_admin_bar' );
// on frontend area
add_action( 'wp_head', 'fb_move_admin_bar' );

function diseases_init() {
	// create a new taxonomy
	register_taxonomy(
		'diseases',
		'post',
		array(
			'label' => __( 'Diseases' ),
			//'rewrite' => array( 'slug' => 'person' ),
			/*'capabilities' => array(
				'assign_terms' => 'edit_guides',
				'edit_terms' => 'publish_guides'
			)*/
		)
	);
}
add_action( 'init', 'diseases_init' );

?>