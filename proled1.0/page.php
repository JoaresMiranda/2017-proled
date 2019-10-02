<?php get_header(); ?>

   <?php
    if (have_posts ()) {
        while (have_posts ()) {
            the_post(); ?>

    <div class="section">
        <h2 class="section-title"><?php the_title(); ?></h2>
        
        <div class="section-inner section-inner-text">
            <?php the_content(); ?>
        </div>
    </div>

    <?php
        }
    }
    wp_reset_query(); ?>

<?php get_footer(); ?>