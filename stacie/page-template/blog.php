<?php
/**
 * The template for displaying all pages
 *template name: Blog
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
         <div class="innerbanner-text-title">Blog</div>
         <div class="pt-breadcrumb-container">
            <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-home mr-2"></i>Home</a>
               </li>
               <li class="breadcrumb-item active">Blog</li>
            </ol>
         </div>
      </div>
   </div>
</section>
<!-----------------------  banner ------------------------------>
<!-----------------------Blog-sec  ------------------------------>
<section class="space-wrapper">
   <div class="container">
      <div class="row">
         <div class="col-lg-3 col-sm-12 col-md-3">
            <div class="blogleft">
               <div class="title">Archives</div>
               <div class="archices">
                  <ul>
                     <?php dynamic_sidebar('blog_archieve'); ?>
                    <!--  <li><a href="">January 2020 </a>
                     </li>
                     <li><a href="">February 2020 </a>
                     </li>
                     <li><a href="">March 2020 </a>
                     </li>
                     <li><a href="">April 2020 </a>
                     </li>
                     <li><a href="">May 2020 </a>
                     </li>
                     <li><a href="">June 2020 </a>
                     </li>
                     <li><a href="">July 2020 </a>
                     </li>
                     <li><a href="">August 2020 </a>
                     </li>
                     <li><a href="">September 2020 </a>
                     </li>
                     <li><a href="">October 2020 </a>
                     </li>
                     <li><a href="">November 2020</a>
                     </li>
                     <li><a href="">December 2020</a>
                     </li> -->
                  </ul>
               </div>
            </div>
            <div class="blogleft">
               <div class="title">Recent Post</div>
               <div class="blog-cat-wrapper">
                  <?php 
                  $the_query = new WP_Query( 'posts_per_page=8&post_type=post&cat=6&orderby=date&order=desc' ); ?>

                  <?php 
                  // Start our WP Query
                  while ($the_query -> have_posts()) : $the_query -> the_post(); 
                  // Display the Post Title with Hyperlink
                  ?>
                  <div class="blog-left-cat">
                     <?php $featured_img_url_side = get_the_post_thumbnail_url(get_the_ID(),'full');  ?>
                     <img src="<?php echo $featured_img_url_side; ?>" alt="">
                     <p><?php the_title(); ?></p> <strong><?php echo get_the_date(); ?></strong>
                  </div>
                  <?php 
                  // Repeat the process and reset once it hits the limit
                  endwhile;
                  wp_reset_postdata();
                  ?>
                  
               </div>
            </div>
            <div class="blogleft">
               <div class="title">Cateories</div>
               <div class="archices">
                  <ul>
                     <?php $categories = get_categories();
                     foreach($categories as $category) { 
                     ?>

                      <li><a href="<?php echo get_category_link($category->term_id) ?>"><?php echo $category->name; ?></a>

                     <?php } ?>
                    
                  </ul>
               </div>
            </div>
         </div>

         <?php 
         $paged = (get_query_var('paged')) ? get_query_var('paged') : 1 ;

               $data = new WP_Query( $args );

               $data= new WP_Query(array(
               'post_type'=>'post', // your post type name
               'post_status' => 'publish',
               'cat' => 6,
               'posts_per_page' => 2, // post per page
               'paged' => $paged,
               ));

               if ( $data->have_posts() ) :

                  ?>
         <div class="col-lg-9 col-sm-12 col-md-9 row" id="blog-wrapper">
             
            <?php
               while ( $data->have_posts() ) : $data->the_post();
               ?>
            <div class="col-lg-6 col-sm-6 ">
               <div class="blog-box">
                  <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');  ?>
                  <img src="<?php echo$featured_img_url;  ?>" alt="">
                  <div class="blog-box-content">
                     <h5><?php the_title(); ?></h5>
                     <div class="date-commt"> <a href=""><i class="fa fa-clock-o" aria-hidden="true"></i>
                              <?php echo get_the_date(); ?></a> 
                        <a href=""> <i class="fa fa-comments-o" aria-hidden="true"></i>
                           <?php echo get_comments_number(); ?> Comments</a>
                     </div>
                     <p><?php the_excerpt(); ?></p> <a class="read-more mt-3 org" href="<?php the_permalink(); ?>">More Info</a>
                  </div>
               </div>
            </div>
            <?php
               endwhile;
               ?>

            
            <div class="col-lg-12 blog-pagination">
               <nav aria-label="...">
               <?php 
               $total_pages = $data->max_num_pages;

               if ($total_pages > 1){

                 $current_page = max(1, get_query_var('paged'));

                 echo paginate_links(array(
                     'base' => get_pagenum_link(1) . '%_%',
                     'format' => '/page/%#%',
                     'current' => $current_page,
                     'total' => $total_pages,
                     'prev_text'    => __('« prev'),
                     'next_text'    => __('next »'),
                 ));
               }
               ?>    
               

                  <!-- <ul class="pagination">
                     <li class="page-item"> <a class="page-link" href="#" tabindex="-1">Previous</a>
                     </li>
                     <li class="page-item"><a class="page-link" href="#">1</a>
                     </li>
                     <li class="page-item active"> <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                     </li>
                     <li class="page-item"><a class="page-link" href="#">3</a>
                     </li>
                     <li class="page-item"> <a class="page-link" href="#">Next</a>
                     </li>
                  </ul> -->
               </nav>
            </div>
            <?php else :?>
               <h3><?php _e('404 Error&#58; Not Found', ''); ?></h3>
         </div>
         <?php  endif; 
         wp_reset_postdata();
         ?>
      </div>
   </div>
</section>

<?php
endwhile;
//get_sidebar();
get_footer();
