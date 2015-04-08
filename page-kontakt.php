<?php
/*
Template Name: Kontakt
*/
?>
<?php get_header(); ?>
<div id="banner" class="row" role="banner">

  <div id="banner-container" class="center page-width">

    <div id="left-banner-container" class="small-12 medium-7 columns">
      <iframe width="100%" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=belle%205
        &key=AIzaSyC6sXt57uNgjFS1J6PaZCcT6ZQz-mgjTUs
        &zoom=12">
      </iframe>
    </div>

    <div id="right-banner-container" class="small-12 medium-5 columns">
      <?php while (have_posts()) : the_post(); ?>
        <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
            <?php do_action('foundationPress_page_before_entry_content'); ?>
            <div class="entry-content">
                <?php the_content(); ?>
        </article>
      <?php endwhile;?>
    </div>

  </div>
</div>

<!-- Main Content -->
<div id="main-content" class="row">
  <div class="small-12" role="main">
        <?php while ( have_posts() ) : the_post(); ?>
        <div id="kontakt-anfahrt" class="small-12 columns page-width center">
            <div class="anfahrt-spalte small-12 medium-3 columns"><?php the_field('adresse'); ?></div>
            <div class="anfahrt-spalte small-12 medium-3 columns"><?php the_field('velo'); ?></div>
            <div class="anfahrt-spalte small-12 medium-3 columns"><?php the_field('auto'); ?></div>
            <div class="anfahrt-spalte small-12 medium-3 columns"><?php the_field('ov'); ?></div>

        </div>
        <?php endwhile;?>
  <?php do_action('foundationPress_after_content'); ?>

  </div>
</div>

<?php get_footer(); ?>
