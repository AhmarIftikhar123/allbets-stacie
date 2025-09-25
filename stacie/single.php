<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package stacie
 */

get_header();
?>

 <!-----------------------  banner ------------------------------>
      
      <section class="innerbanner ">
         <img src="<?php echo bloginfo('template_directory'); ?>/images/inner-banner.jpg" alt="">
         <div class="innerbanner-text">
            <div class="container">
               <div class="innerbanner-text-title">Blog</div>
               <div class="pt-breadcrumb-container">
                  <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="<?php echo site_url(); ?>"><i class="fa fa-home mr-2"></i>Home</a></li>
                     <li class="breadcrumb-item active">Blog Details</li>
                  </ol>
               </div>
            </div>
         </div>
      </section>
      
      <!-----------------------  banner ------------------------------>
 <section class="space-wrapper">
         <div class="container">
            <div class="row">
		          <?php get_sidebar(); ?>


		<div class="col-lg-9 col-sm-12 col-md-9">
       
                <div class="blog-box">

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			//get_template_part( 'template-parts/content', get_post_type() );

			/*-----------Anil code here-------------*/ ?>
			<?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');  ?>
			<img src="<?php echo $featured_img_url; ?>" alt=""> 
                        <div class="blog-box-content">
                           <h4 class="mt-3 mb-3"><?php the_title(); ?></h4>
                           <div class="date-commt">
                              <a href=""><i class="fa fa-clock-o" aria-hidden="true"></i>
                              <?php echo get_the_date(); ?></a>  
                              <a href=""> <i class="fa fa-comments-o" aria-hidden="true"></i>
                              <?php echo get_comments_number(); ?> Comments</a>
                           </div>
                           <?php the_content(); ?>
                           
                           
                          
                           
                       
                        </div>
                       <?php
			/*------------End anil code------------*/

			the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'stacie' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'stacie' ) . '</span> <span class="nav-title">%title</span>',
				)
			);

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->
</div>

</div>
  </div>
</div>
</section>

<?php

get_footer();
