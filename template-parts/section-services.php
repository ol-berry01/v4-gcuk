<?php
$gcwoo_enable_section = get_theme_mod( 'gcwoo_services_enable', true );
if ( $gcwoo_enable_section || is_customize_preview() ) :
?>
<div id="services-section"class="services-section"  <?php if( false == $gcwoo_enable_section ): echo 'style="display: none;"'; endif ?>>
    <div class="container">
        <div class="row">

			<?php
			if ( is_active_sidebar( 'services-section' ) ){

				dynamic_sidebar( 'services-section' );

			}else{

				$widget_args = array(
					'title' => 'Vehicle Rental',
					'text' => 'At Golf Car UK we provide petrol and electric vehicles for any budget. From short/long term rentals to fleet extensions, we can help.', 
					'link_title' => 'Learn More', 
					'link' => '#', 
					'image_uri' => get_stylesheet_directory_uri() . '/images/server.png', 
					);
				the_widget( 'gcwoo_Service', $widget_args );


				$widget_args = array(
					'title' => 'Service &amp; Repair',
					'text' => 'Whether you need on-site repairs, servicing or just technical assistance, we will be more than happy to help resolve your problem.', 
					'link_title' => 'Learn More', 
					'link' => '#', 
					'image_uri' => get_stylesheet_directory_uri() . '/images/pencil-ruler.png', 
					);
				the_widget( 'gcwoo_Service', $widget_args );


				$widget_args = array(
					'title' => 'Vehicle Financing',
					'text' => 'We are able to offer you tailored packages and flexible finance solutions to suit the needs of your business which can include maintenance and our own Golf Car Protect.', 
					'link_title' => 'Learn More', 
					'link' => '#', 
					'image_uri' => get_stylesheet_directory_uri() . '/images/computer-network.png', 
					);
				the_widget( 'gcwoo_Service', $widget_args );

			};
			?>

        </div><!-- row -->
    </div><!-- container -->
    
</div><!-- services-section -->
<?php endif ?>