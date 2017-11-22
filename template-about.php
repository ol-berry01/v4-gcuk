<?php
/*
Template Name: About
*/
?>
<?php
/**
 * The template for displaying the About Page.
 *
 * The section-about.php template file can be selected to use as the websites about page
 * regardless of whether 'Settings > Reading ->Front page displays' is set to "A static page" or "Your latest posts,"
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package gcwoo
 */

get_header(); ?>

	<?php if ( is_home() ) { ?>
	
    	<main id="main" class="site-main col-md-8" role="main">

			<?php if ( have_posts() ) : ?>

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php

						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'template-parts/content', get_post_format() );
					?>

				<?php endwhile; ?>

				<?php get_template_part( 'template-parts/pagination', 'index' ); ?>

			<?php else : ?>

				<?php get_template_part( 'template-parts/content', 'none' ); ?>

			<?php endif; ?>

		</main><!-- #main -->

		<?php get_sidebar(); ?>
	
	<?php }else { ?>
	
		<main id="main" class="site-main" role="main">
			
			<div class="container">
	        
	        <!-- Breadcrumbs -->
    	    <?php get_template_part( 'template-parts/section-breadcrumbs', 'rental' ); ?>
    	    <!-- End: Breadcrumbs -->
    	    
	    	    <div class="row" style="margin:50px 0 0;">
	    	        <div class="col-sm-6">
	    	            <h1 class="section-title"><?php the_title(); ?></h1>
	    	            <p class="lead">Established in 2010 &amp; has grown rapidly to be the Premier National E-Z-GO dealer. </p>
	    	        </div>
	    	        <div class="col-sm-5">
	    	            
	    	        </div>
	    	        
	    	    </div>
	    	    <div class="row" style="margin:25px 0 50px 0">
	    	        <div class="col-sm-4">
	    	            <h4 class="section-title">Authorised UK Dealer</h4>
	    	            <p>Golf Car UK has customers at the tip of Cornwall, in the upper reaches of Scotland and everywhere in between.</p>
	    	            <p>We are authorised dealers for the E-Z-GO, Cushman and Bad Boy Buggies, supplying a wide range of electric, petrol and diesel vehicles.</p>
	    	            <p>All of our vehicles can be customised to create a bespoke solution for your own individual needs.</p>
	    	        </div>
	    	        <div class="col-sm-4">
	    	            <h4 class="section-title">Vehicles For All Sectors</h4>
	    	            <p>Although we specialise in vehicles to golf clubs for golf clubs, we've also supplied vehicles to the following sectors;</p>
	    	            <p>Agriculture, Horticulture, Hunting & Shooting Clubs, Universities, Schools, Site Management, Construction, Defence, Health, Industrial Estates, Sports Stadiums, Driving Ranges, Retail, Holiday Parks, Caravan Sites, Ferry Terminals and Hotels.</p>
	    	        </div>
	    	        <div class="col-sm-4">
	    	            <h4 class="section-title">Everything In-House</h4>
	    	            <p>With our own transport division, we can deliver your vehicles direct to your door at a time to suit you. Whether it be a single vehicle or a fleet of 150 vehicles, we can do it all in-house with our own staff and transport.</p>
	    	            <p>We also have a dedicated team of factory trained field-based engineers with fully equipped vans and the latest diagnostic tools.</p>
    	        	</div>
    	        
    	    	</div>
    	    
    		</div>


	        <?php get_template_part( 'template-parts/section-about', 'about-page' ); ?>
	        
	        
	        <div class="container">
	        	
	        	<div class="row front-row wow fadeIn" style="visibility: visible; animation-name: fadeInUp;">
	        		<div class="welcome-text">
			            <div class="wow fadeIn" style="visibility: visible; animation-name: fadeInUp;">
			                <h3 class="wow fadeIn" style="margin-bottom:15px;">Highly Skilled Engineers</h3>
			                
			            </div>
				        <div>
				        	
				            <p>Our factory trained engineers all have years of experience and the willingness to go the extra mile. They're able to diagnose and fix almost any fault on the first visit.</p>
							<p>If, for any reason, a vehicle needs to be returned to our workshop for specialist work, large modifications or an inspection, we are able to supply a temporary vehicle in its place to minimise your downtime.</p>
							<p></p>
							
				        </div>
			        </div>
			    </div>
			    
			    <div class="row front-row wow fadeIn" style="visibility: visible; animation-name: fadeInUp;">
	        		<div class="welcome-text">
			            <div class="wow fadeIn" style="visibility: visible; animation-name: fadeInUp;">
			                <h3 class="wow fadeIn" style="margin-bottom:15px;">Parts & Accessories</h3>
			                
			            </div>
				        <div>
				            <p>Our expanding and comprehensive Parts Department is able to supply parts & accessories for E-Z-GO, Cushman and the Bad Boy range. They can also provide many of the parts &amp; accessories required for Club Car and Yamaha. <!-- For further information, please visit our parts website parts.golfcaruk.com.--></p>
				        </div>
			        </div>
			    </div>
			    
			    <div class="row front-row wow fadeIn" style="visibility: visible; animation-name: fadeInUp;">
	        		<div class="welcome-text">
			            <div class="wow fadeIn">
			                <h3 class="wow fadeIn" style="margin-bottom:15px;">Sales</h3>
			                
			            </div>
				        <div>
				            <p>Our growing Sales Team is instrumental in bringing many new revenue generating concepts to our customers. They appreciate that we don’t just “sell a vehicle”, and as a result have earned our strapline of;</p>
				            <div class="title-section">
				            	<h4 class="lead gc-alt-blue wow fadeInUp">Delivering Excellence - Driving Revenue</h4>
				            </div>
				            <p>They look for, and continue to develop, new and imaginative ways for Golf Car UK customers to generate more revenue by providing unique Golf Car UK tools that make a “bottom line” difference.</p>
				            <p>Call us today, to arrange a consultation to discuss how we can increase your revenue and profitability, through the complete Golf Car UK solution.</p>
				        </div>
			        </div>
			    </div>
	        	   <div class="row">
                	<div class="welcome-text">
                    	<h3 class="wow fadeIn" style="margin-bottom:15px;">Careers</h3>
                        
                        <div>
                            <p>We're always looking for new and talented , why not browse our careers section to see if you can bring your skills and drive to our growing team</p>
                            <a href="http://golfcaruk.com/about/careers"><button class="btn-details btn-block">Our Careers <i class="fa fa-angle-right" aria-hidden="true"></i></button></a>
                        </div>
                    </div>
                    
                </div>
	        </div>
					
					
		    <?php get_template_part( 'template-parts/section-page', 'about-page' ); ?>
		            
		
			<?php get_template_part( 'template-parts/section-blog', 'about-page' ); ?>


		</main><!-- #main -->

	<?php } ?>


<?php get_footer(); ?>
