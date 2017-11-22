<?php
/*
Template Name: Rental
*/
?>
<?php
/**
 * The template for displaying a the rental details (no sidebar).
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package gcwoo
 */

get_header(); ?>
	<main id="main" class="site-main col-md-12" role="main">
	    
	    <div class="container">
	        
	        <!-- Breadcrumbs -->
    	    <?php get_template_part( 'template-parts/section-breadcrumbs', 'rental' ); ?>
    	    <!-- End: Breadcrumbs -->
    	    
    	    <div class="row" style="margin:50px 0 0;">
    	        <div class="col-sm-8">
    	            <h1 class="section-title">Golf Car Rental</h1>
    	            <p class="lead">Whether you are a golf club, holiday or theme park, industrial or retail park, we can tailor a rental and finance package to suit you &amp; your business.</p>
    	        </div>
    	        <div class="col-sm-4">
    	            
    	        </div>
    	        
    	    </div>
    	    <div class="row" style="margin:25px 0 50px 0">
    	        <div class="col-sm-4">
    	            <h4 class="section-title">Vehicles for all sectors</h4>
    	            <p>Our golf cars, leisure and utility vehicles are versatile and even customisable so that they can work within the golf and hospitality sectors.</p>
    	            <p>Our vehicles have worked on golf courses, holiday parks, farms and construction sites across the country, supporting their users and delivering results.</p>
    	        </div>
    	        <div class="col-sm-4">
    	            <h4 class="section-title">Dedicated support structure</h4>
    	            <p>To backup our excellent rental packages we have a team of vehicle engineers to help maintain your fleet and keep them earning.</p>
    	            <p>We understand that being without a vehicle is lost opportunity for revenue; as such we aim to be with you within 48 hours of reporting a fault.</p>
    	        </div>
    	        <div class="col-sm-4">
    	            <h4 class="section-title">Flexible rental solutions</h4>
    	            <p>If you only plan on using your golf cars during peak months, we can tailor your rental agreement so that you're only paying during those months.</p>
    	            <p>Matching your rental terms to your revenue means you're not hiring vehicles out during periods of bad weather or in high-risk conditions.</p>
    	        </div>
    	        
    	    </div>
    	    
    	</div>
	        
        <!-- Page Break -->
	
    	<div class="parallax-window wow fadeIn" style="background-image:url('https://golfcaruk.com/wp-content/uploads/2017/01/fleet-rental-experts.jpg');padding:0;min-height:600px;">
    	    <div class="col-md-5 col-sm-8 col-xs-12 wow fadeInLeft"  data-wow-delay="1500ms" style="color:#fff;height:100%;margin:50px 0;padding:2.5% 5%;">
    	        <h2 class="section-title"style="color:#fff;">Superior quality vehicles</h2>
    	        <p class="lead" style="font-size:1.4em;color:#fff;">As authorised UK dealers we supply E-Z-GO golf cars which are packed with technology, golf cars in another league compared to the competition.</p>
    	        <p class="lead" style="font-size:1.4em;color:#fff;">These vehicles are also robust and dependable while being easy to maintain and service, keeping downtime to a minimum.</p>


    	    </div>
    	</div>
	
	    <!-- End: Page Break -->
	    
	    <div class="container">
	        
	        <div class="title-section">
	            <h2 class="section-title">Rental Packages</h2>
	        </div>
	        
	        <div class="row">
	        
    	        <!-- III Section - 1 -->
    	        <div class="nav-iii-section wow fadeIn">
    	            
                    <div class="nav-wrapper">
                        
                        <a class="nav-link" href="fleet-rental">
                            
                            <p class="nav-title">Fleet Rental</p>
                            <p class="nav-subtitle">Packages with added benefits</p>
                            <button class="btn-details btn-block">Details <i class="fa fa-angle-right" aria-hidden="true"></i></button>
                        </a>
                        
                        <div class="nav-text-wrapper">
                            <p>We have a tiered set of rental packages that will meet the demands of almost any golf course, holiday park or attraction.</p>
                        </div>
                        
                    </div>
                    
                </div>
    	        <!-- End: III Section -->
    	        
    	        <!-- III Section - 2 -->
    	        <div class="nav-iii-section wow fadeIn">
    	            
                    <div class="nav-wrapper">
                        
                        <a class="nav-link" href="/long-term-rental">
                            
                            <p class="nav-title">Long Term Rental</p>
                            <p class="nav-subtitle">Individual Vehicles Rental Plans</p>
                            <button class="btn-details btn-block">Details <i class="fa fa-angle-right" aria-hidden="true"></i></button>
                        </a>
                        
                        <div class="nav-text-wrapper">
                            <p>If you need a vehicle over an extended period of time then Golf Car UK will have a setup to meet your needs.</p>
                        </div>
                        
                    </div>
                    
                </div>
    	        <!-- End: III Sectio - 2 -->
    	        
    	        <!-- III Section - 3 -->
    	        <div class="nav-iii-section wow fadeIn">
    	            
                    <div class="nav-wrapper">
                        
                        <a class="nav-link" href="short-term-rental">
                            
                            <p class="nav-title">Short Term Rental</p>
                            <p class="nav-subtitle">Ideal For Event Hire</p>
                            <button class="btn-details btn-block">Details <i class="fa fa-angle-right" aria-hidden="true"></i></button>
                        </a>
                        
                        <div class="nav-text-wrapper">
                            <p>We can organise as many vehicles as you need to meet the demands over a brief period, offering excellent value for money.</p>
                        </div>
                        
                    </div>
                    
                </div>
    	        <!-- End: III Section -->
	        </div>
	        
	    </div>
	    
	    <?php get_template_part( 'template-parts/section-page', 'new-vehicles' ); ?>
		
			
		<?php get_template_part( 'template-parts/section-details', 'new-vehicles' ); ?>
    

    	<?php get_template_part( 'template-parts/section-blog', 'front-page' ); ?>

	</main><!-- #main -->
	
	
<?php get_footer(); ?>

<!-- Contact Modal -->

<div id="insuranceMessage" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="background:#000048;">
                <button type="button" class="close" data-dismiss="modal"><span class="" aria-hidden="true" style="color:#fff;">&times;</span><span class="sr-only">Close</span></button>
                <div style="text-align:center;"><h4 class="modal-title gc-white" id="myModalLabel" style="color:#fff;">Book an Golf Car Insurance Consultation with Golf Car UK</p></div>
            </div>
            <div class="modal-body" style="background:#fff;">
                                    
    <?php echo do_shortcode( '[contact-form-7 id="908" title="Rental Page - Form"]' ); ?>
                                        
            </div>
        </div>
    </div>
</div>

<!-- End: Contact Modal -->
