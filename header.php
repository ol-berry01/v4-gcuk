<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gcwoo
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="google-site-verification" content="AoD1VTXlI30qVbtJCq0hF_N88CsboFGXsXZr1zNzTNI" />

<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<!-- WP_Head -->
<?php wp_head(); ?>
<!-- End WP_Head -->
</head>

<body <?php body_class(); ?>>
	
	<!-- HEADER
	================================================== -->
	<header id="header" class="site-header" role="banner">
		
		<!-- NAVBAR
		================================================== -->
		<div class="navbar-wrapper ">
			
			<div class="navbar navbar-fixed-top" role="navigation">
				<div class="container">
					
					<div class="home-logo">
						<?php if ( is_front_page() && is_home() ) : ?>
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
									<img src="<?php bloginfo('stylesheet_directory'); ?>/images/Golf-Car-UK-logo.jpg">
								</a>
						<?php else : ?>
						
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
									<img src="<?php bloginfo('stylesheet_directory'); ?>/images/Golf-Car-UK-logo.jpg">
								</a>
						<?php endif; ?>
						
					</div>
					
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						
					</div>
					<div class="collapse navbar-collapse" id="ql_nav_collapse">
                        
						<nav id="jqueryslidemenu" class="jqueryslidemenu navbar " role="navigation">
                            <?php
                            if ( is_front_page() ) {
                                $menu_id = 'front-page';
                            }else{
                                $menu_id = 'primary';
                            }
                            wp_nav_menu( array(                     
                                'theme_location'  => $menu_id,
                                'menu_id' => 'primary-menu',
                                'depth'             => 3,
                                'menu_class'        => 'nav',
                                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                                'walker'            => new wp_bootstrap_navwalker()
                            ));
                            ?>
                        </nav>
					</div>
				</div>
			</div>
		
		</div>
	</header>
	
	<div class="clearfix"></div>