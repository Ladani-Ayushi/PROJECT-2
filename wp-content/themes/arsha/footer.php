<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package arsha
 */

?>          
    <footer id="footer">

    <?php if( get_field('display_newsletter', 'option') ): ?>
            <div class="footer-newsletter">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <?php if (get_field('newsletter_title', 'option')) : ?>
                            <h4><?php echo get_field('newsletter_title', 'option'); ?></h4>
                            <?php endif; ?>
                            <?php if (get_field('newsletter_description', 'option')) : ?>
                            <p><?php echo get_field('newsletter_description', 'option'); ?></p>
                            <?php endif; ?>
                            <?php if (get_field('newsletter_form', 'option')) : ?>
                            <?php echo get_field('newsletter_form', 'option'); ?> 
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        
    <div class="footer-top">
        <div class="container">
            <div class="row">

                                    <?php
                                    if (is_active_sidebar('footer-1')) : ?>
                                        <div class="col-lg-3 col-md-6 footer-links">
                                    <?php 
                                        dynamic_sidebar('footer-1'); ?>
                                        </div>
                                    <?php endif; ?>
                

                                    <?php
                                    if (is_active_sidebar('footer-2')) : ?>
                                        <div class="col-lg-3 col-md-6 footer-links">
                                    <?php 
                                        dynamic_sidebar('footer-2'); ?>
                                        </div>
                                    <?php endif; ?>

                                    <?php
                                    if (is_active_sidebar('footer-3')) : ?>
                                        <div class="col-lg-3 col-md-6 footer-links">
                                    <?php 
                                        dynamic_sidebar('footer-3'); ?>
                                        </div>
                                    <?php endif; ?>

                                    <?php
                                    if (is_active_sidebar('footer-4')) : ?>
                                        <div class="col-lg-3 col-md-6 footer-links">
                                    <?php 
                                        dynamic_sidebar('footer-4'); ?> 
                                    <?php endif; ?>


                                 
                    
                
                                    
           </div>
        </div>
    </div>
  
            <div class="container footer-bottom clearfix">
                    <?php
                        $copyright_text = get_field('copyright_text', 'option');
                        if (!empty($copyright_text)) {?>
                            <div class="copyright">
                                <?php echo $copyright_text;?>
                            </div>
                        <?php }?>
               
                <?php
                        $designed_by = get_field('designed_by', 'option');
                        if (!empty($designed_by)) {?>
                            <div class="credits">
                                <?php echo $designed_by;?>
                            </div>
                        <?php }?>
                
            </div>
        </footer>

  <?php wp_footer(); ?>

    </body>
    </html>