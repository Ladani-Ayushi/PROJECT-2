<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package arsha
 */

?>
<!doctype html>

  <head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <meta content="" name="description">
  <meta content="" name="keywords">
    <?php wp_head(); ?>
  </head>
   <body>
    <header id="header" class="fixed-top header-inner-pages">
        <div class="container d-flex align-items-center">
        
                <?php  
                  $logo_text  = get_field('logo_text', 'option');
                ?>

                <h1 class="logo me-auto"><a href="<?php echo esc_url(home_url('/')); ?>"><?php echo $logo_text; ?>
                </a></h1>

                <nav id="navbar" class="navbar">              
          
                        <?php
                          wp_nav_menu( array(
                            'theme_location' => 'header_menu',
                            'menu_class' => 'nav-link scrollto',
                           ) ); ?> 

                          <i class="bi bi-list mobile-nav-toggle"></i>
                </nav>
         </div>
    </header>
  
          