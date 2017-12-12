<?php
/*
 * The template for displaying 404 (Not Found) errors */
get_header(); ?>

<main>

  <h2><?php _e( 'Oops! That page can&rsquo;t be found.', 'wp-theme-starter' ); ?></h2>
  <p>
    <?php _e( 'You tried going to ' . get_bloginfo( 'url' ).$_SERVER[ 'REQUEST_URI' ] . ' and it doesn\'t exist. You can click and try again or search for what you\'re looking for:', 'wp-theme-starter' ); ?>
  </p>

  <?php get_search_form(); ?>

</main>

<?php get_footer(); ?>