jQuery.noConflict();
var $=jQuery.noConflict();

jQuery(function(){
	
	"use strict";
	
	
	/* Clone Profile Photo to top nav
	*************************************************************************/
	var clone = $('.img-profile').find('img').attr('src');
	$('#nav-thumb-profile').html('<img src="' + clone + '" alt="Image Profile">');
	
	
	
	/* OffCanvas Hendler
	*************************************************************************/
	$('[data-toggle=offcanvas]').click(function() {
		$('.row-offcanvas').toggleClass('active');
	});
	
	//alert($(location).attr('hash'));
	$('#toggle-mainmenu').click(function(){
		$('#main-menu').toggleClass('open');
	});
	
	
	
	$('.main-menu a').click(function(){
		$('.main-menu a').removeClass("active");
	
		$(this).addClass("active"); 
	
		$(".sliderUtama").find(".item-content").removeClass("active fadeIn");
	
		$(".sliderUtama").find("#area-" + $(this).context.hash.replace(/^#/, "")).addClass("active fadeIn ");

	});
	
	var init_menu_profile = function(){
		
		$('.main-menu a').removeClass("active");
		
		var menu = location.hash.replace(/^#/, "");
		
		if( "" == menu){
			menu = "home";
		}

		$('.main-menu a').each(function(a,b){
			if(menu == $(this).context.hash.replace(/^#/, "")){
				$(this).addClass("active");
				console.log(this);
			}
		});
		
		
		
		
		$(".sliderUtama").find(".item-content").removeClass("active fadeIn");
		$(".sliderUtama").find("#area-" + menu ).addClass("active fadeIn ");
			
			
		
	}
	
	init_menu_profile();
	
	/* Fixed layout widget recent entries
	********************************************************************/
	/* $('#sidebar .sidebar-inside').affix({
		offset: {
			top: 0,
			bottom: 0
		}
	}); */
	
	
	
	/* Install Fancybox
	********************************************************************/
	$("a.fancybox").fancybox({
			openEffect	: 'elastic',
			closeEffect	: 'elastic',
			closeBtn  : false,
			helpers : {
				media : {},
				buttons : {}
			}
	});
	
	$('.fancybox-media').attr('rel', 'media-gallery').fancybox({
		openEffect : 'none',
		closeEffect : 'none',
		prevEffect : 'none',
		nextEffect : 'none',
		arrows : false,
		helpers : {
			media : {},
			buttons : {}
		}
	});
		
	
	
	/* = Portfolio Isotop 
	********************************************************************/
	if ($("#wrap-work-isotop-layout").size()){
		
		var $containerPortfolio = $('#wrap-work-isotop-layout');

		$containerPortfolio.isotope({
		 animationOptions: {
			 duration: 750,
			 easing: 'linear',
			 layoutMode : 'fitRows',
			 margin : 0,
			 queue: false
		   } ,
		   resizable: false, // disable normal resizing
			// set columnWidth to a percentage of container width
			masonry: { 
				columnWidth: $containerPortfolio.width() / 4
				}
		});
		
		$(window).smartresize(function(){
			//fixColPort($('.portfolio_thumb_isotop'));
			$containerPortfolio.isotope({
				// update columnWidth to a percentage of container width
				//masonry: { columnWidth: }
				masonry: { columnWidth: $containerPortfolio.width() / 4 }
			});
		}); 
		
		// filter items when filter link is clicked
		/* $('#add-isotop-item').click(function(){
			var $newItems = $('<div class="gal-item new kuning" /><div class="gal-item new" /><div class="gal-item new biru" />');
			$('#gallery-isotop').isotope( 'insert', $newItems );
		  return false;
		});  */
		
		$('#filter-work-isotop a').click(function(){
		  $('#filter-work-isotop').find('a').removeClass('active');
		  $(this).addClass('active');
		  var selector = $(this).attr('data-filter');
		  $containerPortfolio.isotope({ filter: selector });
		  return false;
		});
	}
	
	
	
	
	/* Add Masonry to Gallery
	*************************************************************************/
	if ($("#gallery").size()){
		var container_gallery = document.querySelector('#gallery');
		var msnry = new Masonry( container_gallery, {
			columnWidth: 0
		}); 
	}
	
	
	
 
});