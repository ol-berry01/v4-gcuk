<!-- Brochure Features Section -->
<div class="container">
    <div id="product-features" name="product-features"class="product-features wow fadeIn">
        <div class="row">
            <div class="title-section wow fadeIn">
        	    <h2 class="section-title"><?php echo the_title(); ?> Features</h2>
        	</div>
            <div class="row wow fadeIn">
    			<?php if( have_rows('brochure_features_section') ): ?>
    				<?php while( have_rows('brochure_features_section') ): the_row(); 
    					// vars
    					$title = get_sub_field('brochure_feature_title');
    					$content = get_sub_field('brochure_feature_description');
    					$image = get_sub_field('brochure_feature_image');
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
                                <p class="feature-text-title"><?php echo $title; ?></h4>
                            <!-- End: Widget Title -->
                            <!-- Widget Text -->
                                <p><?php echo $content; ?></p>
                            <!-- End: Widget Text -->
                        </div>
                    	<div class="clearfix"></div>
    				</div>
    				<!-- End: Feature -->
    				<?php endwhile; ?>
    			<?php endif; ?>
    		</div>
            <div class="clearfix"></div>
        </div>
        <!-- End: Row -->
    </div>
    <!-- End: Container -->
</div>
<!-- End: Brochure Features Section -->