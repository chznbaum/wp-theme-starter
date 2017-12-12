<?php
/**
 * Custom template tags for this theme
 */

if ( ! function_exists( 'wp_theme_starter_posted_on' ) ) :
/**
 * Prints HTML with post meta information
 */
function wp_theme_starter_posted_on() {
  $byline = sprintf(
    /* translators: %s: post author */
    __( 'by %s', 'wp-theme-starter' ),
    '<span class="post__author"><a class="post__author__url" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . get_the_author() . '</a></span>'
  );

  echo '<span class="post__meta__posted-on">' . wp_theme_starter_time_link() . '</span><span class="post__meta__byline"> ' . $byline . '</span';
}
endif;

if ( ! function_exists( 'wp_theme_starter_time_link' ) ) :
/**
 * Gets a formatted string for the published date.
 */
function wp_theme_starter_time_link() {
  $time_string = '<time class="post__meta__date published updated" datetime="%1$s">%2$s</time>';
  if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
    $time_string = '<time class="post__meta__date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
  }

  $time_string = sprintf( $time_string,
    get_the_date( DATE_W3C ),
    get_the_date(),
    get_the_modified_date( DATE_W3C ),
    get_the_modified_date()
  );

  // Wrap the time string in a link, and preface it with 'Posted on'.
  return sprintf(
    /* translators: %s: post date */
    __( '<span class="screen-reader__text">Posted on</span> %s', 'wp-theme-starter' ),
    '<a href="' . esc_url( get_permalink() ) . '">' . $time_string . '</a>'
  );
}
endif;

if ( ! function_exists( 'wp_theme_starter_edit_link' ) ) :
/**
* Returns an accessibility-friendly link to edit a post
* with some context about what's being edited.
*/
function wp_theme_starter_edit_link() {
  edit_post_link(
    sprintf(
      /* translators: %s: Name of current post */
      __( 'Edit<span class="screen-reader__text"> "%s"</span>', 'wp-theme-starter' ),
      get_the_title()
    ),
    '<span class="link--edit">',
    '</span>'
  );
}
endif;