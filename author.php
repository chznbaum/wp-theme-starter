<?php
/*
 * The template for displaying author archives */
get_header(); ?>

<main>

  <?php
    $current_author = ( isset( $_GET[ 'author_name' ] ) ) ? get_user_by( 'slug', $author_name ) :
    get_userdata( intval( $author ) );
  ?>

  <h1>
    <?php echo $current_author->display_name; ?>
  </h1>

  <a href="<?php echo $current_author->user_url; ?>"><?php echo $current_author->user_url; ?></a>

  <p><?php echo $current_author->user_description; ?></p>

  <h2><?php _e( 'Posts by ', 'riada' ); echo $current_author->display_name; ?></h2>

  <ul>
    <?php if ( have_posts() ) :
      while ( have_posts() ) : the_post(); ?>

      <li>
        <a href="<?php the_permalink(); ?>">
          <?php the_title(); ?>
        </a>
        <?php the_time( 'F j, Y' ); ?> in <?php the_category(', '); ?>
      </li>
        <?php
        
      endwhile;

      the_posts_pagination();

    else : ?>

      <p><?php _e( 'No posts by this author.', 'riada' ); ?></p>

    <?php endif; ?>
  </ul>

</main>

<?php get_footer(); ?>