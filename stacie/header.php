<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package stacie
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
	<title><?php the_title(); ?></title>
<link href="<?php echo bloginfo('template_directory'); ?>/images/favicon.png" rel="shortcut icon">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php echo bloginfo('template_directory'); ?>/css/owl.carousel.min.css">
<link rel="stylesheet" href="<?php echo bloginfo('template_directory'); ?>/css/owl.theme.default.min.css">
<link rel="stylesheet" href="<?php echo bloginfo('template_directory'); ?>/css/custom.css" type="text/css" />
<link href="<?php echo bloginfo('template_directory'); ?>/css/bootstrap.min.css" rel="stylesheet" >
<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_directory'); ?>/css/simplelightbox.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_directory'); ?>/css/menu.css">
	
	<style>
		
	<?php //$logo1 = get_the_ID();
	///if($logo1 == 219 || $logo1 == 217){
	?>
/*     .logo-animation{
       width: 150px;
      height: 122px;
      background-image : url("<?php echo home_url(); ?>/wp-content/uploads/2021/01/All-Bets-Logo-Sprite-Image-Sport.png");
      animation: moveX 1s steps(4) infinite;
    }
     @keyframes moveX{
      from{background-position-x:0px;}
      to{background-position-x:-600px;}
    } */
    <?php //} else { ?>
/*          .logo-animation{
       width: 150px;
      height: 122px;
      background-image : url(<?php the_field('header_logo','option');?>);
      animation: moveX 1s steps(4) infinite
         }
          @keyframes moveX{
      from{background-position-x:0px;}
      to{background-position-x:-600px;}
    } */
        <?php
//     }
    ?>
		
		
</style>
	
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header id="header" >
  <!--------------------------------------  top menu --------------------------------------->
  <div class="container">
    <div class="header-top">
      <div class="row">
        <div class="col-sm-6">
          <div class="topinfo-text">
            <p><?php the_field('header_top_text','option');?></p>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="topinfo"> <a href="#"><span class="hide-sm"><i class="fa fa-phone"></i> <?php the_field('header_call_us','option');?></span></a> <a href="#"><span class="hide-sm"><i class="fa fa-envelope-o"></i><?php the_field('header_email','option');?></span></a> </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-12  ">
        <nav id="cssmenu">
          <div class="logo logo-section">
			  <div class="logo-animation"></div>
			  <a href="<?php echo site_url(); ?>"><img src="<?php the_field('header_logo','option');?>" alt=""/> </a>
			
			</div>
			                        <div id="head-mobile"></div>
                        <div class="button"></div>
          <?php
/*wp_nav_menu(
    array(
        'theme_location' => 'menu-1',
        'menu'           => 'header_menu',
        'container'      => '',
        //'menu_class'     => 'navbar-nav main-nave'
    )
);*/
?>
           <ul>
            <li><a href="<?php echo site_url(); ?>">Home</a></li>
           <!--  <li ><a class="mobile-menu-ico state_info"  href="#">Our Services</a></li> -->
           <!-- <li ><a class="mobile-menu-ico About_all_bets"  href="#">Our Services</a></li> -->
            <!-- <li ><a class="mobile-menu-ico how_to_bet"  href="#">Projects </a></li> -->
           <!--  <li ><a class="mobile-menu-ico About_all_bets"  href="<?php echo site_url('contact-us') ?>">Contact Us</a></li> -->
            <!-- <li ><a class="mobile-menu-ico responsible_gaming"  href="#">Responsible Gaming</a></li> -->

            <li><a href="<?php echo site_url('contact-us') ?>">Contact Us</a></li>
          </ul> 
        </nav>
        <div class="searchbar-wrapper">
          <div class="searchbar">
            <?php get_search_form(); ?>
            <!-- <input class="search_input" type="text" name="" placeholder="Search...">
            <a href="#" class="search_icon"><i class="fa fa-search"></i></a>  -->
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--------------------------------------  top menu --------------------------------------->
</header>
<div class="main-sidemenu mobile-nav right-side">
<div class="close-btn">Close <i class="fa fa-times-circle" aria-hidden="true"></i></div>
<div id="accordion">

  <!-- <div class="card">
    <div class="card-header" id="heading-1">
      <h5 class="mb-0">
        <a role="button" data-toggle="collapse" href="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
        
         <span class="btn-icon"><i class="fa fa-flag-o fa-angle-up" aria-hidden="true"></i></span>
         
         <div class="btn-icon-txt"><strong>State Info</strong>
         <small>Find your in-state locations and more</small>
         </div>	
        </a>
        

        
        
      </h5>
    </div>
    <div id="collapse-1" class="collapse show" data-parent="#accordion" aria-labelledby="heading-1">
      <div class="card-body">

        <div id="accordion-1">
		
          <div class="card">
            <div class="card-header" id="heading-1-2">
              <h5 class="mb-0">
                <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-1-2" aria-expanded="false" aria-controls="collapse-1-2">
                  Colorado
                </a>
              </h5>
            </div>
            <div id="collapse-1-2" class="collapse" data-parent="#accordion-1" aria-labelledby="heading-1-2">
              <div class="card-body">
              <ul class="sublist-container">
                  <li><a href="">Colorado Overview</a></li>
                  <li><a href="">Find a Location</a></li>
                  <li><a href="">Privacy Policy</a></li>
                  <li><a href="">Responsible Gaming</a></li>
                  <li><a href="">Lady Luck House Rules</a></li>
                  <li><a href="">Isle of Capri House Rules</a></li>
                  <li><a href="">Contact Us </a></li>
                </ul>
              </div>
            </div>
          </div>
		  
		  
          <div class="card">
            <div class="card-header" id="heading-1-3">
              <h5 class="mb-0">
                <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-1-3" aria-expanded="false" aria-controls="collapse-1-3">
                  District Of Columbia
                </a>
              </h5>
            </div>
            <div id="collapse-1-3" class="collapse" data-parent="#accordion-1" aria-labelledby="heading-1-3">
              <div class="card-body">
<ul class="sublist-container">
                  <li><a href="">District Of Columbia Overview</a></li>
                  <li><a href="">Find a Location</a></li>
                  <li><a href="">Privacy Policy</a></li>
                  <li><a href="">Responsible Gaming</a></li>
                  <li><a href="">Contact Us </a></li>
                </ul>
              </div>
            </div>
          </div>	
		  
          <div class="card">
            <div class="card-header" id="heading-1-4">
              <h5 class="mb-0">
                <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-1-4" aria-expanded="false" aria-controls="collapse-1-4">
                  Florida
                </a>
              </h5>
            </div>
            <div id="collapse-1-4" class="collapse" data-parent="#accordion-1" aria-labelledby="heading-1-4">
              <div class="card-body">
<ul class="sublist-container">
                  <li><a href="">Florida Overview</a></li>
                  <li><a href="">Find a Location</a></li>
				  <li><a href="">Promos</a></li>
				  <li><a href="">Racing</a></li>
                  <li><a href="">Privacy Policy</a></li>
                  <li><a href="">Responsible Gaming</a></li>
                  <li><a href="">Contact Us </a></li>
                </ul>
              </div>
            </div>
          </div>		  	  	
          <div class="card">
            <div class="card-header" id="heading-1-5">
              <h5 class="mb-0">
                <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-1-5" aria-expanded="false" aria-controls="collapse-1-5">
                  Illinois
                </a>
              </h5>
            </div>
            <div id="collapse-1-5" class="collapse" data-parent="#accordion-1" aria-labelledby="heading-1-5">
              <div class="card-body">
<ul class="sublist-container">
                  <li><a href="">Illinois Overview</a></li>
                  <li><a href="">Find a Location</a></li>
				  <li><a href="">House Rules</a></li>
                  <li><a href="">Privacy Policy</a></li>
                  <li><a href="">Responsible Gaming</a></li>
                  <li><a href="">Contact Us </a></li>
                </ul>
              </div>
            </div>
          </div>		
          <div class="card">
            <div class="card-header" id="heading-1-6">
              <h5 class="mb-0">
                <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-1-6" aria-expanded="false" aria-controls="collapse-1-6">
                  Iowa
                </a>
              </h5>
            </div>
            <div id="collapse-1-6" class="collapse" data-parent="#accordion-1" aria-labelledby="heading-1-6">
              <div class="card-body">
<ul class="sublist-container">
                  <li><a href="">Iowa Overview</a></li>
                  <li><a href="">Find a Location</a></li>
				  <li><a href="">Promos</a></li>
				  <li><a href="">Rewards</a></li>
				  <li><a href="">Mobile</a></li>
				  <li><a href="">Wager Disclaimers</a></li>
				  <li><a href="">House Rules</a></li>
                  <li><a href="">Privacy Policy</a></li>
                  <li><a href="">Responsible Gaming</a></li>
                  <li><a href="">Contact Us </a></li>
                </ul>
              </div>
            </div>
           <div class="card">
            <div class="card-header" id="heading-1-7">
              <h5 class="mb-0">
                <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-1-7" aria-expanded="false" aria-controls="collapse-1-7">
                  Mississippi
                </a>
              </h5>
            </div>
            <div id="collapse-1-7" class="collapse" data-parent="#accordion-1" aria-labelledby="heading-1-7">
              <div class="card-body">
<ul class="sublist-container">
                  <li><a href="">Mississippi Overview</a></li>
                  <li><a href="">Privacy Policy</a></li>
                  <li><a href="">Contact Us </a></li>
                </ul>
              </div>
            </div>
          </div>         
           <div class="card">
            <div class="card-header" id="heading-1-8">
              <h5 class="mb-0">
                <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-1-8" aria-expanded="false" aria-controls="collapse-1-8">
                  Nevada
                </a>
              </h5>
            </div>
            <div id="collapse-1-8" class="collapse" data-parent="#accordion-1" aria-labelledby="heading-1-8">
              <div class="card-body">
<ul class="sublist-container">
                  <li><a href="">Nevada Overview</a></li>
                  <li><a href="">Find a Location</a></li>
				  <li><a href="">Promos</a></li>
				  <li><a href="">Rewards</a></li>
				  <li><a href="">Mobile</a></li>  
				  <li><a href="">InPlay Schedule</a></li>
				  <li><a href="">Virtual Racing</a></li>
				  <li><a href="">Racing</a></li>   
				  <li><a href="">Wager Disclaimers</a></li>
				  <li><a href="">House Rules</a></li>
                  <li><a href="">Privacy Policy</a></li>
                  <li><a href="">Responsible Gaming</a></li>
                  <li><a href="">Contact Us </a></li>
                </ul>
              </div>
            </div>
          </div>		  
           <div class="card">
            <div class="card-header" id="heading-1-9">
              <h5 class="mb-0">
                <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-1-9" aria-expanded="false" aria-controls="collapse-1-9">
                  New Jersey
                </a>
              </h5>
            </div>
            <div id="collapse-1-9" class="collapse" data-parent="#accordion-1" aria-labelledby="heading-1-9">
              <div class="card-body">
<ul class="sublist-container">
                  <li><a href="">New Jersey Overview</a></li>
                  <li><a href="">Find a Location</a></li>
				  <li><a href="">Promos</a></li>
				  <li><a href="">Rewards</a></li>
				  <li><a href="">Mobile</a></li>  
				  <li><a href="">InPlay Schedule</a></li>
				  <li><a href="">Virtual Racing</a></li>
				  <li><a href="">Racing</a></li>   
				  <li><a href="">Wager Disclaimers</a></li>
				  <li><a href="">House Rules</a></li>
				  <li><a href="">Press Releases</a></li>
                  <li><a href="">Privacy Policy</a></li>
                  <li><a href="">Responsible Gaming</a></li>
                  <li><a href="">Contact Us </a></li>
                </ul>
              </div>
            </div>
          </div>
           <div class="card">
            <div class="card-header" id="heading-1-10">
              <h5 class="mb-0">
                <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-1-10" aria-expanded="false" aria-controls="collapse-1-10">
                 New Mexico
                </a>
              </h5>
            </div>
            <div id="collapse-1-10" class="collapse" data-parent="#accordion-1" aria-labelledby="heading-1-10">
              <div class="card-body">
<ul class="sublist-container">
                  <li><a href="">New Mexico Overview</a></li>
                  <li><a href="">Find a Location</a></li>
                  <li><a href="">Privacy Policy</a></li>
                  <li><a href="">Contact Us </a></li>
                </ul>
              </div>
            </div>
          </div>		  
           <div class="card">
            <div class="card-header" id="heading-1-11">
              <h5 class="mb-0">
                <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-1-11" aria-expanded="false" aria-controls="collapse-1-11">
                 Rhode Island
                </a>
              </h5>
            </div>
            <div id="collapse-1-11" class="collapse" data-parent="#accordion-1" aria-labelledby="heading-1-11">
              <div class="card-body">
<ul class="sublist-container">
                  <li><a href="">Rhode Island Overview</a></li>
                  <li><a href="">Find a Location</a></li>
                  <li><a href="">Privacy Policy</a></li>
                  <li><a href="">Contact Us </a></li>
                </ul>
              </div>
            </div>
          </div>		  
           <div class="card">
            <div class="card-header" id="heading-1-12">
              <h5 class="mb-0">
                <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-1-12" aria-expanded="false" aria-controls="collapse-1-12">
                 The Bahamas
                </a>
              </h5>
            </div>
            <div id="collapse-1-12" class="collapse" data-parent="#accordion-1" aria-labelledby="heading-1-12">
              <div class="card-body">
<ul class="sublist-container">
                  <li><a href="">The Bahamas Overview</a></li>
                  <li><a href="">Find a Location</a></li>
                  <li><a href="">Privacy Policy</a></li>
                  <li><a href="">Contact Us </a></li>
                </ul>
              </div>
            </div>
          </div>		  
           <div class="card">
            <div class="card-header" id="heading-1-13">
              <h5 class="mb-0">
                <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-1-13" aria-expanded="false" aria-controls="collapse-1-13">
                 West Virginia
                </a>
              </h5>
            </div>
            <div id="collapse-1-13" class="collapse" data-parent="#accordion-1" aria-labelledby="heading-1-13">
              <div class="card-body">
<ul class="sublist-container">
                  <li><a href="">West Virginia Overview</a></li>
                  <li><a href="">Find a Location</a></li>
				  <li><a href="">Promos</a></li>
				  <li><a href="">House Rules</a></li>
				  <li><a href="">Press Releases</a></li>
                  <li><a href="">Privacy Policy</a></li>
                  <li><a href="">Responsible Gaming</a></li>
                  <li><a href="">Contact Us </a></li>
                </ul>
              </div>
            </div>
          </div>		  
           <div class="card">
            <div class="card-header" id="heading-1-14">
              <h5 class="mb-0">
                <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-1-14" aria-expanded="false" aria-controls="collapse-1-14">
                 More States
                </a>
              </h5>
            </div>
            <div id="collapse-1-14" class="collapse" data-parent="#accordion-1" aria-labelledby="heading-1-14">
              <div class="card-body">
<ul class="sublist-container">
<li><a href="">Alabama</a></li>
<li><a href="">Alaska</a></li>
<li><a href="">Arizona</a></li>
<li><a href="">Arkansas</a></li>
<li><a href="">California</a></li>
<li><a href="">Colorado</a></li>
<li><a href="">Connecticut</a></li>
<li><a href="">Delaware</a></li>
<li><a href="">Georgia</a></li>
<li><a href="">Hawaii</a></li>
<li><a href="">Idaho</a></li>
<li><a href="">Illinois</a></li>
<li><a href="">Kansas</a></li>
<li><a href="">Kentucky</a></li>
<li><a href="">Louisiana</a></li>
<li><a href="">Maine</a></li>
<li><a href="">Maryland</a></li>
<li><a href="">Massachusetts</a></li>
<li><a href="">Michigan</a></li>
<li><a href="">Minnesota</a></li>
<li><a href="">Missouri</a></li>
<li><a href="">Montana</a></li>
<li><a href="">Nebraska</a></li>
<li><a href="">New Hampshire</a></li>
<li><a href="">New York</a></li>
<li><a href="">North Carolina</a></li>
<li><a href="">North Dakota</a></li>
<li><a href="">Ohio</a></li>
<li><a href="">Oklahoma</a></li>
<li><a href="">Oregon</a></li>
<li><a href="">Pennsylvania</a></li>
<li><a href="">South Carolina</a></li>
<li><a href="">South Dakota</a></li>
<li><a href="">Tennessee</a></li>
<li><a href="">Texas</a></li>
<li><a href="">Utah</a></li>
<li><a href="">Vermont</a></li>
<li><a href="">Virginia</a></li>
<li><a href="">Washington</a></li>
<li><a href="">Wisconsin</a></li>
<li><a href="">Wyoming</a></li>
                </ul>
              </div>
            </div>
          </div>		  		  
		  </div>		  
		  
        </div>      
      
      </div>
    </div>
  </div> -->

  <div class="card">
    <div class="card-header" id="heading-2">
      <h5 class="mb-0">
        <!-- <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
        
        <span class="btn-icon"><i class="fa fa-usd fa-angle-down" aria-hidden="true"></i></span>
       <div class="btn-icon-txt"><strong>Projects</strong>
         <small>Learn Projects and get answers to any questions</small>
         </div>	
        </a> -->
        
        
 
        
        
      </h5>
    </div>
    <div id="collapse-2" class="collapse" data-parent="#accordion" aria-labelledby="heading-2">
      <div class="card-body">
        <?php
        wp_nav_menu(
        array(
        'theme_location' => 'menu-4',
        'menu'           => 'how to bet',
        'menu_class'      => 'sublist-container',
        )
        );
        ?>
     
      </div>
    </div>
  </div>
  
  <div class="card">
    <div class="card-header" id="heading-3">
      <h5 class="mb-0">
        
        <!-- <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
        
        <span class="btn-icon"><i class="fa fa-info fa-angle-down" aria-hidden="true"></i></span>
       <div class="btn-icon-txt"><strong>Our Services</strong>
         <small>Learn more Our Services everything William Hill has to offer</small>
         </div>	
        </a>
         -->
        
      </h5>
    </div>
    <div id="collapse-3" class="collapse" data-parent="#accordion" aria-labelledby="heading-3">
      <div class="card-body">
          <?php
        wp_nav_menu(
        array(
        'theme_location' => 'menu-5',
        'menu'           => 'About all Bets',
        'menu_class'      => 'sublist-container',
        )
        );
        ?>
           
      </div>
    </div>
  </div> 
  
  <!-- <div class="card">
    <div class="card-header" id="heading-4">
      <h5 class="mb-0">
        
        <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-4" aria-expanded="false" aria-controls="collapse-4">
        <span class="btn-icon"><i class="fa fa-hand-paper-o fa-angle-down" aria-hidden="true"></i></span>
       <div class="btn-icon-txt"><strong>Responsible Gaming</strong>
         <small>Our Commitment</small>
         </div>	
        </a>       
        
        
        
      </h5>
    </div>
    <div id="collapse-4" class="collapse" data-parent="#accordion" aria-labelledby="heading-4">
      <div class="card-body">
<ul class="sublist-container">
  <li><a href="<?php echo site_url('/responsible-gaming/#1'); ?>">Commitment to Responsible Gaming</a></li>
  <li><a href="<?php echo site_url('/responsible-gaming/#2'); ?>">Limit Setting</a></li>
  <li><a href="<?php echo site_url('/responsible-gaming/#3'); ?>">Self-Exclusion</a></li>
  <li><a href="<?php echo site_url('/responsible-gaming/#4'); ?>">Opt-Out Program</a></li>
  <li><a href="<?php echo site_url('/responsible-gaming/#5'); ?>">Preventing Underage Gambling</a></li>
  <li><a href="<?php echo site_url('/responsible-gaming/#6'); ?>">Responsible Gaming Fund</a></li>
  <li><a href="<?php echo site_url('/responsible-gaming/#7'); ?>">Partners in Responsible Gaming</a></li>
  <li><a href="<?php echo site_url('/responsible-gaming/#11'); ?>">Colorado Responsible Gaming</a></li>
  <li><a href="<?php echo site_url('/responsible-gaming/#8'); ?>">District Of Columbia Responsible Gaming</a></li>
  <li><a href="<?php echo site_url('/responsible-gaming/#9'); ?>">Florida Responsible Gaming</a></li>
  <li><a href="<?php echo site_url('/responsible-gaming/#10'); ?>">Illinois Responsible Gaming</a></li>
  <li><a href="<?php echo site_url('/responsible-gaming/#15'); ?>">Indiana Responsible Gaming</a></li>
  <li><a href="<?php echo site_url('/responsible-gaming/#16'); ?>">Iowa Responsible Gaming</a></li>
  <li><a href="<?php echo site_url('/responsible-gaming/#12'); ?>">Nevada Responsible Gaming</a></li>
  <li><a href="<?php echo site_url('/responsible-gaming/#13'); ?>">New Jersey Responsible Gaming</a></li>
  <li><a href="<?php echo site_url('/responsible-gaming/#14'); ?>">West Virginia Responsible Gaming</a></li>
</ul>
      </div>
    </div>
  </div>  --> 
  
</div>
  
  
</div>
					
