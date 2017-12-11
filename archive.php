<?php
/*
 * Template Name: Archives */
get_header(); ?>

<main>

  <?php the_post(); ?>
  <h1><?php the_title(); ?></h1>

  <?php get_search_form(); ?>

  <h2><?php _e( 'Archives by Month:', 'riada' ); ?></h2>

  <ul>
    <?php wp_get_archives( 'type=monthly' ); ?>
  </ul>

  <h2><?php _e( 'Archives by Subject:', 'riada' ); ?></h2>

  <ul>
    <?php wp_list_categories(); ?>
  </ul>

</main>

<?php get_footer(); ?>