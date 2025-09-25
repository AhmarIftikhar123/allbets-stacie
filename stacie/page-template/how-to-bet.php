<?php
/**
 * The template for displaying all pages
 *template name: How to Bet
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package stacie
 */

get_header();
while ( have_posts() ) :
the_post();
?>
 <!-----------------------  banner ------------------------------>
<section class="innerbanner ">
   <img src="<?php echo bloginfo('template_directory'); ?>/images/inner-banner.jpg" alt="">
   <div class="innerbanner-text">
      <div class="container">
         <div class="innerbanner-text-title"><?php the_field('how_to_bet_title'); ?></div>
         <div class="pt-breadcrumb-container">
            <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="<?php echo site_url(); ?>"><i class="fa fa-home mr-2"></i>Home</a>
               </li>
               <li class="breadcrumb-item active"><?php the_field('how_to_bet_title'); ?></li>
            </ol>
         </div>
      </div>
   </div>
</section>
<!-----------------------banner ------------------------------>
<section class="space-wrapper">
   <div class="container">
      <div class="col-lg-12 text-center">
         <div class="title-text mb-3 heading"><?php the_field('how_to_bet_on_sports_heading'); ?></div>
      </div>
      <div class="col-lg-12 text-center mt-5">
         <?php the_field('how_to_bet_on_sports_content'); ?>
      </div>
      <div class="row mt-5">
         <div class="col-md-4 pr-0">
            <div class="main-service">
               <img src="<?php the_field('sport_image_one'); ?>" alt="service img">
               <div class="service-content">
                  <a href="<?php the_field('sport_page_link_one'); ?>">
                     <h4><?php the_field('sport_name_one'); ?></h4>
                     <p><?php the_field('sport_content_one'); ?></p>
                  </a>
               </div>
            </div>
         </div>
         <div class="col-md-4">
            <div class="main-service">
               <img src="<?php the_field('sport_image_two'); ?>" alt="service img">
               <div class="service-content">
                  <a href="<?php the_field('sport_page_link_two'); ?>">
                     <h4><?php the_field('sport_name_two'); ?></h4>
                     <p><?php the_field('sport_content_two'); ?></p>
                  </a>
               </div>
            </div>
            <div class="clearfix"></div>
            <div class="main-service">
               <img src="<?php the_field('sport_image_three'); ?>" alt="service img">
               <div class="service-content">
                  <a href="<?php the_field('sport_page_link_three'); ?>">
                     <h4><?php the_field('sport_name_three'); ?></h4>
                     <p><?php the_field('sport_content_three'); ?></p>
                  </a>
               </div>
            </div>
         </div>
         <div class="col-md-4 pl-0">
            <div class="main-service">
               <img src="<?php the_field('sport_image_four'); ?>" alt="service img">
               <div class="service-content">
                  <a href="<?php the_field('sport_page_link_four'); ?>">
                     <h4><?php the_field('sport_name_four'); ?></h4>
                     <p><?php the_field('sport_content_four'); ?></p>
                  </a>
               </div>
            </div>
            <div class="clearfix"></div>
            <div class="main-service">
               <img src="<?php the_field('sport_image_five'); ?>" alt="service img">
               <div class="service-content">
                  <a href="<?php the_field('sport_page_link_five'); ?>">
                     <h4><?php the_field('sport_name_five'); ?></h4>
                     <p><?php the_field('sport_content_five'); ?></p>
                  </a>
               </div>
            </div>
         </div>
      </div>

      <div class="row">
         <div class="col-md-4">
            <div class="main-service">
               <img src="<?php the_field('sport_image_six'); ?>" alt="service img">
               <div class="service-content">
                   <a href="<?php the_field('sport_page_link_six'); ?>">
                     <h4><?php the_field('sport_name_six'); ?></h4>
                     <p><?php the_field('sport_content_six'); ?></p>
                  </a>
               </div>
            </div>
            <div class="clearfix"></div>
            <div class="main-service">
               <img src="<?php the_field('sport_image_seven'); ?>" alt="service img">
               <div class="service-content">
                   <a href="<?php the_field('sport_page_link_seven'); ?>">
                     <h4><?php the_field('sport_name_seven'); ?></h4>
                     <p><?php the_field('sport_content_seven'); ?></p>
                  </a>
               </div>
            </div>
         </div>
         <div class="col-md-4 pl-0">
            <div class="main-service">
               <img src="<?php the_field('sport_image_eight'); ?>" alt="service img">
               <div class="service-content">
                   <a href="<?php the_field('sport_page_link_eight'); ?>">
                     <h4><?php the_field('sport_name_eight'); ?></h4>
                     <p><?php the_field('sport_content_eight'); ?></p>
                  </a>
               </div>
            </div>
            <div class="clearfix"></div>
            <div class="main-service">
               <img src="<?php the_field('sport_image_nine'); ?>" alt="service img">
               <div class="service-content">
                   <a href="<?php the_field('sport_page_link_nine'); ?>">
                     <h4><?php the_field('sport_name_nine'); ?></h4>
                     <p><?php the_field('sport_content_nine'); ?></p>
                  </a>
               </div>
            </div>
         </div>
         <div class="col-md-4 pl-0">
            <div class="main-service">
               <img src="<?php the_field('sport_image_ten'); ?>" alt="service img">
               <div class="service-content">
                   <a href="<?php the_field('sport_page_link_ten'); ?>">
                     <h4><?php the_field('sport_name_ten'); ?></h4>
                     <p><?php the_field('sport_content_ten'); ?></p>
                  </a>
               </div>
            </div>
         </div>
      </div>


   </div>
</section>
<!-----------------------start-footer-css------------------------------>

<?php
endwhile;
//get_sidebar();
get_footer();
