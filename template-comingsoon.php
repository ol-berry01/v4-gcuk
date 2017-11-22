<?php
/*
Template Name: Coming Soon
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
		
		
		<div class="container">
	
                <!-- Row Wow FadeInUp -->
                <div class="row wow fadeInUp">
                    <!-- Title & Introduction -->
                    <div class="row fleetcar-text wow fadeInUp" style="margin-bottom:2.5%;text-align:center;">
                        <h1 class="section-title">Coming Soon</h1>
                        <p class="lead">This page is currently under construction. Golf Car UK also has a number of other items coming soon, see below for more details.</p>
                        <button class="btn-large btn-details" type="button" onclick="history.back(-1)" style="padding:10px;">Return To Previous Page</button>
                    </div>
                    <!-- End: Title & Introduction -->
                    <!-- Repeater -->
                        <!-- Link-->
                        <div class="nav-iii-section wow fadeInUp">
                            <div class="nav-wrapper">
                                <div class="nav-img-wrapper">
                                    <img src="https://golfcaruk.com/wp-content/uploads/2017/01/projects-icon.jpg">
                                </div>
                                <p class="nav-title">Watch This Space!</p>
                                <p class="nav-subtitle" style="font-size:1em;">Golf Car UK has a number of exciting developments in the works that are launching soon!<br>We'll be announcing more details shortly, so keep checking back to find out what we've been working on.</p>
                            </div>
                        </div>
                        
                        
                        <div class="nav-iii-section wow fadeInUp">
                            <div class="nav-wrapper">
                                <div class="nav-img-wrapper">
                                    <img src="https://golfcaruk.com/wp-content/uploads/2017/01/golfcar_parts-logo.jpg">
                                </div>
                                <p class="nav-title">The Golf Car UK Parts</p>
                                <p class="nav-subtitle" style="font-size:1em;">Our E-Commerce shop allowing you to find and order the parts your need for your vehicle. We not only stock parts for E-Z-GO and Cushman vehicles but all major brands including Club Car, Yamaha and many others.</p>
                                
                            </div>
                        </div>
                        
                        
                        <div class="nav-iii-section wow fadeInUp">
                            <div class="nav-wrapper">
                                <div class="nav-img-wrapper">
                                    <img src="https://golfcaruk.com/wp-content/uploads/2017/01/badboy-stampede.jpg">
                                </div>
                                <p class="nav-title">Bad Boy Stampede</p>
                                <p class="nav-subtitle" style="font-size:1em;">The 80hp engine powering this all terrain buggy makes it an exciting and versatile vehicle. With seating for two and a range of highly customisable features Golf Car UK are looking forward to getting behind the wheel!</p>
                            </div>
                        </div>
                        
                    
                    
                    <!-- End: Link -->
                </div>
                <!-- End: Roe Wow FadeInUp -->
            <!-- Clearfix -->
            <div class="clearfix"></div>
            <!-- End: Clearfix -->
	    </div>
			
			
		<?php get_template_part( 'template-parts/section-details', 'new-vehicles' ); ?>
    

    	<?php get_template_part( 'template-parts/section-blog', 'front-page' ); ?>
    	
    	
	</main><!-- #main -->
	
	
<?php get_footer(); ?>
