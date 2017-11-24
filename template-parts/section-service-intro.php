 
<section class="section-builder">
	<div class="container">
		<div class="row service-title">
			<div class="col-sm-8">
				<h1 class="section-title"><?php the_sub_field('service_intro_title'); ?></h1>
				<p class="lead"><?php the_sub_field('service_sub_title'); ?></p>
			</div>
			<div class="col-sm-4">
			</div>
		</div>
		
		<div class="row service-content">
			<?php if( have_rows('service_intro_description') ): ?>
				<?php while( have_rows('service_intro_description') ): the_row(); ?>
					<!-- Column -->
					<div class="col-sm-4">
						<h4 class="section-title"><?php the_sub_field('service_description_title'); ?></h4>
						<p><?php the_sub_field('service_description_content'); ?></p>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>
</section>

<!-- Contact Modal -->
<div id="insuranceMessage" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header" style="background:#000063;">
				<button type="button" class="close" data-dismiss="modal"><span class="" aria-hidden="true" style="color:#fff;">&times;</span><span class="sr-only">Close</span></button>
					<div style="text-align:center;">
						<h4 class="modal-title gc-white" id="myModalLabel" style="color:#fff;">Book an Golf Car Insurance Consultation with Golf Car UK</h4>
					</div>
				</div>
				<div class="modal-body" style="background:#fff;">		
					<?php echo do_shortcode( '[contact-form-7 id="908" title="Rental Page - Form"]' ); ?>					
				</div>
			</div>
		</div>
	</div>
</div>
