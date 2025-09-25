<?php
/**
 * The template for displaying all pages
 *template name: Sports Betting
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
      <!-----------------------banner ------------------------------>
      <section class="space-wrapper">
         <div class="container">
            <div class="row">
                <?php
                  if( have_rows('sports_betting_lists') ):
                  while( have_rows('sports_betting_lists') ) : the_row();
                  $sports_betting_title = get_sub_field('sports_betting_title');
                 $sports_betting_image = get_sub_field('sports_betting_image');
                 $sports_betting_content = get_sub_field('sports_betting_content');
                  ?>
               <div class="col-lg-4 col-md-6 col-sm-12">
                  <div class="bet-box">
                     <div class="bet-img">
                        <img src="<?php echo $sports_betting_image; ?>" alt=""/> 
                     </div>
                     <div class="bet-content">
                        <div class="title-text4 mb-2"><span><?php echo $sports_betting_title; ?></span></div>
                        <p class="wht"><?php echo $sports_betting_content; ?></p>
                     </div>
                  </div>
               </div>
               <?php
                  endwhile;
                  else :
                  endif;
                  ?>




               <!-- <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                  <div class="bet-box">
                     <div class="bet-img">
                        <img src="<?php echo bloginfo('template_directory'); ?>/images/betting02.jpg" alt=""/> 
                     </div>
                     <div class="bet-content">
                        <div class="title-text4 mb-2"><span>What is a Straight Bet</span></div>
                        <p class="wht">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                  <div class="bet-box">
                     <div class="bet-img">
                        <img src="<?php echo bloginfo('template_directory'); ?>/images/betting03.jpg" alt=""/> 
                     </div>
                     <div class="bet-content">
                        <div class="title-text4 mb-2"><span>Futures Betting</span></div>
                        <p class="wht">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                     </div>
                  </div>
               </div>





            </div>
            <div class="d-flex justify-content-center align-items-center">
               <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                  <div class="bet-box">
                     <div class="bet-img">
                        <img src="<?php echo bloginfo('template_directory'); ?>/images/betting04.jpg" alt=""/> 
                     </div>
                     <div class="bet-content">
                        <div class="title-text4 mb-2"><span>Propositions – Prop Bets</span></div>
                        <p class="wht">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                  <div class="bet-box">
                     <div class="bet-img">
                        <img src="<?php echo bloginfo('template_directory'); ?>/images/betting05.jpg" alt=""/> 
                     </div>
                     <div class="bet-content">
                        <div class="title-text4 mb-2"><span>Round Robin Bet</span></div>
                        <p class="wht">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                     </div>
                  </div>
               </div>
            </div> -->



         </div>
      </section>
      <section class="space-wrapper">
         <div class="container">
            <div class="row about-info">
               <div class="col-sm-12">
                  <div class="inner-txt-wrapper">
                     <div class="title-text2 mb-3"><span><?php the_field('sports_betting_terms_title'); ?></span></div>
                     <?php the_field('sports_betting_terms_content'); ?>
                  </div>
               </div>
            </div>
         </div>
      </section>

<?php
endwhile;
//get_sidebar();
get_footer();
