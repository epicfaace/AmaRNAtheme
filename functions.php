<?php

function scripts() {
	// Add custom fonts, used in the main stylesheet.
	wp_enqueue_style( 'main', get_stylesheet_uri(), array(), null );
}
add_action( 'wp_enqueue_scripts', 'scripts' );

?>