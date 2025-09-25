<?php
/**
 * The template for displaying all pages
 *template name: Media Hits
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
            <div class="media-content-wrapper">
               <?php
            if( have_rows('media_hits_listing') ):
            while( have_rows('media_hits_listing') ) : the_row();
            $media_name = get_sub_field('media_name');
            $media_link = get_sub_field('media_link');
            $media_date = get_sub_field('media_date');
           
            ?>
               <div class="media-content">
                  <h4><a href="<?php echo $media_link; ?>"><?php echo $media_name; ?></a></h4>
                  <p><?php echo $media_date; ?></p>
               </div>
               
               <?php
            endwhile;
            else :
            endif;
            ?>
               <!-- <div class="media-content">
                  <h4><a href="">All Bets Strip sportsbook presence grows through CG purchase, Caesars transition</a></h4>
                  <p>Gaming Today - August 27, 2020</p>
               </div>
               <div class="media-content">
                  <h4><a href="">All Bets takeover of CG Technology approved</a></h4>
                  <p>Gaming Today - August 27, 2020</p>
               </div>
               <div class="media-content">
                  <h4><a href="">Iowa’s anniversary a happy one</a></h4>
                  <p>Gaming Today - August 27, 2020</p>
               </div>
               <div class="media-content">
                  <h4><a href="">All Bets Strip sportsbook presence grows through CG purchase, Caesars transition</a></h4>
                  <p>Gaming Today - August 27, 2020</p>
               </div>
               <div class="media-content">
                  <h4><a href="">All Bets takeover of CG Technology approved</a></h4>
                  <p>Gaming Today - August 27, 2020</p>
               </div>
               <div class="media-content">
                  <h4><a href="">Iowa’s anniversary a happy one</a></h4>
                  <p>Gaming Today - August 27, 2020</p>
               </div>
               <div class="media-content">
                  <h4><a href="">All Bets Strip sportsbook presence grows through CG purchase, Caesars transition</a></h4>
                  <p>Gaming Today - August 27, 2020</p>
               </div> -->
            </div>
         </div>
      </section>

<?php
endwhile;
//get_sidebar();
get_footer();
