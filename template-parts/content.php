<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package gcwoo
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="row">
		<?php if ( has_post_thumbnail() ) : ?>
		<div class="post-image col-md-6">
            <a href="<?php echo esc_url( get_permalink() ); ?>" class="ql_thumbnail_hover" rel="bookmark">
                <?php the_post_thumbnail( 'gcwoo_post_square' ); ?>
            </a>
        </div><!-- /post-image -->
        <?php endif; ?>

        <div class="post-content <?php if ( has_post_thumbnail() ) : echo 'col-md-6'; else: echo 'col-md-12'; endif;?> ">

        	<div class="entry-content">
				<?php
					the_content();
				?>

				<?php
					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'gcwoo' ),
						'after'  => '</div>',
					) );
				?>
			</div><!-- .entry-content -->

			<div class="clearfix"></div>
			
			<?php if ( 'post' === get_post_type() ) : ?>
			<footer class="entry-footer">
				<div class="metadata">
	                <?php gcwoo_metadata(); ?>
	                <div class="clearfix"></div>
	            </div><!-- /metadata -->
            </footer><!-- .entry-footer -->
            <?php endif; ?>


		</div><!-- /post_content -->
	</div><!-- /row -->
</article><!-- #post-## -->
