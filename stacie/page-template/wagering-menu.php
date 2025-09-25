<?php
/**
 * The template for displaying all pages
 *template name: Wagering Menu
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
         <div class="innerbanner-text-title">Wagering Menu</div>
         <div class="pt-breadcrumb-container">
            <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-home mr-2"></i>Home</a>
               </li>
               <li class="breadcrumb-item active">Wagering Menu</li>
            </ol>
         </div>
      </div>
   </div>
</section>
<!-----------------------  banner ------------------------------>
<!-----------------------start-step-sec  ------------------------------>
<section class="space-wrapper">
   <div class="container">
      <div class="row align-items-center about-info">
         <div class="col-sm-12">
            <div class="inner-txt-wrapper">
               <div class="title-text2 mb-3"><span><?php the_field('wagering_menu_heading'); ?></span>
               </div>
               <p><?php the_field('wagering_menu_content'); ?></p>
               <p><?php the_field('wagering_menu_sub_heading'); ?>
               </p>
            </div>
         </div>
         <div class="col-sm-12">
            <div class="tab-pane fade show active bs-example" id="nav-addmision" role="tabpanel" aria-labelledby="nav-addmision-tab">
               <div class="accordion" id="accordionExample">

                  <?php if( have_rows('wagering_menu_game_lists') ):
                  $count = 1;
                  while( have_rows('wagering_menu_game_lists') ) : the_row();
                  $wagering_menu_game_name = get_sub_field('wagering_menu_game_name');
                  $wagering_menu_game_content = get_sub_field('wagering_menu_game_content');
                  ?>
                  <div class="card">
                     <div class="card-header" id="heading<?php echo $count; ?>">
                        <h2 class="mb-0">
                           <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapse<?php echo $count; ?>">
                           <i class="fa fa-angle-down"></i><?php echo $wagering_menu_game_name; ?></button>                          
                        </h2>
                     </div>
                     <div id="collapse<?php echo $count; ?>" class="collapse <?php if($count == 1){ echo 'show'; } ?>" aria-labelledby="heading<?php echo $count; ?>" data-parent="#accordionExample">
                        <div class="card-body">
                          <?php echo $wagering_menu_game_content; ?>
                        </div>
                     </div>
                  </div>
                   <?php
                  $count++;
                  endwhile;
                  endif;
                  ?>

                  



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
