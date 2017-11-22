<?php
/*
Template Name: Finance
*/
?>
<?php
/**
 * The template for displaying a the servicing details (no sidebar).
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
    	    
    	    <div class="row" style="margin:50px 0;">
    	        <div class="col-sm-7">
    	            <h1 class="section-title">Golf Car Finance</h1>
    	            <p class="lead">Our finance packages make having an impressive, smart and profitable Golf Car fleet an affordable reality</p>
    	        </div>
    	        <div class="col-sm-5">
    	            
    	        </div>
    	        
    	    </div>
    	    <div class="row" style="margin:50px 0">
    	        <div class="col-sm-4">
    	            <h4 class="section-title">Finance for All Businesses</h4>
    	            <p>We are able to offer finance to any UK business, subject to status, and this currently accounts for over 90% of all our sales.</p>
    	            <p>When it comes to golf car rental fleets, this rises to nearly 98%. This is because it’s where our experience and specialisation shows through, and if you want to benefit from a market leading golf car at a competitive rate you should talk to us about our latest offers.</p>
    	        </div>
    	        <div class="col-sm-4">
    	            <h4 class="section-title">Structured to Suit You</h4>
    	            <p>With so many options and factors that need to be taken into consideration, we can advise you on the best solution that will suit your goals.</p>
    	            <p>We have years of experience in the industry and highly recommend you book a consultation with us so you can get the right vehicle at the right price!</p>
    	        </div>
    	        <div class="col-sm-4">
    	            <h4 class="section-title">Added Extras</h4>
    	            <p>With all our finance packages, we supply a vehicle warranty along with the option to protect the asset against fire, theft, accidental and malicious damage.</p>
    	            <p>This will enable you to not only fix the monthly cost but also protect yourself against any unforeseen costs.</p>
    	        </div>
    	    </div>
    	    
    	    <div class="row image-button-wrap wow fadeIn">

                    <div class="col-md-6 button">
                        <a class="btn-block btn-details" role="button" data-toggle="modal" data-target="#financeMessage">Book A Consultation <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                    </div>

<div class="col-md-6">
                        <form method="get" target="_blank" action="https://s3-eu-west-2.amazonaws.com/golfcaruk.com/wp-content/uploads/2017/03/24093140/quick-reference-guide.pdf">
                        <button class="btn-block btn-details" type="submit">Download Our Quick Reference Guide <i class="fa fa-angle-right" aria-hidden="true"></i></button>
                        </form>
                    </div>

                </div>
    	    
    	</div>
    	
    	<!-- Page Break -->
    	
	    	<div class="parallax-window wow fadeIn" style="background-image:url('https://s3-eu-west-2.amazonaws.com/golfcaruk.com/wp-content/uploads/2017/03/09115059/golf-single-buggy.jpg');padding:0;min-height:600px;">
	    	    <div class="col-md-5 col-sm-8 col-xs-12 wow fadeInLeft"  data-wow-delay="1500ms" style="color:#fff;height:100%;margin:50px 0;padding:2.5% 5%;">
	    	        <h2 class="section-title"style="color:#fff;">Golf Car Fleet Rental</h2>
	    	        <p class="lead" style="font-size:1.4em;color:#fff;">We can supply fleets of any size to anywhere in the country.</p>
	    	        <p class="lead" style="font-size:1.4em;color:#fff;">Our packages can be any mix of Golf Cars, Utility or Hospitality Vehicles depending on your requirements.</p>
	    	        <a href="/rental/fleet-rental/"><button class="btn-banner btn-block">More Details <i class="fa fa-angle-right" aria-hidden="true"></i></button></a>
	    	    </div>
	    	</div>
    	
    	<!-- End: Page Break -->
			
		    <?php get_template_part( 'template-parts/section-details', 'new-vehicles' ); ?>
    

        	<?php get_template_part( 'template-parts/section-blog', 'front-page' ); ?>
    	
    	</main>
	
<?php get_footer(); ?>

<!-- Contact Modal -->

<div id="financeMessage" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="background:#000048;">
                <button type="button" class="close" data-dismiss="modal"><span class="" aria-hidden="true" style="color:#fff;">&times;</span><span class="sr-only">Close</span></button>
                <div style="text-align:center;"><h4 class="modal-title gc-white" id="myModalLabel" style="color:#fff;">Book A Finance Consultation with Golf Car UK</p></div>
            </div>
            <div class="modal-body" style="background:#fff;">
                                    
    <?php echo do_shortcode( '[contact-form-7 id="1756" title="Finance Consultation - Form"]' ); ?>
                                        
            </div>
        </div>
    </div>
</div>

<!-- End: Contact Modal -->
