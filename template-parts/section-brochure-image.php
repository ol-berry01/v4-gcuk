<div id="container" class="container">
        <div class="row">
    <!-- Image Section -->
        <div id="product-image" class="product-image">
            
            <div class="product-image-text wow fadeIn">
                <h2 class="product-image-text-title wow fadeIn"><?php the_field('brochure_intro_title'); ?></h2>
                <p class="wow fadeIn" data-wow-delay="300ms"><?php the_field('brochure_intro_content'); ?></p>
                
                <div class="row image-button-wrap wow fadeIn">
                    <div class="col-md-6">
                        <form method="get" target="_blank" action="<?php the_field('brochure_intro_file'); ?>">
                        <button class="btn-block btn-details" type="submit">Download Brochure <i class="fa fa-angle-right" aria-hidden="true"></i></button>
                        </form>
                    </div>
                    <div class="col-md-6 button">
                        <a class="btn-block btn-details" role="button" data-toggle="modal" data-target="#brochureMessage">Make An Enquiry <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            
            <!-- Image -->
            <div class="product-image-wrap wow fadeIn">
            	<img src="<?php the_field('brochure_intro_image'); ?>">
            </div>
            <!-- End: Image -->
        </div>
    <!-- Image-section -->
    </div>
    <!-- End: Row -->
</div>
<!-- End: Container -->

<!-- Contact Modal -->

<div id="brochureMessage" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="background:#000063;">
                <button type="button" class="close" data-dismiss="modal"><span class="" aria-hidden="true" style="color:#fff;">&times;</span><span class="sr-only">Close</span></button>
                <div style="text-align:center;"><h4 class="modal-title gc-white" id="myModalLabel" style="color:#fff;">Message us about the <?php echo the_title(); ?></p></div>
            </div>
            <div class="modal-body" style="background:#fff;">
                                    
    <?php echo do_shortcode( '[contact-form-7 id="1754" title="Brochure Page - Form"]' ); ?>
                                        
            </div>
        </div>
    </div>
</div>

<!-- End: Contact Modal -->
