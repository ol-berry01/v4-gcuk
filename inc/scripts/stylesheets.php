<?php
	
	
	
	//Flickity =======================================================
	wp_enqueue_style( 'flickity', get_template_directory_uri() . '/css/flickity.css', array(), '1.1.1', 'all');
	//=================================================================

	//Bootstrap =======================================================
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), '3.1', 'all');
	//=================================================================

	//Google Font =======================================================
	wp_enqueue_style( 'gcwoo_google-font', '//fonts.googleapis.com/css?family=Ubuntu:400,700', array(), '1.0', 'all');
	wp_enqueue_style( 'gcwoo_google-font', '//fonts.googleapis.com/css?family=Lato:300,400,600,700', array(), '1.0', 'all');
	wp_enqueue_style( 'gcwoo_google-font', '//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700', array(), '1.0', 'all');
	// ======================================================================

	wp_enqueue_style( 'gcwoo_style', get_stylesheet_uri() );

?>