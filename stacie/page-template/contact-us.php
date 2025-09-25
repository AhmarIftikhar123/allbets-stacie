   <?php
/**
 * The template for displaying all pages
 *template name: Contact Us
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
   <img src="<?php the_field('conatct_banner'); ?>" alt="">
   <div class="innerbanner-text">
      <div class="container">
         <div class="innerbanner-text-title"><?php the_title(); ?></div>
         <div class="pt-breadcrumb-container">
            <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="<?php echo site_url(); ?>"><i class="fa fa-home mr-2"></i>Home</a>
               </li>
               <li class="breadcrumb-item active"><?php the_title(); ?></li>
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
            if( have_rows('contact_menu_list') ):
            while( have_rows('contact_menu_list') ) : the_row();
            $contact_menu_name = get_sub_field('contact_menu_name');
            $select_link = get_sub_field('select_link');
            ?>
            <li class="nav-item"><a class="nav-link" href="<?php echo $select_link; ?>"><?php echo $contact_menu_name; ?></a>
            </li>
            <?php
            endwhile;
            else :
            endif;
            ?>
            <!-- <li class="nav-item"><a class="nav-link" href="about-us.html">About Us </a>
            </li>
            <li class="nav-item"><a class="nav-link" href="press-releases.html">Press Releases</a>
            </li>
            <li class="nav-item"><a class="nav-link" href="media-hits.html">Media Hits</a>
            </li>
            <li class="nav-item"><a class="nav-link" href="bios.html">Management Bios</a>
            </li>
            <li class="nav-item"><a class="nav-link" href="careers.html">Careers</a>
            </li>
            <li class="nav-item"><a class="nav-link" href="contact-us.html">Contact Us</a>
            </li> -->
         </ul>
      </div>
   </div>
</nav>
<div class="loaction-sec contact-us">
   <div class="container">
      <div class="col-lg-12 text-center">
         <div class="title-text mb-3 heading"><?php the_field('get_in_touch_sub_title'); ?></div>
      </div>
      <div class="clearfix"></div>
      <div class="row mt-5">
         <?php
            if( have_rows('contact_address_list') ):
            while( have_rows('contact_address_list') ) : the_row();
            $contact_image = get_sub_field('contact_image');
            $contact_title = get_sub_field('contact_title');
            $contact_details = get_sub_field('contact_details');
            ?>
         <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="service-box mt-5">
               <div class="service-box-icon">
                  <img src="<?php echo $contact_image; ?>" alt="">
               </div>
               <div class="service-box-body"> <strong><?php echo $contact_title; ?></strong> 
                  <p><?php echo $contact_details; ?></p>
               </div>
            </div>
         </div>
         <?php
            endwhile;
            else :
            endif;
            ?>
         <!-- <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <div class="service-box mt-5">
               <div class="service-box-icon">
                  <img src="<?php //echo bloginfo('template_directory'); ?>/images/cont-icon02.png" alt="">
               </div>
               <div class="service-box-body"> <strong>contact number</strong> 
                  <p><a href="">+ (123) 124-567-8901</a>
                     <a href="">+ (123) 124-567-8901</a>
                  </p>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <div class="service-box mt-5">
               <div class="service-box-icon">
                  <img src="<?php //echo bloginfo('template_directory'); ?>/images/cont-icon03.png" alt="">
               </div>
               <div class="service-box-body"> <strong>email address</strong> 
                  <p><a href="">support@All Betssportsbook.com</a>
                     <a href="">admin@All Betssportsbook.com</a>
                  </p>
               </div>
            </div>
         </div> -->
      </div>
   </div>
</div>
<div class="container">
   <div class="row">
      <div class="col-md-6 col-sm-12 col-xs-12">
         <div class="application-wrapper">
           
             
                  <?php echo do_shortcode('[contact-form-7 id="302" title="Contact us page"]'); ?>
                  <!-- <div class="col-sm-6">
                     <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your First Name">
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Last Name">
                     </div>
                  </div>
                  <div class="col-sm-12">
                     <div class="form-group">
                        <input type="email" class="form-control" placeholder="Your Email Address">
                     </div>
                  </div>
                  <div class="col-sm-12">
                     <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Phone No">
                     </div>
                  </div>
                  <div class="col-sm-12">
                     <div class="form-group">
                        <select class="form-control">
                           <option value="General Questions/Customer Feedback" selected="selected">General Questions/Customer Feedback</option>
                           <option value="Technical/Account Support">Technical/Account Support</option>
                           <option value="Mobile Account Sign Up">Mobile Account Sign Up</option>
                           <option value="Mail Pay">Mail Pay</option>
                           <option value="Press / Marketing Inquiries">Press / Marketing Inquiries</option>
                           <option value="New Business Inquiries">New Business Inquiries</option>
                           <option value="Human Resources">Human Resources</option>
                        </select>
                     </div>
                  </div>
                  <div class="col-sm-12">
                     <div class="form-group">
                        <textarea class="form-control" placeholder="Question/Inquiry"></textarea>
                     </div>
                  </div>
                  <div class="col-sm-12">
                     <div class="form-group"> <a class="read-more mt-3" href="#">Submit</a>
                     </div>
                  </div> -->


              
          
         </div>
      </div>
      <div class="col-md-6 col-sm-12 col-xs-12">
         <div class="contact-img">
            <img src="<?php echo the_field('contact_right_image'); ?>" alt="">
         </div>
      </div>
      <div class="col-sm-12">
         <div class="location-map">
            <?php echo the_field('google_map'); ?>
         </div>
      </div>
   </div>
</div>

<?php
endwhile;
//get_sidebar();
get_footer();
