$(window).on("load", function() {
	$(".loader .inner").fadeOut(500, function() {
		$(".loader").fadeOut(750);
	});

	$(".items").isotope({
    	filter: '*',
    	animationOptions: {
    		duration: 1500,
    		easing: 'linear',
    		queue: false
    	}
    }); // isotope function

}); // loader gif function

$(document).ready(function() {
	
	$('#slides').superslides({
		animation: 'fade',
		pagination: true
	}); // superslides function

	// var typed = new Typed('.typed', {
	// 	strings: ['Web Developer.', 'Freelancer.', 'Adventurer.', 'Creator.'], 
	// 	typeSpeed: 110,
	// 	loop: true,
	// 	startDelay: 1000,
	// 	showCursor: false
	// }); // typed function

	$('.owl-carousel').owlCarousel({
	    loop:true,
	    items: 4,
	    responsive:{
	        0:{
	            items:1
	        },
	        480:{
	            items:2
	        },
	        768:{
	            items:2
	        },
	        938:{
	            items:4
	        }
	    }
	}); // owl carousel function

    var skillsTopOffset = $(".skillsSection").offset().top;
    var statsTopOffset = $(".statsSection").offset().top;
    var countUpFinished = false;

    $(window).scroll(function() {

    	if(window.pageYOffset > skillsTopOffset - $(window).height() + 200) {
    		$('.chart').easyPieChart({
		    	easing: 'easeInOut',
		    	barColor: '#fff',
		    	trackColor: false,
		    	scaleColor: false,
		    	lineWidth: 4,
		    	size: 152,
		    	onStep: function(from, to, percent) {
		    		$(this.el).find('.percent').text(Math.round(percent));
		   		}    
    		}); // easy pie chart function 
    	}

    	if(!countUpFinished && window.pageYOffset > statsTopOffset - $(window).height() + 200) {
    		$(".counter").each(function() {
				var element = $(this);
				var endVal = parseInt(element.text());
				element.countup(endVal);
			}); // count up function 

			countUpFinished = true;
    	}

    }); // window.scroll function

    $("[data-fancybox]").fancybox();

    $("#filters a").click(function() {
    	$("#filters .current").removeClass("current");
    	$(this).addClass("current");

    	var selector = $(this).attr("data-filter");

    	$(".items").isotope({
	    	filter: selector,
	    	animationOptions: {
	    		duration: 1500,
	    		easing: 'linear',
	    		queue: false
	    	}
	    }); // isotope function

	    return false;

    }); // filters function

    $("#navigation li a").click(function(e) {
    	e.preventDefault();

    	var targetElement = $(this).attr("href");
    	var targetPosition = $(targetElement).offset().top;
    	$("html, body").animate({ scrollTop: targetPosition - 50 }, "slow");
    });


    $('.wpcf7-form').parent().fancybox();


    // const nav = $("#navigation");
    // const navTop = nav.offset().top;

    // $(window).on("scroll", stickyNavigation);

    // function stickyNavigation() {

    // 	const body = $("body");

    // 	if($(window).scrollTop() >= navTop) {
    // 		body.css("padding-top", nav.outerHeight() + "px");
    // 		body.addClass("fixedNav");
    // 	} else {
    // 		body.css("padding-top", 0);
    // 		body.removeClass("fixedNav");
    // 	}
    // }

	
}); // document.ready function


























