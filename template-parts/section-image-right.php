<div id="image-section" class="image-section-right">
    <div class="image-wrap" style="background-image: url(<?php the_sub_field('image_right_image'); ?>);"></div>
    <div class="image-text">
        <h3 class="image-text-title wow fadeIn" data-wow-delay="300ms"><?php the_sub_field('image_right_title'); ?></h3>
        <div class="wow fadeIn" data-wow-delay="300ms"><?php the_sub_field('image_right_content'); ?></div>
        <?php if ( get_sub_field( 'image_right_toggle' ) ): ?>    
            <button class="btn-details wow fadeIn" data-wow-delay="800ms" href="<?php the_sub_field('image_right_link'); ?>"><?php the_sub_field('image_right_button'); ?> <i class="fa fa-angle-right" aria-hidden="true"></i></button>
        <?php endif ?>
    </div>
</div>