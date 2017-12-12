<?php
/*
 * The template for displaying pages */
get_header(); ?>

<main>

  <?php while ( have_posts() ) : the_post();

    get_template_part( 'template-parts/page/content', 'page' );
    
    comments_template();
      
  endwhile; ?>

</main>

<?php get_footer(); ?>