<?php if ( get_option( 'show_on_front' ) == 'posts' || !is_front_page() ) : ?>
    <div id="container" class="container">
        <div class="row">
<?php endif; ?>

            <?php 
            // Identify variables
            $image = get_sub_field( 'builder_image_image' );
            
            ?>

            <!-- Front Image Section -->
            <div id="product-image" class="product-image">
                <!-- Image Text -->
                <div class="product-image-text wow fadeInUp">
                    <h2 class="product-image-text-title wow fadeInUp"><?php the_sub_field('builder_image_title'); ?></h2>
                    <p class="wow fadeInUp" data-wow-delay="300ms"><?php the_sub_field('builder_image_text'); ?></p>
                    
                    <div class="row">
                        <div class="col-md-6">
                            <a class="btn" href="#product-features">See More Features</a>
                        </div>
                        <div class="col-md-6 button">
                            <a class="btn btn-enquiry" href="#product-features">Make An Enquiry</a>
                        </div>
                    </div>
                </div>
                <!-- End: Image Text -->
                <!-- Image -->
                <div class="product-image-wrap wow fadeInUp">
                	<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="wow fadeInUp">
                	<img class="cushman-warranty wow fadeInUp" src="https://woo-v7-olberry01.c9users.io/wp-content/uploads/2016/08/cushman-warraty-logo.png">
                </div>
                <!-- End: Image -->
            </div>
            <!-- End Front Image Section -->
            
<?php if ( get_option( 'show_on_front' ) == 'posts' || !is_front_page() ) : ?>
        <div class="clearfix"></div>
        </div>
        <!-- End: Row -->
    </div>
    <!-- End: Container -->
<?php endif; ?>