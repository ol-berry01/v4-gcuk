<?php
$gcwoo_enable_section = get_theme_mod( 'gcwoo_pricing_enable', true );
if ( $gcwoo_enable_section || is_customize_preview() ) :
?>
<div id="pricing-section" class="pricing-section" <?php if( false == $gcwoo_enable_section ): echo 'style="display: none;"'; endif ?>>
    <h2 class="section-title wow fadeIn"><?php echo esc_html( get_theme_mod( 'gcwoo_pricing_title', __( 'A Few Examples of my Prices', 'gcwoo' ) ) ); ?></h2>

    <div class="cd-pricing-container cd-has-margins">

        <ul class="cd-pricing-list">

            <?php
            if ( is_active_sidebar( 'pricing-section' ) ){

                dynamic_sidebar( 'pricing-section' );

            }else{
                $widget_instance = array(
                    'title' => esc_html__( 'Fast Cloud Hosting', 'gcwoo' ),
                    'currency' => esc_html__( '£', 'gcwoo' ), 
                    'price' => esc_html__( '10', 'gcwoo' ),
                    'duration' => esc_html_x( 'per Month', 'Month abbreviation', 'gcwoo' ),
                    'features' => sprintf( __( '<em>UK</em> Based Cloud Server%s<em>1GB</em> Memory%s<em>30GB</em> SSD Storage%s<em>2TB</em> Transfer%s<em>99.99&#37;</em> Uptime SLA%s<em>24 Hour</em> Support', 'gcwoo' ), PHP_EOL, PHP_EOL, PHP_EOL, PHP_EOL, PHP_EOL ),
                    'link_title' => 'View My Hosting Plans',
                    'link' => '#',
                    'featured' => 'false'
                    );
                the_widget( 'gcwoo_Pricing', $widget_instance, array( 'before_widget' => '', 'after_widget' => '' ) );

                $widget_instance = array(
                    'title' => esc_html__( 'Business Website', 'gcwoo' ),
                    'currency' => esc_html__( '£', 'gcwoo' ), 
                    'price' => esc_html__( '550', 'gcwoo' ),
                    'duration' => esc_html_x( '', 'Month abbreviation', 'gcwoo' ),
                    'features' => sprintf( __( '<em>15</em> Page Website%s<em>WordPress</em> CMS%s<em>10</em> Email Inboxes%s<em>Free</em> .co.uk Domain%s<em>1 Year</em> Cloud Hosting Included%s<em>24 Hour</em> Support', 'gcwoo' ), PHP_EOL, PHP_EOL, PHP_EOL, PHP_EOL, PHP_EOL ),
                    'link_title' => 'Customise Your Website Needs',
                    'link' => '#',
                    'featured' => 'true'
                    );
                the_widget( 'gcwoo_Pricing', $widget_instance, array( 'before_widget' => '', 'after_widget' => '' ) );

                $widget_instance = array(
                    'title' => esc_html__( 'Basic SEO Plan', 'gcwoo' ),
                    'currency' => esc_html__( '£', 'gcwoo' ), 
                    'price' => esc_html__( '25', 'gcwoo' ),
                    'duration' => esc_html_x( 'per Month', 'Month abbreviation', 'gcwoo' ),
                    'features' => sprintf( __( '<em>5</em> Core Pages Optimised%s<em>Key Word</em> Research%s<em>Page Content</em> Optimisation%s<em>Conversion</em> Tracking%s<em>Google Analytics</em> Setup &amp; Tuition%s<em>24 Hour</em> Support', 'gcwoo' ), PHP_EOL, PHP_EOL, PHP_EOL, PHP_EOL, PHP_EOL ),
                    'link_title' => 'View My SEO Plans',
                    'link' => '/services/search-engine-optimisation/',
                    'featured' => 'false'
                    );
                the_widget( 'gcwoo_Pricing', $widget_instance, array( 'before_widget' => '', 'after_widget' => '' ) );
            }
            ?>
            
        </ul> <!-- .cd-pricing-list -->
    </div> <!-- .cd-pricing-container -->

</div><!-- pricing-section -->
<?php endif ?>