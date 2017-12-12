<?php

  // Support title tags
  add_theme_support( 'title-tag' );

  // Support RSS feed links
  add_theme_support( 'automatic-feed-links' );

  // Supports HTML5 theme markup
  add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

  // Register menus
  add_action( 'after_setup_theme', 'riada_register_menus' );
  function riada_register_menus() {
    register_nav_menus( array(
      'primary_menu' => __( 'Primary Menu', 'riada' ),
    ) );
  }

  // Queue theme styles and scripts
  add_action( 'wp_enqueue_scripts', 'riada_theme_scripts' );
  function riada_theme_scripts() {
    wp_enqueue_style( 'main_css', get_stylesheet_uri() );
  }

  // Register widget area

  add_action( 'widgets_init', 'riada_widgets_init' );
  function riada_widgets_init() {
    register_sidebar( array(
      'name' => __( 'Blog Sidebar', 'riada' ),
      'id' => 'sidebar-1',
      'description' => __( 'Add widgets here to appear on blog posts and archive pages.' ),
    ) );

    register_sidebar( array(
      'name' => __( 'Footer 1', 'riada' ),
      'id' => 'sidebar-2',
      'description' => __( 'Add widgets here to appear in your footer.' ),
    ) );

    register_sidebar( array(
      'name' => __( 'Footer 2', 'riada' ),
      'id' => 'sidebar-3',
      'description' => __( 'Add widgets here to appear in your footer.' ),
    ) );

    register_sidebar( array(
      'name' => __( 'Footer 3', 'riada' ),
      'id' => 'sidebar-4',
      'description' => __( 'Add widgets here to appear in your footer.' ),
    ) );

    register_sidebar( array(
      'name' => __( 'Footer 4', 'riada' ),
      'id' => 'sidebar-5',
      'description' => __( 'Add widgets here to appear in your footer.' ),
    ) );
  }

?>