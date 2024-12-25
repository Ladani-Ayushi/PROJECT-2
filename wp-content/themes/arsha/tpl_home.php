<?php 
/* Template Name: Home */ 

get_header(); 
?>

 <!-- ======= Hero Section ======= -->
 <section id="hero" class="d-flex align-items-center">

 <?php
       $hero_details = get_field('hero_details'); 
       $button = get_field('button'); 
       $video_button = get_field('video_button'); 
       $hero_image = get_field('hero_image');
 ?>

<div class="container">
  <div class="row">
    <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">

    <?php if ($hero_details): ?>
                    <?php echo $hero_details; ?>
                <?php endif; ?>

                <div class="d-flex justify-content-center justify-content-lg-start">
                    <?php if ($button): ?>
                        <a href="<?php echo ($button['url']); ?>" class="btn-get-started scrollto" target="<?php echo ($button['target']); ?>">
                            <?php echo ($button['title']); ?>
                        </a>
                    <?php endif; ?>
                    <?php if ($video_button): ?>
                        <a href="<?php echo ($video_button['url']); ?>" class="glightbox btn-watch-video" target="<?php echo ($video_button['target']); ?>">
                            <i class="bi bi-play-circle"></i><span><?php echo ($video_button['title']); ?></span>
                        </a>
                    <?php endif; ?>

      </div>
    </div>
    <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
    <?php if ($hero_image): ?>
                <img src="<?php echo ($hero_image['url']); ?>" class="img-fluid animated" alt="<?php echo ($hero_image['alt']); ?>">
            <?php endif; ?>
    </div>
  </div>

</section><!-- End Hero -->

<main id="main">

<!-- ======= Clients Section ======= -->


<section id="clients" class="clients section-bg">
    <div class="container">
        <div class="row" data-aos="zoom-in">
            <?php
            $args = array(
                'post_type' => 'client',
                'posts_per_page' => -1, 
            );
            $client_query = new WP_Query($args);
            if ($client_query->have_posts()) :
                while ($client_query->have_posts()) : $client_query->the_post(); 
                    $client_logo = get_the_post_thumbnail_url(get_the_ID(), 'full'); 
                    if ($client_logo) :
            ?>
                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="<?php echo esc_url($client_logo); ?>" class="img-fluid" alt="<?php the_title(); ?>">
                </div>
            <?php
                  endif;
                endwhile;
                wp_reset_postdata();
            else :
                echo '<p>No clients found</p>';
            endif;
            ?>
        </div>
    </div>
</section>

<!-- End Cliens Section -->




      <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <?php
         $about_us_heading = get_field('about_us_heading'); 
         $about_us_paragraph = get_field('about_us_paragraph'); 
         $about_us_paragraph_2 = get_field('about_us_paragraph_2');
         $about_us_list_items = get_field('about_us_list_item');
         $about_us_button = get_field('about_us_button');

        ?>

        <div class="section-title">
        <?php if ($about_us_heading) : ?>
        <h2><?php echo $about_us_heading; ?></h2>
        <?php endif; ?>
        </div>

        <div class="row content">
          <div class="col-lg-6">
          <?php if ($about_us_paragraph) : ?>
            <p>
            <?php echo $about_us_paragraph; ?>
            </p>
            <?php endif; ?>

            <?php if ($about_us_list_items) : ?>
          <ul>
            <?php foreach ($about_us_list_items as $item) : ?>
              <li><i class="ri-check-double-line"></i> <?php echo $item['list_item']; ?></li>
            <?php endforeach; ?>
          </ul>
        <?php endif; ?>
      

          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">

              <?php if ($about_us_paragraph_2) : ?>
            <p>
            <?php echo $about_us_paragraph_2; ?>
             </p>
             <?php endif; ?>
             <?php if ($about_us_button && is_array($about_us_button) && !empty($about_us_button['url'])) :?>
          <a href="<?php echo ($about_us_button['url']); ?>" target="<?php echo ($about_us_button['target']); ?>" class="btn-learn-more"><?php echo ($about_us_button['title']); ?></a>
        <?php endif; ?>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->






<!-- ======= Why Us Section ======= -->
<section id="why-us" class="why-us section-bg">
  <div class="container-fluid" data-aos="fade-up">

    <div class="row">

      <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch order-2 order-lg-1">

        <?php
            $content = get_field('content');
            $accordion_repeater = get_field('accordion');
            $image_why_us = get_field('image_why_us');
            $image_why_us_url = isset($image_why_us['url']) ? $image_why_us['url'] : '';
        ?>

          <div class="content">
          <?php if ($content) : ?>
            <?php echo $content; ?>
              <?php endif; ?>
        </div>

        <div class="accordion-list">
          <ul>
          <?php if ($accordion_repeater) : ?>
            <?php 
            $accordion_count = count($accordion_repeater);
            for ($i = 0; $i < $accordion_count; $i++) :
              $accordion_number = $accordion_repeater[$i]['accordion_number'];
              $accordion_heading = $accordion_repeater[$i]['accordion_heading'];
              $accordion_content = $accordion_repeater[$i]['accordion_content'];
            ?>
              <li>
                <a data-bs-toggle="collapse" data-bs-target="#accordion-list-<?php echo $i; ?>" class="<?php echo $i == 0 ? 'collapse' : 'collapsed'; ?>">
                  <span><?php echo $accordion_number; ?></span> <?php echo $accordion_heading; ?>
                  <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i>
                </a>
                <div id="accordion-list-<?php echo $i; ?>" class="collapse <?php echo $i == 0 ? 'show' : ''; ?>" data-bs-parent=".accordion-list">
                  <p><?php echo $accordion_content; ?></p>
                </div>
              </li>
            <?php endfor; ?>
          <?php endif; ?>
          </ul>
        </div>

      </div>
      
      <?php if ($image_why_us) : ?>
        <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("<?php echo ($image_why_us_url); ?>");' data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>
      <?php endif; ?>

    </div>

  </div>
</section><!-- End Why Us Section -->

<!-- ======= Skills Section ======= -->
<section id="skills" class="skills">
  <div class="container" data-aos="fade-up">

        <?php
             $skills_title = get_field('skills_title');
             $skills_details = get_field('skills_details');
             $image_skills = get_field('image_skills');
             $skill_details = get_field('skill_details');
        ?>

    <div class="row">
      <?php if ($image_skills) : ?>
      <div class="col-lg-6 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
      <img src="<?php echo ($image_skills['url']); ?>" class="img-fluid" alt="<?php echo ($image_skills['alt']); ?>">
      </div>
      <?php endif; ?>

      <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
        <?php if ($skills_title) : ?>
        <h3><?php echo $skills_title; ?></h3>
        <?php endif; ?>

        <?php if ($skills_details) : ?>
        <p class="fst-italic">
        <?php echo $skills_details; ?>
        </p>
        <?php endif; ?>

        <div class="skills-content">
          <?php if ($skill_details): ?>
            <?php foreach ($skill_details as $skill): ?>
              <?php 
                $skill_name = $skill['skill_name'];
                $skill_percentage = $skill['skill_percentage'];
              ?>
              <?php if ($skill_name || $skill_percentage) : ?>
                <div class="progress">
                    <span class="skill"><?php echo $skill_name; ?> <i class="val"><?php echo $skill_percentage; ?>%</i></span>
                    <div class="progress-bar-wrap">
                        <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $skill_percentage; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $skill_percentage; ?>%;"></div>
                    </div>
                </div>
              <?php endif; ?>
            <?php endforeach; ?>
          <?php endif; ?>
        </div>

      </div>
    </div>

  </div>
</section><!-- End Skills Section -->



<!-- ======= Services Section ======= -->
<section id="services" class="services section-bg">
  <div class="container" data-aos="fade-up">
    <?php
      $services_content = get_field('services_content');
    ?>

    <div class="section-title">

      <?php if (!empty($services_content)): ?>
        <?php echo ($services_content); ?>
      <?php endif; ?>
    </div>

    <div class="row">
      <?php 
      $services_information = get_field('services_information');
      if ($services_information) :
        $delay = 100;
        for ($i = 0; $i < count($services_information); $i++) :
          $icon = $services_information[$i]['icon'];
          $title = $services_information[$i]['services_title'];
          $details = $services_information[$i]['services_details'];

          if (!empty($icon) && !empty($title) && !empty($details)) :
      ?>

      <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="<?php echo $delay; ?>">
        <div class="icon-box">
          <div class="icon"><i class="<?php echo ($icon); ?>"></i></div>
          <h4><a href=""><?php echo ($title); ?></a></h4>
          <p><?php echo ($details); ?></p>
        </div>
      </div>

      <?php 
          $delay += 100;
        endif;
      endfor;
      endif; 
      ?>
    </div>
  </div>
</section><!-- End Services Section -->

<!-- ======= Cta Section ======= -->
<section id="cta" class="cta">
  <div class="container" data-aos="zoom-in">

  <?php
         $cta_details = get_field('cta_details');
         $cta_button = get_field('cta_button');
  ?>

    <div class="row">

        <?php if (!empty($cta_details)): ?>
          <div class="col-lg-9 text-center text-lg-start">
           <?php echo $cta_details; ?>
        <?php endif; ?>
      </div>

      <?php if (!empty($cta_button)): ?>
        <div class="col-lg-3 cta-btn-container text-center">
        <a class="cta-btn align-middle" href="<?php echo $cta_button['url']; ?>" <?php if (!empty($cta_button['target'])): ?> target="<?php echo $cta_button['target']; ?>"<?php endif; ?>>
      <?php echo $cta_button['title']; ?>
       </a>
      <?php endif; ?>
      </div>

    </div>

  </div>
</section><!-- End Cta Section -->

<!-- ======= Portfolio Section ======= -->

<?php
$terms = get_terms(array(
    'taxonomy' => 'portfolio_category',
    'hide_empty' => true,
));

$term_slugs = array();

if (!empty($terms) && !is_wp_error($terms)) {
    foreach ($terms as $term) {
        $term_slugs[] = $term->slug;
    }
}
?>

<section id="portfolio" class="portfolio">
    <div class="container" data-aos="fade-up">

        <?php $portfolio_content = get_field('portfolio_content'); ?>
        <?php if (!empty($portfolio_content)) : ?>
            <div class="section-title">
                <?php echo $portfolio_content; ?>
            </div>
        <?php endif; ?>

        <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">All</li>
            <?php
            if (!empty($terms) && !is_wp_error($terms)) {
                foreach ($terms as $term) {
                    $term_posts = new WP_Query(array(
                        'post_type' => 'portfolio',
                        'posts_per_page' => 1,
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'portfolio_category',
                                'field'    => 'slug',
                                'terms'    => $term->slug,
                            ),
                        ),
                    ));

                    if ($term_posts->have_posts()) {
                        echo '<li data-filter=".filter-' . $term->slug . '">' . $term->name . '</li>';
                    }
                    wp_reset_postdata();
                }
            }
            ?>
        </ul>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
          <?php
          $args = array(
            'post_type' => 'portfolio',
            'posts_per_page' => -1,
          );
          
          $portfolio_query = new WP_Query($args);
            if ($portfolio_query->have_posts()) : ?>
                <?php while ($portfolio_query->have_posts()) : $portfolio_query->the_post();
                    $terms = get_the_terms(get_the_ID(), 'portfolio_category');
                    $term_classes = '';
                    if (!empty($terms)) {
                        foreach ($terms as $term) {
                            $term_classes .= ' filter-' . $term->slug;
                        }
                    }
                    $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                    if ($thumbnail_url) {
                        $thumbnail_alt = get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true);
                ?>
                    <div class="col-lg-4 col-md-6 portfolio-item<?php echo $term_classes; ?>">
                        <div class="portfolio-img">
                            <img src="<?php echo ($thumbnail_url); ?>" alt="<?php echo ($thumbnail_alt); ?>" class="img-fluid">
                        </div>
                        <div class="portfolio-info">
                            <h4><?php the_title(); ?></h4>
                            <?php
                            if (!empty($terms) && !is_wp_error($terms)) {
                                echo '<p>';
                                foreach ($terms as $term) {
                                    echo ($term->name) . ' ';
                                }
                                echo '</p>';
                            }
                            ?>
                            <a href="<?php echo (get_the_post_thumbnail_url()); ?>" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="<?php  the_title(); ?>"><i class="bx bx-plus"></i></a>
                            <a href="<?php the_permalink(); ?>" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                <?php } ?>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php else : ?>
                <p><?php echo ('No portfolios found'); ?></p>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- End Portfolio Section -->

<!-- ======= Team Section ======= -->
<section id="team" class="team section-bg">
  <div class="container" data-aos="fade-up">
    
    <?php
      $team_content = get_field('team_content');
    ?>

    <?php if (!empty($team_content)): ?>
      <div class="section-title">
        <?php echo $team_content; ?>
      </div>
    <?php endif; ?>

    <div class="row">
      <?php
      $args = array(
          'post_type' => 'team_member',
          'posts_per_page' => -1
      );
      $team_query = new WP_Query($args);
      $delay = 100;
      if ($team_query->have_posts()) :
          while ($team_query->have_posts()) : $team_query->the_post();
              $position = get_field('position');
              $image_url = get_the_post_thumbnail_url(get_the_ID(), 'full'); 
              $alt_text = get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true);

             
              if (!empty($image_url) || !empty($position) || !empty(get_the_content())):
      ?>
      <div class="col-lg-6 mt-4" data-aos="zoom-in" data-aos-delay="<?php echo $delay; ?>">
        <div class="member d-flex align-items-start">
          <?php if (!empty($image_url)): ?>
          <div class="pic"><img src="<?php echo $image_url; ?>" class="img-fluid" alt="<?php echo $alt_text; ?>"></div>
          <?php endif; ?>
          <div class="member-info">
            <?php if (!empty(get_the_title())): ?>
            <h4><?php the_title(); ?></h4>
            <?php endif; ?>
            <?php if (!empty($position)): ?>
            <span><?php echo $position; ?></span>
            <?php endif; ?>
            <?php if (!empty(get_the_content())): ?>
            <?php the_content(); ?>
            <?php endif; ?>
            <div class="social">
              <?php
              $team_icons = get_field('team_icons'); 
              ?>
              <?php 
                $team_icons = get_field('team_iocn'); 
                for ($i = 0; $i < count($team_icons); $i++) :
                  $icon = $team_icons[$i]['icon'];
                  $link = $team_icons[$i]['link'];
                  if (!empty($icon) && !empty($link)) :
              ?>
                  <a href="<?php echo ($link); ?>" target="_blank">
                    <i class="<?php echo ($icon); ?>"></i>
                  </a>
              <?php 
                    endif;
                  endfor;
               
              ?>
            </div>
          </div>
        </div>
      </div>
      <?php
              $delay += 100;
              endif; 
          endwhile;
          wp_reset_postdata();
      endif;
      ?>
    </div>
  </div>
</section><!-- End Team Section -->

<!-- ======= Pricing Section ======= -->
<section id="pricing" class="pricing">
 
    <?php 
    $pricing_details = get_field('pricing_details');


     ?>

    <?php if (!empty($pricing_details)) : ?>
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <?php echo $pricing_details; ?>
        </div>

        <?php 
        $plan_data = get_field('plan_data'); 
        if (is_array($plan_data) && !empty($plan_data)): 
          $p = 1;
        ?>

          <div class="row">
            <?php foreach ($plan_data as $plan): 
              if (!is_array($plan) || empty($plan)) {
                continue; 
              }
              $plan_heading = isset($plan['plan_heading']) ? $plan['plan_heading'] : '';
              $plan_dollar = isset($plan['plan_dollar']) ? $plan['plan_dollar'] : '';
              $plan_month = isset($plan['plan_month']) ? $plan['plan_month'] : '';
              $plan_sentences = isset($plan['plan_sentence']) ? $plan['plan_sentence'] : '';
              $plan_buttonLink = isset($plan['plan_button']['url']) ? $plan['plan_button']['url'] : '#';
              $plan_buttonTitle = isset($plan['plan_button']['title']) ? $plan['plan_button']['title'] : 'Get Started';
            ?>

              <div class="col-lg-4" data-aos="fade-up" data-aos-delay="<?php echo $p;?>00">
                <div class="box <?php echo $p == 2 ? 'featured' : ''; ?>"> 
                  <?php if (!empty($plan_heading)): ?>
                    <h3><?php echo $plan_heading; ?></h3>
                  <?php endif; ?>

                  <?php if (isset($plan_dollar) && $plan_dollar !== ''): ?>
                    <h4><sup>$</sup><?php echo $plan_dollar; ?><span><?php echo $plan_month; ?></span></h4>
                  <?php endif; ?>
                  
                  <?php if (!empty($plan_sentences)): ?>
                    <ul>
                      <?php 
                      $sentences = explode("\n", trim($plan_sentences));
                      foreach ($sentences as $sentence): ?>
                        <li><i class="bx bx-check"></i> <?php echo $sentence; ?></li>
                      <?php endforeach; ?>
                    </ul>
                  <?php endif; ?>

                  <a href="<?php echo ($plan_buttonLink); ?>" target="_blank" class="buy-btn"><?php echo ($plan_buttonTitle); ?></a>

                </div>
              </div>

            <?php 
              $p++;
            endforeach; 
            ?>
          </div>
        <?php endif; ?>
      </div>
    <?php endif; ?>
</section><!-- End Pricing Section -->

<!-- ======= Frequently Asked Questions Section ======= -->
<section id="faq" class="faq section-bg">
  <div class="container" data-aos="fade-up">

    <div class="section-title">

        <?php
              $faq_content = get_field('faq_content');
        ?>

      <?php if ($faq_content) : ?>
        <?php echo $faq_content; ?>
      <?php endif; ?>
    </div>

    <div class="faq-list">
      <ul>
        <?php
     
     $faq_details = get_field('faq_details');

     if ($faq_details) {
       for ($i = 0; $i < count($faq_details); $i++) {
         $faq_question = $faq_details[$i]['faq_question'];
         $faq_answer = $faq_details[$i]['faq_answer'];
        ?>
                  <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> 
              <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-<?php echo $i; ?>">
                <?php echo $faq_question; ?> 
                <i class="bx bx-chevron-down icon-show"></i>
                <i class="bx bx-chevron-up icon-close"></i>
              </a>
              <div id="faq-list-<?php echo $i; ?>" class="collapse" data-bs-parent=".faq-list">
                <p>
                  <?php echo $faq_answer; ?>
                </p>
              </div>
            </li>
        <?php
          }
        } else {
          echo 'No FAQs found.';
        }
        ?>
      </ul>
    </div>

  </div>
</section><!-- End Frequently Asked Questions Section -->

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
  <div class="container" data-aos="fade-up">

        <?php
        $contact_details = get_field('contact_details');
        if ($contact_details):
        ?>

          
         <div class="section-title">
         <?php echo $contact_details; ?>   
    </div>
    <?php endif; ?>

    <div class="row">
      <?php
      $contact_information = get_field('contact_information');
      if ($contact_information && count($contact_information) > 0):
      ?>
        <div class="col-lg-5 d-flex align-items-stretch">
          <div class="info">
          <?php
          for ($i = 0; $i < count($contact_information); $i++):
            $contact_icon = $contact_information[$i]['contact_icon'];
            $contact_name = $contact_information[$i]['name'];
            $contact_content = $contact_information[$i]['content'];
        ?>
            <div class="address">
              <?php if ($contact_icon): ?>
              <i class="<?php echo $contact_icon; ?>"></i>
              <?php endif; ?>

              <?php if ($contact_name): ?>
              <h4><?php echo $contact_name; ?></h4>
              <?php endif; ?>

              <?php if ($contact_content): ?>
              <p><?php echo $contact_content; ?></p>
              <?php endif; ?>
            </div>
          <?php endfor; ?>

          <?php
          $direction = get_field('direction');
          if ($direction) {
              echo $direction;
          }
          ?>
          </div>
        </div>
      <?php endif; ?>

      <?php
      $contact_form = get_field('contact_form');
      if ($contact_form):
      ?>
        <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
          <div class="php-email-form">
            <?php echo $contact_form; ?>
          </div>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section><!-- End Contact Section -->

</main><!-- End #main -->

</body>
</html>

<?php
get_footer();
?>