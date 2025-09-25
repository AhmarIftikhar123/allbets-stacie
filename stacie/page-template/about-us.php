<?php
/**
 * The template for displaying all pages
 *template name: About Us
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
<section class="innerbanner">
   <img src="<?php echo bloginfo('template_directory'); ?>/images/inner-banner.jpg" alt="">
   <div class="innerbanner-text">
      <div class="container">
          <?php $title = get_field('main_title');
          if($title !='' && !empty($title)){
          ?>
         <div class="innerbanner-text-title"><?php the_field('main_title'); ?></div>
         <?php }else { ?>
         <div class="innerbanner-text-title"><?php the_title(); ?></div>
         <?php } ?>
         <div class="pt-breadcrumb-container">
            <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="<?php echo site_url(); ?>"><i class="fa fa-home mr-2"></i>Home</a>
               </li>
                <?php $title = get_field('main_title');
                  if($title !='' && !empty($title)){
                  ?>
               <li class="breadcrumb-item active"><?php the_field('main_title'); ?></li>
               <?php }else { ?>
               <li class="breadcrumb-item active"><?php the_title(); ?></li>
               <?php } ?>
            </ol>
         </div>
      </div>
   </div>
</section>
<!-----------------------  banner ------------------------------>

<!-----------------------start-step-sec  ------------------------------>
<section class="space-wrapper">
   <div class="container">
      <div class="row align-items-center about-info">
         <div class="col-lg-6 col-sm-12 col-md-6">
            <div class="abt-img">
                <?php
$featured_image123=get_the_post_thumbnail_url($post->ID,'full');
if(!empty($featured_image123)){
               ?>
               <img class="img-border" src="<?php echo $featured_image123; ?>" alt="" />
            <?php } ?>
            </div>
         </div>
         <div class="col-lg-6 col-sm-12 col-md-6">
            <div class="welcome-txt">
               <div class="heading-small"><?php the_field('best_sports_title');?></div>
<?php the_field('best_sports_description');?>
            </div>
         </div>
         <div class="col-sm-12">
<?php the_field('best_sports_short_description');?>
         </div>
      </div>
   </div>
</section>
<div class="loaction-sec service-we-provide">
   <div class="container">
      <div class="col-lg-12 text-center">
         <!--<div class="heading-small">Best Sports Betting Sites</div>-->
         <div class="title-text mb-3 heading"><?php the_field('we_work_with_sub_title'); ?></div>
      </div>
      <div class="clearfix"></div>
      <div class="row mt-5">
         <?php
         if( have_rows('we_work_with_list') ):
         while( have_rows('we_work_with_list') ) : the_row();
         $icon = get_sub_field('icon');
         $title = get_sub_field('title');
         $content = get_sub_field('content');
         ?>
         <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="service-box mt-5">
               <div class="service-box-icon">
                  <img src="<?php echo $icon; ?>" alt="">
               </div>
               <div class="service-box-body"> <strong><?php echo $title; ?></strong> 
                  <p><?php echo $content; ?></p>
               </div>
            </div>
         </div>
          <?php
            endwhile;
            else :
            endif;
            ?>
         <!-- <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <div class="service-box mt-5">
               <div class="service-box-icon">
                  <img src="<?php //echo bloginfo('template_directory'); ?>/images/serv-icon02.png" alt="">
               </div>
               <div class="service-box-body"> <strong>Media Hits</strong> 
                  <p>Lorem Ipsum is simply dummy text of the printing and typesettindustry</p>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <div class="service-box mt-5">
               <div class="service-box-icon">
                  <img src="<?php //echo bloginfo('template_directory'); ?>/images/serv-icon03.png" alt="">
               </div>
               <div class="service-box-body"> <strong>Careers</strong> 
                  <p>Lorem Ipsum is simply dummy text of the printing and typesettindustry</p>
               </div>
            </div>
         </div> -->
      </div>
   </div>
</div> 
<!-----------------------start-NEXT MATCH------------------------------->
<div class="next-match">
   <div class="container">
      <div class="col-lg-12 text-center">
         <div class="heading-small-wht"><?php the_field('next_match_title');?> </div>
         <div class="title-text-wht mb-3"><?php the_field('next_match_sub_title');?> </div>
      </div>
      <div class="col-lg-12 text-center">
<?php the_field('next_match_description');?> 
<a class="read-more mt-3" href="<?php the_field('visit_our_history_page_link');?>"><?php the_field('visit_our_history_page_title');?></a>
      </div>
   </div>
</div>
<!-----------------------end-NEXT MATCH------------------------------>
<div class="next-match-below">
   <div class="container">
       <div class="row">
           
          <?php
         if( have_rows('about_service_lists') ):
         while( have_rows('about_service_lists') ) : the_row();
         $service_heading = get_sub_field('service_heading');
         $service_content = get_sub_field('service_content');
        
         ?> 
      <div class="col-lg-6 col-sm-12 col-md-6 text-left">
       <div class="next-match-box">   
        <h2><?php echo $service_heading; ?></h2>
        <p><?php echo $service_content; ?></p>
       </div>
        </div>
         <?php
            endwhile;
            else :
            endif;
            ?>
        
        </div>
      
</div>
</div>



<?php
endwhile;
//get_sidebar();
get_footer();
