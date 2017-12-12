<?php
/*
 * The template for displaying single posts */
get_header(); ?>

<main>

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post();

    get_template_part( 'template-parts/post/content', get_post_format() ); ?>

    <div>
      <?php previous_post_link(); ?>
      <a href="<?php bloginfo(url); ?>">Back to Blog</a>
      <?php next_post_link(); ?>
    </div>
    <?php comments_template(); ?>
      
  <?php endwhile; else : ?>

    <h1><?php _e( 'Nothing to See Here', 'riada' ); ?></h1>
    <p><?php _e( 'There doesn\'t seem to be any posts here.', 'riada' ); ?></p>

  <?php endif; ?>

</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>