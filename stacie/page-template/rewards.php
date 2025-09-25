<?php
/**
 * The template for displaying all pages
 *template name: Rewards
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
            <div class="row d-flex justify-content-center align-items-center">
               <div class="col-sm-8">
                  <div class="rewarads">
                     <div class="logo-rewards"><img src="<?php the_field('rewarads_image'); ?>" alt=""/></div>
                     <h1 class="org-title"><?php the_field('rewarads_title'); ?></h1>
                     <h3 class="small-title"><?php the_field('rewarads_sub_title'); ?></h3>
                     <a class="read-more mt-3" href="<?php the_field('rewarads_button_link'); ?>"><?php the_field('rewarads_button_text'); ?></a> 
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="space-wrapper">
         <div class="container">
            <div class="row">
               <div class="col-lg-12 text-center">
                  <div class="heading-small"><?php the_field('rewards_club_heading'); ?></div>
                  <div class="title-text mb-3 heading"><?php the_field('rewards_club_sub_heading'); ?></div>
               </div>
               <div class="col-lg-12 text-center">
                  <div class="rewarads-wrapper">
                     <div class="rewarads-content">
                        <?php the_field('rewards_club_content'); ?>
                     </div>
                     <div class="rewarads-values">
                        <h5><?php the_field('rewards_club_point_values_heading'); ?></h5>
                        <?php the_field('rewards_club_point_values_content'); ?>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="space-wrapper">
         <div class="container">
            <div class="row">
               <div class="col-lg-12 text-center">
                  <div class="title-text mb-3 heading"><?php the_field('rewards_club_rule_heading'); ?></div>
               </div>
               <div class="media-content-wrapper mt-4">
                  <?php
                  if( have_rows('rewards_club_rules_lists') ):
                  while( have_rows('rewards_club_rules_lists') ) : the_row();
                  $content = get_sub_field('rewards_club_rules_content');
                 
                  ?>
                  <div class="media-content">
                     <p><?php echo $content; ?></p>
                  </div>
                  <?php
                  endwhile;
                  else :
                  endif;
                  ?>
                  
               </div>
               <div class="col-lg-12 text-center mt-5">
                  <a class="read-more org" href="<?php the_field('view_the_rewards_club_enrollment_link'); ?>"><?php the_field('view_the_rewards_club_enrollment_form_text'); ?></a>   
               </div>
            </div>
         </div>
      </section>

<?php
endwhile;
//get_sidebar();
get_footer();
