<?php
$gcwoo_enable_section = get_theme_mod( 'gcwoo_menu_ii_enable', true );
if ( $gcwoo_enable_section || is_customize_preview() ) :
?>
<div id="nav-ii-section"class="nav-ii-section  wow fadeInUp"  <?php if( false == $gcwoo_enable_section ): echo 'style="display: none;"'; endif ?>>
    <div class="container">
    	
    	<div class="row nav-ii-text">
    		
    		<h2 class="nav-ii-text-title wow fadeInUp">4 Seat Golf Cars</h2>
			<p class="wow fadeInUp">With 2 additional seats these 2 + 2 vehicles allow you to bring more players, officials or spectators to the action. Additionally the rear bench seat can be folded down to convert the area into a cargo carrying role making them extremely versatile around your course.</p>
    	
    	</div>
    	
        <div class="row wow fadeInUp">

			<?php
			if ( is_active_sidebar( 'gcwoo_menu_ii-section' ) ){

				dynamic_sidebar( 'gcwoo_menu_ii-section' );

			}else{

				$widget_args = array(
					'title' => 'E-Z-GO Freedom RXV 2+2',
					'text' => 'Featuring the advanced technology and unexpected comforts, the Freedom RXV provides the highest level of safety, durability, reliability and performance.', 
					'link_title' => 'Learn More', 
					'link' => '/new-vehicles/golf/', 
					'image_uri' => get_stylesheet_directory_uri() . '/images/golf-menu-rxv-2plus2.png', 
					);
				the_widget( 'gcwoo_menu_ii', $widget_args );


				$widget_args = array(
					'title' => 'E-Z-GO Freedom TXT 2+2',
					'text' => 'The E-Z-GO TXT combines proven reliability with the latest innovations to deliver a consistently smooth ride and greater efficiency.', 
					'link_title' => 'Learn More', 
					'link' => '#', 
					'image_uri' => get_stylesheet_directory_uri() . '/images/golf-menu-txt-2plus2.png', 
					);
				the_widget( 'gcwoo_menu_ii', $widget_args );

			};
			?>

        </div><!-- row -->
    </div><!-- container -->
    
</div><!-- services-section -->
<?php endif ?>