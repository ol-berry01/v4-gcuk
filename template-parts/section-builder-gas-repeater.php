<!-- Specs -->
<?php if ( have_rows('gas_item') ): ?>
  <div style="overflow:none;" class="row product-specs-table" id="<?php the_sub_field('gas_spec_id'); ?>">
      <?php while ( have_rows('gas_item') ): the_row(); ?>
      <div class="row specs-row">
        <div class="col-xs-6">
          <p><?php the_sub_field('gas_spec_name'); ?></p>
        </div>
        
        <div class="col-xs-6">
          <p><?php the_sub_field('gas_spec_value'); ?></p>
        </div>
      </div>
  	<?php endwhile; ?>
  </div>
<?php endif; ?>
<!-- End: Specs -->