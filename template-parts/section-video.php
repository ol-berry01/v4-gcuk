<?php
$gcwoo_enable_section = get_theme_mod( 'gcwoo_video_enable', true );
if ( $gcwoo_enable_section || is_customize_preview() ) :
?>
<div id="video-section" class="video-section">
    <div class="video-wrap wow fadeInLeft">
        <div class="responsive-wrap">
                <div class="video" data-src="https://woo-v7-olberry01.c9users.io/wp-content/uploads/2016/09/new-hauler-placeholder.jpg" data-video="https://woo-v7-olberry01.c9users.io//wp-content/uploads/video/new-hauler-gcuk.mp4" data-placeholder="https://woo-v7-olberry01.c9users.io/wp-content/uploads/2016/09/new-hauler-placeholder.jpg"></div>
        </div>
        
    </div><div class="video-text-wrap wow fadeInRight" data-wow-delay="300ms">
    	<?php /* translators: Lorem ipsum text, It is not strictly necessary to translate. */ ?>
        <h3 class="video-text-title"><?php  echo esc_html( get_theme_mod( 'gcwoo_video_title', __( 'Praesent commodo cursus magna, vel scelerisque nisl consectetur et', 'gcwoo' ) ) ); ?></h3>
        <?php
        $wp_kses_args = array(
		    'a' => array(
		        'href' => array(),
		        'title' => array()
		    ),
		    'br' => array(),
		    'em' => array(),
		    'strong' => array(),
		    'span' => array(),
		);
		/* translators: Lorem ipsum text, It is not strictly necessary to translate. */
		$video_text = wp_kses( get_theme_mod( 'gcwoo_video_text', __( 'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Nullam quis risus eget urna mollis ornare vel eu leo. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Praesent commodo cursus magna.', 'gcwoo' ) ), $wp_kses_args );
        ?>
        <p><?php echo $video_text; ?></p>
        <?php $gcwoo_video_link_title = get_theme_mod( 'gcwoo_video_link_title', esc_html__( 'Learn More', 'gcwoo' ) ); ?>
        <?php if ( !empty( $gcwoo_video_link_title ) || is_customize_preview() ) { ?>
        <a href="<?php echo esc_url( get_theme_mod( 'gcwoo_video_link_url', '#' ) ); ?>" class="btn-ql alternative"><?php echo esc_html( $gcwoo_video_link_title ); ?></a>
        <?php } ?>

        
    </div>     
</div><!-- video-section -->
<?php endif ?>