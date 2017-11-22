<?php
/*
Template Name: Brochure Product
*/
?>
<?php
/**
 * The template for displaying a new vehicle from the brochure. (no sidebar).
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package gcwoo
 */
get_header(); ?>
            
            
    <?php get_template_part( 'template-parts/section-brochure-slider', 'brochure' ); ?>
    
    
    <?php get_template_part( 'template-parts/section-brochure-nav', 'brochure' ); ?>
    
    
    <?php get_template_part( 'template-parts/section-breadcrumbs', 'brochure' ); ?>
    
    
    <?php get_template_part( 'template-parts/section-brochure-image', 'brochure' ); ?>
    
    
    <?php get_template_part( 'template-parts/section-brochure-gallery', 'brochure' ); ?>
    
    
    <?php get_template_part( 'template-parts/section-brochure-features', 'brochure' ); ?>
    
    
    <?php get_template_part( 'template-parts/section-brochure-specs', 'brochure' ); ?>
         
         
    <!-- Wordpress Loop -->
    
    <?php while ( have_posts() ) : the_post(); ?>
    
        <?php get_template_part( 'template-parts/content', 'page' ); ?>
        
            <?php
            // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) :
            	comments_template();
            endif;
            ?>
    
    <?php endwhile; // End of the loop. ?>
    
    <!-- End: Wordpress Loop -->
        
        
    <?php get_template_part( 'template-parts/section-details', 'brochure' ); ?>
        

<?php get_footer(); ?>