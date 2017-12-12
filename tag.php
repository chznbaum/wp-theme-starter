<?php
/*
 * The template for displaying tag archives */
get_header(); ?>

<main>

  <h1><?php _e( 'Tag: ', 'riada' ); single_tag_title(); ?></h1>

  <?php if ( have_posts() ) :
    while ( have_posts() ) : the_post(); ?>

    <h2>
      <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </h2>

    <?php the_excerpt();
      
    endwhile;

    the_posts_pagination();

  else : ?>

    <p><?php _e( 'There doesn\'t seem to be any posts tagged with this.', 'riada' ); ?></p>

  <?php endif; ?>

</main>

<?php get_footer(); ?>