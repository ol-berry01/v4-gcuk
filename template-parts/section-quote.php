<?php
$gcwoo_enable_section = get_theme_mod( 'gcwoo_quote_enable', true );
if ( $gcwoo_enable_section || is_customize_preview() ) :
?>
<div id="quote-section" class="quote-section" <?php if( false == $gcwoo_enable_section ): echo 'style="display: none;"'; endif ?>>
    <div class="quote-wrap wow fadeInLeft" data-wow-delay="800ms">
        
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
		$quote_cite = wp_kses( get_theme_mod( 'gcwoo_quote_cite', __( 'Oliver Berry<span>Little Monster Digital</span>', 'gcwoo' ) ), $wp_kses_args );
        ?>
        
        <h2>Little Monster Digital</h2>
        <h2 class="lead">A Freelance Web Designer</h2>
        
        <hr>
        
        <p>Little Monster Digital is the trading name of Oliver Berry, I'm a freelance web designer from Salisbury who specialises in building bespoke websites using the open source WordPress CMS</p>
        <p>I’ve been building websites, plugins and providing technical support for business owners and their websites since 2012.</p>
        <p>As part of my services I can also offer technical assistance on a variety of of web platforms along with how to manipulate and mould WordPress into the website you want.</p>
        
    </div>
    <div class="laptop-wrap wow fadeIn" data-wow-delay="800ms">
    	
        <span class="quote-screen"><?php echo do_shortcode( '[rev_slider alias="laptop-slider"]' ) ?></span>
        <img class="quote-laptop" src="<?php echo get_template_directory_uri(); ?>/images/laptop.png" alt="">
    </div>
    <?php
    $bck_color = get_theme_mod( 'gcwoo_quote_bck_color', '#18b9f8' );
    ?>
    <div class="quote-background hidden-xs wow fadeInRight" style="background-color: <?php echo esc_attr( $bck_color ); ?>;"></div>
    
</div><!-- quote-section -->
<?php endif ?>