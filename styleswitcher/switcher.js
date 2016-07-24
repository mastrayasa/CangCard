(function($) {
	"use strict";
	
	var switcher = {
			"skinf"		: "styleswitcher\/skin\/",
			"patternf"	: "styleswitcher\/patterns\/",
			"imgf"		: "styleswitcher\/bgimg\/"
		};

	var $skinf 		= switcher.skinf; 
	var $patternf 	= switcher.patternf;
	
	
	var number = 1;
	
	$(document).ready(function(){
	
	/* load css to head */
	var loadCssSkin = function(href) {
		number = number + 1;
		href= href + "?c=" + number;
		
		var set = $('#color-css'); 
		if(0 != set.length){
			set.attr("href",href);
			console.log(href);
		} else {
			$("head").append("<link id='color-css' rel='stylesheet' type='text/css' href='"+href+"'>"); 
			console.log('addd');
		}
		
	};
	
	
	/* show hide switcher */
	/* setTimeout(function(){
		$("#mtcstyleswitcher").toggleClass("active");
	},1000); */
	
	
	$("#mtc-showhide").click(function() { 
		$("#mtcstyleswitcher").toggleClass("active");
		if($("#mtcstyleswitcher").hasClass('active')){
			$('#mtc-showhide i').attr('class','fa fa-chevron-left');
		}else{
			$('#mtc-showhide i').attr('class','fa fa-chevron-right');
		}
	});
	
	/* handlers patterns */
	$("#bg-patterns a").click(function () {
		$("#bg-img a").removeClass('active');
		$("#bg-patterns a").removeClass('active');
		$(this).addClass('active');
		var pat = $(this).data('pattern');

		var styles = {
			"background-attachment" : "fixed",
			"background-color" : "#fff",
			"background-image" : "url(" + $patternf + pat +".png)",
			"background-repeat" : "repeat",
			"background-size" : "auto"
		};
		$('body').removeAttr('style').css(styles);
		return false;
	});
	
	
	/* handlers bg images */
	$("#bg-img a").click(function () {
		$("#bg-img a").removeClass('active');
		$("#bg-patterns a").removeClass('active');
		$(this).addClass('active');
		var pat = $(this).data('img');
		
		var styles = {
			"background-attachment" : "fixed",
			"background-color" : "#252525",
			"background-image" : "url(" + switcher.imgf + pat +".jpg)",
			"background-repeat" : "no-repeat",
			"background-size" : "cover"
		};
			
		$('body').removeAttr('style').css(styles);
		return false;
	});
	
	
	$("#bg-skins a").on('click',function (s) {
		
		$("#color-css").remove();
		$("#bg-skins a").removeClass('active');
		$(this).addClass('active');
		var skin = $(this).data('skin');
		loadCssSkin("css/color/color-" + skin +'.css');
		s.preventDefault();
		return false;
	});
	
	


	
	});
	
	
})(jQuery);