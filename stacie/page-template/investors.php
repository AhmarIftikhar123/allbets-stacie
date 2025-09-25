<?php
/**
 * The template for displaying all pages
 *template name: Investors
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
      <div class="half-year-sec">
         <div class="container">
            <div class="row mt-5">
               <div class="col-sm-12 col-lg-8 col-md-8">
                  <div class="half-year mb-4">
                     <div class="video-wrapper">
                        <div class="video-content text-center">
                           <h4 class="wht-heading"><?php the_field('half_year_results_title'); ?></h4>
                           <p class="wht"><?php the_field('half_year_results_content'); ?></p>
                        </div>
                        <div class="half-year-pic">
                           <div class="download-link">
                              <ul class="footer-link">
                                 <?php
                                 if( have_rows('half_year_results_listing') ):
                                 while( have_rows('half_year_results_listing') ) : the_row();
                                 $name = get_sub_field('name');
                                 $link = get_sub_field('link');

                                 ?>
                                 <li><a href="<?php echo $link; ?>"><?php echo $name; ?></a></li>
                                 <?php
                                 endwhile;
                                 else :
                                 endif;
                                 ?>
                              </ul>
                           </div>
                           <img src="<?php the_field('half_year_results_image'); ?>" alt=""/> 
                        </div>
                     </div>
                  </div>
                  <div class="blog-box p-3 investors-box">
                     <div class="title-text2 mb-3"><span>Latest Corporate News</span></div>

                     <?php $args = array(
                     'post_type' => 'post',
                     'post_status' => 'publish',
                     'cat' =>9,
                     'posts_per_page' => 2,
                     );
                     $arr_posts = new WP_Query( $args );

                     if ( $arr_posts->have_posts() ) :

                     while ( $arr_posts->have_posts() ) : $arr_posts->the_post();
                     ?>
                     <div class="row">
                        <div class="col-md-3 col-lg-3 col-sm-12 pr-0">
                           <div class="promos-pic">
                              <?php $featured_img_url1 = get_the_post_thumbnail_url(get_the_ID(),'full');  ?>
                              <img src="<?php echo $featured_img_url1; ?>" alt=""> 
                           </div>
                        </div>
                        <div class="col-sm-12 col-lg-9 col-md-9">
                           <div class="blog-box-content">
                              <h5><?php the_title(); ?></h5>
                              <div class="date-commt">
                                 <a href=""><i class="fa fa-clock-o" aria-hidden="true"></i>
                                 <?php echo get_the_date(); ?></a>  
                                 <a href=""> <i class="fa fa-comments-o" aria-hidden="true"></i>
                                 <?php echo get_comments_number(); ?> Comments</a>
                              </div>
                              <p><?php the_excerpt(); ?></p>
                           </div>
                        </div>
                     </div> 
                     <hr>
                     <?php
               endwhile;

               endif;
               wp_reset_postdata(); 
               ?>  
               </div> 


                  <div class="blog-box p-3 investors-box">
                     <div class="title-text2 mb-3"><span>Regulatory News</span></div>

                      <?php $args = array(
                     'post_type' => 'post',
                     'post_status' => 'publish',
                     'cat' =>10,
                     'posts_per_page' => 2,
                     );
                     $arr_posts = new WP_Query( $args );

                     if ( $arr_posts->have_posts() ) :

                     while ( $arr_posts->have_posts() ) : $arr_posts->the_post();
                     ?>
                     <div class="row">
                        <div class="col-md-3 col-lg-3 col-sm-12 pr-0">
                           <div class="promos-pic">
                              <?php $featured_img_url2 = get_the_post_thumbnail_url(get_the_ID(),'full');  ?>
                              <img src="<?php echo $featured_img_url2; ?>" alt=""> 
                           </div>
                        </div>
                        <div class="col-sm-12 col-lg-9 col-md-9">
                           <div class="blog-box-content">
                              <h5><?php the_title(); ?></h5>
                              <div class="date-commt">
                                 <a href=""><i class="fa fa-clock-o" aria-hidden="true"></i>
                                 <?php echo get_the_date(); ?></a>  
                                 <a href=""> <i class="fa fa-comments-o" aria-hidden="true"></i>
                                 <?php echo get_comments_number(); ?> Comments</a>
                              </div>
                              <p><?php the_excerpt(); ?></p>
                           </div>
                        </div>
                     </div>
                     <hr>
                     <?php
               endwhile;

               endif;
               wp_reset_postdata(); 
               ?>  

                     <!-- <div class="row">
                        <div class="col-sm-3 pr-0">
                           <div class="promos-pic">
                              <img src="<?php echo bloginfo('template_directory'); ?>/images/promo04.jpg" alt=""> 
                           </div>
                        </div>
                        <div class="col-sm-9">
                           <div class="blog-box-content">
                              <h5>CBS Sports and Stacie Launch First-of-its-Kind Partnership with Wide-Ranging Digital Content</h5>
                              <div class="date-commt">
                                 <a href=""><i class="fa fa-clock-o" aria-hidden="true"></i>
                                 November 04, 2019</a>  
                                 <a href=""> <i class="fa fa-comments-o" aria-hidden="true"></i>
                                 232 Comments</a>
                              </div>
                              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer.</p>
                           </div>
                        </div>
                     </div> -->



                  </div>
               </div>
               <div class="col-sm-12 col-lg-4 col-md-4 p-0">
                  <div class="result">

                     <?php
            if( have_rows('left_listing') ):
            while( have_rows('left_listing') ) : the_row();
            $investor_left_sidebar_name = get_sub_field('investor_left_sidebar_name');
            $investor_left_sidebar_image = get_sub_field('investor_left_sidebar_image');
           
            ?>
                     <div class="half-year mb-3">
                        <div class="video-wrapper">
                           <div class="half-year-pic">
                              <img src="<?php echo $investor_left_sidebar_image; ?>" alt=""> 
                           </div>
                           <div class="video-content text-center">
                              <h4 class="wht-heading"><?php echo $investor_left_sidebar_name; ?> </h4>
                           </div>
                        </div>
                     </div>
 <?php
            endwhile;
            else :
            endif;
            ?>


                    


                     <div class="loaction-box p-2 mb-3">
                        <div class="loaction-body">
                           <?php the_field('share_price'); ?>
                        </div>
                     </div>
                     <div class="loaction-box p-3 mb-3 pb-5">
                        <div class="loaction-body text-left">
                           <strong>Upcoming Dates</strong>
                           <?php 
                           $the_query = new WP_Query( 'posts_per_page=8&post_type=post&cat=9&orderby=date&order=desc' ); ?>

                           <?php 
                           // Start our WP Query
                           while ($the_query -> have_posts()) : $the_query -> the_post(); 
                           // Display the Post Title with Hyperlink
                           ?>
                           <div class="blog-left-cat">
                              <?php $featured_img_url3 = get_the_post_thumbnail_url(get_the_ID(),'full');  ?>
                              <img src="<?php echo $featured_img_url3; ?>" alt=""> 
                              <p><?php the_title(); ?></p>
                              <?php echo get_the_date(); ?>
                           </div>
                              <?php 
                              // Repeat the process and reset once it hits the limit
                              endwhile;
                              wp_reset_postdata();
                              ?>
                           <!-- <div class="blog-left-cat">
                              <img src="<?php echo bloginfo('template_directory'); ?>/images/blog-left-pic.jpg" alt=""> 
                              <p>Lorem ipsum dolor sit cing elit, sed do.</p>
                              June 12, 2020
                           </div>
                           <div class="blog-left-cat">
                              <img src="<?php echo bloginfo('template_directory'); ?>/images/blog-left-pic.jpg" alt=""> 
                              <p>Lorem ipsum dolor sit cing elit, sed do.</p>
                              June 12, 2020
                           </div> -->


                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

<?php
endwhile;
//get_sidebar();
get_footer();
