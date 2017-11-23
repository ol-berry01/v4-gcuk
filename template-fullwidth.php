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

		<?php get_template_part( 'template-parts/section-breadcrumbs', 'full-width' ); ?>


		<?php get_template_part( 'template-parts/section-page', 'full-width' ); ?>
			
			
		<?php get_template_part( 'template-parts/section-details', 'full-width' ); ?>
    

    	<?php get_template_part( 'template-parts/section-blog', 'full-width' ); ?>

	</main><!-- #main -->
	
	
<?php get_footer(); ?>
