<?php
/*
 * The header for the theme */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head(); ?>

    <!-- build:js ./assets/js/vendor.js -->
    <script src="/temp/js/vendor.js"></script>
    <!-- endbuild -->

  </head>
  <body <?php body_class(); ?>>
    <header>
      <nav>
        <?php wp_nav_menu( array( 'theme_location' => 'primary_menu', 'menu_class' => 'menu menu--primary-menu' ) ); ?>
      </nav>
    </header>
    <?php
    /**
     * If a regular post or page, and not the front page, show the featured image.
     * Using get_queried_object_id() here since the $post global may not be set before a call to the_post().
     */
    if ( ( is_single() || ( is_page() && ! is_front_page() ) ) && has_post_thumbnail( get_queried_object_id() ) ) :
      echo '<div class="header__featured-image">';
      echo get_the_post_thumbnail( get_queried_object_id() );
      echo '</div><!-- .header__featured-image -->';
    endif;
    ?>