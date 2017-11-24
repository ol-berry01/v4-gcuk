<div class="container">
    <?php if( have_rows('textbox_section') ): ?>
        <?php while( have_rows( 'textbox_section' ) ): the_row(); ?>
            <div class="section-builder wow fadeIn">
                <div class="row textbox">
                    <h3><?php the_sub_field('textbox_title'); ?></h3>
                    <p><?php the_sub_field('textbox_content') ?></p>
                </div>
            </div>
        <?php endwhile ?>
    <?php endif ?>
</div>