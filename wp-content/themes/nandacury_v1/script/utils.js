$(function() {

	$( "#tabs" ).tabs();
	$( ".post , .page" ).each(function() {
  		$(this).addClass('post-item');
	});

	// Set Target Blank for social menu 
	$('#menu-social a').each(function( ) {
		$(this).attr("target","_blank");
	});

	function scrollMenuPanel(){
	  	var topPage = $(this).scrollTop();
	      
		if (topPage < 200) {
		  $('body').addClass('top');
		  $('body').removeClass('not-top');
		}
		else{
		  $('body').addClass('not-top');
		  $('body').removeClass('top');
		}

	 	//var video_height = $('.home_panel').height();
	 	var scrollPosition = $('.fixed.relative').offset().top;

		if (topPage >= 0 && topPage < scrollPosition){
			$('body').addClass('header_extended');
			$('body').removeClass('header_normal');
		}else if (scrollPosition < 0){
			$('body').addClass('header_extended');
			$('body').removeClass('header_normal');
		}else {
	  		$('body').addClass('header_normal');
	  		$('body').removeClass('header_extended');
		}
	}
	scrollMenuPanel();

	// Panel
	$(window).scroll(function () {
		scrollMenuPanel();
 	});
})

