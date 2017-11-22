<?php

	/* Footer
	=================================== */
	
	register_sidebar( array(
		'name'          => esc_html__( 'Footer 1', 'gcwoo' ),
		'id'            => 'footer-1',
		'description'   => '',
		'before_widget' => '',
		'before_widget' => '<div class="footer-social">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="footer-nav-title">',
		'after_title'   => '</h4>',
	) );
	
	register_sidebar( array(
		'name'          => esc_html__( 'Footer 2', 'gcwoo' ),
		'id'            => 'footer-2',
		'description'   => '',
		'before_widget' => '<div class="footer-social">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="footer-nav-title">',
		'after_title'   => '</h4>',
	) );
	
	register_sidebar( array(
		'name'          => esc_html__( 'Footer 3', 'gcwoo' ),
		'id'            => 'footer-3',
		'description'   => '',
		'before_widget' => '<div class="footer-social">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="footer-nav-title">',
		'after_title'   => '</h4>',
	) );
	
	/* Sidebar
	=================================== */

	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'gcwoo' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '',
		'after_title'   => '</h4>',
	) );

	
	/* Sections
	=================================== */
	

?>