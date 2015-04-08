<?php
/*
Author: Ole Fredrik Lie
URL: http://olefredrik.com
*/


// Various clean up functions
require_once('library/cleanup.php');

// Required for Foundation to work properly
require_once('library/foundation.php');

// Register all navigation menus
require_once('library/navigation.php');

// Add menu walkers
require_once('library/menu-walker.php');
require_once('library/offcanvas-walker.php');

// Create widget areas in sidebar and footer
require_once('library/widget-areas.php');

// Return entry meta information for posts
require_once('library/entry-meta.php');

// Enqueue scripts
require_once('library/enqueue-scripts.php');

// Add theme support
require_once('library/theme-support.php');

// Add Header image
require_once('library/custom-header.php');

?>

<?php
/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {

  register_sidebar( array(
    'name'          => 'Widget oben rechts',
    'id'            => 'widget_top_right',
    'before_widget' => '<div>',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
  ) );

    register_sidebar( array(
    'name'          => 'Widget mitte rechts',
    'id'            => 'widget_center_right',
    'before_widget' => '<div>',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
  ) );

    register_sidebar( array(
    'name'          => 'Widget unten rechts',
    'id'            => 'widget_bottom_right',
    'before_widget' => '<div>',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
  ) );

    register_sidebar( array(
    'name'          => 'Newsletter Widget',
    'id'            => 'newsletter_widget',
    'before_widget' => '<div>',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
  ) );

        register_sidebar( array(
    'name'          => 'Custom Footer Widget',
    'id'            => 'footer_widget',
    'before_widget' => '<div>',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
  ) );


}
add_action( 'widgets_init', 'arphabet_widgets_init' );
?>