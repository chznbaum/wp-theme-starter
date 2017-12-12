<?php
/*
 * The template for displaying the footer */
?>
    <footer>

      <?php
      get_template_part( 'template-parts/footer/footer', 'widgets' );

      get_template_part( 'template-parts/footer/site', 'copyright' );

      get_template_part( 'template-parts/footer/site', 'info' );

      ?>
    </footer>
    <!-- build:js ./assets/js/app.js -->
    <script src="/temp/js/app.js"></script>
    <!-- endbuild -->
    <?php wp_footer(); ?>
  </body>
</html>