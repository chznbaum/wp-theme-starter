<?php

  // Support title tags
  add_theme_support( 'title-tag' );

  // Support RSS feed links
  add_theme_support( 'automatic-feed-links' );

  // Register menus
  add_action( 'after_setup_theme', 'riada_register_menus' );
  function riada_register_menus() {
    register_nav_menus( array(
      'primary_menu' => __( 'Primary Menu', 'riada' ),
      'footer_menu' => __( 'Footer Menu', 'riada' )
    ) );
  }

?>