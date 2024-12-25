<?php
// enqueue styles and scripts
function themeslug_enqueue_style() {
    $ver = time();
    
    wp_enqueue_style('aos', get_template_directory_uri() .'/assets/vendor/aos/aos.css', array(),  $ver, '', false);
    wp_enqueue_style('vendor', get_template_directory_uri() .'/assets/vendor/bootstrap/css/bootstrap.min.css', array(), $ver, '', false);
    wp_enqueue_style('icon', get_template_directory_uri() .'/assets/vendor/bootstrap-icons/bootstrap-icons.css', array(), $ver, '', false);
    wp_enqueue_style('box-icon', get_template_directory_uri() .'/assets/vendor/boxicons/css/boxicons.min.css', array(), $ver, '', false);
    wp_enqueue_style('glightbox-min', get_template_directory_uri() .'/assets/vendor/glightbox/css/glightbox.min.css', array(), $ver, '', false);
    wp_enqueue_style('glightbox', get_template_directory_uri() .'/assets/vendor/glightbox/css/glightbox.css', array(), $ver, '', false);
    wp_enqueue_style('remixicon', get_template_directory_uri() .'/assets/vendor/remixicon/remixicon.css', array(), $ver, '', false);
    wp_enqueue_style('swiper', get_template_directory_uri() .'/assets/vendor/swiper/swiper-bundle.min.css', array(), $ver, '', false);
    wp_enqueue_style('styles', get_template_directory_uri() .'/assets/css/style.css', array(), $ver, '', false);

    wp_enqueue_script( 'aos', get_template_directory_uri() . '/assets/vendor/aos/aos.js', array(), $ver, '1.0.0', true );
    wp_enqueue_script( 'bootstrap-bundle-min', get_template_directory_uri() . '/assets/vendor/bootstrap/js/bootstrap.bundle.min.js', array(), $ver, '1.0.0', true );
    wp_enqueue_script( 'glightbox-min', get_template_directory_uri() . '/assets/vendor/glightbox/js/glightbox.min.js', array(),  $ver, '1.0.0', true );
    wp_enqueue_script( 'isotope-pkgd-min', get_template_directory_uri() . '/assets/vendor/isotope-layout/isotope.pkgd.min.js', array(), $ver, '1.0.0', true );
    wp_enqueue_script( 'swiper-bundle-min', get_template_directory_uri() . '/assets/vendor/swiper/swiper-bundle.min.js', array(), $ver, '1.0.0', true );
    wp_enqueue_script( 'noframework-waypoints', get_template_directory_uri() . '/assets/vendor/waypoints/noframework.waypoints.js', array(), $ver, '1.0.0', true );
    wp_enqueue_script( 'validate', get_template_directory_uri() . '/assets/vendor/php-email-form/validate.js', array(), $ver, '1.0.0', true );

    wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/vendor/main.js', array(), '1.0.0', true );

}   
add_action( 'wp_enqueue_scripts', 'themeslug_enqueue_style' );