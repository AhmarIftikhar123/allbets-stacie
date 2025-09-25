
<?php get_header(); 


while ( have_posts() ) :
the_post();
?>


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
      <!-----------------------banner ------------------------------>
      <section class="space-wrapper">
         <div class="container">
            <div class="row d-flex justify-content-center align-items-center">
               <div class="col-sm-12">
                  <div class="deposit">
                     <div class="logo-rewards">
                        <img src="<?php echo bloginfo('template_directory'); ?>/images/logo.png" alt="">
                        <strong>Welcome to</strong>
                     </div>
                     <h1 class="org-title">Deposit offer</h1>
                     <h3 class="small-title">Get up to $500 Free Bet on First Deposit</h3>
                     <a class="read-more mt-3" href="">Bet Now</a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="space-wrapper">
         <div class="container">
            <div class="row">
               <div class="col-sm-7 pr-0">
                  <div class="sign-up-update promos-detail">
                     <?php the_content();  ?>
                     <a class="read-more org mt-4" href="#">Register Now</a>
                  </div>
               </div>
               <div class="col-sm-5 pl-0">
                  <div class="race-img"> 
                     <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');  ?>
                     <img src="<?php echo $featured_img_url; ?>" alt=""> 
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="space-wrapper">
         <div class="container">
            <div class="row">
               <div class="col-lg-12 text-center">
                  <div class="title-text mb-3 heading"><?php the_field('promotion_official_rules_heading'); ?></div>
               </div>
               <div class="media-content-wrapper mt-4">

                  <?php
                  if( have_rows('promotion_official_rules_listing') ):
                  while( have_rows('promotion_official_rules_listing') ) : the_row();
                  $promotion_official_rules_content = get_sub_field('promotion_official_rules_content');
                  
                  ?>
                  <div class="media-content">
                     <?php echo $promotion_official_rules_content; ?>
                  </div>
                  <?php
                  endwhile;
                  else :
                  endif;
                  ?>

                  <!-- <div class="media-content">
                     <p>This Promotion is only open to patrons who have successfully opened a new Mobile or Online All Bets Account for the first time in the State of New Jersey (“All Bets NJ Account”), inclusive of automated or manual identification verification, during the Promotion Period.  </p>
                  </div>
                  <div class="media-content">
                     <p>Opening a All Bets NJ Account is free.</p>
                  </div>
                  <div class="media-content">
                     <p>To be eligible for this Promotion, all patrons must be 21 or older, physically present in the State of New Jersey when wagering, and must register their All Bets NJ Account using promo code ‘WH500’ during the Promotion Period for the opportunity to earn Free Bets</p>
                  </div>
                  <div class="media-content">
                     <p>Deposit Match Bonus: During the Promotion Period, an Eligible Patron who makes their first real money deposit within 7 days (the “Qualifying Deposit”) of registering their All Bets NJ Account, will be awarded a Free Bet to their All Bets NJ Account based on the following Qualifying Deposit amount tiers, up to a maximum of $500, upon completion of the Qualifying Deposit (the “Deposit Match Bonus”) (“Participant(s)”)</p>
                  </div>
                  <div class="media-content">
                     <p>By becoming a member, you acknowledge and agree to allow All Bets to correspond with you by mail, e-mail or telephone, unless otherwise noted at the time of enrollment, and to use your name and/or likeness without compensation for promotional and advertising purposes.</p>
                  </div>
                  <div class="media-content">
                     <p>All Bets Rewards Club cards and points are nontransferable, including upon death or divorce. Members may not allow cards to be used by any other person for any reason.  Only the individual member listed on the account may obtain information on the account.</p>
                  </div>
                  <div class="media-content">
                     <p>Management reserves the right to review and verify all point accumulations.  Account status may be adjusted by Management in the event of a computer malfunction, operator error, fraud or misuse.  An account that is inactive for a period of one year may be deleted and points forfeited.</p>
                  </div> -->


               </div>
            </div>
         </div>
      </section>
<?php endwhile; ?>
   <?php get_footer(); ?>   

