<?php
/**
 * The template for displaying all pages
 *template name: Careers 
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
         <div class="innerbanner-text-title">Careers</div>
         <div class="pt-breadcrumb-container">
            <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="<?php echo site_url(); ?>"><i class="fa fa-home mr-2"></i>Home</a>
               </li>
               <li class="breadcrumb-item active">Careers</li>
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
            if( have_rows('career_menu_list') ):
            while( have_rows('career_menu_list') ) : the_row();
            $name = get_sub_field('name');
            $page_link = get_sub_field('page_link');
           
            ?>
            <li class="nav-item"><a class="nav-link" href="<?php echo $page_link; ?>"><?php echo $name; ?></a>
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
<!-----------------------start-step-sec  ------------------------------>
<section class="space-wrapper">
   <div class="container">
      <div class="row align-items-center about-info">
         <div class="col-sm-12">
            <div class="inner-txt-wrapper">
               <div class="title-text2 mb-3"><span><?php the_field('career_heading'); ?></span>
               </div>
              <?php the_field('career_content'); ?>
            </div>
         </div>
      </div>
   </div>
</section>
<!-----------------------start-NEXT MATCH------------------------------->
<div class="next-match search-job">
   <div class="container">
      <div class="col-lg-12 text-center">
         <div class="title-text-wht mb-3"><?php the_field('search_job_title'); ?></div>
      </div>
      <div class="col-lg-12 text-center">
         <p><?php the_field('search_job_content'); ?></p>
         <div class="btn-wrapper"> <a class="read-more org" href="<?php the_field('search_job_link'); ?>"><?php the_field('search_job_button_title'); ?></a>  <a class="read-more org" href="<?php the_field('join_talent_community_link'); ?>"><?php the_field('join_talent_community_title'); ?></a>
         </div>
      </div>
   </div>
</div>
<!-----------------------end-NEXT MATCH------------------------------>
<div class="loaction-sec our-value">
   <div class="container">
      <div class="inner-txt-wrapper">
         <div class="title-text2 mb-3"><span><?php the_field('our_values_title'); ?></span>
         </div>
         <p><?php the_field('our_values_content'); ?></p>
      </div>
      <div class="clearfix"></div>
      <div class="values-wrapper mt-5">
          <?php
            if( have_rows('our_values_list') ):
            while( have_rows('our_values_list') ) : the_row();
            $our_values_list_title = get_sub_field('our_values_list_title');
            $our_values_list_content = get_sub_field('our_values_list_content');
           
            ?>
         <div class="service-box">
            <div class="service-box-body"> <strong><?php echo $our_values_list_title; ?></strong> 
               <?php echo $our_values_list_content; ?>
            </div>
         </div>
        <?php
            endwhile;
            else :
            endif;
            ?>

      </div>
   </div>
</div>
<section class="space-wrapper">
   <div class="container">
      <div class="col-lg-12 text-center">
         <div class="heading-small"><?php the_field('current_job_opening_title'); ?></div>
         <div class="title-text mb-3 heading"><?php the_field('current_job_opening_sub_title'); ?></div>
      </div>
      <div class="col-lg-12 text-center mt-5">
        <?php the_field('current_job_opening_content'); ?>
      </div>
      <div class="tab-pane fade show active bs-example" id="nav-addmision" role="tabpanel" aria-labelledby="nav-addmision-tab">
         <div class="accordion" id="accordionExample">

            <?php
if( have_rows('current_job_list') ):
   $count = 1 ;
    while( have_rows('current_job_list') ) : the_row();
        $current_job_title = get_sub_field('current_job_title');
        $current_job_details = get_sub_field('current_job_details');
        
        ?>


            <div class="card">
               <div class="card-header" id="heading<?php echo $count; ?>">
                  <h2 class="mb-0">
                           <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapse<?php echo $count; ?>">
                           <i class="fa fa-angle-down"></i> <?php echo $current_job_title; ?></button>                         
                        </h2>
               </div>
               <div id="collapse<?php echo $count; ?>" class="collapse" aria-labelledby="heading<?php echo $count; ?>" data-parent="#accordionExample">
                  <div class="card-body">
                     <p><?php echo $current_job_details; ?></p>
                  </div>
               </div>
            </div>
         <?php
         $count++;
         endwhile;
         else :
         endif;
         ?>



           <!--  <div class="card">
               <div class="card-header" id="headingTwo">
                  <h2 class="mb-0">
                           <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo">
                           <i class="fa fa-angle-down"></i>CBS, Field Support</button>
                        </h2>
               </div>
               <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionExample">
                  <div class="card-body">
                     <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don’t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn’t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>
                  </div>
               </div>
            </div>
            
            <div class="card">
               <div class="card-header" id="headingThree">
                  <h2 class="mb-0">
                           <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree"><i class="fa fa-angle-down"></i>Digital</button>                     
                        </h2>
               </div>
               <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                  <div class="card-body">
                     <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don’t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn’t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>
                  </div>
               </div>
            </div>
            <div class="card">
               <div class="card-header" id="headingfour">
                  <h2 class="mb-0">
                           <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsefour"><i class="fa fa-angle-down"></i>
                           Field Operations</button>                     
                        </h2>
               </div>
               <div id="collapsefour" class="collapse" aria-labelledby="headingfour" data-parent="#accordionExample">
                  <div class="card-body">
                     <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don’t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn’t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>
                  </div>
               </div>
            </div>
            <div class="card">
               <div class="card-header" id="headingfive">
                  <h2 class="mb-0">
                           <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsefive"><i class="fa fa-angle-down"></i>Finance</button>                     
                        </h2>
               </div>
               <div id="collapsefive" class="collapse" aria-labelledby="headingfive" data-parent="#accordionExample">
                  <div class="card-body">
                     <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don’t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn’t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>
                  </div>
               </div>
            </div>
            <div class="card">
               <div class="card-header" id="headingsix">
                  <h2 class="mb-0">
                           <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsesix"><i class="fa fa-angle-down"></i>Information Technology</button>                     
                        </h2>
               </div>
               <div id="collapsesix" class="collapse" aria-labelledby="headingfive" data-parent="#accordionExample">
                  <div class="card-body">
                     <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don’t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn’t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>
                  </div>
               </div>
            </div>
            <div class="card">
               <div class="card-header" id="headingseven">
                  <h2 class="mb-0">
                           <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseseven"><i class="fa fa-angle-down"></i>Legal & Compliance</button>                     
                        </h2>
               </div>
               <div id="collapseseven" class="collapse" aria-labelledby="headingseven" data-parent="#accordionExample">
                  <div class="card-body">
                     <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don’t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn’t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>
                  </div>
               </div>
            </div>
            <div class="card">
               <div class="card-header" id="headingeight">
                  <h2 class="mb-0">
                           <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseeight"><i class="fa fa-angle-down"></i>Join our Marketing team</button>                     
                        </h2>
               </div>
               <div id="collapseeight" class="collapse" aria-labelledby="headingeight" data-parent="#accordionExample">
                  <div class="card-body">
                     <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don’t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn’t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>
                  </div>
               </div>
            </div>
            <div class="card">
               <div class="card-header" id="headingnine">
                  <h2 class="mb-0">
                           <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsenine"><i class="fa fa-angle-down"></i>Product Technology</button>                     
                        </h2>
               </div>
               <div id="collapsenine" class="collapse" aria-labelledby="headingnine" data-parent="#accordionExample">
                  <div class="card-body">
                     <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don’t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn’t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>
                  </div>
               </div>
            </div>
            <div class="card">
               <div class="card-header" id="headingten">
                  <h2 class="mb-0">
                           <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseten"><i class="fa fa-angle-down"></i>Sports Book</button>                     
                        </h2>
               </div>
               <div id="collapseten" class="collapse" aria-labelledby="headingten" data-parent="#accordionExample">
                  <div class="card-body">
                     <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don’t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn’t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>
                  </div>
               </div>
            </div>
            <div class="card">
               <div class="card-header" id="headingeleven">
                  <h2 class="mb-0">
                           <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseeleven"><i class="fa fa-angle-down"></i>Trading</button>                     
                        </h2>
               </div>
               <div id="collapseeleven" class="collapse" aria-labelledby="headingeleven" data-parent="#accordionExample">
                  <div class="card-body">
                     <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don’t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn’t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>
                  </div>
               </div>
            </div> -->
         </div>
      </div>
   </div>
</section>

<?php
endwhile;
//get_sidebar();
get_footer();
