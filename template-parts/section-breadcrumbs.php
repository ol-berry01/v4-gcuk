<?php if ( get_option( 'show_on_front' ) == 'posts' || !is_front_page() ) : ?>
    <div id="container" class="container">
        <div class="row">
<?php endif; ?>
    <!-- Breadcrumbs -->
    
        <?php if ( function_exists('yoast_breadcrumb') ) {
            yoast_breadcrumb('<div id="breadcrumbs">','</div>');
        } ?>
    
    <!-- End: Breadcrumbs -->
<?php if ( get_option( 'show_on_front' ) == 'posts' || !is_front_page() ) : ?>
        <div class="clearfix"></div>
    </div><!-- /row -->
            
</div><!-- /#container -->
<?php endif; ?>