<?php
/**
 * The template for displaying all pages
 *template name: Virtual Racing
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

      
      <!-----------------------start-step-sec  ------------------------------>
      <section class="space-wrapper">
         <div class="container">
            <div class="row d-flex justify-content-center align-items-center">
               <div class="col-sm-7">
                  <div class="video-wrapper">
                  <?php the_field('video_frame'); ?>

                  <div class="video-content text-center">
                  <h4 class="wht-heading"><?php the_field('video_heading'); ?></h4> 
                  <p class="wht"><?php the_field('video_content'); ?></p>
                  <h4 class="wht-heading"><?php the_field('video_sub_heading'); ?></h4> 
                  </div>
                  </div>
          
                  
               </div>
            </div>
         </div>
      </section>

       <section class="space-wrapper">
         <div class="container">
            <div class="col-lg-12 text-center">
               <div class="heading-small"><?php the_field('virtual_racing_faq_sub_heading'); ?></div>
               <div class="title-text mb-3 heading"><?php the_field('virtual_racing_faq'); ?></div>
            </div>

            <div class="tab-pane fade show active bs-example" id="nav-addmision" role="tabpanel" aria-labelledby="nav-addmision-tab">
               <div class="accordion" id="accordionExample">

                   <?php if( have_rows('virtual_racing_faq_lists') ):
                  $count = 1;
                  while( have_rows('virtual_racing_faq_lists') ) : the_row();
                  $virtual_racing_faq_question = get_sub_field('virtual_racing_faq_question');
                  $virtual_racing_faq_answer = get_sub_field('virtual_racing_faq_answer');
                  ?>
                  <div class="card">
                     <div class="card-header" id="heading<?php echo $count; ?>">
                        <h2 class="mb-0">
                           <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapse<?php echo $count; ?>">
                           <i class="fa fa-angle-down"></i><?php echo  $virtual_racing_faq_question; ?></button>                           
                        </h2>
                     </div>
                     <div id="collapse<?php echo $count; ?>" class="collapse <?php if($count == 1){ echo 'show'; } ?>" aria-labelledby="heading<?php echo $count; ?>" data-parent="#accordionExample">
                        <div class="card-body">
                           <p><?php echo  $virtual_racing_faq_answer; ?></p>
                        </div>
                     </div>
                  </div>
                  <?php
                  $count++;
                  endwhile;
                  endif;
                  ?>
                  
               </div>
            </div>
         </div>
      </section>

<?php
endwhile;
//get_sidebar();
get_footer();
