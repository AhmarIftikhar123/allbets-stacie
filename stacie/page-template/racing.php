<?php
/**
 * The template for displaying all pages
 *template name: Racing
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
      <!-----------------------  banner ------------------------------>
      <section class="space-wrapper">
         <div class="container">
            <div class="row">
               <?php if( have_rows('racing_listing') ):
               while( have_rows('racing_listing') ) : the_row();
               $racing_title = get_sub_field('racing_title');
               $racing_image = get_sub_field('racing_image');
               $racing_link = get_sub_field('racing_link');
            
               ?>
               <div class="col-lg-6 col-sm-12 col-md-12">
                  <div class="rac-sch-box">
                     <div class="rac-sch-pic">
                        <img src="<?php echo $racing_image; ?>" alt=""/>
                     </div>
                     <div class="rac-sch-info">
                        <a href="<?php echo $racing_link; ?>">
                           <span><i class="fa fa-calendar" aria-hidden="true"></i></span>
                           <h5><?php echo $racing_title; ?></h5>
                        </a>
                     </div>
                  </div>
               </div>
               <?php
               endwhile;
               else :
               endif;
               ?>

              <!--  <div class="col-sm-6">
                  <div class="rac-sch-box">
                     <div class="rac-sch-pic">
                        <img src="<?php echo bloginfo('template_directory'); ?>/images/horse-pic.png" alt=""/>
                     </div>
                     <div class="rac-sch-info">
                        <a href="">
                           <span><i class="fa fa-file-text" aria-hidden="true"></i></span>
                           <h5>Guide to Horse Racing</h5>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="col-sm-6">
                  <div class="rac-sch-box">
                     <div class="rac-sch-pic">
                        <img src="<?php echo bloginfo('template_directory'); ?>/images/horse-pic.png" alt=""/>
                     </div>
                     <div class="rac-sch-info">
                        <a href="">
                           <span><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                           <h5>Find a All Bets Race Book</h5>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="col-sm-6">
                  <div class="rac-sch-box">
                     <div class="rac-sch-pic">
                        <img src="<?php echo bloginfo('template_directory'); ?>/images/horse-pic.png" alt=""/>
                     </div>
                     <div class="rac-sch-info">
                        <a href="">
                           <span><i class="fa fa-picture-o" aria-hidden="true"></i></span>
                           <h5>Twin quinella</h5>
                        </a>
                     </div>
                  </div>
               </div> -->
            </div>
         </div>
      </section>
      <div class="race-book">
         <div class="container">
            <div class="col-lg-12 text-center">
               <?php the_field('all_bets_race_book_'); ?>
            </div>
         </div>
      </div>
      <section class="space-wrapper">
         <div class="container">
            <div class="row">
               <div class="col-lg-6 col-sm-12 col-md-6">
                  <div class="race-img mb-5"> 
                     <img class="img-border" src="<?php the_field('earn_rewards_image'); ?>" alt=""> 
                  </div>
               </div>
               <div class="col-lg-6 col-sm-12 col-md-6">
                  <div class="inner-txt-wrapper">
                     <div class="title-text2 mb-3"><span><?php the_field('earn_rewards_title'); ?></span></div>
                     <?php the_field('earn_rewards_content'); ?>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="space-wrapper">
         <div class="container">
            <div class="col-lg-12 text-center">
               <div class="heading-small"><?php the_field('accommodations_title'); ?></div>
               <div class="title-text mb-3 heading"><?php the_field('accommodations_sub_title'); ?></div>
            </div>
            <div class="media-content-wrapper mt-5">
                <?php if( have_rows('accommodations_listing') ):
               while( have_rows('accommodations_listing') ) : the_row();
               $accommodations_list_title = get_sub_field('accommodations_list_title');
               $accommodations_list_link = get_sub_field('accommodations_list_link');
               
            
               ?>
               <div class="media-content">
                  <h4><a href="<?php echo $$accommodations_list_link; ?>"><?php echo $accommodations_list_title; ?></a></h4>
               </div>
                <?php
               endwhile;
               else :
               endif;
               ?>

               <!-- <div class="media-content">
                  <h4><a href="">Plaza Hotel & Casino (Las Vegas)</a></h4>
               </div>
               <div class="media-content">
                  <h4><a href="">Aquarius Casino Resort (Laughlin)</a></h4>
               </div>
               <div class="media-content">
                  <h4><a href="">The STRAT Hotel, Casino, & SkyPod (Las Vegas)</a></h4>
               </div>
               <div class="media-content">
                  <h4><a href="">Edgewater Casino Resort (Laughlin)</a></h4>
               </div>
               <div class="media-content">
                  <h4><a href="">Primm Valley Resort & Casino (Primm)</a></h4>
               </div>
               <div class="media-content">
                  <h4><a href="">Grand Sierra Resort (Reno)</a></h4>
               </div> -->


            </div>
         </div>
      </section>

<?php
endwhile;
//get_sidebar();
get_footer();
