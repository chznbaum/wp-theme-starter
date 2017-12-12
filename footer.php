<?php
/*
 * The template for displaying the footer */
?>
    <footer>
      <?php
      if ( is_active_sidebar( 'sidebar-2' ) ||
        is_active_sidebar( 'sidebar-3' ) ||
        is_active_sidebar( 'sidebar-4' ) ||
        is_active_sidebar( 'sidebar-5' ) ) :
      ?>
        <aside>
          <?php
          if ( is_active_sidebar( 'sidebar-2' ) ) { ?>
            <div>
              <?php dynamic_sidebar( 'sidebar-2' ); ?>
            </div>
          <?php }
          if ( is_active_sidebar( 'sidebar-3' ) ) { ?>
            <div>
              <?php dynamic_sidebar( 'sidebar-3' ); ?>
            </div>
          <?php }
          if ( is_active_sidebar( 'sidebar-4' ) ) { ?>
            <div>
              <?php dynamic_sidebar( 'sidebar-4' ); ?>
            </div>
          <?php }
          if ( is_active_sidebar( 'sidebar-5' ) ) { ?>
            <div>
              <?php dynamic_sidebar( 'sidebar-5' ); ?>
            </div>
          <?php } ?>
        </aside>
      <?php endif; ?>
      <?php echo __( 'Copyright &copy; ', 'riada' ); echo date( 'Y' ) . ' '; ?>
    </footer>
    <!-- build:js ./assets/js/app.js -->
    <script src="/temp/js/app.js"></script>
    <!-- endbuild -->
    <?php wp_footer(); ?>
  </body>
</html>