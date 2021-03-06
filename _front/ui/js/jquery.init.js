/* ========================================================================= */
/* BE SURE TO COMMENT CODE/IDENTIFY PER PLUGIN CALL */
/* ========================================================================= */

jQuery(function($){


    // PARALLAX
/*
    $(document).scroll(function(){
        var nm = $("html").scrollTop();
        var nw = $("body").scrollTop();
        var n = (nm > nw ? nm : nw);

        $('#element').css({
            'webkitTransform' : 'translate3d(0, ' + n + 'px, 0)',
            'MozTransform'    : 'translate3d(0, ' + n + 'px, 0)',
            'msTransform'     : 'translateY('     + n + 'px)',
            'OTransform'      : 'translate3d(0, ' + n + 'px, 0)',
            'transform'       : 'translate3d(0, ' + n + 'px, 0)',
        });

        // if transform3d isn't available, use top over background-position
        //$('#element').css('top', Math.ceil(n/2) + 'px');

    });    
*/



    /* ====== Twitter API Call ============================================= 
        Note: Script Automatically adds <li> before and after template. Don't forget to setup Auth info in /twitter/index.php */
    /*
    $('#tweets-loading').tweet({       
        modpath: '/path/to/twitter/', // only needed if twitter folder is not in root
        username: 'jackrabbits',
        count: 1,
		template: '<p>{text}</p><p class="tweetlink">{time}</p>' 
	});
    */
	 _hmCarousel();
	 _trainingSlider();
	 _mobileMenu();
	 _footerTabs();
	 _landingToggle();
	 _sliderTwo();
	 _pgSlider();
	 _pgSliderTwo();
	 _videoPopup();
	 _productCarousel();
});

function _hmCarousel(){
	$('#hm-logo-carousel').slick({
	  dots: true,
	  infinite: true,
	  arrows:true,
	  speed: 300,
	  slidesToShow: 5,
	  slidesToScroll: 5,
	  autoplay: false,
	  responsive: [
	  {
		  breakpoint: 1040,
		  settings: {
			slidesToShow: 4,
			slidesToScroll: 4,
			arrows:false,
		  }
		},
		{
		  breakpoint: 980,
		  settings: {
			slidesToShow: 3,
			slidesToScroll: 3,
			arrows:false,
		  }
		},
		{
		  breakpoint: 580,
		  settings: {
			slidesToShow: 2,
			slidesToScroll:2,
			arrows:false,
		  }
		}
	  ]
	});
}

function _trainingSlider(){
	$('#training').slick({
	  dots: true,
	  //fade: true,
	  infinite: true,
	  arrows:true,
	  speed: 300,
	  slidesToShow: 1,
	  slidesToScroll: 1,
	  autoplay: false,
	  responsive: [
	  {
		  breakpoint: 1040,
		  settings: {
			arrows:false,
		  }
		}
	]
	});
}


function _sliderTwo(){
	$('#slider2').slick({
	  dots: true,
	  infinite: true,
	  arrows:true,
	  speed: 300,
	  slidesToShow: 1,
	  slidesToScroll: 1,
	  autoplay: false,
	  responsive: [
	  {
		  breakpoint: 1040,
		  settings: {
			arrows:false,
		  }
		}
	]
	});
}

function _pgSlider(){
	$('#pg-slider').slick({
	  dots: true,
	  infinite: true,
	  arrows:true,
	  speed: 300,
	  slidesToShow: 1,
	  slidesToScroll: 1,
	  autoplay: false,
	  responsive: [
	  {
		  breakpoint: 768,
		  settings: {
			dots:true,
		  }
		}
	]
	});
}


function _pgSliderTwo(){
	$('#pg-slider2').slick({
	  dots: true,
	  infinite: true,
	  arrows:true,
	  speed: 300,
	  slidesToShow: 1,
	  slidesToScroll: 1,
	  autoplay: false,
	  responsive: [
	  {
		  breakpoint: 768,
		  settings: {
			arrows:false,
		  }
		}
	]
	});
}

function _mobileMenu(){
	$('#toggle-menu').click( function(){
		$(this).toggleClass('active'); // toggle menu change with css
		
		$('#mobile-nav-wrap').slideToggle('fast');
	});
}

function _footerTabs(){
	var activeTab = $('#f-tab-btn li a.active').attr('href');
	$(activeTab).show('fast');
	
	$('#f-tab-btn li a').click( function(e){
		e.preventDefault();
		if( $(this).hasClass('active') ){
			// 
		} else {
			$('#f-tab-btn li a').removeClass('active');
			$(this).addClass('active');
			$('.f-tab-content').hide('fast');
			var currentTab = $(this).attr('href');
			$(currentTab ).show('fast');
		}
	});
}


function _landingToggle(){
	$('#landing-toggle').click(function(){
		$(this).toggleClass('active'); // toggle menu change with css		
		$('.landing-top-menu').slideToggle('fast');
	});
}

function _videoPopup(){
	$(".video-popup").colorbox({
		inline:true, 
		width:95+"%",
		maxWidth:670+"px",
		scrolling: false		
	});
}


function _productCarousel(){
	$('#product-carousel').slick({
	  dots: false,
	  infinite: true,
	  arrows:true,
	  speed: 300,
	  slidesToShow: 6,
	  slidesToScroll: 1,
	  autoplay: false,
	  variableWidth: true,
	  responsive: [
	  {
		  breakpoint: 580,
		  settings: {
			variableWidth: false,
			slidesToShow: 1,
			slidesToScroll: 1,
			adaptiveHeight: true
		  }
		}
	  ]
	});
	
	$('#product-carousel .slick-active').eq(0).addClass('slick-main-active');	
	$('#product-carousel').on({
		beforeChange: function(event, slick, current_slide_index, next_slide_index) {
			//remove all active class
			$('#product-carousel .slick-active').removeClass('slick-main-active');
			//set active class for current slide
			$('#product-carousel .slick-active[data-slick-index='+next_slide_index+']').addClass('slick-main-active');
		}
	});
}

$(window).resize(function(){
	if( $(window).innerWidth() > 767 ){
		$("#mobile-nav-wrap").removeAttr("style");
		$('#toggle-menu').removeClass('active');
		
		$(".landing-top-menu").removeAttr("style");
		$('#landing-toggle').removeClass('active');
	} else {
		$.colorbox.resize({
			maxWidth:"auto",
			width:95+'%',
		});
	}
});