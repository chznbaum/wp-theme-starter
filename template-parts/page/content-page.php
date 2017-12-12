<?php
/**
 * Template part for displayng page content
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header>
    <?php the_title( '<h1>', '</h1>' ); ?>
    <?php riada_edit_link(); ?>
  </header>
  <div>
    <?php
      the_content();
      wp_link_pages();
    ?>
  </div>
</article>