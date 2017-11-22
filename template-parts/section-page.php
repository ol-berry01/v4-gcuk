<?php

    // check if the flexible content field has rows of data
    if( have_rows('column_navigation_section') ):
    
        // loop through the rows of data
        while ( have_rows('column_navigation_section') ) : the_row();
        
            // Front Page Spcific Items
        
                // Front Image Layout                    
                if( get_row_layout() == 'front_image_layout' ): ?>
                
                    <?php get_template_part( 'template-parts/', 'builder' )?>
                    
                <!-- End: Front Image Layout -->
                
                <!-- Front Intro Layout -->
                
                <?php elseif( get_row_layout() == 'intro_layout' ): ?>
                
                    <?php get_template_part( 'template-parts/section-builder-intro', 'builder' )?>
                <!-- End: Front Intro Layout -->
                
                <!-- Picture Navigation Layout -->
                
                <?php elseif( get_row_layout() == 'pic_nav_layout' ): ?>
                
                    <?php get_template_part( 'template-parts/section-builder-pic-nav', 'builder' ) ?>
                
                <!-- End: Pricture Navigation Layout -->
                
                <!-- Blog Layout -->
                <?php elseif( get_row_layout() == 'blog_layout' ): ?>
                
                    <?php get_template_part( 'template-parts/section-blog', 'builder' )?>
                
                <!-- End: Blog Layout -->
                
            <!-- Column Navigation Sections -->
            
                <!-- Breadcrumbs Navigation -->
                
                
                <?php elseif( get_row_layout() == 'breadcrumbs_layout'): ?>
                
                    <?php get_template_part( 'template-parts/section-breadcrumbs', 'builder'); ?>
                <!-- End: Breadcrumbs Navigation -->
                
                <!-- Nav I Layout -->
                <?php elseif( get_row_layout() == 'nav_i_navigation' ): ?>
                
                    <?php get_template_part( 'template-parts/section-builder-i-nav', 'builder' ); ?>            
                
                <!-- End: Nav II Layout -->
                
                <!-- Nav II Layout -->
                <?php elseif( get_row_layout() == 'nav_ii_navigation' ): ?>
                
                    <?php get_template_part( 'template-parts/section-builder-ii-nav', 'builder' ); ?>            
                
                <!-- End: Nav II Layout -->
                
                <!-- Nav III Layout -->
                <?php elseif( get_row_layout() == 'nav_iii_navigation' ): ?>

                    <?php get_template_part( 'template-parts/section-builder-iii-nav', 'builder' ); ?>  

                <!-- End: Nav III Layout -->

                <!-- Nav IV Layout -->
                <?php elseif( get_row_layout() == 'nav_iv_navigation' ): ?>

                    <?php get_template_part( 'template-parts/section-builder-iv-nav', 'builder' ); ?> 

                <!-- End: Nav IV Layout -->
                
                <!-- Nav I Details Layout -->
                <?php elseif( get_row_layout() == 'nav_i_details_navigation' ): ?>
                
                    <?php get_template_part( 'template-parts/section-builder-i-nav-details', 'builder' ); ?>            
                
                <!-- End: Nav II Layout -->
                
                <!-- Nav II Details Layout -->
                <?php elseif( get_row_layout() == 'nav_ii_details_navigation' ): ?>
                
                    <?php get_template_part( 'template-parts/section-builder-ii-nav-details', 'builder' ); ?>            
                
                <!-- End: Nav II Layout -->
                
                <!-- Nav III Details Layout -->
                <?php elseif( get_row_layout() == 'nav_iii_details_navigation' ): ?>

                    <?php get_template_part( 'template-parts/section-builder-iii-nav-details', 'builder' ); ?>  

                <!-- End: Nav III Layout -->
                
                <!-- Nav IV Layout -->
                <?php elseif( get_row_layout() == 'nav_iv_details_navigation' ): ?>

                    <?php get_template_part( 'template-parts/section-builder-iv-nav-details', 'builder' ); ?> 

                <!-- End: Nav IV Layout -->

            <!-- End: Column Navigation Sections -->
            
            <!-- Brochure Specific Items -->
            
                <!-- Slider Layout -->
                <?php elseif( get_row_layout() == 'builder_slider_layout' ): ?>
                    
                    <?php get_template_part( 'template-parts/section-builder-slider', 'builder' ); ?>
                    
                <!-- End: Slider Layout -->
                
                <!-- Page Nav Layout -->
                <?php elseif( get_row_layout() == 'page_nav_layout' ): ?>
                
                    <?php get_tempalte_part( 'template-parts/section-page-nav', 'builder' ) ?>
                
                <!-- End: Page Nav Layout -->
            
                <!-- Image Layout -->
                <?php elseif( get_row_layout() == 'builder_image_layout' ): ?>
                
                    <?php get_template_part( 'template-parts/section-builder-image', 'builder' ); ?>
                
                <!-- End: Gallery Layout -->
                
                <!-- Gallery Layout -->
                <?php elseif( get_row_layout() == 'builder_gallery_layout' ): ?>
                
                    <?php get_template_part( 'template-parts/section-builder-gallery', 'builder' ); ?>
                    
                <!-- End: Gallery Layout -->

                <!-- Features Layout -->
                <?php elseif( get_row_layout() == 'builder_features_layout' ): ?>
                
                    <?php get_template_part( 'template-parts/section-builder-features', 'builder' ); ?>

                <!-- End: Features Layout -->
                
                <!-- Tabs Layout -->
                <?php elseif( get_row_layout() == 'builder_tabs_layout' ): ?>
                
                    <?php get_template_part( 'template-parts/section-builder-tabs', 'builder' ); ?>
                    
                <!-- End: Tabs Layout -->
                
            <!-- End: Brochure Specific Items -->
            
            <!-- Styling Elements -->

                <!-- Parallax Break Layout -->
                <?php elseif( get_row_layout() == 'para_layout' ): ?>
                
                    <?php get_template_part( 'template-parts/section-builder-break', 'builder' ); ?>

                <!-- End: Parallax Break Layout -->
                
            <!-- End: Styling Elements -->

            <?php endif; ?>
    
        <?php endwhile; ?>
    
<?php endif; ?>
        
    