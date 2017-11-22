<?php
$gcwoo_enable_section = get_theme_mod( 'gcwoo_welcome_enable', true );
if ( $gcwoo_enable_section || is_customize_preview() ) :
?>
<div id="image-section" class="image-section" <?php if( false == $gcwoo_enable_section ): echo 'style="display: none;"'; endif ?>>
	<?php
	$featured_image = wp_get_attachment_image_src( absint( get_theme_mod( 'gcwoo_image_image' ) ), 'full' );
	$featured_image = $featured_image[0];
	if ( empty( $featured_image ) ) {
		$featured_image = get_template_directory_uri() . '/images/gc-image_section.jpg';
	}
	?>
    
    <div class="image-text">
    	<?php /* translators: Lorem ipsum text, It is not strictly necessary to translate. */ ?>
        <h2 class="image-text-title wow fadeInUp"><?php  echo esc_html( get_theme_mod( 'gcwoo_image_title', __( 'Welcome to Golf Car UK', 'gcwoo' ) ) ); ?></h2>
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
        $image_text = wp_kses( get_theme_mod( 'gcwoo_image_text', __( "As national suppliers of E-Z- GO Golf Cars and Cushman Utility Vehicles, we specialise in the service and supply of small petrol and electric vehicles, providing short and long term hire packages for the golf and hospitality sector. 
        
        With a comprehensive range of vehicles suitable for a wide variety of applications we can also supply transport solutions for holiday and theme parks, industrial and retail parks. All of which can be purchased, rented or financed to suit your needs, budget and timeframe.", 'gcwoo' ) ), $wp_kses_args );
        ?>
        <p class="wow fadeInUp" data-wow-delay="300ms"><?php echo nl2br( $image_text ); ?></p>
        <?php $gcwoo_image_link_title = get_theme_mod( 'gcwoo_image_link_title', esc_html__( 'More About Us', 'gcwoo' ) ); ?>
        <?php if ( !empty( $gcwoo_image_link_title ) || is_customize_preview() ) { ?>
        <a href="<?php echo esc_url( get_theme_mod( 'gcwoo_image_link_url', '/about' ) ); ?>" class="btn-ql alternative-gold wow fadeInUp" data-wow-delay="700ms"><?php echo esc_html( $gcwoo_image_link_title ); ?></a>
        <?php } ?>
    </div>
    <div class="image-wrap" style="background-image: url(<?php echo $featured_image; ?>);"></div>

</div><!-- image-section -->
<?php endif ?>