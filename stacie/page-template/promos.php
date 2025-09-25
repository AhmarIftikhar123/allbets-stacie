<?php
/**
 * The template for displaying all pages
 *template name: Promotions
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
      <!-----------------------banner ------------------------------>
      <section class="space-wrapper">
         <div class="container">
            <div class="row">

               <?php 
               $args = array( 'post_type' => 'promotion', 'posts_per_page' => -1, 'category'=>'promotion', 'orderby'=>'date','order'=>'DESC','status'=>'publish' );
               $the_query = new WP_Query( $args ); 
               ?>
               <?php if ( $the_query->have_posts() ) : ?>
               <?php while ( $the_query->have_posts() ) : $the_query->the_post(); 
               ?>

               <div class="col-lg-6 col-sm-12">
                  <div class="promos-wrapper">
                     <div class="row align-items-center">
                        <div class="col-md-6 pr-0 h-100">
                           <div class="promos-pic">
                              <a href="<?php the_permalink(); ?>">
                                 <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');  ?>
                                 <img src="<?php echo $featured_img_url; ?>" alt=""/></a> 
                           </div>
                        </div>
                        <div class="col-md-6 align-content-center">
                           <div class="promos-txt">
                              <strong class="wht-heading-after"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></strong>
                              <?php the_excerpt(); ?>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

<?php  endwhile; endif;  ?>
<?php wp_reset_postdata(); ?>


              <!--  <div class="col-lg-6 col-sm-12">
                  <div class="promos-wrapper org">
                     <div class="row align-items-center">
                        <div class="col-md-6 pr-0">
                           <div class="promos-pic">
                              <a href="promos-detail.html"><img src="<?php echo bloginfo('template_directory'); ?>/images/promo02.jpg" alt=""/></a> 
                           </div>
                        </div>
                        <div class="col-md-6 align-content-center">
                           <div class="promos-txt">
                              <strong class="wht-heading-after"><a href="promos-detail.html">Free Throw Dough</a></strong>
                              <p class="wht">All Bets empowers its customers by offering them several jurisdictionally-based limit options to enjoy their gaming experience responsibly.</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6 col-sm-12">
                  <div class="promos-wrapper org">
                     <div class="row align-items-center">
                        <div class="col-md-6 pr-0">
                           <div class="promos-pic">
                              <a href="promos-detail.html"><img src="<?php echo bloginfo('template_directory'); ?>/images/promo03.jpg" alt=""/></a> 
                           </div>
                        </div>
                        <div class="col-md-6 align-content-center">
                           <div class="promos-txt">
                              <strong class="wht-heading-after"><a href="promos-detail.html">Play the Hits</a></strong>
                              <p class="wht">All Bets empowers its customers by offering them several jurisdictionally-based limit options to enjoy their gaming experience responsibly.</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6 col-sm-12">
                  <div class="promos-wrapper">
                     <div class="row align-items-center">
                        <div class="col-md-6 pr-0">
                           <div class="promos-pic">
                              <a href="promos-detail.html"><img src="<?php echo bloginfo('template_directory'); ?>/images/promo04.jpg" alt=""/></a> 
                           </div>
                        </div>
                        <div class="col-md-6 align-content-center">
                           <div class="promos-txt">
                              <strong class="wht-heading-after"><a href="promos-detail.html">Power Playoffs</a></strong>
                              <p class="wht">All Bets empowers its customers by offering them several jurisdictionally-based limit options to enjoy their gaming experience responsibly.</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6 col-sm-12">
                  <div class="promos-wrapper">
                     <div class="row align-items-center">
                        <div class="col-md-6 pr-0">
                           <div class="promos-pic">
                              <a href="promos-detail.html"><img src="<?php echo bloginfo('template_directory'); ?>/images/promo05.jpg" alt=""/></a> 
                           </div>
                        </div>
                        <div class="col-md-6 align-content-center">
                           <div class="promos-txt">
                              <strong class="wht-heading-after"><a href="promos-detail.html">$50 Risk Free Casino</a></strong>
                              <p class="wht">All Bets empowers its customers by offering them several jurisdictionally-based limit options to enjoy their gaming experience responsibly.</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6 col-sm-12">
                  <div class="promos-wrapper org">
                     <div class="row align-items-center">
                        <div class="col-md-6 pr-0">
                           <div class="promos-pic">
                              <a href="promos-detail.html"><img src="<?php echo bloginfo('template_directory'); ?>/images/promo06.jpg" alt=""/></a> 
                           </div>
                        </div>
                        <div class="col-md-6 align-content-center">
                           <div class="promos-txt">
                              <strong class="wht-heading-after"><a href="promos-detail.html">First TD Boost</a></strong>
                              <p class="wht">All Bets empowers its customers by offering them several jurisdictionally-based limit options to enjoy their gaming experience responsibly.</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6 col-sm-12">
                  <div class="promos-wrapper org">
                     <div class="row align-items-center">
                        <div class="col-md-6 pr-0">
                           <div class="promos-pic">
                              <a href="promos-detail.html"><img src="<?php echo bloginfo('template_directory'); ?>/images/promo07.jpg" alt=""/></a> 
                           </div>
                        </div>
                        <div class="col-md-6 align-content-center">
                           <div class="promos-txt">
                              <strong class="wht-heading-after"><a href="promos-detail.html">Golden Game</a></strong>
                              <p class="wht">All Bets empowers its customers by offering them several jurisdictionally-based limit options to enjoy their gaming experience responsibly.</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6 col-sm-12">
                  <div class="promos-wrapper">
                     <div class="row align-items-center">
                        <div class="col-md-6 pr-0">
                           <div class="promos-pic">
                              <a href="promos-detail.html"><img src="<?php echo bloginfo('template_directory'); ?>/images/promo08.jpg" alt=""/></a> 
                           </div>
                        </div>
                        <div class="col-md-6 align-content-center">
                           <div class="promos-txt">
                              <strong class="wht-heading-after"><a href="promos-detail.html">Bet & Get</a></strong>
                              <p class="wht">All Bets empowers its customers by offering them several jurisdictionally-based limit options to enjoy their gaming experience responsibly.</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div> -->


            </div>
         </div>
      </section>
      <section class="space-wrapper">
         <div class="container">
            <div class="col-lg-12 text-center">
               <div class="heading-small">Best Sports Betting Sites</div>
               <div class="title-text mb-3 heading">The Best in Online Gambling</div>
            </div>
            <div class="promos-box mt-5">
               <div class="row align-items-center">
                  <div class="col-lg-6 col-sm-12">
                     <div class="promos-nfo">
                        <h3 class="blk-heading">Promotions</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                     </div>
                  </div>
                  <div class="col-lg-6 col-sm-12 pl-0">
                     <div class="promos-img"> 
                        <img src="<?php echo bloginfo('template_directory'); ?>/images/promo09.jpg" alt=""> 
                     </div>
                  </div>
               </div>
               <div class="row align-items-center">
                  <div class="col-lg-6 col-sm-12 pr-0">
                     <div class="promos-img"> 
                        <img src="<?php echo bloginfo('template_directory'); ?>/images/promo10.jpg" alt=""> 
                     </div>
                  </div>
                  <div class="col-lg-6 col-sm-12">
                     <div class="promos-nfo">
                        <h3 class="blk-heading">All Your Favorite Sports</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>

<?php
endwhile;
//get_sidebar();
get_footer();
