<?php
/*
Template Name: TKV 10EX
*/
?>
<?php
/**
 * The template for displaying a full width page (no sidebar).
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package gcwoo
 */

get_header(); ?>

	<main id="main" class="site-main col-md-12" role="main">
		<!-- <div id="tkv-banner" class="tkv-banner">banner</div> -->
		<img class="tkv-banner" src="<?php bloginfo('stylesheet_directory'); ?>/images/TFM-banner.jpg">
		<div class="container" style="padding:0;">
			<!-- Breadcrumbs -->
			<?php get_template_part( 'template-parts/section-breadcrumbs', 'careers' ); ?>
			<!-- End: Breadcrumbs -->		
		</div>
		<div id="container" class="container">
			<div class="row">
			<!-- Image Section -->
			<div id="product-image" class="product-image">
				<div class="product-image-text wow fadeIn">
					<h2 class="product-image-text-title wow fadeIn">Textron Fleet Management TKV 10EX</h2>
					<p class="wow fadeIn" data-wow-delay="300ms">10″ brilliant, sunlight-visible, touch-screen display and all the features you’ve come to expect from a top of the line GPS for Golf product.
					</p>
					<ul>
						<li>10.1” Ultra-bright touchscreen display</li>
						<li>Top-of-the-line golfer amenities and features</li>
						<li>Easy system upgrades</li>
						<li>Open platform enabled</li>
					</ul>
					<div class="row image-button-wrap wow fadeIn">
<!--
						<div class="col-md-6">
							<form method="get" target="_blank" action="">
							<button class="btn-block btn-details" type="submit">Download Brochure <i class="fa fa-angle-right" aria-hidden="true"></i></button>
							</form>
						</div>
-->
						<div class="col-md-6 button">
							<a class="btn-block btn-details" role="button" data-toggle="modal" data-target="#brochureMessage">Make An Enquiry <i class="fa fa-angle-right" aria-hidden="true"></i></a>
						</div>
					</div>
				</div>
				<!-- Image -->
				<div class="product-image-wrap wow fadeIn">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/images/tkv-10ex.jpg" style="max-width:100%;" title="TKV 10EX" alt="Textron Fleet Management TKV 10EX GPS System">
				</div>
				<!-- End: Image -->
			</div>
		<!-- Image-section -->
		</div>
		<!-- End: Row -->
		<!-- Contact Modal -->
		<div id="brochureMessage" class="modal fade">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header" style="background:#000048;">
						<button type="button" class="close" data-dismiss="modal"><span class="" aria-hidden="true" style="color:#fff;">&times;</span><span class="sr-only">Close</span></button>
						<div style="text-align:center;"><h4 class="modal-title gc-white" id="myModalLabel" style="color:#fff;">Message us about the <?php echo the_title(); ?></h4></div>
					</div>
					<div class="modal-body" style="background:#fff;">
			<?php echo do_shortcode( '[contact-form-7 id="1754" title="Brochure Page - Form"]' ); ?>
					</div>
				</div>
			</div>
		</div>
		<!-- End: Contact Modal -->
		<!-- #product-specifications -->

		<div id="product-specifications" name="product-specifications" class="wow fadeInUp">
			<div id="tabs" class="container product-specifications-container">
				<div class="row">
						<!-- div -->
						<div>
							<!-- Nav tabs -->
								<ul class="nav nav-tabs" role="tablist">
									<li role="presentation" class="active"><a data-target="#golfer" aria-controls="overview" role="tab" data-toggle="tab">TKV Golfer Features</a></li>
									<li role="presentation"><a data-target="#management" aria-controls="management" role="tab" data-toggle="tab">Management Features</a></li>
									<li role="presentation"><a data-target="#specs" aria-controls="accessories" role="tab" data-toggle="tab">Specs</a></li>
									<li role="presentation"><a data-target="#warranty" aria-controls="warranty" role="tab" data-toggle="tab">Warranty</a></li>
								</ul>
							<!-- End: Nav Tabs -->
							<!-- Tab panes -->
							<div class="tab-content">
								<!-- Overview Tab Content -->
								<div role="tabpanel" class="tab-pane active" id="golfer">
									<div class="row tabrow">
										<ul>
											<li>Brightest screen on the market</li>
											<li>Exceptional accuracy</li>
											<li>Enhanced HD hole graphics and 3D flyovers</li>
											<li>Distances to center/pin and various hazards</li>
											<li>Shot/drive distances and distances to any touch point</li>
											<li>Staging screen with customize-able images</li>
											<li>Protips on each hole</li>
											<li>Overview map</li>
											<li>Digital scoring</li>
											<li>2-way messaging and automatic pace and geofence warnings</li>
											<li>Automatic cart shutdown in event of zone violations</li>
											<li>On-cart pace tracking ensuring the most accurate and up-to-date pace status</li>
											<li>Automatic software updates</li>
											<li>Built-in high-capacity internal battery</li>
											<li>Rigorous environmental testing &amp; certification</li>
										</ul>
									</div>
								</div>
								<!-- End: Overview Tab Content -->
								<!-- Specifications Tab Content -->
								<div role="tabpanel" class="tab-pane product-specs" id="management">
									<!-- Specs Row -->
									<div class="row tabrow">
										<p>Seamless Mobile Experience on all tablets & smartphones – completely web-based, accessible anywhere, anytime, on any device. Distributed monitoring &amp; control in the hands of management, course marshals and golf pros.
										<br>
										Full suite of vehicle and game management features including:</p>
										<ul>
											<li>Real-time locations of all tracked vehicles</li>
											<li>Vehicle travel history</li>
											<li>Advanced Geofencing and warnings for violations and pace</li>
											<li>2-way and automatic messaging</li>
											<li>Automatic vehicle lock-down when cars enter forbidden zones, or leave the geo-fence</li>
											<li>Scheduled and manual vehicle lockdown</li>
											<li>Real-time pace of play monitoring and management</li>
											<li>Customizable pace schedules</li>
											<li>Pace of play and vehicle utilization reporting</li>
											<li>Multi-media advertising/li>
										</ul>
									</div>
									<!-- End: Specs Row -->
								</div>
								<!-- End: Specifications Tab Content -->

								<!-- Accessories Tab Content -->
								<div role="tabpanel" class="tab-pane" id="specs">
									<div class="row tabrow">
										<ul>
											<li>Dimensions: 11.8″ x 7.75″ x 1.5″</li>
											<li>Weight: 2.6 lb</li>
											<li>Connectors: Water resistant quick-connect</li>
											<li>Environmental: Sealed UV plastic enclosure – IP54</li>
											<li>Operating Temperature: -5C to +70C</li>
											<li>Display: 10.1″ diagonal, high-resolution, outdoor touchscreen</li>
											<li>Battery: High-capacity internal battery</li>
										</ul>
									</div>
								</div>
								<!-- End: Accessories Tab Content -->

								<!-- Testimonials Tab Content -->
								<div role="tabpanel" class="tab-pane" id="warranty">
									<div class="row tabrow">
									<p>Extended Care Service</p>
										<ul>
											<li>Software and feature upgrades – your product will never be out of date. You’ll receive access to all software upgrades automatically, giving you the latest features and capabilities at all times.</li>
											<li>Unlimited customer support</li>
										</ul>
									</div>
								</div>
								<!-- End: Testimonials Tab Content -->
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
	</div>
	<!-- End: Container -->

		<?php get_template_part( 'template-parts/section-page', 'new-vehicles' ); ?>
			
			
		<?php get_template_part( 'template-parts/section-details', 'new-vehicles' ); ?>
    

    	<?php get_template_part( 'template-parts/section-blog', 'front-page' ); ?>

	</main><!-- #main -->
	
	
<?php get_footer(); ?>
