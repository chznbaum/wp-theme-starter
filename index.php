<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Riada</title>
  
    <!-- build:css ./styles.css -->
    <link rel="stylesheet" href="./temp/css/styles.css">
    <!-- endbuild -->

    <!-- build:js ./assets/js/vendor.js -->
    <script src="/temp/js/vendor.js"></script>
    <!-- endbuild -->

  </head>
  <body>

    <main>

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <h2>
          <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h2>

        <?php the_content(); ?>
        
      <?php endwhile; else : ?>

        <h2><?php _e( 'Nothing to See Here', 'riada' ); ?></h2>
        <p><?php _e( 'There doesn\'t seem to be any posts here.', 'riada' ); ?></p>

      <?php endif; ?>

    </main>

    <!-- build:js ./assets/js/app.js -->
    <script src="/temp/js/app.js"></script>
    <!-- endbuild -->
  </body>
</html>