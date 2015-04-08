</section>
<div id="before-footer"></div>
</div>

<div id="footerWrap">

  <footer class="row">

<!-- Newsletter Area -->
    <div id="footer-newsletter" class="row" role="Newsletter">
      <div class="page-width center">
        <div class="small-12 columns collapse">
            <?php if ( is_active_sidebar( 'newsletter_widget' ) ) : ?>
            <div id="newsletter-widget" class="widget-area" role="complementary">
              <?php dynamic_sidebar( 'newsletter_widget' ); ?>
            </div>
            <?php endif; ?>
        </div>
      </div>
    </div>


<!-- Info Area -->
<div id="footer-info" class="row" role="Info">
  <div class="page-width center">
    <div class="small-12 columns">
      <?php do_action('foundationPress_before_footer'); ?>
         <?php if ( is_active_sidebar( 'footer_widget' ) ) : ?>
         <div id="footer-widget" class="widget-area" role="complementary">
           <?php dynamic_sidebar( 'footer_widget' ); ?>
         </div>
         <?php endif; ?>
      <?php do_action('foundationPress_after_footer'); ?>
    </div>
  </div>
</div>
  </footer>
</div>
<a class="exit-off-canvas"></a>

	<?php do_action('foundationPress_layout_end'); ?>
	</div>
</div>
<?php wp_footer(); ?>
<?php do_action('foundationPress_before_closing_body'); ?>


<!-- Jquery -->
<script type="text/javascript">
$( document ).ready(function() {

       function centerDiv(){
        window_height = $(window).height();
        footer_height = $("#footerWrap").height();

        $(".inception-wrap").css('min-height', ((window_height) - (footer_height)));
    }
   
    centerDiv();
    $(window).resize(function(){
    centerDiv();
    });
});
</script>
</body>
</html>
