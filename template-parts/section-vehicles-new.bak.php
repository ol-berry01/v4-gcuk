<?php
$gcwoo_enable_section = get_theme_mod( 'gcwoo_menu_iv_enable', true );
if ( $gcwoo_enable_section || is_customize_preview() ) :
?>
<div id="nav-iv-section"class="nav-iv-section wow fadeInUp"  <?php if( false == $gcwoo_enable_section ): echo 'style="display: none;"'; endif ?>>
    <div class="container">
        <div class="row">

			<?php
			if ( is_active_sidebar( 'product-section' ) ){

				dynamic_sidebar( 'product-section' );

			}else{

				$widget_args = array(
					'title' => 'Golf',
					'text' => 'Getting your players, officials and staff around the course quickly and efficiently.', 
					'link_title' => 'Learn More', 
					'link' => '/new-vehicles/golf-cars/', 
					'image_uri' => get_stylesheet_directory_uri() . '/images/menu-golf.png', 
					);
				the_widget( 'gcwoo_menu_iv', $widget_args );


				$widget_args = array(
					'title' => 'Utility',
					'text' => 'Vehicles designed to support your staff on golf courses, work sites and over rough terrain.', 
					'link_title' => 'Learn More', 
					'link' => '/utility/', 
					'image_uri' => get_stylesheet_directory_uri() . '/images/menu-utility.png', 
					);
				the_widget( 'gcwoo_menu_iv', $widget_args );


				$widget_args = array(
					'title' => 'Hospitality',
					'text' => 'Easily transport guests around a large venue or vehicles to provide them refreshments.', 
					'link_title' => 'Learn More', 
					'link' => '#', 
					'image_uri' => get_stylesheet_directory_uri() . '/images/menu-hospitality.png', 
					);
				the_widget( 'gcwoo_menu_iv', $widget_args );
                
                
                $widget_args = array(
					'title' => 'Custom',
					'text' => 'Modified vehicles to meet the unique demands of your business or event.', 
					'link_title' => 'Learn More', 
					'link' => '#', 
					'image_uri' => get_stylesheet_directory_uri() . '/images/menu-custom.png', 
					);
				the_widget( 'gcwoo_menu_iv', $widget_args );

			};
			?>

        </div><!-- row -->
    </div><!-- container -->
    
</div><!-- services-section -->
<?php endif ?>