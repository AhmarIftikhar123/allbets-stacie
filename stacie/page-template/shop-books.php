<?php
/**
 * The template for displaying all pages
 *template name: Shop Books
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
?>




<?php

while ( have_posts() ) :
the_post();
?>
<!-----------------------  banner ------------------------------>
      
      <section class="innerbanner">
         <img src="<?php echo bloginfo('template_directory'); ?>/images/sports-banner.jpg" alt="">
         <div class="innerbanner-text">
            <div class="container">
               <div class="innerbanner-text-title"><?php the_title(); ?></div>
               <div class="pt-breadcrumb-container">
                  <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="<?php echo site_url(); ?>"><i class="fa fa-home mr-2"></i>Home</a></li>
                     <li class="breadcrumb-item active"><?php the_title(); ?></li>
                  </ol>
               </div>
            </div>
         </div>
      </section>
      
<!-----------------------------banner --------------------------------->
      
<!-----------------------start-step-sec  ------------------------------>
     
      <section class="space-wrapper">
         <div class="container">
            <div class="row align-items-center about-info">
               <div class="col-lg-6 col-sm-12 col-md-6">
                   <?php $featured_image = get_the_post_thumbnail_url($post->ID,'full'); ?>
                  <div class="abt-img"> <img class="img-border" src="<?php echo $featured_image; ?>" alt=""/> </div>
               </div>
               <div class="col-lg-6 col-sm-12 col-md-6">
                  <div class="welcome-txt">
                     <div class="heading-small"><?php the_field('top_10_books_sports_betting_sub_heading'); ?></div>
                     <div class="title-text mb-3"><?php the_field('top_10_books_sports_betting_heading'); ?></div>
                     <?php the_field('shop_book_content'); ?>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <div class="col-lg-12 col-sm-12 full-with-new-content">
          <div class="container">
              <div class="row">
                  <?php the_content(); ?>
              </div>
          </div>
      </div>
      <div class="space-wrapper">
         <div class="container">
            <div class="col-lg-12 text-center">
               <div class="heading-small">Best Sports Betting Sites</div>
               <div class="title-text mb-3 heading">Best Sellers in Sports Gambling</div>
            </div>
            <div class="clearfix"></div>
            <div class="row mt-5">

            <?php $args = array(
               'post_type' => 'galler',
               'post_status' => 'publish',
               'cat' => 11,
               'posts_per_page' => -1,
               );
               $arr_posts = new WP_Query( $args );

               if ( $arr_posts->have_posts() ) :

               while ( $arr_posts->have_posts() ) : $arr_posts->the_post();
               ?>

               <div class="col-lg-3 col-md-6 col-sm-12 gallery">
                  <div class="books">
                     <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');  ?>
                     <a href="<?php echo $featured_img_url; ?>">
                        <div class="books-name">
                           <h4><?php the_title(); ?></h4>
                        </div>
                        <img src="<?php echo $featured_img_url; ?>" alt="books">
                     </a>
                  </div>
               </div>
               <?php
               endwhile;

               endif;
               wp_reset_postdata(); 
               ?>

               <!-- <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 gallery">
                  <div class="books">
                     <a href="<?php echo bloginfo('template_directory'); ?>/images/book02.jpg">
                        <div class="books-name">
                           <h4>Fixed Odds Sports Betting Statistical Forecasting and Risk Management</h4>
                        </div>
                        <img src="<?php echo bloginfo('template_directory'); ?>/images/book02.jpg" alt="books">
                     </a>
                  </div>
               </div>
               <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 gallery">
                  <div class="books ">
                     <a href="<?php echo bloginfo('template_directory'); ?>/images/book03.jpg">
                        <div class="books-name">
                           <h4>Sharper: A Guide to Modern Sports Betting</h4>
                        </div>
                        <img src="<?php echo bloginfo('template_directory'); ?>/images/book03.jpg" alt="books">
                     </a>
                  </div>
               </div>
               <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 gallery">
                  <div class="books">
                     <a href="<?php echo bloginfo('template_directory'); ?>/images/book04.jpg">
                        <div class="books-name">
                           <h4>The Complete Guide to Sports Betting The six key betting principles</h4>
                        </div>
                        <img src="<?php echo bloginfo('template_directory'); ?>/images/book04.jpg" alt="books">
                     </a>
                  </div>
               </div>
               <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 gallery">
                  <div class="books">
                     <a href="<?php echo bloginfo('template_directory'); ?>/images/book05.jpg">
                        <div class="books-name">
                           <h4>The Safety Bet: Making Football Betting More Profitable!</h4>
                        </div>
                        <img src="<?php echo bloginfo('template_directory'); ?>/images/book05.jpg" alt="books">
                     </a>
                  </div>
               </div>
               <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 gallery">
                  <div class="books ">
                     <a href="<?php echo bloginfo('template_directory'); ?>/images/book06.jpg">
                        <div class="books-name">
                           <h4>Changing the Game: How to Profit From Your Passion for Sports by a Wall Street Investment Manager</h4>
                        </div>
                        <img src="<?php echo bloginfo('template_directory'); ?>/images/book06.jpg" alt="books">
                     </a>
                  </div>
               </div>
               <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 gallery">
                  <div class="books">
                     <a href="<?php echo bloginfo('template_directory'); ?>/images/book07.jpg">
                        <div class="books-name">
                           <h4>Conquering Risk:Attacking Wall Street and Vegas</h4>
                        </div>
                        <img src="<?php echo bloginfo('template_directory'); ?>/images/book07.jpg" alt="books">
                     </a>
                  </div>
               </div>
               <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 gallery">
                  <div class="books">
                     <a href="<?php echo bloginfo('template_directory'); ?>/images/book08.jpg">
                        <div class="books-name">
                           <h4>Mastering Betfair: How to make serious money trading betting exchanges</h4>
                        </div>
                        <img src="<?php echo bloginfo('template_directory'); ?>/images/book08.jpg" alt="books">
                     </a>
                  </div>
               </div>
               <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 gallery">
                  <div class="books ">
                     <a href="<?php echo bloginfo('template_directory'); ?>/images/book09.jpg">
                        <div class="books-name">
                           <h4>Changing the Game: How to Profit From Your Passion for Sports by a Wall Street Investment Manager</h4>
                        </div>
                        <img src="<?php echo bloginfo('template_directory'); ?>/images/book09.jpg" alt="books">
                     </a>
                  </div>
               </div> -->



            </div>
         </div>
      </div>
      
<?php
endwhile;
//get_sidebar();
get_footer();
