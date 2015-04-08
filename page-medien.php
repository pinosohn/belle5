<?php
/*
Template Name: Medien
*/
?>
<?php get_header(); ?>
<div id="banner" class="row" role="banner">

  <div id="banner-container" class="center page-width">

    <div id="left-banner-container" class="small-12 medium-7 columns">
      <?php while (have_posts()) : the_post(); ?>
        <?php the_post_thumbnail( 'medium' ); ?>
      <?php endwhile;?>
    </div>

    <div id="right-banner-container" class="small-12 medium-5 columns">
      <?php while (have_posts()) : the_post(); ?>
        <article <?php post_class() ?> id="post-<?php the_ID(); ?>">

            <div class="entry-content">
                <?php the_content(); ?>
        </article>
      <?php endwhile;?>
    </div>
    
  </div>
</div>

  <!-- #mobile-top-widget -->

  <div class="primary-sidebar show-for-medium-down small-12 columns">

    <?php if ( is_active_sidebar( 'widget_top_right' ) ) : ?>
    <div id="widget-top-mobile" class="widget-area" role="complementary">
      <?php dynamic_sidebar( 'widget_top_right' ); ?>
    </div>
    <?php endif; ?>


  </div>

<!-- Main Content -->

<div id="main-content" class="row">
  <div class="small-12 large-7 columns" role="main">

  <?php do_action('foundationPress_before_content'); ?>

      <?php $query = new WP_Query( 'cat=35' ); ?>
      <?php if (have_posts()) : ?>
      <?php while ( $query->have_posts() ) : $query->the_post(); ?>
        <div class="post">
          <?php if ( has_post_thumbnail() ) { 

            echo "<h1>";
            the_title();
            echo "</h1>";
            echo "<div class='featured-image'>";
            $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' );
            echo '<a href="' . $large_image_url[0] . '" rel="lightbox" title="' . the_title_attribute( 'echo=0' ) . '">';
            the_post_thumbnail( 'large' );
            echo "</div>";
            echo '</a>';
            echo "<div class='small-content'>";
            the_content();
            echo "</div>";}
            else {
            echo "<h1>";
            the_title();
            echo "</h1>";
            the_content();
            }
            ?>
          <div class="clear"></div>
        </div>
      
      <?php endwhile; ?>
      <?php endif; ?>

  <?php do_action('foundationPress_after_content'); ?>

  </div>

  <!-- #primary-sidebar -->

  <div class="primary-sidebar small-12 medium-12 large-5 columns">

    <?php if ( is_active_sidebar( 'widget_top_right' ) ) : ?>
    <div id="widget-top-right" class="widget-area hide-for-medium-down" role="complementary">
      <?php dynamic_sidebar( 'widget_top_right' ); ?>
    </div>
  
    <?php endif; ?>
  
      <?php if ( is_active_sidebar( 'widget_center_right' ) ) : ?>
    <div id="widget-top-right" class="widget-area" role="complementary">
      <?php dynamic_sidebar( 'widget_center_right' ); ?>
    </div>
  
    <?php endif; ?>
  
      <?php if ( is_active_sidebar( 'widget_bottom_right' ) ) : ?>
    <div id="widget-top-right" class="widget-area" role="complementary">
      <?php dynamic_sidebar( 'widget_bottom_right' ); ?>
    </div>

  </div>

  <?php endif; ?>


</div>
<?php get_footer(); ?>
