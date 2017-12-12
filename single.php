<?php
/*
 * The template for displaying single posts */
get_header(); ?>

<main>

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <h1><?php the_title(); ?></h1>
      <div>
        <?php the_author_posts_link(); ?>
        <?php the_time( 'F j, Y' ); ?>
        <?php the_category(); ?>
        <?php the_tags(); ?>
      </div>
      <div>
        <?php the_content(); ?>
      </div>
    </article>
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

<?php get_footer(); ?>