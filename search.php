<?php
/* The template for displaying search results pages */
get_header(); ?>

<main>

  <?php if ( have_posts() ) : ?>
    <h1><?php printf( __( 'Search Results for: %s', 'riada' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
  <?php else : ?>
    <h1><?php _e( 'Nothing Found', 'riada' ) ?></h1>
  <?php endif; ?>

  <?php
    if ( have_posts() ) :
      while ( have_posts() ) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <h2><?php the_title(); ?></h1>
          <?php the_excerpt(); ?>
        </article>

      <?php endwhile;

      the_posts_pagination();

    else: ?>

      <p><?php _e( 'Sorry, but nothing matched your search.', 'riada' ); ?></p>
      <?php get_search_form();

  endif;
  ?>

</main>

<?php get_footer(); ?>