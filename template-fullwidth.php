<?php
/*
Template Name: Full Width
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

		<div class="container" style="padding:0;">
			<!-- Breadcrumbs -->
    	    		<?php get_template_part( 'template-parts/section-breadcrumbs', 'careers' ); ?>
    	    		<!-- End: Breadcrumbs -->		
		</div>

		<?php get_template_part( 'template-parts/section-page', 'new-vehicles' ); ?>
			
			
		<?php get_template_part( 'template-parts/section-details', 'new-vehicles' ); ?>
    

    	<?php get_template_part( 'template-parts/section-blog', 'front-page' ); ?>

	</main><!-- #main -->
	
	
<?php get_footer(); ?>
