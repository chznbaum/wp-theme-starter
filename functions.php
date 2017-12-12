<?php

  // Support title tags
  add_theme_support( 'title-tag' );

  // Support RSS feed links
  add_theme_support( 'automatic-feed-links' );

  // Supports HTML5 theme markup
  add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

  // Support featured images
  add_theme_support( 'post-thumbnails' );

  // Remove hardcoded width & height attributes from featured images
  add_filter( 'post_thumbnail_html', 'wp_theme_starter_remove_img_attributes' );
  function wp_theme_starter_remove_img_attributes( $html ) {
    return preg_replace( '/(width|height)="\d+"\s/', '', $html );
  }

  // Register menus
  add_action( 'after_setup_theme', 'wp_theme-_starter_register_menus' );
  function wp_theme_starter_register_menus() {
    register_nav_menus( array(
      'primary_menu' => __( 'Primary Menu', 'wp-theme-starter' ),
    ) );
  }

  // Queue theme styles and scripts
  add_action( 'wp_enqueue_scripts', 'wp_theme_starter_theme_scripts' );
  function wp_theme_starter_theme_scripts() {
    wp_enqueue_style( 'main_css', get_stylesheet_uri() );
  }

  // Register widget area

  add_action( 'widgets_init', 'wp_theme_starter_widgets_init' );
  function wp_theme_starter_widgets_init() {
    register_sidebar( array(
      'name' => __( 'Blog Sidebar', 'wp-theme-starter' ),
      'id' => 'sidebar-1',
      'description' => __( 'Add widgets here to appear on blog posts and archive pages.' ),
    ) );

    register_sidebar( array(
      'name' => __( 'Footer 1', 'wp-theme-starter' ),
      'id' => 'sidebar-2',
      'description' => __( 'Add widgets here to appear in your footer.' ),
    ) );

    register_sidebar( array(
      'name' => __( 'Footer 2', 'wp-theme-starter' ),
      'id' => 'sidebar-3',
      'description' => __( 'Add widgets here to appear in your footer.' ),
    ) );

    register_sidebar( array(
      'name' => __( 'Footer 3', 'wp-theme-starter' ),
      'id' => 'sidebar-4',
      'description' => __( 'Add widgets here to appear in your footer.' ),
    ) );

    register_sidebar( array(
      'name' => __( 'Footer 4', 'wp-theme-starter' ),
      'id' => 'sidebar-5',
      'description' => __( 'Add widgets here to appear in your footer.' ),
    ) );
  }

  /**
   * Custom template tags for this theme.
   */
  require get_parent_theme_file_path( '/inc/template-tags.php' );

?>