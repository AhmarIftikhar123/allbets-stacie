<?php
/**
 * The template for displaying all pages
 *template name: History 
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
                 <?php $title = get_field('history_main_title');
          if($title !='' && !empty($title)){
          ?>
         <div class="innerbanner-text-title"><?php the_field('history_main_title'); ?></div>
         <?php }else { ?>
         <div class="innerbanner-text-title"><?php the_title(); ?></div>
         <?php } ?>
               <div class="pt-breadcrumb-container">
                  <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="<?php echo site_url(); ?>"><i class="fa fa-home mr-2"></i>Home</a></li>
                     <?php $title = get_field('history_main_title');
                  if($title !='' && !empty($title)){
                  ?>
               <li class="breadcrumb-item active"><?php the_field('history_main_title'); ?></li>
               <?php }else { ?>
               <li class="breadcrumb-item active"><?php the_title(); ?></li>
               <?php } ?>
                  </ol>
               </div>
            </div>
         </div>
      </section>
      <!-----------------------  banner ------------------------------>
      <!-----------------------press-release-sec  ------------------------------>
      <section class="space-wrapper new-top-history">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <div class="blog-box">
                      <h3 class="look-like-board">If your boardroom likes like the one on the left, but it should look like the one on the right, give us a call.</h3>
                      <div class="his-img">
                     <img src="<?php the_field('history_image'); ?>" alt=""> 
                     </div>
                     <div class="blog-box-content">
                        <h4 class="mt-4 mb-4"><?php the_field('history_title'); ?></h4>
                        
                        <div class="row align-items-center">
                        <div class="col-lg-5 col-sm-12 col-md-6">
                        <div class="history-blog-pic">
                        <img class="img-border" src="<?php the_field('diversity_consulting_first_image'); ?>" alt="">    
                        </div>    
                        </div>
                        <div class="col-lg-7 col-sm-12 col-md-6">
                       <div class="history-blog-txt">     
                        <?php the_field('diversity_consulting_first_paragraph'); ?>
                        </div>
                        </div>
                        </div>
                        
                        <div class="row mt-4 align-items-center">
                            
                        <div class="col-lg-7 col-sm-12 col-md-6">
                       <div class="history-blog-txt">     
                       <?php the_field('diversity_consulting_second_paragraph'); ?>
                        </div>
                        </div>    
                            
                        <div class="col-lg-5 col-sm-12 col-md-6">
                        <div class="history-blog-pic">
                        <img class="img-border" src="<?php the_field('diversity_consulting_second_image'); ?>" alt="">    
                        </div>    
                        </div>

                        </div>
                        
                        <div class="row mt-4 align-items-center">
         
                        <div class="col-lg-12">
                       <div class="history-blog-txt">     
                       <?php the_field('diversity_consulting_third_paragraph'); ?>
                        
                        </div>
                        </div>
                        </div>
                        
                        
                        <?php //the_field('history_details'); ?>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      
      <section class="space-wrapper new-bottom-history">
         <div class="container">
            <div class="row">
               
               <div class="books-brands">
				   <ul>
					   
				   
                  <?php
                  if( have_rows('state_betting_history_lists') ):
                  while( have_rows('state_betting_history_lists') ) : the_row();
                  $link = get_sub_field('link');
                  $image = get_sub_field('image');
                  
                  ?>
				  
                 <li>
                     <a href="<?php echo $link; ?>">
                        <div class="history-img"> <img src="<?php echo $image; ?>" alt=""> </div>
                     </a>
                  </li>
                   <?php
                  endwhile;
                  else :
                  endif;
                  ?>
 </ul>
               </div>
            </div>
         </div>
      </section>

<?php
endwhile;
//get_sidebar();
get_footer();
