<div id="builder-features" class="builder-features">
    
    <?php if ( get_option( 'show_on_front' ) == 'posts' || !is_front_page() ) : ?>
        <div id="container" class="container">
            <div class="row">
    <?php endif; ?>

                <h2 class="section-title wow fadeInUp"><?php the_field('builder_feature_title'); ?> Features</h2>
                    	
                <div class="row wow fadeInUp">
                
                    <?php if( have_rows('builder_feature_repeater') ): ?>
                    
                        <?php while( have_rows('builder_feature_repeater') ): the_row(); 
                        
                            // vars
        					$image = get_sub_field('builder_feature_image');
        			
        				?>
                
                            <!-- Feature -->
                            <div class="col-sm-4 product-feature wow fadeInUp">
                            
                                <div class="feature-image-wrap">
                                    
                                    <!-- Image -->
                                    <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_url( $image['alt'] ); ?>" class="twopluscars-image"/>
                                    <!-- End: Image -->
                                
                                </div>
                            
                                <div class="feature-text-wrap">
                                    <!-- Widget Title -->
                                    <h4><?php the_sub_field('builder_feature_title'); ?></h4>
                                    <!-- End: Widget Title -->
                                
                                    <!-- Widget Text -->
                                    <p><?php the_sub_field('builder_feature_text'); ?></p>
                                    <!-- End: Widget Text -->
                                </div>
                            
                                <div class="clearfix"></div>
                            
                            </div>
                            <!-- End: Feature -->
            
                        <?php endwhile; ?>
                
                    <?php endif; ?>
                
                </div>
    
    <?php if ( get_option( 'show_on_front' ) == 'posts' || !is_front_page() ) : ?>
            <div class="clearfix"></div>
        </div>
        <!-- End: Row -->
    </div>
    <!-- End: Container -->
    <?php endif; ?>
    
</div>