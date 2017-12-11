<?php
/*
 * Template Name: Search Page */
get_header(); ?>

<main>

  <h1><?php _e( 'Search Posts', 'riada' ); ?></h1>

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <?php the_content(); ?>

  <?php endwhile; endif; ?>

  <?php get_search_form(); ?>

</main>

<?php get_footer(); ?>