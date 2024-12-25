<?php get_header(); ?>

<main id="main">

    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <ol>
              <li><a href="<?php echo get_home_url(); ?>">Home</a></li>
              <li><?php the_title(); ?></li>
            </ol>
            <h2><?php the_title(); ?></h2>
        </div>
    </section>

    <section id="portfolio-details" class="portfolio-details">
        <div class="container">
            <div class="row gy-4">

                <div class="col-lg-8">
                    <div class="portfolio-details-slider swiper">
                        <div class="swiper-wrapper align-items-center">

                        <?php 
                         
                            $images = get_field('gallery');

                            if( $images ): ?>
                                <?php foreach( $images as $image ): ?>
                                    <div class="swiper-slide">
                                        <a href="<?php echo ($image['url']); ?>">
                                            <img src="<?php echo ($image['sizes']['thumbnail']); ?>" alt="<?php echo ($image['alt']); ?>" />
                                        </a>
                                    </div>
                                <?php endforeach; ?>
                            <?php endif; ?>

                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="portfolio-info">

                    <?php
                        $client_name = get_field('client_name');
                        $project_date = get_field('project_date');
                        $project_url = get_field('project_url');
                    ?>
                        <h3>Project information</h3>
                        <ul>
                        <?php 
                            $terms = get_the_terms( get_the_ID(), 'portfolio_category' );

                            if ( $terms && ! is_wp_error( $terms ) ) :
                                ?>
                                <li><strong>Category</strong>: 
                                    <?php 
                                    $term_names = wp_list_pluck( $terms, 'name' );
                                    echo implode( ', ', $term_names ); 
                                    ?>
                                </li>
                                <?php
                            endif;
                            ?>
                             <?php if (!empty($client_name)) : ?>
                                <li><strong>Client</strong>: <?php echo ($client_name); ?></li>
                            <?php endif; ?>

                            <?php if (!empty($project_date)) : ?>
                                <li><strong>Project date</strong>: <?php echo ($project_date); ?></li>
                            <?php endif; ?>

                            <?php if (!empty($project_url)) : ?>
                                <li><strong>Project URL</strong>: <a href="<?php echo ($project_url); ?>"><?php echo ($project_url); ?></a></li>
                            <?php endif; ?>

                        </ul>
                    </div>
                    <div class="portfolio-description">
                        <?php the_content(); ?>
                    </div>
                </div>

            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
