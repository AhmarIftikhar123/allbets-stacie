<?php
/**
 * The template for displaying all pages
 *template name: Bios
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
         <div class="innerbanner-text-title">Management Bios</div>
         <div class="pt-breadcrumb-container">
            <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="<?php echo site_url(); ?>"><i class="fa fa-home mr-2"></i>Home</a>
               </li>
               <li class="breadcrumb-item active">Management Bios</li>
            </ol>
         </div>
      </div>
   </div>
</section>
<!-----------------------  banner ------------------------------>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
   <div class="container">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#inner-navbar" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="inner-navbar">
         <ul class="navbar-nav mx-auto">
            <?php
            if( have_rows('bios_menu_list') ):
            while( have_rows('bios_menu_list') ) : the_row();
            $bios_menu_title = get_sub_field('bios_menu_title');
            $bios_menu_link = get_sub_field('bios_menu_link');
           
            ?>
            <li class="nav-item"><a class="nav-link" href="<?php echo $bios_menu_link ?>"><?php echo $bios_menu_title; ?></a>
            </li>
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
       <?php
      if( have_rows('bios_team_list') ):
           $i=2; 
           $count=1;
      while( have_rows('bios_team_list') ) : the_row();
         $image = get_sub_field('image');
         $name = get_sub_field('name');
         $position = get_sub_field('position');
         $facebook_link = get_sub_field('facebook_link');
         $instagram_link = get_sub_field('instagram_link');
         $linked_in = get_sub_field('linked_in');
         $about = get_sub_field('about');

          if($i%2==0): 


            ?>
      <div class="bios">
         <div class="row">
            <div class="col-lg-4 col-sm-12 col-md-4">
               <div class="our-client-box">
                  <img src="<?php echo $image; ?>" alt="">
                  <div class="our-client-social">
                     <div class="client-social"> <a href="<?php echo $facebook_link; ?>"><i class="fa fa-facebook-f"></i></a>  <a href="<?php echo $instagram_link; ?>"><i class="fa fa-instagram"></i></a>  <a href="<?php echo $linked_in; ?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a> 
                     </div>
                  </div>
                  <div class="our-client-name">
                     <div class="heading-small-wht"><?php echo $position; ?></div>
                     <div class="title-text-wht"><?php echo $name; ?></div>
                  </div>
               </div>
            </div>
            <div class="col-lg-8 col-sm-12 col-md-8">
               <div class="client-info-box">
                  <div class="summary">
                     <p class="collapse" id="collapseSummary<?php echo $count; ?>"> <?php echo $about; ?>
                     </p>
                     <a class="collapsed" data-toggle="collapse" href="#collapseSummary<?php echo $count; ?>" aria-expanded="false" aria-controls="collapseSummary<?php echo $count; ?>"></a>
                  </div>
               </div>
            </div>
         </div>
      </div>
         <?php else: ?>
      <div class="bios">
         <div class="row">
            <div class="col-lg-8 col-sm-12 col-md-8">
               <div class="client-info-box">
                  <div class="summary">
                     <p class="collapse" id="collapseSummary<?php echo $count; ?>"> 
                        <?php echo $about; ?>
                     </p>
                     <a class="collapsed" data-toggle="collapse" href="#collapseSummary<?php echo $count; ?>" aria-expanded="false" aria-controls="collapseSummary<?php echo $count; ?>"></a>
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-sm-12 col-md-4">
               <div class="our-client-box">
                  <img src="<?php echo $image; ?>" alt="">
                  <div class="our-client-social">
                     <div class="client-social"> <a href="<?php echo $facebook_link; ?>"><i class="fa fa-facebook-f"></i></a>  <a href="<?php echo $instagram_link; ?>"><i class="fa fa-instagram"></i></a>  <a href="<?php echo $linked_in; ?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a>  
                     </div>
                  </div>
                  <div class="our-client-name">
                     <div class="heading-small-wht"><?php echo $position; ?></div>
                     <div class="title-text-wht"><?php echo $name; ?></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
         <?php endif; 
         $i++;
         $count++;
            endwhile;
         endif;
         ?>



      <!-- <div class="bios">
         <div class="row">
            <div class="col-sm-4">
               <div class="our-client-box">
                  <img src="<?php echo bloginfo('template_directory'); ?>/images/bio-pic03.jpg" alt="">
                  <div class="our-client-social">
                     <div class="client-social"> <a href="#"><i class="fa fa-facebook-f"></i></a>  <a href="#"><i class="fa fa-instagram"></i></a>  <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a> 
                     </div>
                  </div>
                  <div class="our-client-name">
                     <div class="heading-small-wht">Chief Executive Officer</div>
                     <div class="title-text-wht">Gwen Johnson</div>
                  </div>
               </div>
            </div>
            <div class="col-sm-8">
               <div class="client-info-box">
                  <div class="summary">
                     <p class="collapse" id="collapseSummary3"> <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc porttitor maximus laoreet. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In hac habitasse platea dictumst. Suspendisse venenatis sollicitudin erat in gravida. Sed eget nisl tristique, commodo lectus sit amet, vulputate sem. Cras porttitor lorem ipsum, sit amet iaculis massa feugiat vitae. Curabitur sapien odio, ullamcorper tincidunt interdum vitae, vestibulum eu neque. Nam leo massa, fringilla eget mauris feugiat, auctor suscipit justo.</span>  <span>In hac habitasse platea dictumst. Suspendisse venenatis sollicitudin erat in gravida. Sed eget nisl tristique, commodo It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout tristique senectus et netus et malesuada fames ac turpis egestas.</span>
                        <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</span>
                     </p>
                     <a class="collapsed" data-toggle="collapse" href="#collapseSummary3" aria-expanded="false" aria-controls="collapseSummary3"></a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="bios">
         <div class="row">
            <div class="col-sm-8">
               <div class="client-info-box">
                  <div class="summary">
                     <p class="collapse" id="collapseSummary4"> <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc porttitor maximus laoreet. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In hac habitasse platea dictumst. Suspendisse venenatis sollicitudin erat in gravida. Sed eget nisl tristique, commodo lectus sit amet, vulputate sem. Cras porttitor lorem ipsum, sit amet iaculis massa feugiat vitae. Curabitur sapien odio, ullamcorper tincidunt interdum vitae, vestibulum eu neque. Nam leo massa, fringilla eget mauris feugiat, auctor suscipit justo.</span>  <span>In hac habitasse platea dictumst. Suspendisse venenatis sollicitudin erat in gravida. Sed eget nisl tristique, commodo It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout tristique senectus et netus et malesuada fames ac turpis egestas.</span>
                        <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</span>
                     </p>
                     <a class="collapsed" data-toggle="collapse" href="#collapseSummary4" aria-expanded="false" aria-controls="collapseSummary4"></a>
                  </div>
               </div>
            </div>
            <div class="col-sm-4">
               <div class="our-client-box">
                  <img src="<?php echo bloginfo('template_directory'); ?>/images/bio-pic04.jpg" alt="">
                  <div class="our-client-social">
                     <div class="client-social"> <a href="#"><i class="fa fa-facebook-f"></i></a>  <a href="#"><i class="fa fa-instagram"></i></a>  <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a> 
                     </div>
                  </div>
                  <div class="our-client-name">
                     <div class="heading-small-wht">Chief Executive Officer</div>
                     <div class="title-text-wht">Gwen Johnson</div>
                  </div>
               </div>
            </div>
         </div>
      </div> -->
   </div>
</section>

<?php
endwhile;
//get_sidebar();
get_footer();
