<!-- Brochure Features Section -->
<?php
$gcwoo_enable_section = get_theme_mod( 'gcwoo_services_enable', true );
if ( $gcwoo_enable_section || is_customize_preview() ) :
?>
<div id="product-features"class="nav-ii-section wow fadeInUp" <?php if( false == $gcwoo_enable_section ): echo 'style="display: none;"'; endif ?>>
    <div class="container">
        
    	<h2 class="wow fadeInUp" style="text-align:center;color:#a28f56;font-weight:700;margin:2.5% 0">Features</h2>
    	
        <div class="row wow fadeInUp">

			<?php
			if ( is_active_sidebar( 'gcwoo_feature-section' ) ){

				dynamic_sidebar( 'gcwoo_feature-section' );

			}else{

				$widget_args = array(
					'title' => 'Turf Tyres',
					'text' => 'Provide excellent stability and grip without damaging turf',
					'image_uri' => get_stylesheet_directory_uri() . '/images/feature-turf-tyres.jpg', 
					);
				the_widget( 'gcwoo_feature', $widget_args );


				$widget_args = array(
					'title' => 'Headlights',
					'text' => 'Safely navigate in any lighting condition',
					'image_uri' => get_stylesheet_directory_uri() . '/images/feature-headlights.jpg', 
					);
				the_widget( 'gcwoo_feature', $widget_args );


				$widget_args = array(
					'title' => 'Front Bumper Guard',
					'text' => 'Added vehicle protection and durability',
					'image_uri' => get_stylesheet_directory_uri() . '/images/feature-brush-guard.jpg', 
					);
				the_widget( 'gcwoo_feature', $widget_args );


				$widget_args = array(
					'title' => 'Polyethylene Cargo Bed',
					'text' => 'Roto-molded construction for even the toughest jobs',
					'image_uri' => get_stylesheet_directory_uri() . '/images/feature-cargo-bed.jpg', 
					);
				the_widget( 'gcwoo_feature', $widget_args );


				$widget_args = array(
					'title' => 'Bench Seating',
					'text' => 'Comfortable, spacious seating for passengers',
					'image_uri' => get_stylesheet_directory_uri() . '/images/feature-bench-seating.jpg', 
					);
				the_widget( 'gcwoo_feature', $widget_args );


				$widget_args = array(
					'title' => 'Improved Dash',
					'text' => 'More storage and added convenience',
					'image_uri' => get_stylesheet_directory_uri() . '/images/feature-improved-dash.jpg', 
					);
				the_widget( 'gcwoo_feature', $widget_args );


				$widget_args = array(
					'title' => 'Rear Hitch Receiver',
					'text' => 'Elevates towing ability and functionality (Optional Extra)',
					'image_uri' => get_stylesheet_directory_uri() . '/images/feature-rear-hitch.jpg', 
					);
				the_widget( 'gcwoo_feature', $widget_args );


				$widget_args = array(
					'title' => 'Locking Glove Box',
					'text' => 'Safe and secure onboard storage (Optional Extra)',
					'image_uri' => get_stylesheet_directory_uri() . '/images/feature-glove-box.jpg', 
					);
				the_widget( 'gcwoo_feature', $widget_args );


				$widget_args = array(
					'title' => 'Aluminum Cargo Bed',
					'text' => 'Lighter weight, yet durable for heavy loads (Optional Extra)',
					'image_uri' => get_stylesheet_directory_uri() . '/images/feature-aluminium-bed.jpg', 
					);
				the_widget( 'gcwoo_feature', $widget_args );


				$widget_args = array(
					'title' => 'Roto-Molded Canopy',
					'text' => 'Robust protection against the elements (Optional Extra)',
					'image_uri' => get_stylesheet_directory_uri() . '/images/feature-canopy.jpg', 
					);
				the_widget( 'gcwoo_feature', $widget_args );


				

			};
			?>

        </div><!-- row -->
    </div><!-- container -->
    
</div><!-- End: Brochure Features Section -->
<?php endif ?>