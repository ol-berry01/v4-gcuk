<?php

add_action('admin_enqueue_scripts', 'gcwoo_service_widget_scripts');

function gcwoo_service_widget_scripts(){

    wp_enqueue_media();

    wp_enqueue_script( 'gcwoo_service_widget_script', get_template_directory_uri() . '/js/widget.js', false, '1.0', true );

}


class gcwoo_Service extends WP_Widget{

    /**
     * Register widget with WordPress.
     */
    function __construct() {
        parent::__construct(
            'service-widget', // Base ID
            esc_attr__( 'gcwoo - Service widget', 'gcwoo' ), // Name
            array( 
                'description' => esc_attr__( 'Display a Service or Feature description.', 'gcwoo' ),
            )
        );
    }



    /**
     * Front-end display of widget.
     *
     * @see WP_Widget::widget()
     *
     * @param array $args     Widget arguments.
     * @param array $instance Saved values from database.
     */
    public function widget( $args, $instance ){


        echo $args['before_widget'];

        ?>

            <div class="col-sm-4 service">

                <div class="service-text">
                    <h3><?php if( !empty( $instance['title'] ) ): echo apply_filters( 'widget_title', $instance['title'] ); endif; ?></h3>
                    <?php 
                    if( !empty($instance['text']) ):
                    
                        echo '<p>';
                            $wp_kses_args = array(
                                'a' => array(
                                    'href' => array(),
                                    'title' => array()
                                ),
                                'br' => array(),
                                'em' => array(),
                                'strong' => array(),
                            );
                            echo htmlspecialchars_decode( wp_kses( apply_filters( 'widget_title', $instance['text'] ), $wp_kses_args ) );
                        echo '</p>';
                    endif;
                    ?>  
                    <?php if( !empty( $instance['link'] ) ): ?>
                    <a href="<?php echo esc_url( $instance['link'] ); ?>" class="read-more"><?php if( !empty( $instance['link_title'] ) ): echo $instance['link_title']; endif; ?> <i class="fa fa-angle-right"></i></a>
                    <?php endif; ?>
                </div>
                <div class="clearfix"></div>
            </div><!-- service -->

        <?php

        echo $args['after_widget'];



    }





    /**
     * Sanitize widget form values as they are saved.
     *
     * @see WP_Widget::update()
     *
     * @param array $new_instance Values just sent to be saved.
     * @param array $old_instance Previously saved values from database.
     *
     * @return array Updated safe values to be saved.
     */
    public function update( $new_instance, $old_instance ) {

        $instance = $old_instance;

        $instance['text'] = stripslashes(wp_filter_post_kses($new_instance['text']));

        $instance['title'] = strip_tags($new_instance['title']);
		
		$instance['link_title'] = strip_tags( $new_instance['link_title'] );

        $instance['link'] = strip_tags( $new_instance['link'] );

        $instance['image_uri'] = strip_tags($new_instance['image_uri']);

        return $instance;

    }






    /**
     * Back-end widget form.
     *
     * @see WP_Widget::form()
     *
     * @param array $instance Previously saved values from database.
     */
    public function form( $instance ) {

        ?>
        <p>

            <label for="<?php echo $this->get_field_id('image_uri'); ?>"><?php esc_html_e('Image', 'gcwoo'); ?></label><br/>



            <?php

            if ( !empty($instance['image_uri']) ) :

                echo '<img class="custom_media_image" src="' . $instance['image_uri'] . '" style="margin:0;padding:0;max-width:100px;float:left;display:inline-block" /><br />';

            endif;

            ?>



            <input type="text" class="widefat custom_media_url" name="<?php echo $this->get_field_name( 'image_uri' ); ?>"
                   id="<?php echo $this->get_field_id('image_uri'); ?>" value="<?php if( !empty( $instance['image_uri'] ) ): echo $instance['image_uri']; endif; ?>"
                   style="margin-top:5px;">


            <input type="button" class="button button-primary custom_media_button" id="custom_media_button"
                   name="<?php echo $this->get_field_name('image_uri'); ?>" value="<?php esc_attr_e( 'Upload Image', 'gcwoo' ); ?>"
                   style="margin-top:5px;"/>

        </p>


        <p>

            <label for="<?php echo $this->get_field_id('title'); ?>"><?php esc_html_e( 'Title', 'gcwoo' ); ?></label><br/>

            <input type="text" name="<?php echo $this->get_field_name('title'); ?>"
                   id="<?php echo $this->get_field_id('title'); ?>" value="<?php if( !empty( $instance['title'] ) ): echo $instance['title']; endif; ?>"
                   class="widefat"/>

        </p>

        <p>

            <label for="<?php echo $this->get_field_id('text'); ?>"><?php esc_html_e( 'Text', 'gcwoo' ); ?></label><br/>

            <textarea class="widefat" rows="8" cols="20" name="<?php echo $this->get_field_name( 'text' ); ?>"
                      id="<?php echo $this->get_field_id('text'); ?>"><?php
                        if( !empty( $instance['text'] ) ): echo htmlspecialchars_decode( $instance['text'] ); endif;
            ?></textarea>

        </p>
        
        <p>

            <label for="<?php echo $this->get_field_id('link_title'); ?>"><?php esc_html_e( 'Link Title','gcwoo' ); ?></label><br />

            <input type="text" name="<?php echo $this->get_field_name('link_title'); ?>" id="<?php echo $this->get_field_id('link_title'); ?>" value="<?php if( !empty( $instance['link_title'] ) ): echo $instance['link_title']; endif; ?>" class="widefat" />

        </p>
        <p>

            <label for="<?php echo $this->get_field_id('link'); ?>"><?php esc_html_e( 'Link','gcwoo' ); ?></label><br />

            <input type="text" name="<?php echo $this->get_field_name('link'); ?>" id="<?php echo $this->get_field_id('link'); ?>" value="<?php if( !empty( $instance['link'] ) ): echo $instance['link']; endif; ?>" class="widefat" />

        </p>

        



    <?php

    }

}


register_widget( 'gcwoo_Service' );
