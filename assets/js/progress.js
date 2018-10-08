$(document).ready(function () {
    $(".carousel-description").html($(".carousel--mobileview .carousel-indicators li").html());
    $('.carousel--mobileview').on('slid.bs.carousel', function () {
	    $('.carousel-description').html($(".carousel--mobileview .carousel-indicators .active").html());
	});

	/* secondary indicators for carousel */
	$('.carousel').on('slid.bs.carousel', function() {
	  $(".carousel-indicators2 li").removeClass("active");
	  indicators = $(".carousel-indicators li.active").data("slide-to");
	  a = $(".carousel-indicators2").find("[data-slide-to='" + indicators + "']").addClass("active");
	  //console.log(indicators);
	})
	// on click on indicators2;
	$('.carousel-indicators2 li').on('click', function() {
		newindicator = $(this).data("slide-to");
		$(".carousel-indicators li").removeClass("active");
		$(".carousel-indicators2 li").removeClass("active");
		$(".carousel-indicators2").find("[data-slide-to='" + newindicator + "']").addClass("active");
		$(".carousel-indicators2").find("[data-slide-to='" + newindicator + "']").addClass("active");
		//console.log(newindicator);
	});
	/************************/
	
	var $lateral_menu_trigger = $('#cd-menu-trigger'),
		$content_wrapper = $('.wrapper'),
		$navigation = $('#top,#top2');

	//open-close lateral menu clicking on the menu icon
	$lateral_menu_trigger.on('click', function(event){
		event.preventDefault();
		
		$lateral_menu_trigger.toggleClass('is-clicked');
		$navigation.toggleClass('lateral-menu-is-open');
		$content_wrapper.toggleClass('lateral-menu-is-open').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
			// firefox transitions break when parent overflow is changed, so we need to wait for the end of the trasition to give the body an overflow hidden
			$('body').toggleClass('overflow-hidden');
			$('html').toggleClass('overflow-hidden');
		});
		$('#cd-lateral-nav').toggleClass('lateral-menu-is-open');
		
		//check if transitions are not supported - i.e. in IE9
		if($('html').hasClass('no-csstransitions')) {
			$('html').toggleClass('overflow-hidden');
			$('body').toggleClass('overflow-hidden');
		}
		
		$('.carousel').carousel('pause');
    });
});