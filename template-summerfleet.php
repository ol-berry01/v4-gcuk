<?php
/*
Template Name: Summer Fleet Extension Rental
*/
?>
<?php
/**
 * The template for displaying a the summer fleet extension rental details (no sidebar).
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package gcwoo
 */

get_header(); ?>
	<main id="main" class="site-main col-md-12" role="main">
		
		<div id="service-cover">
			<div class="service-overlay">
				<div class="container">
					<div class="row">
						<div class="col-sm-8 col-xs-12">
							<h1 class="gc-white">Summer Fleet Extensions</h1>
							<p class="lead gc-white">During the busiest part of your season Golf Car UK can help you keep up with your players demand for buggies.</p>
							<div class="row">
								
								
								<div class="col-xs-6">
									<button class="btn-block btn-service-details">
										Make An Enquiry <i class="fa fa-angle-right" aria-hidden="true"></i>
									</button>
								</div>
								<div class="col-xs-6">
								</div>
								
							</div>
						</div>
						<!-- End: col-8 -->
						<div class="col-sm-4">
							
						</div>
						<!-- End: col-4 -->
					</div>
					<!-- End: Row -->
				</div>
				<!-- End: Container -->
			</div>
			<!-- End: Service Overlay -->
		</div>
       <!-- End: Service Cover -->
        <div id="service-intro">
			<div id="service-intro" class="container wow fadeInUp">
    			<div class="row">
    				<div class="col-sm-10 col-sm-offset-1 col-xs-12">
    					<div class="row service-intro">
        					<div class="col-sm-6" style="text-align:left;">
        						<img src="" style="border:1px solid rgba(51,51,51,0.3);border-radius:3px;box-shadow:3px 3px 5px rgba(51,51,51,0.7);">
        					</div>
        
        					<div class="col-sm-6">
        						<div class="sevice-text" style="margin:5% 0">
        							<h3 style="margin-bottom:0px;">Added Fleet Capacity</h3>
        							<p class="lead">Meeting the high standards your members expect</p>
        							<p>Most golf clubs could operate a much larger fleet during their busy periods and with summer fleet extensions you can now do just that.</p>
        
        							<p>When demand is high and you need extra golf cars we can supply you with vehicles at long term prices with the short term benefits.</p>
        
        							<p>No lengthy contracts to sign and we can collect the unwanted vehicles at short notice to help you maximise your revenue and improve your service.</p>
        							
        							<p>Interest in this service has been very high and we have limited stock, so please book early to avoid disappointment. Terms and conditions may apply.</p>
        						</div>
        					</div>
        					<!-- End: Col 6 -->
        				</div>
    				    <!-- End: Row Service Intro -->
    				</div>
    				<!-- End: Col 10 -->
    			</div>
    		</div>
		</div>
		<!-- End: container -->
      
       <div id="service-other">
       	<div class="service-other wow fadeInUp">
       		<div class="container">
       			<div class="title-section">
       				<h2 class="section-title">Other Rental Options</h2>
       				<p class="lead">Our vehicles can help drive your businesses goals higher</p>
       			</div>
       			<div class="row">
       			    <div class="nav-ii-section">
       					<div class="nav-wrapper">
							<h3>Long Term Rental</h3>
							<p class="lead">Fully supported plans for periods of 1 to 4 years</p>
							<p>We have a tiered set of plans that will meet the demands of almost any golf course, holiday park or attraction. All these plans are backed up by our warranty and team of dedicated technicians who'll are able to service vehicles on-site.</p>
							<a href=""><button class="btn-block btn-details">More Details </button></a>
						</div>
       				</div>
       				<div class="nav-ii-section">
       					<div class="nav-wrapper">
							<h3>Short Term Rental</h3>
							<p class="lead">Ideal for those one off events or special occasions</p>
							<p>We can organise a vehicle or two to meet the demands over a brief period. Our short term rental options are designed to provide the vehicle you need at short notice while being excellent value for money.</p>
							<a href=""><button class="btn-block btn-details">More Details </button></a>
       					</div>
       				</div>
       			</div>
       		</div>
       	</div>
      </div>	
			
		<?php get_template_part( 'template-parts/section-details', 'new-vehicles' ); ?>
    

    	<?php get_template_part( 'template-parts/section-blog', 'front-page' ); ?>

	</main><!-- #main -->
	
<?php get_footer(); ?>
