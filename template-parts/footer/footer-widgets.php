<?php
/**
 * Template for displaying footer widgets if assigned
 */
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