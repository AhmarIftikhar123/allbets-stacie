<?php
/**
 * The template for displaying all pages
 *template name: Wager Disclaimers
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
         <div class="innerbanner-text-title">Wager Disclaimers</div>
         <div class="pt-breadcrumb-container">
            <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-home mr-2"></i>Home</a>
               </li>
               <li class="breadcrumb-item active">Wager Disclaimers</li>
            </ol>
         </div>
      </div>
   </div>
</section>
<!-----------------------  banner ------------------------------>
<section class="space-wrapper">
   <div class="container">

      <?php if( have_rows('wager_disclaimers_lists') ):
      $i = 1;
      while( have_rows('wager_disclaimers_lists') ) : the_row();
      $wager_disclaimers_image = get_sub_field('wager_disclaimers_image');
      $wager_disclaimers_name = get_sub_field('wager_disclaimers_name');
      $wager_disclaimers_content = get_sub_field('wager_disclaimers_content');
      ?>
      <?php if($i%2 != 0): ?>
      <div class="row">
         <div class="col-sm-12 col-lg-6 col-md-6 pr-0">
            <div class="disclaimer">
               <div class="title-text2 mb-3"><span><?php echo $wager_disclaimers_name; ?></span>
               </div>
               <div class="summary">
                  <p class="collapse" id="collapseSummary<?php echo $i; ?>"> 
                  <?php echo $wager_disclaimers_content; ?> 
                  </p>
                  <a class="collapsed" data-toggle="collapse" href="#collapseSummary<?php echo $i; ?>" aria-expanded="false" aria-controls="<?php echo $i; ?>"></a>
               </div>
            </div>
         </div>
         <div class="col-sm-12 col-lg-6 col-md-6 pl-0">
            <div class="race-img">
               <img src="<?php echo $wager_disclaimers_image; ?>" alt="">
            </div>
         </div>
      </div>
      <?php else: ?>

      <div class="row">
         <div class="col-sm-12 col-lg-6 col-md-6 pr-0">
            <div class="race-img">
               <img src="<?php echo $wager_disclaimers_image; ?>" alt="">
            </div>
         </div>
         <div class="col-sm-12 col-lg-6 col-md-6 pl-0">
            <div class="disclaimer">
               <div class="title-text2 mb-3"><span><?php echo $wager_disclaimers_name; ?></span>
               </div>
               <div class="summary">
                  <p class="collapse" id="collapseSummary<?php echo $i; ?>"> <?php echo $wager_disclaimers_content; ?> 
                  </p>
                  <a class="collapsed" data-toggle="collapse" href="#collapseSummary<?php echo $i; ?>" aria-expanded="false" aria-controls="collapseSummary<?php echo $i; ?>"></a>
               </div>
            </div>
         </div>
      </div>
      <?php
      endif;
       $i++;
      endwhile;
      endif;
      ?>






      <!-- <div class="row">
         <div class="col-sm-6 pr-0">
            <div class="disclaimer">
               <div class="title-text2 mb-3"><span>Boxing</span>
               </div>
               <div class="summary">
                  <p class="collapse" id="collapseSummary8"> <span><strong>Alternate And Reverse Runline Wagers —</strong> Listed Pitchers Must Start For Action, Game Must Go Regulation 9 Innings (8 ½ If Home Team Is Ahead).</span>  <span>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</span>
                     <span><strong>No Hitters –</strong> For Daily No Hitter Prop, No Hitters Must Go 9 Innings For To Qualify As A No Hitter.</span>
                     <span><strong>Total Runs Wager (Grand Salami) –</strong> All Games Must Go 8 1/2 or 9 Innings For Action.</span>
                     <span><strong>Total Bases (Hits Only) -</strong>Single = 1, Double = 2, Triple = 3, Home Run = 4, Walks Do Not Count.</span>
                     <span><strong>College Baseball World Series –</strong> Bottom Team Does Not Necessarily Bat Last.</span>
                     <span><strong>World Baseball Classic –</strong> Games That Are Called Due To Mercy Rule, Run-lines & Totals Are Considered No Action.</span>
                     <span><strong>Regular Season Player Props –</strong> Player Must Play In At Least 1 Regular Season Game For Action.</span>
                     <span><strong>No Hitters –</strong> For Daily No Hitter Prop, No Hitters Must Go 9 Innings For To Qualify As A No Hitter.</span>
                     <span><strong>Total Runs Wager (Grand Salami) –</strong> All Games Must Go 8 1/2 or 9 Innings For Action.</span> 
                  </p>
                  <a class="collapsed" data-toggle="collapse" href="#collapseSummary8" aria-expanded="false" aria-controls="collapseSummary8"></a>
               </div>
            </div>
         </div>
         <div class="col-sm-6 pl-0">
            <div class="race-img">
               <img src="<?php echo bloginfo('template_directory'); ?>/images/gaming07.jpg" alt="">
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-sm-6 pr-0">
            <div class="race-img">
               <img src="<?php echo bloginfo('template_directory'); ?>/images/gaming08.jpg" alt="">
            </div>
         </div>
         <div class="col-sm-6 pl-0">
            <div class="disclaimer">
               <div class="title-text2 mb-3"><span>Football</span>
               </div>
               <div class="summary">
                  <p class="collapse" id="collapseSummary9"> <span><strong>Alternate And Reverse Runline Wagers —</strong> Listed Pitchers Must Start For Action, Game Must Go Regulation 9 Innings (8 ½ If Home Team Is Ahead).</span>  <span>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</span>
                     <span><strong>No Hitters –</strong> For Daily No Hitter Prop, No Hitters Must Go 9 Innings For To Qualify As A No Hitter.</span>
                     <span><strong>Total Runs Wager (Grand Salami) –</strong> All Games Must Go 8 1/2 or 9 Innings For Action.</span>
                     <span><strong>Total Bases (Hits Only) -</strong>Single = 1, Double = 2, Triple = 3, Home Run = 4, Walks Do Not Count.</span>
                     <span><strong>College Baseball World Series –</strong> Bottom Team Does Not Necessarily Bat Last.</span>
                     <span><strong>World Baseball Classic –</strong> Games That Are Called Due To Mercy Rule, Run-lines & Totals Are Considered No Action.</span>
                     <span><strong>Regular Season Player Props –</strong> Player Must Play In At Least 1 Regular Season Game For Action.</span>
                     <span><strong>No Hitters –</strong> For Daily No Hitter Prop, No Hitters Must Go 9 Innings For To Qualify As A No Hitter.</span>
                     <span><strong>Total Runs Wager (Grand Salami) –</strong> All Games Must Go 8 1/2 or 9 Innings For Action.</span> 
                  </p>
                  <a class="collapsed" data-toggle="collapse" href="#collapseSummary9" aria-expanded="false" aria-controls="collapseSummary9"></a>
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
