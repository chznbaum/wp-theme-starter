<?php
/*
 * The template for displaying single posts */
get_header(); ?>

<main>

  <?php
  while ( have_posts() ) : the_post();

    get_template_part( 'template-parts/post/content', get_post_format() );

    if ( comments_open() || get_comments_number() ) :
      comments_template();
    endif;

    the_post_navigation();
      
  endwhile;?>

</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>