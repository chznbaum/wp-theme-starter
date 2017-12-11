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

  // Queue theme styles and scripts
  add_action( 'wp_enqueue_scripts', 'riada_theme_scripts' );
  function riada_theme_scripts() {
    wp_enqueue_style( 'main_css', get_stylesheet_uri() );
  }

?>