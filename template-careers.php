<?php
/*
Template Name: Careers
*/
?>
<?php
/**
 * The template for displaying a the Golf Car UK Careers page (no sidebar).
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package gcwoo
 */

get_header(); ?>

	<main id="main" class="site-main col-md-12" role="main">
	    
	    <div class="container">
	        
	        <!-- Breadcrumbs -->
    	    <?php get_template_part( 'template-parts/section-breadcrumbs', 'careers' ); ?>
    	    <!-- End: Breadcrumbs -->
    	    
    	    <!-- Title Section -->
    	    <div class="row" style="margin:50px 0;">
    	        <div class="col-sm-7">
    	            <h1 class="section-title">Golf Car UK Careers</h1>
    	            <p class="lead">We're a rapidly growing company, and always looking for talented new people to join our team.</p>
    	        </div>
    	        <div class="col-sm-5">
    	        </div>
    	    </div>
    	    <!-- End: Title Section -->
    	    
    	    <div class="row" style="margin:50px 0">
    	        <div class="col-sm-4">
    	            <h4 class="section-title">Leading</h4>
    	            <p>Golf Car UK is the UK's premier EZGO dealer and we're continuing to grow thanks to a great team of talented people working hard in all areas of our business.</p>
    	            <p>As such, we look to employ people who share this drive. Making the most of their skill-set, rewarding them appropriately and helping them grow with training opportunities.</p>
    	        </div>
    	        <div class="col-sm-4">
    	            <h4 class="section-title">Flexible</h4>
    	            <p>We do often ask our staff to be flexible in their roles, able to take on different jobs within the company sometimes at short notice.</p>
    	            <p>In turn we offer generous annual leave and sickness time, as well as the flexibility you might need if something in your personal life comes up suddenly.</p>
    	        </div>
    	        <div class="col-sm-4">
    	            <h4 class="section-title">Rewarding</h4>
    	            <p>Our business focusses on everything from sales &amp; support to design &amp; marketing. Our staff can be influencial in all areas and are not confined to their roles.</p>
    	            <p>We're a small but growing team of professionals who strive to help each other and keep Golf Car UK at the forefront of the industry.</p>
    	        </div>
    	    </div>
    	   
		</div><!-- End: Container -->
    	    
    	    <div class="row hashed-bg" style="margin:50px 0;padding:100px 0;background:url('/images/stripes-bg.png/');background-color:#fff;">
    	    	<div class="container">
    	    		<div class="row">
    	    	<!-- <h2 class="section-title">Your Attributes</h2> -->
    	     	<!-- <p class="lead"></p> -->
    	        <div class="col-sm-4 col-sm-offset-2 benefits">
    	            <h3 class="attribute-title" style='text-align:center;margin-bottom:25px;'>Professional</h4>
    	            <ul>
    	            	<li>Working for the UK's industry leading leisure vehicle company</li>
    	            	<li>Competitive salaries</li>
    	            	<li>28 days annual leave <small>(including bank holidays)</small></li>
    	            	<li>Company & engineering orientation</li>
    	            	<li>Company branded PPE <small>(where required)</small></li>
    	            	<li>Personal training budget</li>
    	            	<li>Employee referrals</li>
    	            	<li>Rewarding apprenticeship program</li>
    	            	
    	            </ul>
    	        </div>
    	        <div class="col-sm-4 benefits">
    	            <h3 class="attribute-title" style='text-align:center;margin-bottom:25px;'>Personal</h4>
    	            <ul>
    	            	<li>Professional &amp; driven attitude</li>
    	            	<li>Working as part of a growing team</li>
    	            	<li>Flexibility to assist in other areas of the company</li>
    	            	<li>Able to learn &amp; develop new skills</li>
    	            	<li>Excellent communicator</li>
    	            	<li>Computer &amp; email literate</li>
    	            	<li>Smart appearance</li>
    	            	
    	            </ul>
    	        </div>
    	        </div>
    	        </div>
    	    </div>
    	    
    	<!--    <div class="container">-->
    	    
    	<!--</div>-->
    		
    		
    	
    	<div class="container">
	<h2>Job Listings</h2>    	    
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
		</div><!-- End: Container -->
    	
    		
			
		    <?php get_template_part( 'template-parts/section-details', 'careers' ); ?>
    

        	<?php get_template_part( 'template-parts/section-blog', 'careers' ); ?>
    	
    	</main>
	
<?php get_footer(); ?>
