<?php
/**
 * The template for displaying all pages
 *template name: Press Releases
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
        
         <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
         <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#inner-navbar" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="inner-navbar">
               <ul class="navbar-nav mx-auto">
                  <?php
            if( have_rows('menu_lists') ):
            while( have_rows('menu_lists') ) : the_row();
            $page_name = get_sub_field('page_name');
            $page_link = get_sub_field('page_link');
           
            ?>
            <li class="nav-item"><a class="nav-link" href="<?php echo $page_link; ?>"><?php echo $page_name; ?></a></li>
                  <?php
            endwhile;
            else :
            endif;
            ?>
               </ul>
            </div>
         </div>
      </nav>
         
      <!-----------------------press-release-sec  ------------------------------>
      
      <section class="space-wrapper">
         <div class="container">
            <div class="row">

               <?php $args = array(
               'post_type' => 'post',
               'post_status' => 'publish',
               'category_name' => 'Press Releases',
               'posts_per_page' => -1,
               );
               $arr_posts = new WP_Query( $args );

               if ( $arr_posts->have_posts() ) :

               while ( $arr_posts->have_posts() ) : $arr_posts->the_post();
               ?>

               <div class="col-lg-4 col-md-6 col-sm-12">
                  <div class="blog-box">
                     <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');  ?>
                     <img src="<?php echo$featured_img_url;  ?>" alt=""> 
                     <div class="blog-box-content">
                        <h5><?php the_title(); ?></h5>
                        <div class="date-commt">
                           <a href=""><i class="fa fa-clock-o" aria-hidden="true"></i>
                           <?php echo get_the_date(); ?></a>  
                           <a href=""> <i class="fa fa-comments-o" aria-hidden="true"></i>
                           <?php echo get_comments_number(); ?> Comments</a>
                        </div>
                        <p><?php the_excerpt(); ?></p>
                        <a class="read-more mt-3 org" href="<?php the_permalink(); ?>">More Info</a>
                     </div>
                  </div>
               </div>
               <?php
               endwhile;

               endif;
               wp_reset_postdata(); 
               ?>


              <!--  <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                  <div class="blog-box">
                     <img src="<?php echo bloginfo('template_directory'); ?>/images/press02.jpg" alt=""> 
                     <div class="blog-box-content">
                        <h5>At vero eos et accusamus aedqyt ducimus qui</h5>
                        <div class="date-commt">
                           <a href=""><i class="fa fa-clock-o" aria-hidden="true"></i>
                           November 04, 2019</a>  
                           <a href=""> <i class="fa fa-comments-o" aria-hidden="true"></i>
                           232 Comments</a>
                        </div>
                        <p>At vero eos et accusamus et iustoodio digni goikussimos ducimus qui blanp ditiis praesum voluum.</p>
                        <a class="read-more mt-3 org" href="press-releases-detail.html">More Info</a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                  <div class="blog-box">
                     <img src="<?php echo bloginfo('template_directory'); ?>/images/press03.jpg" alt=""> 
                     <div class="blog-box-content">
                        <h5>At vero eos et accusamus aedqyt ducimus qui</h5>
                        <div class="date-commt">
                           <a href=""><i class="fa fa-clock-o" aria-hidden="true"></i>
                           November 04, 2019</a>  
                           <a href=""> <i class="fa fa-comments-o" aria-hidden="true"></i>
                           232 Comments</a>
                        </div>
                        <p>At vero eos et accusamus et iustoodio digni goikussimos ducimus qui blanp ditiis praesum voluum.</p>
                       <a class="read-more mt-3 org" href="press-releases-detail.html">More Info</a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                  <div class="blog-box">
                     <img src="<?php echo bloginfo('template_directory'); ?>/images/press04.jpg" alt=""> 
                     <div class="blog-box-content">
                        <h5>At vero eos et accusamus aedqyt ducimus qui</h5>
                        <div class="date-commt">
                           <a href=""><i class="fa fa-clock-o" aria-hidden="true"></i>
                           November 04, 2019</a>  
                           <a href=""> <i class="fa fa-comments-o" aria-hidden="true"></i>
                           232 Comments</a>
                        </div>
                        <p>At vero eos et accusamus et iustoodio digni goikussimos ducimus qui blanp ditiis praesum voluum.</p>
                        <a class="read-more mt-3 org" href="press-releases-detail.html">More Info</a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                  <div class="blog-box">
                     <img src="<?php echo bloginfo('template_directory'); ?>/images/press05.jpg" alt=""> 
                     <div class="blog-box-content">
                        <h5>At vero eos et accusamus aedqyt ducimus qui</h5>
                        <div class="date-commt">
                           <a href=""><i class="fa fa-clock-o" aria-hidden="true"></i>
                           November 04, 2019</a>  
                           <a href=""> <i class="fa fa-comments-o" aria-hidden="true"></i>
                           232 Comments</a>
                        </div>
                        <p>At vero eos et accusamus et iustoodio digni goikussimos ducimus qui blanp ditiis praesum voluum.</p>
                        <a class="read-more mt-3 org" href="press-releases-detail.html">More Info</a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                  <div class="blog-box">
                     <img src="<?php echo bloginfo('template_directory'); ?>/images/press06.jpg" alt=""> 
                     <div class="blog-box-content">
                        <h5>At vero eos et accusamus aedqyt ducimus qui</h5>
                        <div class="date-commt">
                           <a href=""><i class="fa fa-clock-o" aria-hidden="true"></i>
                           November 04, 2019</a>  
                           <a href=""> <i class="fa fa-comments-o" aria-hidden="true"></i>
                           232 Comments</a>
                        </div>
                        <p>At vero eos et accusamus et iustoodio digni goikussimos ducimus qui blanp ditiis praesum voluum.</p>
                       <a class="read-more mt-3 org" href="press-releases-detail.html">More Info</a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                  <div class="blog-box">
                     <img src="<?php echo bloginfo('template_directory'); ?>/images/press07.jpg" alt=""> 
                     <div class="blog-box-content">
                        <h5>At vero eos et accusamus aedqyt ducimus qui</h5>
                        <div class="date-commt">
                           <a href=""><i class="fa fa-clock-o" aria-hidden="true"></i>
                           November 04, 2019</a>  
                           <a href=""> <i class="fa fa-comments-o" aria-hidden="true"></i>
                           232 Comments</a>
                        </div>
                        <p>At vero eos et accusamus et iustoodio digni goikussimos ducimus qui blanp ditiis praesum voluum.</p>
                        <a class="read-more mt-3 org" href="press-releases-detail.html">More Info</a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                  <div class="blog-box">
                     <img src="<?php echo bloginfo('template_directory'); ?>/images/press08.jpg" alt=""> 
                     <div class="blog-box-content">
                        <h5>At vero eos et accusamus aedqyt ducimus qui</h5>
                        <div class="date-commt">
                           <a href=""><i class="fa fa-clock-o" aria-hidden="true"></i>
                           November 04, 2019</a>  
                           <a href=""> <i class="fa fa-comments-o" aria-hidden="true"></i>
                           232 Comments</a>
                        </div>
                        <p>At vero eos et accusamus et iustoodio digni goikussimos ducimus qui blanp ditiis praesum voluum.</p>
                        <a class="read-more mt-3 org" href="press-releases-detail.html">More Info</a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                  <div class="blog-box">
                     <img src="<?php echo bloginfo('template_directory'); ?>/images/press09.jpg" alt=""> 
                     <div class="blog-box-content">
                        <h5>At vero eos et accusamus aedqyt ducimus qui</h5>
                        <div class="date-commt">
                           <a href=""><i class="fa fa-clock-o" aria-hidden="true"></i>
                           November 04, 2019</a>  
                           <a href=""> <i class="fa fa-comments-o" aria-hidden="true"></i>
                           232 Comments</a>
                        </div>
                        <p>At vero eos et accusamus et iustoodio digni goikussimos ducimus qui blanp ditiis praesum voluum.</p>
                        <a class="read-more mt-3 org" href="press-releases-detail.html">More Info</a>
                     </div>
                  </div>
               </div> -->




            </div>
         </div>
      </section>

<?php
endwhile;
//get_sidebar();
get_footer();
