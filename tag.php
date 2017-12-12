<?php
/*
 * The template for displaying tag archives */
get_header(); ?>

<main>

  <h1><?php _e( 'Tag: ', 'wp-theme-starter' ); single_tag_title(); ?></h1>

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