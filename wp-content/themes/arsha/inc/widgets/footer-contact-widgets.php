<?php
class Footer_contact extends WP_Widget {

   
public function __construct() {
    parent::__construct(
        'Footer_contact', 
        'Footer_contact', 
        array(
            'description' => 'Custom widget for Footer 1 area', 
        )
    );
}


public function widget( $args, $instance ) {
    echo $args['before_widget'];
    echo '<div class="Footer_contact">';
    
   
    $address = get_field('address', 'option');
    $phone_number = get_field('phone_number', 'option');
    $email_address = get_field('email_address', 'option');
    
    echo ' <h3>Arsha</h3>';
    $address = apply_filters( 'the_content', $address );
    echo ( $address ); 
    echo '<strong>Phone:</strong> ' . ( $phone_number ) . '<br>';
    echo '<strong>Email:</strong> ' . ( $email_address ) . '<br>';
    echo '</div>';
    echo $args['after_widget'];
}


   
public function form( $instance ) {
  }
}
function register_Footer_contact_widget() {
register_widget( 'Footer_contact' );
}
add_action( 'widgets_init', 'register_Footer_contact_widget' );
?>