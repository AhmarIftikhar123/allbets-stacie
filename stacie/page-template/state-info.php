<?php
/**
 * The template for displaying all pages
 *template name: State Info 
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
               <li class="breadcrumb-item"><a href="<?php echo site_url(); ?>"><i class="fa fa-home mr-2"></i>Home</a>
               </li>
               <li class="breadcrumb-item active"><?php the_title(); ?></li>
            </ol>
         </div>
      </div>
   </div>
</section>
<!-----------------------  banner ------------------------------>
<section class="space-wrapper">
   <div class="container">
      <div class="row">
         <div class="col-lg-7 col-sm-12 col-md-7">
            <div class="sign-up-update newsletter-head">
               <div class="heading-small"><?php the_field('best_sports_title'); ?></div>
            <?php the_field('best_sports_description'); ?>
            <?php echo do_shortcode('[contact-form-7 id="469" title="State info subscribe"]'); ?>
               <!-- <form>
                  <div class="d-flex justify-content-start align-items-center">
                     <input type="email" name="email" placeholder="Enter Your Email">
                     <button type="submit" class="btn bg_white">Subscribe</button>
                  </div>
                  <div class="form-check">
                     <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" value="">I certify that I am over 21 years old. *</label>
                  </div>
               </form>  -->
            </div>
         </div>
         <div class="col-lg-5 col-sm-12 col-md-5">
            <div class="race-img">
               <?php
$featured_image123=get_the_post_thumbnail_url($post->ID,'full');
if(!empty($featured_image123)){
               ?>
               <img class="img-border" src="<?php echo $featured_image123; ?>" alt="">
<?php } ?>               
            </div>
         </div>
      </div>
   </div>
</section>
<section class="space-wrapper">
   <div class="container">
      <div class="row">
         <div class="col-lg-5 col-sm-12 col-md-12 pr-0">
            <div class="application-wrapper">
               <form class="contact-form">
                  <div class="row">
                     <div class="col-sm-12">
                        <lable>Location</lable>
                        <div class="form-group">
                           <input type="text" class="form-control">
                        </div>
                     </div>
                     <div class="col-sm-6">
                        <lable>Type</lable>
                        <div class="form-group">
                           <select class="form-control">
                              <option value="" selected="selected">All</option>
                              <option value="">Full Service Sports Book</option>
                              <option value="">Sports Betting Kiosk</option>
                              <option value="">Race Book</option>
                              <option value="">Deposit Hot Spot</option>
                              <option value="">PayNearMe Mobile Deposit</option>
                           </select>
                        </div>
                     </div>
                     <div class="col-sm-6">
                        <lable>State</lable>
                        <div class="form-group">
                           <select class="form-control">
                              <option value="" selected="selected">All</option>
                              <option value="">Colorado</option>
                              <option value="">District Of Columbia</option>
                              <option value="">Florida</option>
                              <option value="">Illinois</option>
                              <option value="">Iowa</option>
                              <option value="">Mississippi</option>
                           </select>
                        </div>
                     </div>
                     <div class="col-sm-12 address"> <strong>Isle Casino Hotel Black Hawk</strong>
                        <p>Sports Betting Kiosk | Colorado
                           <br>401 Lorem Ipsum is simply
                           <br>Dummy text CO 80422
                           <br>United States</p>
                        <p>Monday: 11:00 AM - 7:00 PM
                           <br>Tuesday: 11:00 AM - 7:00 PM
                           <br>Wednesday: 11:00 AM - 7:00 PM
                           <br>Thursday: 11:00 AM - 7:00 PM
                           <br>Friday: 11:00 AM - 7:00 PM
                           <br>Saturday: 11:00 AM - 7:00 PM
                           <br>Sunday: 11:00 AM - 7:00 PM</p>
                     </div>
                     <div class="col-sm-12">
                        <div class="form-group"> <a class="read-more mt-3 org" href="#">Get Directions</a>
                           <a class="read-more mt-3 org" href="#">More Info</a>
                        </div>
                     </div>
                  </div>
               </form>
            </div>
         </div>
         <div class="col-lg-7 col-md-12 col-md-12 pl-0">
            <div class="location-map">
               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d55565170.29301636!2d-132.08532758867793!3d31.786060306224!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited%20States!5e0!3m2!1sen!2sin!4v1599548740366!5m2!1sen!2sin" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
         </div>
      </div>
   </div>
</section>
<!-----------------------start-footer-css------------------------------>
<?php
endwhile;
//get_sidebar();
get_footer();
