<!-- ACF Brochure Specs -->
<?php if ( have_rows('brochure_specs') ):
  		while ( have_rows('brochure_specs') ): the_row(); ?>
  		
  	<!-- Col 6 -->
    <div class="col-md-6">
    
        <!-- Specs Title -->
        <p class="lead" type="button" data-toggle="collapse" data-target="#<?php the_sub_field('specs_id'); ?>" aria-expanded="false" aria-controls="<?php the_sub_field('specs_id'); ?>">
            <?php the_sub_field('specs_title'); ?> <i class="fa fa-plus-square" aria-hidden="true" style="font-size: 16px;"></i>
        </p>
        <!-- End: Specs Title -->
        <!-- Collapse -->
        <div class="collapse" id="<?php the_sub_field('specs_id'); ?>">
            <!-- Div Style -->
            <div style="">
                
                <!-- Specs -->
  				<?php if ( have_rows('specs_item') ): ?>
  					<div class="row product-specs-table" id="<?php the_sub_field('specs_id'); ?>">
  					    <?php while ( have_rows('specs_item') ): the_row(); ?>
  					    <div class="row specs-row">
  					      <div class="col-xs-6">
  					        <p><?php the_sub_field('spec_name'); ?></p>
  					      </div>
  					      
  					      <div class="col-xs-6">
  					        <p><?php the_sub_field('spec_value'); ?></p>
  					      </div>
  					    </div>
  						<?php endwhile; ?>
  					</div>
  				<?php endif; ?>
  				<!-- End: Specs -->
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
  <!-- End: ACF Brochure Specs -->