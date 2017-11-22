<?php
$gcwoo_enable_section = get_theme_mod( 'gcwoo_welcome_enable', true );
if ( $gcwoo_enable_section || is_customize_preview() ) :
?>
<div id="product-image" class="product-image" <?php if( false == $gcwoo_enable_section ): echo 'style="display: none;"'; endif ?>>
	<?php
	$featured_image = wp_get_attachment_image_src( absint( get_theme_mod( 'gcwoo_image_image' ) ), 'full' );
	$featured_image = $featured_image[0];
	if ( empty( $featured_image ) ) {
		$featured_image = get_template_directory_uri() . '/images/hauler_pro-large.png';
	}
	?>
    
    <div class="product-image-text">
    	<?php /* translators: Lorem ipsum text, It is not strictly necessary to translate. */ ?>
        <h2 class="product-image-text-title wow fadeInUp"><?php  echo esc_html( get_theme_mod( 'gcwoo_image_title', __( 'Big Performance, Without The Noise', 'gcwoo' ) ) ); ?></h2>
        <?php
        $wp_kses_args = array(
		    'a' => array(
		        'href' => array(),
		        'title' => array()
		    ),
		    'br' => array(),
		    'em' => array(),
		    'strong' => array(),
		    'span' => array(),
		);
		/* translators: Lorem ipsum text, It is not strictly necessary to translate. */
        $image_text = wp_kses( get_theme_mod( 'gcwoo_image_text', __( "For the less-talk, more-action type, the whisper-quiet Hauler™ PRO carries up to 1,000 pounds and works long hours with up to a 50-mile range fully loaded. 
        
        So your crew can hit the course before sunup, after sundown, and every hour in between—neighbors and golfers won’t mind.
	    <ul>
	        <li>Powerful 72V AC electric drivetrain</li>
	        <li>Standard on-board charger</li>
	        <li>9.6 cu-ft cargo box</li>
	    </ul>", 'gcwoo' ) ), $wp_kses_args );
        ?>
        <p class="wow fadeInUp" data-wow-delay="300ms"><?php echo nl2br( $image_text ); ?></p>
        <?php $gcwoo_image_link_title = get_theme_mod( 'gcwoo_image_link_title', esc_html__( 'More About Us', 'gcwoo' ) ); ?>
        <?php if ( !empty( $gcwoo_image_link_title ) || is_customize_preview() ) { ?>
        
        <?php } ?>
    </div>
    <div class="product-image-wrap wow fadeInUp"><img src="<?php echo $featured_image; ?>"></div>
    </div>
    

</div><!-- image-section -->
<?php endif ?>