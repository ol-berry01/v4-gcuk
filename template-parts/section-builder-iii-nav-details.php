<div id="container" class="container">
    <div class="row">
        <!-- Row Wow FadeInUp -->
        <div class="row wow fadeInUp">
            <!-- Title & Introduction -->
            <div class="row fleetcar-text wow fadeInUp" style="margin-bottom:2.5%">
                <h1 class="section-title"><?php the_sub_field('section_iii_details_title'); ?></h1>
                <p><?php the_sub_field('section_iii_details_content'); ?></p>
            </div>
            <!-- End: Title & Introduction -->
            <!-- Repeater -->
            <?php if( have_rows('nav_iii_details_repeater') ): ?>
                <?php while( have_rows( 'nav_iii_details_repeater' ) ): the_row(); ?>
                <!-- Link-->
                <div class="nav-iii-section">
                    <div class="nav-wrapper">
                        <a class="nav-link" href="<?php the_sub_field('col_iii_details_link'); ?>">
                            <div class="nav-img-wrapper">
                                <img src="<?php the_sub_field('nav_iii_details_image'); ?>">
                            </div>
                            <div class="nav-image-brand">
                                <img class="nav-brand" src="<?php the_sub_field('nav_iii_details_brand'); ?>" style="margin:5px 0">
                            </div>
                            <h2><?php the_sub_field('nav_iii_details_title'); ?></h2>
                            <p class="nav-subtitle" style=><?php the_sub_field('nav_iii_details_subtitle'); ?></p>
                            <button class="btn-details btn-block">Details <i class="fa fa-angle-right" aria-hidden="true"></i></button>
                        </a>
                        <div class="nav-text-wrapper">
                            <p style="font-size:16px;margin: 20px 0;"><?php the_sub_field('nav_iii_details_text'); ?></p>
                        </div>
                        <!-- Details -->
                            <div>
                                <div class="nav-spec-link">
                                    <ul>
                                        <li><a href="<?php the_sub_field('col_iii_details_link'); ?>#product-image">Gallery</a></li>
                                        <li><a href="<?php the_sub_field('col_iii_details_link'); ?>#product-gallery">Features</a></li>
                                        <li><a href="<?php the_sub_field('col_iii_details_link'); ?>#footer">Specifications</a></li>
                                    </ul>
                                </div>
                                <div class="nav-colours">
                                    <ul>
                                        <?php if( have_rows('nav_iii_details_colour') ): ?>
                                            <?php while( have_rows( 'nav_iii_details_colour' ) ): the_row(); ?>
                                                <li style="background:<?php the_sub_field('nav_iii_colour'); ?>;" title="<?php the_sub_field('nav_iii_colour_label'); ?>"></li>
                                            <?php endwhile; ?>
                                        <?php endif; ?>
                                        <li style="width:auto;"><a style="color:#000063;" href="<?php the_sub_field('col_iii_details_link'); ?>">More Colours</a></li>
                                    </ul>
                                </div>
                            </div>
                        <!-- End: Details -->
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