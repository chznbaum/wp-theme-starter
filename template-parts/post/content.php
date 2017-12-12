<?php
/**
 * Template part for displayng post content
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <header class="post__header">
    <?php
    if ( is_single() ) {
      the_title( '<h1 class="post__title">', '</h1>' );
    } elseif ( is_front_page() && is_home() ) {
      the_title( '<h3 class="post__title"><a href="' . esc_url( get_permalink() ) . '">', '</a></h3>' );
    } else {
      the_title( '<h2 class="post__title"><a href="' . esc_url( get_permalink() ) . '">', '</a></h2>' );
    }

    if ( 'post' === get_post_type() ) {
      echo '<div class="post__meta">';
      if ( is_single() ) {
        riada_posted_on();
      } else {
        echo riada_time_link();
        riada_edit_link();
      };
      echo '</div><!-- .post__meta -->';
    };
    ?>
  </header><!-- .post__header -->

  <div class="post__content">
    <?php
    /* translators: %s: Name of current post */
      the_content( sprintf(
        __( 'Continue reading<span class="screen-reader__text"> "%s"</span>', 'riada' ),
        get_the_title()
      ) );

      wp_link_pages();
    ?>
  </div><!-- .post_content -->

</article>