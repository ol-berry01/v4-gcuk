<?php
/*
Template Name: Used Stock
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
		
		
		<?php echo do_shortcode('[products ids="1, 2, 3, 4, 5"]'); ?>
			
			
		<?php get_template_part( 'template-parts/section-details', 'new-vehicles' ); ?>
    

    	<?php get_template_part( 'template-parts/section-blog', 'front-page' ); ?>

	</main><!-- #main -->
	
	
<?php get_footer(); ?>
