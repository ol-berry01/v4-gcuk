<div class="section-builder">
    <div class="container">
        <div class="row">
            <div class="title-section" style="margin-top:5em;">
                <h2 class="section-title"><?php the_sub_field('service_nav_title'); ?></h2>
                <p class="lead"><?php the_sub_field('service_nav_sub_title'); ?></p>
            </div>
            <?php if( have_rows('service_nav_item') ): ?>
                <?php while( have_rows('service_nav_item') ): the_row(); ?>
                <div class="service-nav-wrapper">
                    <div style="background-image:url('<?php the_sub_field('service_nav_image'); ?>')"></div>
                        <?php if ( get_sub_field( 'service_nav_toggleimg' ) ): ?>
                            <img src="<?php the_sub_field('service_nav_image'); ?>">
                        <?php endif; ?>
                        <div class="service-nav-content">
                            <h3><?php the_sub_field('service_nav_title'); ?></h3>
                            <p class="lead"><?php the_sub_field('service_nav_subtitle'); ?></p>
                            <?php the_sub_field('service_nav_content'); ?>
                            <?php if ( get_sub_field( 'service_nav_togglebtn' ) ): ?>
                                <a href="<?php the_sub_field('service_nav_link') ?>">
                                    <button class="btn-details btn-block">More Details <i class="fa fa-angle-right" aria-hidden="true"></i></button>
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</div>