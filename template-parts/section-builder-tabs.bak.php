<!-- #product-specifications -->
<div id="product-specifications" class="wow fadeInUp">
    
    
        <div id="tabs" class="container product-specifications-container">
            <div class="row">
    
    <!-- div -->
    <div>
    
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
          <li role="presentation" class="active"><a href="#overview" aria-controls="overview" role="tab" data-toggle="tab">Overview</a></li>
          <li role="presentation"><a href="#specs" aria-controls="specs" role="tab" data-toggle="tab">Specs</a></li>
          <li role="presentation"><a href="#colours" aria-controls="colours" role="tab" data-toggle="tab">Colours</a></li>
          <li role="presentation"><a href="#rental" aria-controls="rental" role="tab" data-toggle="tab">Rental</a></li>
          <li role="presentation"><a href="#downloads" aria-controls="downloads" role="tab" data-toggle="tab">Downloads</a></li>
        </ul>
        <!-- End: Nav Tabs -->
        
        <!-- Tab panes -->
        <div class="tab-content">
            <!-- Overview Tab Content -->
            <div role="tabpanel" class="tab-pane active" id="overview">
                <div class="row">
                  <?php the_sub_field('overview_tab_content'); ?>
                </div>
            </div>
            <!-- End: Overview Tab Content -->
            
            <!-- Specifications Tab Content -->
            <div role="tabpanel" class="tab-pane product-specs" id="specs">
                <!-- Specs Row -->
                <div class="row">
                  				
          			<!-- Col 6 -->
                    <div class="col-md-6">
                        
                        <!-- Electric Specs -->
                        <?php if ( have_rows('elec_specs_repeater') ):
                  				while ( have_rows('elec_specs_repeater') ): the_row(); ?>
                            
                                <!-- Specs Title -->
                                <h4 type="button" data-toggle="collapse" data-target="#<?php the_sub_field('elec_spec_id'); ?>" aria-expanded="false" aria-controls="<?php the_sub_field('elec_spec_id'); ?>">
                                    <?php the_sub_field('elec_cat_title'); ?> <i class="fa fa-plus-square" aria-hidden="true" style="font-size: 16px;margin-bottom:10px;color:rgba(90,100,117,1)"></i>
                                </h4>
                                <!-- End: Specs Title -->
                                <!-- Collapse -->
                                <div class="collapse" id="<?php the_sub_field('elec_spec_id'); ?>">
                                    <!-- Div Style -->
                                    <div style="">
                                        
                                        <?php get_template_part( 'template-parts/section-builder-elec-repeater', 'specs' ); ?>
                                        
                                    </div>
                                    <!-- End: Div Style -->
                                </div>
                                <!-- End: Collapse -->
                                
                                <?php 
                            endwhile;
                  			endif; 
                  		?>
                  		
                            </div>
              		        <!-- End: Col 6 --> 
              		
                        
                  		<!-- End: Electric Specs -->
                  		
              		    <!-- Petrol Specs -->
                        <?php if ( have_rows('gas_specs_repeater') ):
                          		while ( have_rows('gas_specs_repeater') ): the_row(); ?>
                          		
                          	<!-- Col 6 -->
                            <div class="col-md-6">
                            
                                <!-- Specs Title -->
                                <h4 type="button" data-toggle="collapse" data-target="#<?php the_sub_field('gas_spec_id'); ?>" aria-expanded="false" aria-controls="<?php the_sub_field('gas_spec_id'); ?>">
                                    <?php the_sub_field('gas_category_title'); ?> <i class="fa fa-plus-square" aria-hidden="true" style="font-size: 16px;margin-bottom:10px;color:rgba(90,100,117,1)"></i>
                                </h4>
                                <!-- End: Specs Title -->
                                <!-- Collapse -->
                                <div class="collapse" id="<?php the_sub_field('gas_spec_id'); ?>">
                                    <!-- Div Style -->
                                    <div style="">
                                        <?php get_template_part( 'template-parts/section-builder-gas-repeater', 'specs' ); ?>
                                        
                                    </div>
                                    <!-- End: Div Style -->
                                </div>
                                <!-- End: Collapse -->
                            </div>
                              <!-- End: Col 6 --> 
                        
                        <?php 
                            endwhile;
                          	endif; 
                          ?>
                          <!-- End: Petrol Specs -->
                    
          		</div>
          		<!-- End: Specs Row -->
            </div>
            <!-- End: Specifications Tab Content -->
            
            <!-- Colours Tab Content -->
            <div role="tabpanel" class="tab-pane" id="colours">
                <p>Colours panel content</p>
                
                
            </div>
            <!-- End: Colours Tab Content -->
            
            <!-- Rental Tab Content -->
            <div role="tabpanel" class="tab-pane" id="rental">
                <p>Rental panel content</p>
                
                <p>Sed lobortis est a sapien pellentesque, nec aliquet arcu lacinia. Vivamus euismod ante urna, ac fringilla lorem volutpat sit amet. Sed rhoncus orci eget fermentum tincidunt. Donec quis arcu eu sapien dictum eleifend nec sit amet mi. Vestibulum sagittis nisl justo, ac vestibulum massa pretium id. Vivamus rhoncus turpis et sem feugiat sollicitudin. Aliquam in risus non mauris rutrum porttitor in nec mi. Sed consectetur in felis ut viverra. Donec elit elit, aliquet sit amet quam eu, lacinia efficitur lacus. Phasellus at commodo ex. Suspendisse pulvinar sapien non eros porttitor mattis.</p>
            </div>
            <!-- End: Rental Tab Content -->
            
            <!-- Downloads Tab Content -->
            <div role="tabpanel" class="tab-pane" id="downloads">
                <p>Downloads panel content</p>

                <p>Sed lobortis est a sapien pellentesque, nec aliquet arcu lacinia. Vivamus euismod ante urna, ac fringilla lorem volutpat sit amet. Sed rhoncus orci eget fermentum tincidunt. Donec quis arcu eu sapien dictum eleifend nec sit amet mi. Vestibulum sagittis nisl justo, ac vestibulum massa pretium id. Vivamus rhoncus turpis et sem feugiat sollicitudin. Aliquam in risus non mauris rutrum porttitor in nec mi. Sed consectetur in felis ut viverra. Donec elit elit, aliquet sit amet quam eu, lacinia efficitur lacus. Phasellus at commodo ex. Suspendisse pulvinar sapien non eros porttitor mattis.</p>
                
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer aliquet lorem nisl, sed tristique magna vestibulum auctor. Integer id porta ligula. Praesent porttitor velit sit amet nibh lobortis pulvinar. Phasellus feugiat, lorem quis commodo tempus, purus arcu semper orci, at vulputate orci magna quis libero. Nulla sed libero facilisis, posuere sem a, aliquet felis. Donec imperdiet sed ipsum id convallis. Vestibulum volutpat nisl eu quam posuere, ac sodales velit gravida. Vivamus tempor elementum magna in porttitor. Pellentesque efficitur at lacus nec interdum. Donec vulputate scelerisque ex. Maecenas congue euismod risus, ut volutpat eros fermentum id. Etiam bibendum urna ut tortor molestie convallis. Aliquam sagittis justo id nisl ultrices ullamcorper. Donec rutrum lorem eget pharetra interdum.</p>
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