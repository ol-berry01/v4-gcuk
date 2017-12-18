<?php

    // check if the flexible content field has rows of data
    if( have_rows('column_navigation_section') ):
    
        // loop through the rows of data
        while ( have_rows('column_navigation_section') ) : the_row();
        
            // Front Page Spcific Items
                // Front Image Layout                    
                if( get_row_layout() == 'front_image_layout' ): ?>
                
                    <?php get_template_part( 'template-parts/', 'builder' )?>
                
                <!-- Front Intro Layout -->
                <?php elseif( get_row_layout() == 'intro_layout' ): ?>
                    <?php get_template_part( 'template-parts/section-builder-intro', 'builder' )?>
                
                <!-- Textbox Layout -->
                <?php elseif( get_row_layout() == 'textbox_layout' ): ?>
                    <?php get_template_part( 'template-parts/section-builder-textbox', 'builder' )?>

                <!-- Image Block Left Layout -->
                <?php elseif( get_row_layout() == 'image_block_left' ): ?>
                    <?php get_template_part( 'template-parts/section-image-left', 'builder' ) ?>
                
                <!-- Image Block Layout -->
                <?php elseif( get_row_layout() == 'image_block_right' ): ?>
                    <?php get_template_part( 'template-parts/section-image-right', 'builder' ) ?>
                
                <!-- Picture Navigation Layout -->
                 <?php elseif( get_row_layout() == 'pic_nav_layout' ): ?>
                    <?php get_template_part( 'template-parts/section-builder-pic-nav', 'builder' ) ?>
                
                <!-- Blog Layout -->
                <?php elseif( get_row_layout() == 'blog_layout' ): ?>
                    <?php get_template_part( 'template-parts/section-blog', 'builder' )?>
                
            <!-- Column Navigation Sections -->
                <!-- Breadcrumbs Navigation -->
                <?php elseif( get_row_layout() == 'breadcrumbs_layout'): ?>
                    <?php get_template_part( 'template-parts/section-breadcrumbs', 'builder'); ?>
                
                <!-- Nav I Layout -->
                <?php elseif( get_row_layout() == 'nav_i_navigation' ): ?>
                    <?php get_template_part( 'template-parts/section-builder-i-nav', 'builder' ); ?>
                
                <!-- Nav II Layout -->
                <?php elseif( get_row_layout() == 'nav_ii_navigation' ): ?>
                    <?php get_template_part( 'template-parts/section-builder-ii-nav', 'builder' ); ?>
                
                <!-- Nav III Layout -->
                <?php elseif( get_row_layout() == 'nav_iii_navigation' ): ?>
                    <?php get_template_part( 'template-parts/section-builder-iii-nav', 'builder' ); ?>

                <!-- Nav IV Layout -->
                <?php elseif( get_row_layout() == 'nav_iv_navigation' ): ?>
                    <?php get_template_part( 'template-parts/section-builder-iv-nav', 'builder' ); ?>
                
                <!-- Nav I Details Layout -->
                <?php elseif( get_row_layout() == 'nav_i_details_navigation' ): ?>
                    <?php get_template_part( 'template-parts/section-builder-i-nav-details', 'builder' ); ?>
                
                <!-- Nav II Details Layout -->
                <?php elseif( get_row_layout() == 'nav_ii_details_navigation' ): ?>
                    <?php get_template_part( 'template-parts/section-builder-ii-nav-details', 'builder' ); ?>
                
                <!-- Nav III Details Layout -->
                <?php elseif( get_row_layout() == 'nav_iii_details_navigation' ): ?>
                    <?php get_template_part( 'template-parts/section-builder-iii-nav-details', 'builder' ); ?>
                
                <!-- Nav IV Layout -->
                <?php elseif( get_row_layout() == 'nav_iv_details_navigation' ): ?>
                    <?php get_template_part( 'template-parts/section-builder-iv-nav-details', 'builder' ); ?>
            
            <!-- Brochure Specific Items -->
                <!-- Slider Layout -->
                <?php elseif( get_row_layout() == 'builder_slider_layout' ): ?>
                    <?php get_template_part( 'template-parts/section-builder-slider', 'builder' ); ?>
                
                <!-- Page Nav Layout -->
                <?php elseif( get_row_layout() == 'page_nav_layout' ): ?>
                    <?php get_tempalte_part( 'template-parts/section-page-nav', 'builder' ) ?>
            
                <!-- Image Layout -->
                <?php elseif( get_row_layout() == 'builder_image_layout' ): ?>
                    <?php get_template_part( 'template-parts/section-builder-image', 'builder' ); ?>
                
                <!-- Gallery Layout -->
                <?php elseif( get_row_layout() == 'builder_gallery_layout' ): ?>
                    <?php get_template_part( 'template-parts/section-builder-gallery', 'builder' ); ?>

                <!-- Features Layout -->
                <?php elseif( get_row_layout() == 'builder_features_layout' ): ?>
                    <?php get_template_part( 'template-parts/section-builder-features', 'builder' ); ?>
                
                <!-- Tabs Layout -->
                <?php elseif( get_row_layout() == 'builder_tabs_layout' ): ?>
                    <?php get_template_part( 'template-parts/section-builder-tabs', 'builder' ); ?>
            
            <!-- Services Elements -->
                <!-- Services Intro -->
                <?php elseif( get_row_layout() == 'service_intro' ): ?>
                    <?php get_template_part( 'template-parts/section-service-intro', 'builder' ); ?>

                <!-- Services Intro -->
                <?php elseif( get_row_layout() == 'service_nav' ): ?>
                    <?php get_template_part( 'template-parts/section-service-nav', 'builder' ); ?>

                <!-- Services Intro -->
                <?php elseif( get_row_layout() == 'service_maintenance' ): ?>
                    <?php get_template_part( 'template-parts/section-service-maintenance', 'builder' ); ?>

            <!-- Styling Elements -->
                <!-- Rental Table Layout -->
                <?php elseif( get_row_layout() == 'service_rentalpackages' ): ?>
                    <?php get_template_part( 'template-parts/section-service-table', 'builder' ); ?>

                <!-- Maintenance Tabs Layout -->
                <?php elseif( get_row_layout() == 'service_maintenance' ): ?>
                    <?php get_template_part( 'template-parts/section-service-maintenance', 'builder' ); ?>

            <!-- Styling Elements -->
                <!-- Parallax Break Layout -->
                <?php elseif( get_row_layout() == 'para_layout' ): ?>
                    <?php get_template_part( 'template-parts/section-builder-break', 'builder' ); ?>

            <?php endif; ?>
    
        <?php endwhile; ?>
    
<?php endif; ?>
        
    