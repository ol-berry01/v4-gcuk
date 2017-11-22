<?php
$gcwoo_enable_section = get_theme_mod( 'gcwoo_welcome_enable', true );
if ( $gcwoo_enable_section || is_customize_preview() ) :
?>
<div id="welcome-section" class="welcome-section" <?php if( false == $gcwoo_enable_section ): echo 'style="display: none;"'; endif ?>>
    <?php
        echo do_shortcode( '[rev_slider alias="home-slider"]' )
    ?>
</div><!-- welcome-section -->
<?php endif ?>
<div class="clearfix"></div>