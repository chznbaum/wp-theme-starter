<?php
/*
 * The template for displaying category archives */
get_header(); ?>

<main>

  <h1><?php _e( 'Category: ', 'riada' ); single_cat_title(); ?></h1>

  <?php if ( have_posts() ) :
    while ( have_posts() ) : the_post(); ?>

    <h2>
      <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </h2>

    <?php the_excerpt();
      
    endwhile;

    the_posts_pagination();

  else : ?>

    <p><?php _e( 'There doesn\'t seem to be any posts in this category.', 'riada' ); ?></p>

  <?php endif; ?>

</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>