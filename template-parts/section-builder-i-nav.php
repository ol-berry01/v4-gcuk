
    <div id="container" class="container">
        <div class="row">
            <div class="row wow fadeInUp">    
                <div class="row fleetcar-text wow fadeInUp" style="margin-bottom:2.5%">
                    <h2><?php the_sub_field('section_ii_title'); ?></h2>
                    <p><?php the_sub_field('section_ii_text'); ?></p>
                </div>
                <?php if( have_rows('nav_ii_repeater') ): ?>
                    <?php while( have_rows('nav_ii_repeater') ): the_row(); ?>
                        <div class="wow fadeInUp">
                            <a href="<?php the_sub_field('nav_ii_link'); ?>" class="nav-link">
                                <div class="nav-wrapper">
                                    <h3><?php the_sub_field('nav_ii_title'); ?></h3>
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
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>