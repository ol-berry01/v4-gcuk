<div id="image-section" class="image-section-left">
    <div class="image-wrap" style="background-image: url(<?php the_sub_field('image_left_image'); ?>);"></div>
    <div class="image-text">
        <div>
            <h2 class="image-text-title wow fadeIn" data-wow-delay="300ms"><?php the_sub_field('image_left_title'); ?></h2>
            <div class="wow fadeIn" data-wow-delay="300ms"><?php the_sub_field('image_left_content'); ?></div>
            <?php if ( get_sub_field( 'image_left_toggle' ) ): ?>
                <button class="btn-details wow fadeIn" data-wow-delay="800ms" href="<?php the_sub_field('image_left_link'); ?>"><?php the_sub_field('image_left_button'); ?> <i class="fa fa-angle-right" aria-hidden="true"></i></button>
            <?php endif ?>
        </div>
    </div>
</div>