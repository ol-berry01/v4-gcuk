<?php

	wp_enqueue_script( 'jquery' );
	
	//HTML5 Shiv ======================================================
	wp_enqueue_script( 'html5shiv', get_template_directory_uri() . '/js/html5shiv.js', array(), '3.7.3', true );
	//=================================================================

	//hoverIntent Plugin ==============================================
	wp_enqueue_script( 'hoverIntent' );
	//=================================================================

	//Modernizr Plugin ================================================
	wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/js/modernizr.custom.67069.js', '2.8.3', true );
	//=================================================================
	
	//Flickity ========================================================
	wp_enqueue_script( 'flickity', get_template_directory_uri() . '/js/flickity.pkgd.js', array(), '1.1.1', true );
	//=================================================================

	//Wow =============================================================
	wp_enqueue_script( 'wow', get_template_directory_uri() . '/js/wow.js', array(), '1.1.2', true );
	//=================================================================
	
	//Pace  ===========================================================
	wp_enqueue_script( 'pace', get_template_directory_uri() . '/js/pace.js', array(), '0.2.0', true);
	//=================================================================
	
	//Bootstrap JS ========================================
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array(), '3.3.5', true);
	//=================================================================
	
	//Font Awesome ====================================================
	wp_enqueue_script( 'fontawesome', '//use.fontawesome.com/c24ea011d9.js', array(), '4.6.3', true);
	//=================================================================
	
	//Parallax Window =================================================
	wp_enqueue_script( 'parallax', get_template_directory_uri() . '/js/parallax.min.js', array(), '1.4.2', true );
	//=================================================================
	
	//Comment Reply ===================================================
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	//=================================================================


	
	//Customs Scripts =================================================
	wp_enqueue_script( 'gcwoo_theme-custom', get_template_directory_uri() . '/js/script.js', array( 'jquery', 'bootstrap' ), '1.0', true );
	//=================================================================

?>