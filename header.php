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