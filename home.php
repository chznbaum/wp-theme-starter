<?php
/*
 * The template for displaying blog posts */
get_header(); ?>

<main>

  <?php if ( have_posts() ) :
    while ( have_posts() ) : the_post();

      get_template_part( 'template-parts/post/content', 'excerpt' );
      
    endwhile;

    the_posts_pagination();

  else :

    get_template_part( 'template-parts/post/content', 'none' );

  endif; ?>

</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>