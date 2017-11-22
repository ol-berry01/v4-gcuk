<?php
$gcwoo_enable_section = get_theme_mod( 'gcwoo_golfutility_enable', true );
if ( $gcwoo_enable_section || is_customize_preview() ) :
?>
<div id="golfutility-section"class="golfutility-section"  <?php if( false == $gcwoo_enable_section ): echo 'style="display: none;"'; endif ?>>
    <div class="container">
        <div class="row">

			<?php
			if ( is_active_sidebar( 'golfutility-section' ) ){

				dynamic_sidebar( 'golfutility-section' );

			}else{

				$widget_args = array(
					'title' => 'Hauler',
					'text' => 'These utility vehicles have plenty of capacity to get equipment, materials &amp; your team around the course.', 
					'link_title' => 'Learn More', 
					'link' => '/new-vehicles/golf/', 
					'image_uri' => get_stylesheet_directory_uri() . '/images/hauler-golf-utility-menu.png', 
					);
				the_widget( 'gcwoo_golfutility', $widget_args );


				$widget_args = array(
					'title' => 'Hauler X',
					'text' => 'Based on the Hauler but able to navigate across rougher ground thanks to raised suspension and knobbly tyres.', 
					'link_title' => 'Learn More', 
					'link' => '#', 
					'image_uri' => get_stylesheet_directory_uri() . '/images/hauler_x-golf-utility-menu.png', 
					);
				the_widget( 'gcwoo_golfutility', $widget_args );


				$widget_args = array(
					'title' => 'Shuttle',
					'text' => 'With seating for 4, 6 or 8 people or just room for extra luggage, the shuttle gets around your venue with ease.', 
					'link_title' => 'Learn More', 
					'link' => '#', 
					'image_uri' => get_stylesheet_directory_uri() . '/images/shuttle-golf-utility-menu.png', 
					);
				the_widget( 'gcwoo_golfutility', $widget_args );
                
                
                $widget_args = array(
					'title' => 'Refresher',
					'text' => 'Keep people refreshed and boost the sales of your food &amp; beverages using these unique vehicles.', 
					'link_title' => 'Learn More', 
					'link' => '#', 
					'image_uri' => get_stylesheet_directory_uri() . '/images/refresher-golf-utility-menu.png', 
					);
				the_widget( 'gcwoo_golfutility', $widget_args );

			};
			?>

        </div><!-- row -->
    </div><!-- container -->
    
</div><!-- services-section -->
<?php endif ?>