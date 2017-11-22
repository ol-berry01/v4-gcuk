<div id="container" class="container">
        <div class="row">

        <!-- Row Wow FadeInUp -->
        <div class="col-wrapper row wow fadeInUp">
        
            <!-- Title & Introduction -->
            <div class="row fleetcar-text wow fadeInUp" style="margin-bottom:2.5%">
        
            <h1 class="section-title"><?php the_sub_field('section_iv_title'); ?></h1>
            <p><?php the_sub_field('section_iv_text'); ?></p>
        
            </div>
            <!-- End: Title & Introduction -->
        
            <!-- Repeater -->
            <?php if( have_rows('nav_iv_repeater') ): ?>
        
                <?php while( have_rows( 'nav_iv_repeater' ) ): the_row(); ?>
        
                    <div class="nav-iv-section">
                        <div class="nav-wrapper">
                            <a class="nav-link" href="<?php the_sub_field('nav_iv_link'); ?>">
                                <div class="nav-img-wrapper">
                                    <img src="<?php the_sub_field('nav_iv_image'); ?>">
                                </div>
                                <div class="nav-image-brand">
                                    <img class="nav-brand" src="<?php the_sub_field('nav_iv_brand'); ?>">
                                </div>
                                
                                <h2><?php the_sub_field('nav_iv_title'); ?></h2>
                                <p class="nav-subtitle" style="font-size:1em;"><?php the_sub_field('nav_iv_subtitle'); ?></p>
                                <button class="btn-details btn-block">Details <i class="fa fa-angle-right" aria-hidden="true"></i></button>

                            </a>
                            <div class="nav-text-wrapper">
                                <p style="font-size:1em;margin: 20px 0;"><?php the_sub_field('nav_iv_text'); ?></p>
                            </div>
                                
                        </div>

                    </div>
                    <!-- End: Link 2 -->
        
                <?php endwhile; ?>
        
            <?php endif; ?>
            <!-- End: Repeater -->
        
        </div>
        <!-- End: Roe Wow FadeInUp -->

    <!-- Clearfix -->
    <div class="clearfix"></div>
    <!-- End: Clearfix -->
    </div><!-- /row -->
</div><!-- /#container -->