<!-- #product-specifications -->

<div id="product-specifications" name="product-specifications" class="wow fadeInUp">
        <div id="tabs" class="container product-specifications-container">
            <div class="row">
                <!-- div -->
                <div>
                    <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a data-target="#overview" aria-controls="overview" role="tab" data-toggle="tab">Overview</a></li>
                            <li role="presentation"><a data-target="#specs" aria-controls="specs" role="tab" data-toggle="tab">Specs</a></li>
                            <li role="presentation"><a data-target="#accessories" aria-controls="accessories" role="tab" data-toggle="tab">Accessories</a></li>
                            <li role="presentation"><a data-target="#testimonials" aria-controls="testimonials" role="tab" data-toggle="tab">Testimonials</a></li>
                            <li role="presentation"><a data-target="#downloads" aria-controls="downloads" role="tab" data-toggle="tab">Downloads</a></li>
                            <!--<li role="presentation"><a data-target="#colours" aria-controls="colours" role="tab" data-toggle="tab">Colours</a></li>-->
                            <!--<li role="presentation"><a data-target="#rental" aria-controls="rental" role="tab" data-toggle="tab">Rental</a></li>-->
                            
                        </ul>
                    <!-- End: Nav Tabs -->
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <!-- Overview Tab Content -->
                        <div role="tabpanel" class="tab-pane active" id="overview">
                            <div class="row tabrow">
                                <div class="col-sm-6" style="padding:25px 0;text-align:center;">
                                    <div class="overview-img-wrap">
                                        <img src="<?php the_field('overview_side_img'); ?>" style="margin-right:50px;">
                                        <img src="<?php the_field('overview_front_img'); ?>" style="margin-right:50px;">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="overview-text-wrap">
                                        <h4 style="margin-bottom:2.5%;">Standard Features</h4>
                                        <ul style="list-style:none;padding-left:0;">
                                            <?php if( have_rows('overview_product_features') ): ?>
                                                <?php while( have_rows('overview_product_features') ): the_row(); ?>
                                                    <li><?php the_sub_field('overview_feature_item'); ?></li>
                                                <?php endwhile; ?>
                                            <?php endif; ?>
                                        </ul>
                                        <p><i class="fa fa-bolt gc-gold" aria-hidden="true"></i> &#61; Electric Drivetrain Only<br>
                                        <img src="https://goo.gl/oZjtcG"> &#61; Petrol Drivetrain Only</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End: Overview Tab Content -->
                        <!-- Specifications Tab Content -->
                        <div role="tabpanel" class="tab-pane product-specs" id="specs">
                            <!-- Specs Row -->
                            <div class="row tabrow">
                    			
                    			
                    			<!-- specs accordion -->
                    			<?php if( have_rows('brochure_tab_specs') ): ?>
                    				<?php while( have_rows('brochure_tab_specs') ): the_row(); 
                    					// vars
                    					$title = get_sub_field('borchure_specs_title');
                    					$spec_id = get_sub_field('borchure_specs_id');
                    				?>
                    			<div class="panel-group" id="specsAccordion">
                                    <div class="panel panel-default ">
                                        <div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse" data-parent="#specsAccordion" data-target="#<?php echo $spec_id; ?>">
                                            <h4 class="panel-title">
                                                <?php echo $title; ?>
                                            </h4>
                                        </div>
                                        <div id="<?php echo $spec_id; ?>" class="panel-collapse collapse" style="height: 0px;">
                                            <div class="panel-body">
                                                <?php if( have_rows('borchure_specs_range') ): ?>
                                                    <?php while( have_rows('borchure_specs_range') ): the_row();
                                                        // vars
                                                        $specs_spec = get_sub_field('brochure_specs_spec');
                                                        $specs_value = get_sub_field('brochure_specs_value');
                                                    ?>
                                                    <div class="row">
                                                        <div class="col-xs-4"><p><?php echo $specs_spec; ?></p></div>
                                                        <div class="col-xs-4"><p><?php echo $specs_value; ?></p></div>
                                                        <div class="col-xs-4"></div>
                                                    </div>
                                                    <?php endwhile; ?>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                 
                        				<!-- End: Feature -->
                    				<?php endwhile; ?>
                    			<?php endif; ?>
                    			
                    			<!-- End: specs accordion -->
                    			
                            </div>
                      		<!-- End: Specs Row -->
                        </div>
                        <!-- End: Specifications Tab Content -->
                        
                        <!-- Accessories Tab Content -->
                        <div role="tabpanel" class="tab-pane" id="accessories">
                            <div class="row tabrow">

Coming Soon
                                
                                <?php if( have_rows('brochure_tab_accessory') ): ?>
                                    <?php while( have_rows('brochure_tab_accessory') ): the_row();
                                        // vars
                                        $accessory_image = get_sub_field('brochure_accessory_image');
                                        $accessory_label = get_sub_field('brochure_accessory_label');
                                        $accessory_link = get_sub_field('brochure_accessory_link');
                                    ?>
                    					<div class="accessory-image" target="_blank">
                    					    <a href="<?php echo $accessory_link; ?>">
                        					    <img src="<?php echo $accessory_image; ?>">
                        					    <p><?php echo $accessory_label; ?></p>
                    					    </a>
                    					</div>
                    				<?php endwhile; ?>
                    			<?php endif; ?>
                                
                            </div>
                        </div>
                        <!-- End: Accessories Tab Content -->
                        
                        <!-- Testimonials Tab Content -->
                        <div role="tabpanel" class="tab-pane" id="testimonials">
                            <div class="row tabrow">
                                
                                Coming Soon
                                
                            </div>
                        </div>
                        <!-- End: Testimonials Tab Content -->
                        
                        <!-- Downloads Tab Content -->
                        <div role="tabpanel" class="tab-pane" id="downloads">
                            <div class="row tabrow">
                                
                                <div class="col-xs-4">
                                    <?php if( have_rows('brochure_tab_downloads') ): ?>
                                        <?php while( have_rows('brochure_tab_downloads') ): the_row();
                                            // vars
                                            $download_label = get_sub_field('brochure_download_label');
                                            $download_file = get_sub_field('brochure_download_file');
                                        ?>
                                        
                                        <form method="get" target="_blank" action="<?php echo $download_file; ?>">
                                            <button class="btn-block btn-details" type="submit"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> <?php echo $download_label; ?></button>
                                        </form>
                        					    
                        				<?php endwhile; ?>
                        			<?php endif; ?>
                    			</div>
                                
                            </div>
                        </div>
                        <!-- End: Downloads Tab Content -->
                        
                    </div>
                </div>
                <!-- End: div -->
            <div class="clearfix"></div>
        </div>
        <!-- End: Row -->
    </div>
    <!-- End: Container -->
</div>
<!-- End: #product-specifications -->