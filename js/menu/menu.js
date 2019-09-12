$(window).on('load', function () {
    var $preloader = $('#loading'),
        $spinner   = $preloader.find('.spinner');
    $spinner.fadeOut();
    $preloader.delay(350).fadeOut('slow');
});

$(document).ready(function(){
	var timer;
	var count = 0;
	var count_opacity = 0;

	function accountReg_Active(){
		count += 1.5;
		count_opacity += 0.01;
		if(count > 100) {
			accountRed_Active_Stop();
			count_opacity = 1;
		}
		$('#account-reg-div').css('opacity', count_opacity);
		$('#account-reg-div').css('display', 'block');
		$('#account-reg-div-container').css('margin-top', count + "px");
	}
	$('#account-reg-div-container_off').click(function(){
		count = 0;
		count_opacity = 0;
		$('#account-reg-div').css('display', 'none');
	});
	function accountRed_Active_Stop() {
		clearInterval(timer);
	}
	$('#account-reg').click(function(){
		timer = setInterval(accountReg_Active,1);
	});
	$('#main-right-forum-field-enter').click(function(){
		timer = setInterval(accountReg_Active, 1);
	});
	$('.menu-main-div-container-divs').hover(function(){
		$('.menu-main-div-container-divs-block-button-v3').css('display', 'block');
	}, function(){
		$('.menu-main-div-container-divs-block-span').css('height', 60 + "px");
		$('.menu-main-div-container-divs-block-span').css('padding-top', 0 + "px");
		$('.menu-main-div-container-divs-block-span-overflow').css('overflow', '');
		$('.menu-main-div-container-divs-block-button-v3').css('display', 'block');
	});
	$('.menu-main-div-container-divs-block-button-v3').click(function(){
		$(this).css('display', 'none');
	});
	$(".menu-main-div-container-divs-block-span-overflow-span").text(function(i, text) {
  		if (text.length > 350) {
   		 text = text.substring(0, 350);
   		 var lastIndex = text.lastIndexOf(" ");       // позиция последнего пробела
   		 text = text.substring(0, lastIndex) + '...'; // обрезаем до последнего слова
  		}
  		$(this).text(text);
	});

	$(".slider_antenna-container-divs-span span").text(function(i, text) {
  		if (text.length > 350) {
   		 text = text.substring(0, 350);
   		 var lastIndex = text.lastIndexOf(" ");       // позиция последнего пробела
   		 text = text.substring(0, lastIndex) + '...'; // обрезаем до последнего слова
  		}
  		$(this).text(text);
	});

	$(".menu-main-container-divs-span-div span").text(function(i, text) {
  		if (text.length > 350) {
   		 text = text.substring(0, 350);
   		 var lastIndex = text.lastIndexOf(" ");       // позиция последнего пробела
   		 text = text.substring(0, lastIndex) + '...'; // обрезаем до последнего слова
  		}
  		$(this).text(text);
	});

	$(".main-header-news-a").text(function(i, text) {
  		if (text.length > 66) {
   		 text = text.substring(0, 66);
   		 var lastIndex = text.lastIndexOf(" ");       // позиция последнего пробела
   		 text = text.substring(0, lastIndex) + '...'; // обрезаем до последнего слова
  		}
  		$(this).text(text);
	});

	$('.menu-main-div-container-divs').hover(function(){
		$('.menu-main-container-divs-button').css('display', 'block');
	}, function(){
		$('.menu-main-container-divs-span').css('height', 61 + "px");
		$('.menu-main-container-divs-span').css('padding-top', 4 + "px");
		$('.menu-main-container-divs-span-div').css('overflow', '');
		$('.menu-main-container-divs-button').css('display', 'block');
		$('.menu-main-div-container-divs-block-account-a').css('display', 'none');
		$('.menu-main-container-divs-span-names').css('display', 'none');
		$('body').css('overflow-y', '');
	});

	$('.slider_antenna-container-divs').hover(function(){
		$('.slider_antenna-container-divs-button').css('display', 'block');
	}, function(){
		$('.slider_antenna-container-divs-span').css('height', 90 + "px");
		$('.slider_antenna-container-divs-span').css('padding-top', 4 + "px");
		$('.slider_antenna-container-divs-span-div').css('overflow', '');
		$('.slider_antenna-container-divs-button').css('display', 'block');
		$('.menu-main-div-container-divs-block-account-a').css('display', 'none');
		$('.slider_antenna-container-divs-span-names').css('display', 'none');
		$('body').css('overflow-y', '');
	});
	$('.menu-main-div-container-divs').hover(function(){}, function(){
		$('.menu-main-div-container-divs-block-account-a').css('display', 'none');
	});
	$('.slider_antenna-container-divs-button').click(function(){
		$(this).css('display', 'none');
	});
});