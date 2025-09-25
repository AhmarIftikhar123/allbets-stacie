<?php
/**
 * The template for displaying all pages
 *template name: Parlay Card Menu
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
      
   
      
      <!-----------------------press-release-sec  ------------------------------>
<section class="space-wrapper">
         <div class="container">
            <div class="row">
               <div class="col-sm-12 col-lg-6 col-md-6">
                  <div class="race-img mb-5"> 
                     <img class="img-border" src="<?php the_field('parlay_card_menu_image'); ?>" alt=""> 
                  </div>
               </div>
               <div class="col-sm-12 col-lg-6 col-md-6">
                  <div class="inner-txt-wrapper">
                     <div class="title-text2 mb-3"><span><?php the_field('parlay_card_title'); ?></span></div>
                     <?php the_field('parlay_card_menu_content'); ?>

                  </div>
               </div>
            </div>
         </div>
      </section>     
      
<section class="space-wrapper">
         <div class="container">
            <div class="tab-pane fade show active bs-example" id="nav-addmision" role="tabpanel" aria-labelledby="nav-addmision-tab">
               <div class="accordion" id="accordionExample">

                         <?php
                  if( have_rows('parlay_card_menu_faq_lists') ):
                     $count = 1;
                  while( have_rows('parlay_card_menu_faq_lists') ) : the_row();
                  $parlay_card_menu_question = get_sub_field('parlay_card_menu_question');
                  $parlay_card_menu_faq_answer = get_sub_field('parlay_card_menu_faq_answer');
                  

                  ?>
                  <div class="card">
                     <div class="card-header" id="heading<?php echo $count; ?>">
                        <h2 class="mb-0">
                           <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapse<?php echo $count; ?>">
                           <i class="fa fa-angle-down"></i><?php echo $parlay_card_menu_question; ?>

                        </button>                           
                        </h2>
                     </div>
                     <div id="collapse<?php echo $count; ?>" class="collapse  <?php if($count == 1){ ?>show <?php } ?>" aria-labelledby="heading<?php echo $count; ?>" data-parent="#accordionExample">
                        <div class="card-body">
                           <p><?php echo $parlay_card_menu_faq_answer; ?> </p>
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
                           <i class="fa fa-angle-down"></i>New Jersey Pro Football Progressive Contest Card: – Week 2 Jackpot: $11,315</button>
                        </h2>
                     </div>
                     <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body">
                           <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don’t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn’t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. </p>
                        </div>
                     </div>
                  </div>
                  <div class="card">
                     <div class="card-header" id="headingThree">
                        <h2 class="mb-0">
                           <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree"><i class="fa fa-angle-down"></i>Nevada College Football Progressive Contest Card: – Done for the Season</button>                     
                        </h2>
                     </div>
                     <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body">
                           <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don’t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn’t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. </p>
                        </div>
                     </div>
                  </div>
                  <div class="card">
                     <div class="card-header" id="headingfour">
                        <h2 class="mb-0">
                           <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsefour"><i class="fa fa-angle-down"></i>
                           1/2-Point Card (Pro and College games)- (All All Bets Locations)</button>                     
                        </h2>
                     </div>
                     <div id="collapsefour" class="collapse" aria-labelledby="headingfour" data-parent="#accordionExample">
                        <div class="card-body">
                           <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don’t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn’t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. </p>
                        </div>
                     </div>
                  </div>
                  <div class="card">
                     <div class="card-header" id="headingfive">
                        <h2 class="mb-0">
                           <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsefive"><i class="fa fa-angle-down"></i>Teaser Card (Pro and college games)- (All All Bets Locations)</button>                     
                        </h2>
                     </div>
                     <div id="collapsefive" class="collapse" aria-labelledby="headingfive" data-parent="#accordionExample">
                        <div class="card-body">
                           <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don’t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn’t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. </p>
                        </div>
                     </div>
                  </div>
                  <div class="card">
                     <div class="card-header" id="headingsix">
                        <h2 class="mb-0">
                           <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsesix"><i class="fa fa-angle-down"></i>Big Teaser Card (Pro and college games) – (All All Bets Locations)</button>                     
                        </h2>
                     </div>
                     <div id="collapsesix" class="collapse" aria-labelledby="headingfive" data-parent="#accordionExample">
                        <div class="card-body">
                           <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don’t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn’t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. </p>
                        </div>
                     </div>
                  </div>
                  <div class="card">
                     <div class="card-header" id="headingseven">
                        <h2 class="mb-0">
                           <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseseven"><i class="fa fa-angle-down"></i>Pleaser Card (Pro games)- (All All Bets Locations)</button>                     
                        </h2>
                     </div>
                     <div id="collapseseven" class="collapse" aria-labelledby="headingseven" data-parent="#accordionExample">
                        <div class="card-body">
                           <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don’t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn’t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. </p>
                        </div>
                     </div>
                  </div>
                  <div class="card">
                     <div class="card-header" id="headingeight">
                        <h2 class="mb-0">
                           <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseeight"><i class="fa fa-angle-down"></i>$100,000 Card (Pro games available only)- NJ/NV/IA/IN/PA/WV</button>                     
                        </h2>
                     </div>
                     <div id="collapseeight" class="collapse" aria-labelledby="headingeight" data-parent="#accordionExample">
                        <div class="card-body">
                           <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don’t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn’t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. </p>
                        </div>
                     </div>
                  </div>
                  <div class="card">
                     <div class="card-header" id="headingnine">
                        <h2 class="mb-0">
                           <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsenine"><i class="fa fa-angle-down"></i>Mobile Parlay Card (Pro and College games)- Nevada</button>                     
                        </h2>
                     </div>
                     <div id="collapsenine" class="collapse" aria-labelledby="headingnine" data-parent="#accordionExample">
                        <div class="card-body">
                           <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don’t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn’t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. </p>
                        </div>
                     </div>
                  </div>
                  <div class="card">
                     <div class="card-header" id="headingten">
                        <h2 class="mb-0">
                           <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseten"><i class="fa fa-angle-down"></i>Multi-Sport Progressive Card – Done for Season</button>                     
                        </h2>
                     </div>
                     <div id="collapseten" class="collapse" aria-labelledby="headingten" data-parent="#accordionExample">
                        <div class="card-body">
                           <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don’t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn’t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. </p>
                        </div>
                     </div>
                  </div>
                 <div class="card">
                     <div class="card-header" id="headingten2">
                        <h2 class="mb-0">
                           <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseten2"><i class="fa fa-angle-down"></i>Exclusive Card- Done for Season</button>                     
                        </h2>
                     </div>
                     <div id="collapseten2" class="collapse" aria-labelledby="headingten2" data-parent="#accordionExample">
                        <div class="card-body">
                           <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don’t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn’t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. </p>
                           
                           <p><img src="<?php echo bloginfo('template_directory'); ?>/images/bog.jpg" alt=""></p>
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
