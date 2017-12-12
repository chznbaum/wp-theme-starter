<?php
/**
 * Template part for displaying a message that posts can't be found
 */
?>

<section class="page__no-results page__not-found">

  <header class="page__header">
    <h1 class="page__title"><?php _e( 'Nothing Found', 'wp-theme-starter' ); ?></h1>
  </header><!-- .page__header -->

  <div class="page__content">
    <?php
    if ( is_home() && current_user_can ( 'publish_posts' ) ) : ?>

      <p><?php printf( __( 'Ready to publish your first post?', 'wp-theme-starter' ) ); ?></p>
    <?php else: ?>

      <p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'wp-theme-starter' ); ?></p>
      <?php
        get_search_form();
    endif; ?>
  </div><!-- .page__content -->

</section><!-- page__no-results -->