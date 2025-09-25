<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package stacie
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area">
	<?php //dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- #secondary -->


     <div class="col-lg-3 col-sm-12 col-md-3">
                  <div class="blogleft">
                     <div class="title">Archives</div>
                     <div class="archices">
                        <?php dynamic_sidebar('sidebar-1'); ?>
                        <!-- <ul>
                           <li><a href="">January 2020 </a></li>
                           <li><a href="">February 2020 </a></li>
                           <li><a href="">March 2020 </a></li>
                           <li><a href="">April 2020 </a></li>
                           <li><a href="">May 2020 </a></li>
                           <li><a href="">June 2020 </a></li>
                           <li><a href="">July 2020 </a></li>
                           <li><a href="">August 2020 </a></li>
                           <li><a href="">September 2020 </a></li>
                           <li><a href="">October 2020 </a></li>
                           <li><a href="">November 2020</a></li>
                           <li><a href="">December 2020</a></li>
                        </ul> -->
                     </div>
                  </div>
                  <div class="blogleft">
                     <div class="title">Recent Post</div>
                     <div class="blog-cat-wrapper">

                        <?php //dynamic_sidebar('press_release_sidebar'); ?>

                       <?php 
                  $the_query = new WP_Query( 'posts_per_page=8&post_type=post&&orderby=date&order=desc' ); ?>

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
                        <!-- <ul>
                           <li><a href="">Blogs</a></li>
                           <li><a href="">Contests</a></li>
                           <li><a href="">Florida Contests</a></li>
                           <li><a href="">Indiana Contests</a></li>
                           <li><a href="">Iowa Contests</a></li>
                           <li><a href="">Press</a></li>
                           <li><a href="">Staff Blog</a></li>
                           <li><a href="">Uncategorized</a></li>
                           <li><a href="">West Virginia Contests</a></li>
                           <li><a href="">William Hill Sports: Odds & Ends</a></li>
                           <li><a href="">Win Total Wednesdays</a></li>
                        </ul> -->

                         <?php dynamic_sidebar('all_bets_category'); ?>
                     </div>
                  </div>
               </div>