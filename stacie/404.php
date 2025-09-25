<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package stacie
 */

get_header();
?>
<section class="innerbanner">
         <img src="<?php echo bloginfo('template_directory'); ?>/images/inner-banner.jpg" alt="">
         <div class="innerbanner-text">
            <div class="container">
               <div class="innerbanner-text-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'stacie' ); ?></div>
               <div class="pt-breadcrumb-container">
                  <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="<?php echo site_url();?>"><i class="fa fa-home mr-2"></i>Home</a></li>
                     <li class="breadcrumb-item active"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'stacie' ); ?></li>
                  </ol>
               </div>
            </div>
         </div>
   </section>
<div class="container">
	<main id="primary" class="site-main">

		<section class="error-404 not-found">
			

			<div class="page-content mt-5">
				<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'stacie' ); ?></p>

					


					

			</div><!-- .page-content -->
		</section><!-- .error-404 -->

	</main><!-- #main -->
</div>

<?php
get_footer();
