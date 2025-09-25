<?php
/**
 * The template for displaying all pages
 *template name: Registration
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
               <div class="innerbanner-text-title">Registration</div>
               <div class="pt-breadcrumb-container">
                  <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-home mr-2"></i>Home</a></li>
                     <li class="breadcrumb-item active">Registration</li>
                  </ol>
               </div>
            </div>
         </div>
      </section>
      <!-----------------------  banner ------------------------------>
      <section class="login-wrapper">
         <div class="container">
            <div class="row">
               <div class="col-sm-6">
                  <div class="sign-up-update login-box w-100">
                     <div class="logo-login">
                        <a href="index.html"><img src="images/logo.png" alt=""> </a>
                        <div class="clearfix"></div>
                        <div class="title-text2 mb-3 mt-4">Registration</div>
                     </div>
                     <?php echo do_shortcode('[contact-form-7 id="5" title="Contact form 1" html_class="login mt-3"]'); ?>
                     <!-- <form class="login mt-3">
                        <div class="row">
                           <div class="col-sm-6">
                              <div class="form-group">
                                 <input type="text" class="form-control" placeholder="First Name"> 
                              </div>
                           </div>
                           <div class="col-sm-6">
                              <div class="form-group">
                                 <input type="text" class="form-control" placeholder="Last Name">  
                              </div>
                           </div>
                        </div>
                        <div class="form-group">
                           <input type="email" class="form-control" placeholder="Email">  
                        </div>
                        <div class="form-group">
                           <input type="phone" class="form-control" placeholder="Phone Number"> 
                        </div>
                        <div class="form-group">
                           <input type="phone" class="form-control" placeholder="Date of Birth">   
                        </div>
                        <div class="form-group">
                           <div class="form-check">
                              <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" value="">Terms &amp; Conditions
                              </label>
                           </div>
                        </div>
                        <div class="form-group">
                           <a class="read-more mt-3 w-100 text-center" href="#">Register now</a>
                        </div>
                     </form> -->
                  </div>
               </div>
               <div class="col-sm-6">
                  <div class="login-img"> 
                     <img src="<?php echo bloginfo('template_directory'); ?>/images/login.jpg" alt=""> 
                  </div>
               </div>
            </div>
         </div>
      </section>
    
<?php
endwhile;
//get_sidebar();
get_footer();
