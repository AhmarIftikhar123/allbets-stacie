<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package stacie
 */

?>

	<footer>
  <div class="footer-link-wrappr">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="footer-link">
                <?php
wp_nav_menu(
    array(
        'theme_location' => 'menu-2',
        //'menu'           => 'header_menu',
        'container'      => '',
        //'menu_class'     => 'navbar-nav main-nave'
    )
);
?>
       <!--      <ul>
              <li><a href="">State Specific Info</a></li>
              <li><a href="">State Info</a></li>
              <li><a href="">How To Bet</a></li>
              <li><a href="">About All Bets</a></li>
              <li><a href="">Responsible Gaming</a></li>
              <li><a href="">Careers</a></li>
              <li><a href="">Contact Us</a></li>
            </ul> -->
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-bootom-wrappr">
    <div class="container">
      <div class="row footer-border">
        <div class="col-sm-4">
          <div class="footer-bootom-box">
<?php the_field('follow_us_on','option');?>
          </div>
        </div>
        <div class="col-sm-4">
      <div class="footer-bootom-box"> 
		  <div class="logo-animation logo-footer-c"></div>
		  <a href="<?php echo site_url();?>"><img src="<?php the_field('footer_logo','option');?>" alt=""/></a>
			</div>
        </div>
        <div class="col-sm-4">
          <div class="footer-bootom-box">
<?php the_field('address','option');?>
          </div>
        </div>
      </div>
      <div class="copyright">
        <p><?php the_field('copy_right','option');?></p>
      </div>
    </div>
  </div>
</footer>
<div class="overlay"></div>
<!-----------------------end-footer-css------------------------------>
<script src="<?php echo bloginfo('template_directory'); ?>/js/jquery-3.3.1.min.js" ></script>
<script src="<?php echo bloginfo('template_directory'); ?>/js/bootstrap.bundle.min.js" ></script>
<script src="<?php echo bloginfo('template_directory'); ?>/js/owl.carousel.js"></script>
<script src="<?php echo bloginfo('template_directory'); ?>/js/simple-lightbox.js"></script>
<script src="<?php echo bloginfo('template_directory'); ?>/js/honey-custom.js"></script>
<script src="<?php echo bloginfo('template_directory'); ?>/js/menu.js"></script>
<style type="text/css">
  /*make the menu sub-menu items drop down on mouse hover */

</style>
<?php wp_footer(); ?>

<script>
$(document).ready(function(){
  $("#clickmobile").click(function(){
    $(this).hide();
	  $(".hide-btn").show();
	  
  });
});
</script>



</body>
</html>
