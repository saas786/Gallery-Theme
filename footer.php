<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #wrapper div element.
 *
 * @package WordPress
 * @subpackage Gallery
 * @since Gallery 1.0
 */
?>

  </div><!--/#wrapper .hfeed-->
  <div id="footer">
    <div class="inner">
      <?php get_sidebar('footer'); ?>
      <div id="siteinfo">
        <?php
        wp_nav_menu(array(
          'theme_location' => 'footer_nav',
          'container' => false,
          'depth' => 0
        ));
        ?>
        <span><?php _e('Copyright 2012 Gallery Theme. All Rights Reserved.','gallery'); ?></span>      
    	</div><!--/#siteinfo-->
    </div><!--/.inner-->
  </div><!--/#footer-->
<?php wp_footer(); ?>
</body>
</html>