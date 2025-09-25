<?php
/**
 * The template for displaying all pages
 *template name: Responsible Gaming
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
   <img src="<?php echo bloginfo('template_directory') ?>/images/inner-banner.jpg" alt="">
   <div class="innerbanner-text">
      <div class="container">
         <div class="innerbanner-text-title"><?php the_title(); ?></div>
         <div class="pt-breadcrumb-container">
            <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="<?php echo site_url(); ?>"><i class="fa fa-home mr-2"></i>Home</a>
               </li>
               <li class="breadcrumb-item active"><?php the_title(); ?></li>
            </ol>
         </div>
      </div>
   </div>
</section>
<!-----------------------  banner ------------------------------>
<section class="space-wrapper">
   <div class="container">
      <div class="row">
         <div class="col-sm-12">
            <div class="gamelink">
               <ul>
                  <?php
                  if( have_rows('gaming_lists') ):
                     $count1 = 1;
                  while( have_rows('gaming_lists') ) : the_row();
                  $game_name = get_sub_field('game_name');
                  
                  ?>
                  <li><a href="#<?php echo $count1; ?>">- <?php echo $game_name; ?></a>
                  </li>
                  <?php
                  $count1++;
                  endwhile;
                  else :
                  endif;
                  ?>
                  
               </ul>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="space-wrapper">
   <div class="container">

      <?php
      if( have_rows('list_of_first_to_four_game') ):
         $count2 = 1;
         $i = 1;
       
      while( have_rows('list_of_first_to_four_game') ) : the_row();
         if($count2 <= 4):
      $game_image = get_sub_field('game_image');
      $game_name = get_sub_field('game_name');
      $game_content = get_sub_field('game_content');
      ?>
      <?php if($i%2 != 0): ?>
      <div class="row" id="<?php echo $count2; ?>">
         <div class="col-lg-5 col-sm-12 col-md-5">
            <div class="race-img">
               <img class="img-border" src="<?php echo $game_image; ?>" alt="">
            </div>
         </div>
         <div class="col-lg-7 col-sm-12 col-md-7">
            <div class="inner-txt-wrapper">
               <div class="title-text2 mb-3"><span><?php echo $game_name; ?></span>
               </div>
               <?php echo $game_content; ?>
            </div>
         </div>
      </div>
      <?php else: ?>
      <div class="row gaming" id="<?php echo $count2; ?>">
         <div class="col-lg-7 col-sm-12 col-md-7">
            <div class="inner-txt-wrapper">
               <div class="title-text2 mb-3"><span><?php echo $game_name; ?></span>
               </div>
               <?php echo $game_content; ?>
            </div>
         </div>
         <div class="col-lg-5 col-sm-12 col-md-5">
            <div class="race-img">
               <img class="img-border" src="<?php echo $game_image; ?>" alt="">
            </div>
         </div>
      </div>
      <?php
      endif;

      $count2++;
      $i++;
   endif;
      endwhile;
      endif;
   

      ?>
      



      <?php 
      if( have_rows('lists_of_fifth_to_six_game') ):
      $count3 = 5;
      $j=1;
      while( have_rows('lists_of_fifth_to_six_game') ) : the_row();
      if($j <= 2):
      $game_name = get_sub_field('game_name');
      $game_content = get_sub_field('game_content');
      ?>
      <div class="row" id="<?php echo $count3; ?>">
         <div class="col-sm-12">
            <div class="inner-txt-wrapper">
               <div class="title-text2 mb-3"><span><?php echo $game_name; ?></span>
               </div>
               <?php echo $game_content; ?>

            </div>
         </div>
      </div>
      <?php
      $count3++;
      $j++;
   endif;
      endwhile;
      endif;
   

      ?>
      


      <div class="row" id="7">
         <div class="col-sm-12">
            <div class="inner-txt-wrapper">
               <div class="title-text2 mb-3"><span><?php the_field('partners_in_responsible_gaming_name'); ?></span>
               </div>
            </div>
         </div>
         <div id="slider-2" class="owl-carousel owl-theme">
            <?php if( have_rows('partners_in_responsible_gaming') ):
           
            
            while( have_rows('partners_in_responsible_gaming') ) : the_row();
           
            $game_logo = get_sub_field('game_logo');
            $game_partner_link = get_sub_field('game_partner_link');
            ?>
            <div class="item">
               <a href="<?php echo $game_partner_link; ?>">
                  <div class="history-img">
                     <img src="<?php echo $game_logo; ?>" alt="">
                  </div>
               </a>
            </div>
            <?php
            endwhile;
            endif;
            ?>
            
         </div>
      </div>


      <?php if( have_rows('lists_of_eight_to_last_game') ):
         $count5 = 8;
      while( have_rows('lists_of_eight_to_last_game') ) : the_row();
      $game_name = get_sub_field('game_name');
      $game_content = get_sub_field('game_content');
      ?>
      <div class="row mt-5" id="<?php echo $count5; ?>">
         <div class="col-sm-12">
            <div class="inner-txt-wrapper">
               <div class="title-text2 mb-3"><span><?php echo $game_name; ?></span>
               </div>
               <?php echo $game_content; ?>
            </div>
         </div>
      </div>
      <?php
      $count5++;
            endwhile;
            endif;
            ?>

      
   </div>
</section>
<?php
endwhile;
//get_sidebar();
get_footer();
