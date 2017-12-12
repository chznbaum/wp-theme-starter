<?php
/*
 * The template for displaying author archives */
get_header(); ?>

<main>

  <?php
    $current_author = ( isset( $_GET[ 'author_name' ] ) ) ? get_user_by( 'slug', $author_name ) :
    get_userdata( intval( $author ) );
  ?>

  <h1>
    <?php echo $current_author->display_name; ?>
  </h1>

  <a href="<?php echo $current_author->user_url; ?>"><?php echo $current_author->user_url; ?></a>

  <p><?php echo $current_author->user_description; ?></p>

  <h2><?php _e( 'Posts by ', 'riada' ); echo $current_author->display_name; ?></h2>

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