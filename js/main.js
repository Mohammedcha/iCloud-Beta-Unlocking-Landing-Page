$(document).ready(function() {
    function clear_delay(timeoutID_here) {
        window.clearTimeout(timeoutID_here);
    }
    function run_loading_run_1(time_delay) {
        timeoutID1 = window.setTimeout(run_loading_1, time_delay);
    }
    function run_loading_1() {
        $('.thank_for_close, .run_loading_2').fadeIn();
        $('.main_review').hide();
    }
    function run_loading_run_2(time_delay) {
        timeoutID2 = window.setTimeout(run_loading_2, time_delay);
    }
    function run_loading_2() {
        $('.run_loading_2').hide();
        $('.run_loading_3, .li_run_loading_1, .li_run_loading_2').fadeIn();
    }
    function run_loading_run_3(time_delay) {
        timeoutID3 = window.setTimeout(run_loading_3, time_delay);
    }
    function run_loading_3() {
        $('.run_loading_3').hide();
        $('.run_loading_4, .li_run_loading_3').fadeIn();
    }
    function run_loading_run_4(time_delay) {
        timeoutID3 = window.setTimeout(run_loading_4, time_delay);
    }
    function run_loading_4() {
        $('.run_loading_4, .loading').hide();
        $('.done_marker').hide();
        $('.li_run_loading_4, li_run_loading_5, .run_loading_5, .show_end').fadeIn();
		
		document.getElementById("human-verification-button").scrollIntoView();
		
    }



    $(document).on('click', '.next', function(e) {
        e.preventDefault();
        $(this).parent().hide().next().fadeIn();
		window.scrollTo(0, $("#enter-give-away-now").offset().top);
    });


	
	var cl1 = 0; 
	var max_val=1; 

	var cl2 = 0; 
	var max_val2=1; 
	
		$('.imei').click(function(){ cl1++; }); 
		$('.imeicount').click(function(){ cl2++; }); 
		
		$('.run_loading').click(function(e){ 
			
		if(cl1 < max_val){ 
			 sweetAlert("Error", "Please, Enter your iPhone IMEI", "error"); 
		} else{ 
		
			if(cl2 < max_val2){ 
				 sweetAlert("Error", "Please, Select your Country", "error"); 
			} else{ 		
			
				e.preventDefault();
				$(this).parent().hide().next().fadeIn();
				window.scrollTo(0, $("#enter-give-away-now").offset().top);
				$('.step4 .loading').show();
				run_loading_run_1('2000');
				run_loading_run_2('4500');
				run_loading_run_3('6500');
				run_loading_run_4('8900');
				
				}
			}
		}); 
		


	$(".follow-scroll").hide();
	$(window).scroll(function() {
		console.log($(window).scrollTop());
		if ($(window).scrollTop() > 500) {
			$(".follow-scroll").fadeIn();
		} else {
			$(".follow-scroll").fadeOut();
		}
	});

    $('.scroll-me').bind("click", function(e) {
        var target = $(this).attr("href"); // Get the target element
        var scrollToPosition = $(target).offset().top; // Position to scroll to
        $('html /* For FF & IE */,body /* For Chrome */').animate({
            'scrollTop': scrollToPosition
        }, 500, function(target) {
            window.location.hash = target;
        });
        e.preventDefault();
    });

    $('.parallaxme').parallax("50%", 0.1);

    $('.human-verification-button').magnificPopup({
        type: 'inline',
        preloader: true
    });

    $('.popup-tos').magnificPopup({
        type: 'inline',
        preloader: false
    });

    $('.popup-contact').magnificPopup({
        type: 'inline',
        preloader: false
    });

    $('.popup-pp').magnificPopup({
        type: 'inline',
        preloader: false
    });



});