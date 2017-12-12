<?php
/*
 * The template for displaying the footer */
?>
    <footer>
      <nav>
        <?php wp_nav_menu( array( 'theme_location' => 'footer_menu', 'menu_class' => 'menu menu--footer-menu' ) ); ?>
      </nav>
      <?php echo __( 'Copyright &copy; ', 'riada' ); echo date( 'Y' ) . ' '; ?>
    </footer>
    <!-- build:js ./assets/js/app.js -->
    <script src="/temp/js/app.js"></script>
    <!-- endbuild -->
    <?php wp_footer(); ?>
  </body>
</html>