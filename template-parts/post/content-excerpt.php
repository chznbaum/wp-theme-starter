<?php
/**
 * Template part for displayng post excerpts
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <header class="post__header">
    <?php
    if ( ( is_front_page() || is_author() ) && ! is_home() ) {
      the_title( '<h3 class="post__title"><a href="' . esc_url( get_permalink() ) . '">', '</a></h3>' );
    } else {
      the_title( '<h2 class="post__title"><a href="' . esc_url( get_permalink() ) . '">', '</a></h2>' );
    }

    if ( 'post' === get_post_type() ) : ?>
      <div class="post__meta">
        <?php
        echo riada_time_link();
        riada_edit_link();
        ?>
      </div><!-- .post__meta -->
    <?php elseif ( 'page'  === get_post_type() && get_edit_post_link() ) : ?>
      <div class="post__meta">
        <?php riada_edit_link(); ?>
      </div><!-- .post_meta -->
    <?php endif; ?>
  </header><!-- .post__header -->

  <?php if ( '' !== get_the_post_thumbnail() && ! is_single() ) : ?>
    <div class="post__thumbnail">
      <a href="<?php the_permalink(); ?>">
        <?php the_post_thumbnail(); ?>
      </a>
    </div>
  <?php endif; ?>

  <div class="post__summary">
    <?php the_excerpt(); ?>
  </div><!-- .post_content -->

</article>