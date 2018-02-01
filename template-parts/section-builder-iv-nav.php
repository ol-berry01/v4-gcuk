<div id="container" class="container">

    <div class="col-wrapper row wow fadeInUp">
        <h2 class="section-title"><?php the_sub_field('section_iv_title'); ?></h2>
        <p><?php the_sub_field('section_iv_text'); ?></p>
    </div>

    <div class="col-wrapper row wow fadeInUp">
        
        <?php if( have_rows('nav_iv_repeater') ): ?>
            <?php while( have_rows( 'nav_iv_repeater' ) ): the_row(); ?>
                <div class="nav-iv-section gc-shadow">
                    <div class="nav-wrapper">
                        <div class="nav-img-wrapper">
                            <img src="<?php the_sub_field('nav_iv_image'); ?>">
                        </div>
                        <div class="nav-image-brand">
                            <img class="nav-brand" src="<?php the_sub_field('nav_iv_brand'); ?>">
                        </div>
                        <h3><?php the_sub_field('nav_iv_title'); ?></h3>
                        <p class="nav-subtitle" style="font-size:1em;"><?php the_sub_field('nav_iv_subtitle'); ?></p>
                        <div class="nav-text-wrapper">
                            <p style="font-size:1em;margin: 20px 0;"><?php the_sub_field('nav_iv_text'); ?></p>
                        </div>
                        <a class="nav-link" href="<?php the_sub_field('nav_iv_link'); ?>">
                            <button class="btn-details btn-block">Details <i class="fa fa-angle-right" aria-hidden="true"></i></button>
                        </a>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>

    </div>
    <div class="clearfix"></div>
</div>