<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package arsha
 */

get_header();
?>

	<main id="primary" class="site-main">

		 <!-- ======= Breadcrumbs ======= -->
		 <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="<?php echo get_home_url();?>">Home</a></li>
          <li><?php echo get_the_title(); ?></li>
        </ol>
          <h2><?php echo get_the_title(); ?></h2>
      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
      <div class="container"> 
      <?php
            while (have_posts()) : 
                the_post();
                ?>
                    <?php the_content(); ?>
                  <?php
            endwhile; 
            ?>
      </div>
    </section>


	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
?>