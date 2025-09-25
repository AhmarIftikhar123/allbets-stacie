$(document).ready(function() {
	$("#bannerslider").owlCarousel({
		items : 1,
		nav:true,
		dots:true,
		loop:true,
		autoplay:true,
		mouseDrag:true,
		autoplayTimeout:3000,smartSpeed:1000,
		autoplayHoverPause:true,
		navText : ["<span><i class='fa fa-arrow-left'></i></span>","<span><i class='fa fa-arrow-right'></i></span>"]
      });
	
	$("#products").owlCarousel({
		items : 1,
		nav:true,
		dots:true,
		loop:true,
		autoplay:true,
		mouseDrag:true,
		autoplayTimeout:3000,smartSpeed:1000,
		autoplayHoverPause:true,
		navText : ["<span><i class='fa fa-angle-left'></i></span>","<span><i class='fa fa-angle-right'></i></span>"]
      });
      });

$(document).ready(function(){
             // Add down arrow icon for collapse element which is open by default
             $(".collapse.show").each(function(){
             	$(this).prev(".card-header").find(".fa").addClass("fa-angle-up").removeClass("fa-angle-down");
             });
             
             // Toggle right and down arrow icon on show hide of collapse element
             $(".collapse").on('show.bs.collapse', function(){
             	$(this).prev(".card-header").find(".fa").removeClass("fa-angle-down").addClass("fa-angle-up");
             }).on('hide.bs.collapse', function(){
             	$(this).prev(".card-header").find(".fa").removeClass("fa-angle-up").addClass("fa-angle-down");
             });
         });

$(document).ready(function() {
	
		$("#slider-1").owlCarousel({
		items : 3,
		nav:true,
		dots:true,
		loop:true,
		autoplay:false,
		mouseDrag:true,
		autoplayTimeout:3000,smartSpeed:1000,
		autoplayHoverPause:true,
		navText : ["<span><i class='fa fa-long-arrow-left'></i></span>","<span><i class='fa fa-long-arrow-right'></i></span>"],
		responsiveClass: true,
		responsive: {
	  0: {
		items: 1,
		nav: true
	  },
	  600: {
		items: 2,
		nav: false
	  },
	  1000: {
		items: 3,
		nav: false,
		loop: true,
		margin:20
	  }
	}
 });
 });




$(document).ready(function() {
	
		$("#slider-2").owlCarousel({
		items : 4,
		nav:true,
		dots:true,
		loop:true,
		autoplay:false,
		mouseDrag:true,
		autoplayTimeout:3000,smartSpeed:1000,
		autoplayHoverPause:true,
		navText : ["<span><i class='fa fa-angle-left'></i></span>","<span><i class='fa fa-angle-right'></i></span>"],
		responsiveClass: true,
		responsive: {
	  0: {
		items: 1,
		nav: true
	  },
	  600: {
		items: 3,
		nav: false
	  },
	  1000: {
		items: 4,
		nav: false,
		loop: true,
		margin:20
	  }
	}
 });
 });

$(document).ready(function() {
  $('.owl-carousel').owlCarousel({
	loop: true,
	responsiveClass: true,
	responsive: {
	  0: {
		items: 1,
		nav: true
	  },
	  600: {
		items: 3,
		nav: false
	  },
	  1000: {
		items: 3,
		nav: false,
		loop: true,
		margin:30
	  }
	}
});
});


$(document).ready(function(){
$(window).scroll(function(){
if($(this).scrollTop() > 200){
	$('.up').fadeIn(400);
}else{ $('.up').fadeOut(400); }	
});

$('.up').click(function(event){
event.preventDefault();
$('html, body').animate({scrollTop:0}, 800);
});
	
});

	  $(document).ready(function(){
     $(window).scroll(function () {
            if ($(this).scrollTop() > 50) {
                $('#back-to-top').fadeIn();
            } else {
                $('#back-to-top').fadeOut();
            }
        });
        // scroll body to 0px on click
        $('#back-to-top').click(function () {
            $('#back-to-top').tooltip('hide');
            $('body,html').animate({
                scrollTop: 0
            }, 800);
            return false;
        });
        
        $('#back-to-top').tooltip('show');

}); 

$(document).ready(function(){
  $(".scroll a").on('click', function(event) {
    if (this.hash !== "") {
      event.preventDefault();
      var hash = this.hash;
      $('html, body').animate({
        scrollTop: $(hash).offset().top -90
      }, 100, function(){
        //window.location.hash = hash;
      });
    } 
  });
});


 $(document).on('click','.mobile-menu-ico',function (e) {
	$(".mobile-nav").addClass('r-fix-nav');
	$(".overlay").show();
});

 $(document).on('click','#overlay',function (e) {
	$('.mobile-nav').removeClass('r-fix-nav');
	$(this).hide();
});

$(document).on('click','.close-btn',function (e) { 
	$(".mobile-nav").removeClass('r-fix-nav');
	$(".overlay").hide();
});

/*--------------26-10-2020------------*/
$(document).on('click','.state_info',function (e) {
	$("#collapse-2").removeClass('show');
	$("#collapse-3").removeClass('show');
	$("#collapse-4").removeClass('show');
	$("#collapse-1").addClass('show');
	
});
 $(document).on('click','.how_to_bet',function (e) {
	$("#collapse-1").removeClass('show');
	$("#collapse-3").removeClass('show');
	$("#collapse-4").removeClass('show');
	$("#collapse-2").addClass('show');
	
});
 $(document).on('click','.About_all_bets',function (e) {
	$("#collapse-1").removeClass('show');
	$("#collapse-2").removeClass('show');
	$("#collapse-4").removeClass('show');
	$("#collapse-3").addClass('show');
	
});
$(document).on('click','.responsible_gaming',function (e) {
	$("#collapse-1").removeClass('show');
	$("#collapse-2").removeClass('show');
	$("#collapse-3").removeClass('show');
	$("#collapse-4").addClass('show');
	
});

/*---------end-------------------------------*/





jQuery(window).scroll(function(){ 
	var scroll = jQuery(window).scrollTop();
	if (scroll>=100){ 
		jQuery('header').addClass('fixed-nav');
	}
	else{
		jQuery('header').removeClass('fixed-nav');
	}
});

$(function(){
	var $gallery = $('.gallery a').simpleLightbox();

	$gallery.on('show.simplelightbox', function(){
		console.log('Requested for showing');
	})
	.on('shown.simplelightbox', function(){
		console.log('Shown');
	})
	.on('close.simplelightbox', function(){
		console.log('Requested for closing');
	})
	.on('closed.simplelightbox', function(){
		console.log('Closed');
	})
	.on('change.simplelightbox', function(){
		console.log('Requested for change');
	})
	.on('next.simplelightbox', function(){
		console.log('Requested for next');
	})
	.on('prev.simplelightbox', function(){
		console.log('Requested for prev');
	})
	.on('nextImageLoaded.simplelightbox', function(){
		console.log('Next image loaded');
	})
	.on('prevImageLoaded.simplelightbox', function(){
		console.log('Prev image loaded');
	})
	.on('changed.simplelightbox', function(){
		console.log('Image changed');
	})
	.on('nextDone.simplelightbox', function(){
		console.log('Image changed to next');
	})
	.on('prevDone.simplelightbox', function(){
		console.log('Image changed to prev');
	})
	.on('error.simplelightbox', function(e){
		console.log('No image found, go to the next/prev');
		console.log(e);
	});
});