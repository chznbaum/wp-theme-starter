<?php
/*
 * The template for displaying pages */
get_header(); ?>

<main>

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <h1><?php the_title(); ?></h1>

    <?php the_content(); ?>

    <?php comments_template(); ?>
      
  <?php endwhile; else : ?>

    <h1><?php _e( 'Nothing to See Here', 'riada' ); ?></h1>
    <p><?php _e( 'There doesn\'t seem to be any content here.', 'riada' ); ?></p>

  <?php endif; ?>

</main>

<?php get_footer(); ?>