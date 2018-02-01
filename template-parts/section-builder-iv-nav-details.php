<div id="container" class="container">
            
        <div class="row wow fadeInUp" style="margin-bottom:2.5%">
            <h2 class="section-title"><?php the_sub_field('section_iv_details_title'); ?></h2>
            <p><?php the_sub_field('section_iv_details_content'); ?></p>
        </div>

        <?php if( have_rows('nav_iv_details_repeater') ): ?>
            <?php while( have_rows( 'nav_iv_details_repeater' ) ): the_row(); ?>
                <div class="nav-iv-section">
                    <div class="nav-wrapper">
                        <a class="nav-link" href="<?php the_sub_field('col_iv_details_link'); ?>">
                            <div class="nav-img-wrapper">
                                <img src="<?php the_sub_field('nav_iv_details_image'); ?>">
                            </div>
                            <div class="nav-image-brand">
                                <img class="nav-brand" src="<?php the_sub_field('nav_iv_details_brand'); ?>" style="margin:5px 0">
                            </div>
                            <h3><?php the_sub_field('nav_iv_details_title'); ?></h3>
                            <p class="nav-subtitle"><?php the_sub_field('nav_iv_details_subtitle'); ?></p>
                            <button class="btn-details btn-block">Details <i class="fa fa-angle-right" aria-hidden="true"></i></button>
                        </a>
                        <div class="nav-text-wrapper">
                            <p style="font-size:16px;margin: 20px 0;"><?php the_sub_field('nav_iv_details_text'); ?></p>
                        </div>
                        <div>
                            <div class="nav-spec-link">
                                <ul>
                                    <li><a href="<?php the_sub_field('col_iv_details_link'); ?>#product-image">Gallery</a></li>
                                    <li><a href="<?php the_sub_field('col_iv_details_link'); ?>#product-gallery">Features</a></li>
                                    <li><a href="<?php the_sub_field('col_iv_details_link'); ?>#product-details">Specifications</a></li>
                            </div>
                            <div class="nav-colours">
                                <ul>
                                    <?php if( have_rows('nav_iv_details_colour') ): ?>
                                        <?php while( have_rows( 'nav_iv_details_colour' ) ): the_row(); ?>
                                            <li style="background:<?php the_sub_field('nav_iv_colour'); ?>;" title="<?php the_sub_field('nav_iv_colour_label'); ?>"></li>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                    <li style="width:auto;"><a style="color:#000063;" href="<?php the_sub_field('col_iv_details_link'); ?>">More Colours</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>

    <div class="clearfix"></div>

</div>