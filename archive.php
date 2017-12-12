<?php
/*
 * Template Name: Archives */
get_header(); ?>

<main>

  <?php while ( have_posts() ) : the_post(); ?>

    <h1><?php the_title(); ?></h1>

    <?php the_content(); ?>

  <?php endwhile; ?>

  <?php get_search_form(); ?>

  <h2><?php _e( 'Archives by Month:', 'wp-theme-starter' ); ?></h2>

  <ul>
    <?php wp_get_archives( 'type=monthly' ); ?>
  </ul>

  <h2><?php _e( 'Archives by Subject:', 'wp-theme-starter' ); ?></h2>

  <ul>
    <?php wp_list_categories(); ?>
  </ul>

</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>