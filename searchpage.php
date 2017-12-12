<?php
/*
 * Template Name: Search Page */
get_header(); ?>

<main>

  <h1><?php _e( 'Search Posts', 'wp-theme-starter' ); ?></h1>

  <?php while ( have_posts() ) : the_post(); ?>

    <?php the_content(); ?>

  <?php endwhile; ?>

  <?php get_search_form(); ?>

</main>

<?php get_footer(); ?>