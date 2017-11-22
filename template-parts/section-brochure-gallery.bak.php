<div id="product-gallery" class="product-gallery" role="gallery" style="background:#f8f1e6;padding:2.5% 0;">
    <?php if ( get_option( 'show_on_front' ) == 'posts' || !is_front_page() ) : ?>
        <div id="container" class="container">
            <div class="row">
    <?php endif; ?>
                <!-- Section Title -->
                <div class="gallery-title">
                    <h2 style="text-align:center;color:#a28f56;margin:2.5% 0;"><?php echo the_title(); ?> Gallery</h2>
                </div>
                <!-- End: Section Title -->
                
                <div style="margin:0 auto;">
                    <!-- ACF Gallery Call -->
                        <?php
                        $images = get_field('brochure_gallery_section');
                        
                        if( $images ): ?>
                        <div id="slider" class="flexslider">
                            <ul class="slides">
                                <?php foreach( $images as $image ): ?>
                                    <li style="float:left;list-style-type:none;text-align:center;margin:1% 1%;max-width:30%;">
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                        <p><?php echo $image['caption']; ?></p>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    <?php endif; ?>
                    <!-- End: ACF Gallery Call -->
                </div>
    <?php if ( get_option( 'show_on_front' ) == 'posts' || !is_front_page() ) : ?>
        <div class="clearfix"></div>
    </div><!-- /row -->
            
    </div><!-- /#container -->
    <?php endif; ?>
</div>
