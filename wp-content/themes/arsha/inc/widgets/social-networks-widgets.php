<?php
class Social_Networks_Widget extends WP_Widget {

    public function __construct() {
        parent::__construct(
            'social_networks', 
            'Social Networks', 
            array(
                'description' => 'Custom widget for displaying social network links', 
            )
        );
    }

    public function widget( $args, $instance ) {
        echo $args['before_widget'];
        echo '<div class="social-networks-widget">';

        $social_networks_description = get_field('social_networks_description', 'option');
        
        if ( ! empty( $instance['title'] ) ) {
            echo '<h3 class="widget-title">' . ( $instance['title'] ) . '</h3>';
        }

        if ( ! empty( $social_networks_description ) ) {
            echo '<p>' . ( $social_networks_description ) . '</p>';
        }

       
        echo '<div class="social-links mt-3">';
        $social_icons = get_field('social_icon', 'option');
        if ( $social_icons ) {
            foreach ( $social_icons as $icon ) {
                $link = esc_url( $icon['link'] );
                $icon_class = esc_attr( $icon['icon'] );
                echo '<a href="' . $link . '" class="' . $icon_class . '"></a>';
            }
        }
        echo '</div>'; 
        echo '</div>';
        echo '</div>';
        echo $args['after_widget'];
    }

    public function form( $instance ) {
        $title = ! empty( $instance['title'] ) ? $instance['title'] : '';
        ?>
        <p>
            <label for="<?php echo $this->get_field_id( 'title' ); ?>">Title:</label> 
            <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
        </p>
        <?php 
    }

    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? sanitize_text_field( $new_instance['title'] ) : '';
        
        return $instance;
    }
}

function register_social_networks_widget() {
    register_widget( 'Social_Networks_Widget' );
}
add_action( 'widgets_init', 'register_social_networks_widget' );
?>
