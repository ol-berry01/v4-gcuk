<?php
$bck_color = get_theme_mod( 'gcwoo_tagline_bck_color', '#18b9f8' );
?>
<?php
$gcwoo_enable_section = get_theme_mod( 'gcwoo_tagline_enable', true );
if ( $gcwoo_enable_section || is_customize_preview() ) :
?>
<div id="tagline-section" class="tagline-section" style="background-color: <?php echo esc_attr( $bck_color ); ?>;" <?php if( false == $gcwoo_enable_section ): echo 'style="display: none;"'; endif ?>>
    <a href="<?php echo esc_url( get_theme_mod( 'gcwoo_tagline_link_url', '#' ) ); ?>" class="wow fadeIn">
    <h2 class="tagline"><?php echo esc_html( get_theme_mod( 'gcwoo_tagline_text', __( 'Let’s start a new web project together!
', 'gcwoo' ) ) ); ?></h2>
    <span><?php echo esc_html( get_theme_mod( 'gcwoo_tagline_sub_text', __( 'Ask me how we can create something unique, personal and special', 'gcwoo' ) ) ); ?></span>
    </a>
</div><!-- tagline-section -->

<?php endif ?>