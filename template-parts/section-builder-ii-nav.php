<?php if ( get_option( 'show_on_front' ) == 'posts' || !is_front_page() ) : ?>
    <div id="container" class="container">
        <div class="row">
<?php endif; ?>

<div class="row wow fadeInUp">
                                
    <div class="row fleetcar-text wow fadeInUp" style="margin-bottom:2.5%">

    	<h1><?php the_sub_field('section_ii_title'); ?></h1>
    	<p><?php the_sub_field('section_ii_text'); ?></p>
	
	</div>
	
    <?php if( have_rows('nav_ii_repeater') ): ?>

        <?php while( have_rows('nav_ii_repeater') ): the_row(); ?>
    
            <!-- Link-->
            <div class="wow fadeInUp">
                <a href="<?php the_sub_field('nav_ii_link'); ?>" class="nav-link">
                    <div class="nav-wrapper">
                        <h2><?php the_sub_field('nav_ii_title'); ?></h2>
                        <div class="nav-img-wrapper">
                            <img src="<?php the_sub_field('nav_ii_image'); ?>">
                        </div>
                        <div class="nav-text-wrapper">
                            <p style="font-size:1em;margin: 20px 0;"><?php the_sub_field('nav_ii_text'); ?></p>
                        </div>
                    </div>
                    <button class="btn nav-button">Details <i class="fa fa-angle-right" aria-hidden="true"></i></button>
                </a>
            </div>
            <!-- End: Link -->

        <?php endwhile; ?>
    
    <?php endif; ?>
    
</div>

<?php if ( get_option( 'show_on_front' ) == 'posts' || !is_front_page() ) : ?>
    <div class="clearfix"></div>
</div><!-- /row -->
        
</div><!-- /#container -->
<?php endif; ?>