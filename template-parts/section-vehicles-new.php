<?php
$gcwoo_enable_section = get_theme_mod( 'gcwoo_menu_iv_enable', true );
if ( $gcwoo_enable_section || is_customize_preview() ) :
?>
<div id="nav-iv-section"class="nav-iv-section wow fadeInUp"  <?php if( false == $gcwoo_enable_section ): echo 'style="display: none;"'; endif ?>>
    <div class="container">
        <div class="row">
            
            <!-- Breadcrumbs -->
            
                <?php if ( function_exists('yoast_breadcrumb') ) {
                  yoast_breadcrumb('<div id="breadcrumbs">','</div>');
                } ?>
                
            <!-- End: Breadcrumbs -->
            

			<?php get_template_part( 'template-parts/section-page', 'golf' ); ?>
            
            
            <?php get_template_part( 'template-parts/section-details', 'new-vehicles' ); ?>
            

        </div><!-- row -->
    </div><!-- container -->
    
</div><!-- services-section -->
<?php endif ?>