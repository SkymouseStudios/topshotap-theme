<?php
// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'twentysixteen' ),
		'social'  => __( 'Social Links Menu', 'twentysixteen' ),
		'secondary'  => __( 'Secondary', 'austin south terminal' ),
	) );

	wp_enqueue_script( 'topshot-scripts', get_stylesheet_directory_uri() . '/js/topshot-scripts.js', array ( 'jquery' ), 1.1, true);
?>