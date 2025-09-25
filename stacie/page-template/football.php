<?php
/**
 * The template for displaying all pages
 *template name: Football 
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
         <?php $top_banner = get_field('football_title');
         if(!empty($top_banner) && $top_banner != ''){
          ?>
         
         <div class="innerbanner-text-title"><?php the_field('football_title'); ?></div>
         <?php }else{ ?>
            <div class="innerbanner-text-title"><?php the_title(); ?></div>
         <?php } ?>

         <div class="pt-breadcrumb-container">
            <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="<?php echo site_url(); ?>"><i class="fa fa-home mr-2"></i>Home</a>
               </li>
                <?php $top_banner = get_field('football_title');
         if(!empty($top_banner) && $top_banner != ''){
          ?>
               <li class="breadcrumb-item active"><?php the_field('football_title'); ?></li>
               <?php }else{ ?>
                  <li class="breadcrumb-item active"><?php the_title(); ?></li>
                  <?php } ?>

            </ol>
         </div>
      </div>
   </div>
</section>
<!-----------------------  banner ------------------------------>
<section class="space-wrapper">
   <div class="container">
      <div class="row">
         <div class="col-lg-12 text-center">
            <?php the_content(); ?>
         </div>
      </div>
   </div>
</section>
<div class="football-wrapper">
   <div class="container">
      <div class="row">
         <div class="col-sm-12 col-lg-6 col-md-6">
            <div class="football-pic pb-5">
               <img src="<?php the_field('football_betting_image'); ?>" alt="">
            </div>
         </div>
         <div class="col-sm-12 col-lg-6 col-md-6">
            <div class="football-info ">
               <div class="title-text3 mb-3"><span><?php the_field('football_betting_black_title'); ?></span>
               </div>
               <p class="wht"><?php the_field('football_betting_black_content'); ?></p>
               <h4 class="wht-heading"><?php the_field('the_mony_line_title'); ?></h4>
               <p class="wht"><?php the_field('the_mony_line_content'); ?></p>
               <h4 class="wht-heading"><?php the_field('time_wagering_title'); ?></h4>
               <p class="wht"><?php the_field('time_wagering_content'); ?></p>
            </div>
         </div>
      </div>
   </div>
</div>
<section class="space-wrapper">
   <div class="container">
      <div class="row">
         <div class="col-sm-12 col-lg-6 col-md-6">
            <div class="inner-txt-wrapper">
               <div class="title-text2 mb-3"><span><?php the_field('online_football_betting_title'); ?></span>
               </div>
               <?php
               if( have_rows('online_football_betting_list') ):
               while( have_rows('online_football_betting_list') ) : the_row();
               $online_football_betting_title = get_sub_field('online_football_betting_title');
               $online_football_betting_content = get_sub_field('online_football_betting_content');
              
              
               ?>
               <h3 class="blk-heading"><?php echo $online_football_betting_title; ?></h3> 
               <p><?php echo $online_football_betting_content; ?></p>
               <?php
               endwhile;
               else :
               endif;
               ?>
               <!-- <h3 class="blk-heading">Parlay Cards</h3> 
               <p>Parlay cards, most popular during football season, offer the potential for a large return on a small bet. Players darken the circles on the stub that apply to the teams in their parlay, the number of teams desired and the bet amount. There are several types of parlay cards to choose from during football season and each has a different payoff scale. The most popular variety of parlay card is the “1/2 point” card, in which ½-point pointspreads are used, eliminating the possibility of a wagering tie.</p>
               <h3 class="blk-heading">Teasers</h3> 
               <p>We offer 6, 6 ½, 7, 10 and 14-point teasers in football. A teaser allows the player to add extra points on an underdog or subtract points on a favorite on multiple games. Football and basketball can be mixed on the same teaser. In the event of a wagering tie in any game (other than 10 and 14 point teasers), the teaser is reduced to the next lowest number; for example a 4-team teaser with one tie would become a 3-team teaser, etc. In the event of a wagering tie, a 2-team teaser is deemed “No Action” and all money wagered is refunded. Note: 10 and 14 point teasers, ties lose.</p> -->
            </div>
         </div>
         <div class="col-sm-12 col-lg-6 col-md-6">
            <img class="img-border" src="<?php the_field('online_football_betting_image'); ?>" alt="">
         </div>
      </div>
   </div>
</section>
<div class="football">
   <div class="container">
      <div class="col-lg-12 text-center">
         <div class="heading-small-wht"><?php the_field('best_sports_betting_sites_heading'); ?></div>
         <div class="title-text-wht mb-3"><?php the_field('best_sports_betting_sites_sub_heading'); ?></div>
      </div>
      <div class="col-lg-12 text-center">
         <p class="wht"><?php the_field('best_sports_betting_sites_content'); ?></p>
         <h6 class="wht-heading"><?php the_field('physical_location_heading'); ?> </h6>
         <a class="read-more org mt-3" href="#"><?php the_field('location_near_you_now_button_text'); ?></a> 
      </div>
   </div>
</div>

<?php
endwhile;
//get_sidebar();
get_footer();
