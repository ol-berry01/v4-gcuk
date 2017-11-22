<div id="container" class="container">
    <div class="row">
        <!-- Row Wow FadeInUp -->
        <div class="row wow fadeInUp">
            <!-- Title & Introduction -->
            <div class="row fleetcar-text wow fadeInUp" style="margin-bottom:2.5%">
                <h1 class="section-title"><?php the_sub_field('section_iii_title'); ?></h1>
                <p><?php the_sub_field('section_iii_text'); ?></p>
            </div>
            <!-- End: Title & Introduction -->
            <!-- Repeater -->
            <?php if( have_rows('nav_iii_repeater') ): ?>
                <?php while( have_rows( 'nav_iii_repeater' ) ): the_row(); ?>
                <!-- Link-->
                <div class="nav-iii-section">
                    <div class="nav-wrapper">
                        <a class="nav-link" href="<?php the_sub_field('nav_iii_link'); ?>">
                            <div class="nav-img-wrapper">
                                <img src="<?php the_sub_field('nav_iii_image'); ?>">
                            </div>
                            <div class="nav-image-brand">
                                <img class="nav-brand" src="<?php the_sub_field('nav_iii_brand'); ?>">
                            </div>
                            <h2><?php the_sub_field('nav_iii_title'); ?></h2>
                            <p class="nav-subtitle" style="font-size:1em;"><?php the_sub_field('nav_iii_subtitle'); ?></p>
                            <button class="btn-details btn-block"><?php the_sub_field('nav_iii_label'); ?><i class="fa fa-angle-right" aria-hidden="true"></i></button>
                        </a>
                        <div class="nav-text-wrapper">
                            <p style="font-size:1em;margin: 20px 0;"><?php the_sub_field('nav_iii_text'); ?></p>
                        </div>
                    </div>
                </div>
                <!-- End: Link -->
                <?php endwhile; ?>
            <?php endif; ?>
            <!-- End: Repeater -->
        </div>
        <!-- End: Roe Wow FadeInUp -->

        <!-- Clearfix -->
        <div class="clearfix"></div>
        <!-- End: Clearfix -->
    </div><!-- End: Row -->
</div><!-- End: Container -->
