<div class="section-builder">
    <div class="container">
        <div class="row">
            <div class="title-section">
                <h2 class="section-title"><?php the_sub_field('service_nav_title'); ?></h2>
            </div>

            <?php if( have_rows('service_nav_item') ): ?>
                <?php while( have_rows('service_nav_item') ): the_row(); ?>
                <div class="service-nav-wrapper">
                    <div style="background-image:url('<?php the_sub_field('service_nav_image'); ?>')"></div>
                    <img src="<?php the_sub_field('service_nav_image'); ?>">
                    <div class="service-nav-content">
                        <h3><?php the_sub_field('service_nav_title'); ?></h3>
                        <p class="lead"><?php the_sub_field('service_nav_subtitle'); ?></p>
                        <p class="content"><?php the_sub_field('service_nav_content'); ?></p>
                        <a href="<?php the_sub_field('service_nav_link') ?>">
                            <button class="btn-details btn-block">More Details <i class="fa fa-angle-right" aria-hidden="true"></i></button>
                        </a>
                    </div>
                </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</div>