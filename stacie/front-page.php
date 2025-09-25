<?php
/**
 * The template for displaying all pages
 *template name: Home
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package borchini-realty
 */

get_header();
while ( have_posts() ) :
the_post();
?>




<!-----------------------  banner ------------------------------>
<section class="banner">
  <div class="container">
  <div class="banner-slider owl-carousel" id="bannerslider">

<?php
if( have_rows('header_slider_list') ):
    while( have_rows('header_slider_list') ) : the_row();
        $title = get_sub_field('title');
        $sub_title = get_sub_field('sub_title');
        $description = get_sub_field('description');
        $link_text = get_sub_field('link_text');
        $link_url = get_sub_field('link_url');
        $images = get_sub_field('images');
        ?>


         <div class="item relative"> 
    <div class="row align-items-center"> 
 
     
      <div class="col-lg-6 col-sm-12 col-md-6">
   
      <div class=" banner-info">
        <div class="banner-cont">
          <div class="bannertitle">
            <span><?php echo $sub_title; ?></span></div>
          <div class="bannersubtitle"><?php echo $description; ?></div>
          
      <div class="text-left"> <a href="<?php echo $link_url; ?>" class="getbtn">
           
            <div class="call-text">
             <?php echo $link_text; ?> 
            </div>
            </a> </div>
            
        </div>
      </div>
      </div>
      
     <div class="col-lg-6 col-sm-12 col-md-6">
     <div class="banner-img"><img src="<?php echo $images; ?>" alt=""></div> 
     </div>
      
    </div>
    </div>

    <?php
      endwhile;
else :
endif;
?>
  
  </div>
</div>
</section>
<!-----------------------  banner ------------------------------>
<!-----------------------start-step-sec  ------------------------------>

  <div class="step">
    <div class="row">
      <div class="col-lg-9 col-sm-9 ">
        <div class="row">
<?php
if( have_rows('content_information_') ):
    while( have_rows('content_information_') ) : the_row();
        $title = get_sub_field('title');
        $link = get_sub_field('link');
        ?>
          <div class="col-sm-3 col-6">
            <div class="step-txt"> <a href="<?php echo $link; ?>"> <?php echo $title; ?> </a> </div>
          </div>
          <?php
            endwhile;
else :
endif;
?>
         <!--  <div class="col-sm-3">
            <div class="step-txt"> <a href=""> Betting Sites <strong>by Location</strong> </a> </div>
          </div>
          <div class="col-sm-3">
            <div class="step-txt"> <a href=""> Betting Sites <strong>by Category</strong> </a> </div>
          </div>
          <div class="col-sm-3 pr-0">
            <div class="step-txt"> <a href=""> Betting Sites <strong>Learn How to Bet</strong> </a> </div>
          </div> -->
        </div>
      </div>
      <div class="col-lg-3 col-sm-3">
        <div class="step-txt-right">
          <div class="step-txt-icon"><img src="<?php the_field('lets_get_started_bet_images');?>" alt=""/></div>
          <?php the_field('lets_get_started_bet_title');?> </div>
      </div>
    </div>
  </div>

<!-----------------------end-step-sec  ------------------------------>
<section class="space-wrapper">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 col-sm-12 col-md-6">
        <div class="welcome-img"> <img class="img-border" src="<?php the_field('best_sports_betting_sites_images');?>" alt=""/> </div>
      </div>
      <div class="col-lg-6 col-sm-12 col-md-6">
        <div class="welcome-txt">
          <div class="heading-small"><?php the_field('best_sports_betting_sites_title');?></div>
<?php the_field('best_sports_betting_sites_description');?>
      </div>
    </div>
  </div>
</div>	  
</section>
<!-----------------------start-Top-sports------------------------------>
<div class="house-plans">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 ">
        <h2 class="house-plans-title"> <?php the_field('top_online_sports_title');?> </h2>
      </div>
      <div id="slider-1" class="owl-carousel">
        <?php
if( have_rows('top_online_sports_highlighter') ):
    while( have_rows('top_online_sports_highlighter') ) : the_row();
    ?>
        <div class="item col-sm-12 ">
          <div class="plans-box">
            <div class="plans-box-img"> <img src="<?php the_sub_field('images');?>" alt=""> </div>
            <div class="plans-title"><img src="<?php echo bloginfo('template_directory'); ?>/images/small-line.png" alt=""/><?php the_sub_field('title');?></div>
          </div>
        </div>
<?php
endwhile;
else :
endif;
?>
        <!--<div class="item col-sm-12 ">
          <div class="plans-box">
            <div class="plans-box-img"> <img src="<?php echo bloginfo('template_directory'); ?>/images/sports02.jpg" alt=""> </div>
            <div class="plans-title"><img src="<?php echo bloginfo('template_directory'); ?>/images/small-line.png" alt=""/>Exclusive Football</div>
          </div>
        </div>
        <div class="item col-sm-12 ">
          <div class="plans-box">
            <div class="plans-box-img"> <img src="<?php echo bloginfo('template_directory'); ?>/images/sports03.jpg" alt=""> </div>
            <div class="plans-title"><img src="<?php echo bloginfo('template_directory'); ?>/images/small-line.png" alt=""/>Exclusive Cricket</div>
          </div>
        </div>
        <div class="item col-sm-12 ">
          <div class="plans-box">
            <div class="plans-box-img"> <img src="<?php echo bloginfo('template_directory'); ?>/images/sports04.jpg" alt=""> </div>
            <div class="plans-title"><img src="<?php echo bloginfo('template_directory'); ?>/images/small-line.png" alt=""/>Exclusive Tennis</div>
          </div>
        </div>-->
      </div>
    </div>
  </div>
</div>
<!-----------------------end-Top-sports------------------------------>
<!-----------------------start-location-css------------------------------>

        <!--<div class="item">
          <div class="loaction-box"> <a href="">
            <div class="loaction-img"> <img src="<?php echo bloginfo('template_directory'); ?>/images/flag02.jpg" alt=""> </div>
            <div class="loaction-body"> <strong>Columbia</strong>
              <p>Digital sports betting</p>
            </div>
            </a> </div>
        </div>
        <div class="item">
          <div class="loaction-box"> <a href="">
            <div class="loaction-img"> <img src="<?php echo bloginfo('template_directory'); ?>/images/flag03.jpg" alt=""> </div>
            <div class="loaction-body"> <strong>Florida</strong>
              <p>Digital sports betting</p>
            </div>
            </a> </div>
        </div>
        <div class="item">
          <div class="loaction-box"> <a href="">
            <div class="loaction-img"> <img src="<?php echo bloginfo('template_directory'); ?>/images/flag04.jpg" alt=""> </div>
            <div class="loaction-body"> <strong>Illinois</strong>
              <p>Digital sports betting</p>
            </div>
            </a> </div>
        </div>-->
      </div>
    </div>
  </div>
</div>
<!-----------------------end-location-css------------------------------>
<div class="newsletter_section">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-7 text-center">
        <div class="newsletter-head mt-4">
          <?php $subscribe = get_field('subscribe');
               if( $subscribe ): ?>
          <div class="heading-small-wht"><?php echo $subscribe['subscribe_title'] ?></div>
          <div class="title-text-wht mb-3"><?php echo $subscribe['subscribe_sub_title'] ?></div>
          <?php echo $subscribe['subscribe_content'] ?>
        <?php endif; ?>
        <?php echo do_shortcode('[contact-form-7 id="280" title="subscribe"]'); ?>
          <!--<form>
            <div class="d-flex justify-content-center align-items-center">
              <input type="email" name="email" placeholder="Enter Your Email">
              <button type="submit" class="btn bg_white">Subscribe</button>
            </div>
            <div class="form-check">
              <label class="form-check-label">
              <input type="checkbox" class="form-check-input" value="">
              I certify that I am over 21 years old. * </label>
            </div>
          </form> -->
        </div>
      </div>
    </div>
    <div class="deco_image shape_1"> <img src="<?php echo bloginfo('template_directory'); ?>/images/shape_13.png" alt=""> </div>
    <div class="deco_image shape_2"> <img src="<?php echo bloginfo('template_directory'); ?>/images/shape_14.png" alt=""> </div>
  </div>
</div>
<!-----------------------start-footer-css------------------------------>




<?php
endwhile;
//get_sidebar();
get_footer();