<?php get_header(); ?>

  <main>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <h2>
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
      </h2>

      <?php the_content(); ?>
      
    <?php endwhile; else : ?>

      <h2><?php _e( 'Nothing to See Here', 'riada' ); ?></h2>
      <p><?php _e( 'There doesn\'t seem to be any posts here.', 'riada' ); ?></p>

    <?php endif; ?>

  </main>

<?php get_footer(); ?>