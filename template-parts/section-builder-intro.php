<div class="section-builder">
    <div class="container">
        <div class="intro-section row front-row wow fadeInUp">
            <div class="title-section">
                <div class="section-title wow fadeInUp">
                    <h1><?php the_sub_field('intro_title'); ?></h1>
                    <h1 class="lead gc-alt-blue wow fadeInUp"><?php the_sub_field('intro_sub_title'); ?></h1>
                </div>
            </div>
            <div class="welcome-text">
                <?php the_sub_field('intro_content'); ?>
            </div>
            <div>
                <a href="<?php the_sub_field('intro_button_link'); ?>"><button class="btn-block btn-details"><?php the_sub_field('intro_button_label'); ?> <i class="fa fa-angle-right" aria-hidden="true"></i></button></a>
            </div>
        </div>
    </div>
</div>
