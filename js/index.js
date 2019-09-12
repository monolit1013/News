var 
menuMainLeftA = document.getElementsByClassName('menu-main-left-a'),
slider_antenna = document.getElementById('slider_antenna'),
mainContainerDivs = document.getElementsByClassName('slider_antenna-container-divs'),
slider_antennaContainerDivsOtherComments = document.getElementsByClassName('slider_antenna-container-divs-other-comments'),
menuMainLeftA = document.getElementsByClassName('menu-main-left-a'),
menuMainLeftLi = document.getElementsByClassName('menu-main-left-li'),
menuMainDiv = document.getElementsByClassName('menu-main-div'),
menuMain = document.getElementsByClassName('menu-main'),
slider_antennaContainerAImg = document.getElementsByClassName('slider_antenna-container-a-img'),
menuMainDivContainerDivs = document.getElementsByClassName('menu-main-div-container-divs'),
menuMainDivContainerDivsBlockSpanOverflow = document.getElementsByClassName('menu-main-div-container-divs-block-span-overflow'),
menuMainDivContainerDivs = document.getElementsByClassName('menu-main-div-container-divs'),
menuMainDivContainer = document.getElementsByClassName('menu-main-div-container'),
menMainDivContainerDivsBlockSpan = document.getElementsByClassName('menu-main-div-container-divs-block-span'),
menuMainDivContainerDivsBlockButton = document.getElementsByClassName('menu-main-div-container-divs-block-button'),
menuMainDivContainerMain = document.getElementsByClassName('menu-main-div-container-main'),
menuMainDivContainerContainerRightPointer = document.getElementsByClassName('menu-main-div-container-container-right-pointer'),
menuMainDivContainerContainerLeftPointer = document.getElementsByClassName('menu-main-div-container-container-left-pointer'),
menuMainDivContainerContainerBlock = document.getElementsByClassName('menu-main-div-container-container-block'),
sliderClickerPointerRight = document.getElementById('slider-clicker-pointer-right'),
sliderClickerPointerLeft = document.getElementById('slider-clicker-pointer-left'),
menuMainDivContainerDivsBlockAccountA = document.getElementsByClassName('menu-main-div-container-divs-block-account-a'),
menuMainDivContainerDivsBlockSpanOverflowSpan = document.getElementsByClassName('menu-main-div-container-divs-block-span-overflow-span'),
accountReg = document.getElementById('account-reg'),
menuMainDivContainerContainerBlockCount = 0,
countTimer_0 = 0,
countTimer_1 = 40,
countTimer_2 = 80,
countTimer_3 = 120,
countTimer_4 = 160,
countTimer_5 = 200,
countTimer_6 = 240,
countTimer_7 = 280,
countTimer_8 = 320;
document.body.onload = function() {
/*slider...............................................................................................................*/
	var timer;

	function goSlider(){
	timer = setInterval(function(){
		for(var i = 0; i < mainContainerDivs.length; i++) {
		countTimer_0 += 0.003;
		countTimer_1 += 0.003;
		countTimer_2 += 0.003;
		countTimer_3 += 0.003;
		countTimer_4 += 0.003;
		countTimer_5 += 0.003;
		countTimer_6 += 0.003;
		countTimer_7 += 0.003;
		countTimer_8 += 0.003;
		mainContainerDivs[0].style.transform = "rotateY("+countTimer_0+"deg) translateZ(475px)";
		mainContainerDivs[1].style.transform = "rotateY("+countTimer_1+"deg) translateZ(475px)";
		mainContainerDivs[2].style.transform = "rotateY("+countTimer_2+"deg) translateZ(475px)";
		mainContainerDivs[3].style.transform = "rotateY("+countTimer_3+"deg) translateZ(475px)";
		mainContainerDivs[4].style.transform = "rotateY("+countTimer_4+"deg) translateZ(475px)";
		mainContainerDivs[5].style.transform = "rotateY("+countTimer_5+"deg) translateZ(475px)";
		mainContainerDivs[6].style.transform = "rotateY("+countTimer_6+"deg) translateZ(475px)";
		mainContainerDivs[7].style.transform = "rotateY("+countTimer_7+"deg) translateZ(475px)";
		mainContainerDivs[8].style.transform = "rotateY("+countTimer_8+"deg) translateZ(475px)";
		}

		if(countTimer_0 > 720) {
			countTimer_0 = 0;
		}
		if(countTimer_1 > 720) {
			countTimer_1 = 0;
		}
		if(countTimer_2 > 720) {
			countTimer_2 = 0;
		}
		if(countTimer_3 > 720) {
			countTimer_3 = 0;
		}
		if(countTimer_4 > 720) {
			countTimer_4 = 0;
		}
		if(countTimer_5 > 720) {
			countTimer_5 = 0;
		}
		if(countTimer_6 > 720) {
			countTimer_6 = 0;
		}
		if(countTimer_7 > 720) {
			countTimer_7 = 0;
		}
		if(countTimer_8 > 720) {
			countTimer_8 = 0;
		}

	if(countTimer_0 >= 0 && countTimer_0 < 40) {
		slider_antenna.style.background = "url(images/slider/" + 1 + ".jpg) no-repeat center center";
		slider_antenna.style.backgroundSize = "cover";	
		sliderClickerContainerDivs_Opacity(0);

	}
	if(countTimer_0 >= 40 && countTimer_0 < 80) {
		slider_antenna.style.background = "url(images/slider/" + 2 + ".jpg) no-repeat center center";
		slider_antenna.style.backgroundSize = "cover";
		sliderClickerContainerDivs_Opacity(1);			 	 
	}
	if(countTimer_0 >= 80 && countTimer_0 < 120) {
		slider_antenna.style.background = "url(images/slider/" + 3 + ".jpg) no-repeat center center";
		slider_antenna.style.backgroundSize = "cover";		
		sliderClickerContainerDivs_Opacity(2);	 	 
	}
	if(countTimer_0 >= 120 && countTimer_0 < 160) {
		slider_antenna.style.background = "url(images/slider/" + 4 + ".jpg) no-repeat center center";
		slider_antenna.style.backgroundSize = "cover";
		sliderClickerContainerDivs_Opacity(3);			 	 
	}
	if(countTimer_0 >= 160 && countTimer_0 < 200) {
		slider_antenna.style.background = "url(images/slider/" + 5 + ".jpg) no-repeat center center";
		slider_antenna.style.backgroundSize = "cover";		
		sliderClickerContainerDivs_Opacity(4); 
	}
	if(countTimer_0 >= 200 && countTimer_0 < 240) {
		slider_antenna.style.background = "url(images/slider/" + 6 + ".jpg) no-repeat center center";
		slider_antenna.style.backgroundSize = "cover";
		sliderClickerContainerDivs_Opacity(5);		 
	}
	if(countTimer_0 >= 240 && countTimer_0 < 280) {
		slider_antenna.style.background = "url(images/slider/" + 7 + ".jpg) no-repeat center center";
		slider_antenna.style.backgroundSize = "cover";	
		sliderClickerContainerDivs_Opacity(6);	 
	}
	if(countTimer_0 >= 280 && countTimer_0 < 320) {
		slider_antenna.style.background = "url(images/slider/" + 8 + ".jpg) no-repeat center center";
		slider_antenna.style.backgroundSize = "cover";
		sliderClickerContainerDivs_Opacity(7);	 
	}
	if(countTimer_0 >= 320 && countTimer_0 < 360) {
		slider_antenna.style.background = "url(images/slider/" + 9 + ".jpg) no-repeat center center";
		slider_antenna.style.backgroundSize = "cover";
		sliderClickerContainerDivs_Opacity(8);		 
	}
	if(countTimer_0 >= 360 && countTimer_0 < 400) {
		slider_antenna.style.background = "url(images/slider/" + 1 + ".jpg) no-repeat center center";
		slider_antenna.style.backgroundSize = "cover";	
		sliderClickerContainerDivs_Opacity(0);

	}
	if(countTimer_0 >= 400 && countTimer_0 < 440) {
		slider_antenna.style.background = "url(images/slider/" + 2 + ".jpg) no-repeat center center";
		slider_antenna.style.backgroundSize = "cover";
		sliderClickerContainerDivs_Opacity(1);			 	 
	}
	if(countTimer_0 >= 440 && countTimer_0 < 480) {
		slider_antenna.style.background = "url(images/slider/" + 3 + ".jpg) no-repeat center center";
		slider_antenna.style.backgroundSize = "cover";		
		sliderClickerContainerDivs_Opacity(2);	 	 
	}
	if(countTimer_0 >= 480 && countTimer_0 < 520) {
		slider_antenna.style.background = "url(images/slider/" + 4 + ".jpg) no-repeat center center";
		slider_antenna.style.backgroundSize = "cover";
		sliderClickerContainerDivs_Opacity(3);			 	 
	}
	if(countTimer_0 >= 520 && countTimer_0 < 560) {
		slider_antenna.style.background = "url(images/slider/" + 5 + ".jpg) no-repeat center center";
		slider_antenna.style.backgroundSize = "cover";		
		sliderClickerContainerDivs_Opacity(4); 
	}
	if(countTimer_0 >= 560 && countTimer_0 < 600) {
		slider_antenna.style.background = "url(images/slider/" + 6 + ".jpg) no-repeat center center";
		slider_antenna.style.backgroundSize = "cover";
		sliderClickerContainerDivs_Opacity(5);		 
	}
	if(countTimer_0 >= 600 && countTimer_0 < 640) {
		slider_antenna.style.background = "url(images/slider/" + 7 + ".jpg) no-repeat center center";
		slider_antenna.style.backgroundSize = "cover";	
		sliderClickerContainerDivs_Opacity(6);	 
	}
	if(countTimer_0 >= 640 && countTimer_0 < 680) {
		slider_antenna.style.background = "url(images/slider/" + 8 + ".jpg) no-repeat center center";
		slider_antenna.style.backgroundSize = "cover";
		sliderClickerContainerDivs_Opacity(7);	 
	}
	if(countTimer_0 >= 680 && countTimer_0 < 720) {
		slider_antenna.style.background = "url(images/slider/" + 9 + ".jpg) no-repeat center center";
		slider_antenna.style.backgroundSize = "cover";
		sliderClickerContainerDivs_Opacity(8);		 
	}
	}, 10);
}
	
	goSlider();

	function stopSlider() {
		clearInterval(timer);
	}

	var sliderClickerContainerDivs = document.getElementsByClassName('slider-clicker-container-divs');

	function sliderClickerContainerDivs_Opacity(elem) {
		for(var i = 0; i < sliderClickerContainerDivs.length; i++) {
			sliderClickerContainerDivs[i].style.opacity = '.6';
		}
		sliderClickerContainerDivs[elem].style.opacity = '1';
	}

	slider_antenna.onmouseover = function() {
		for(var i = 0; i < mainContainerDivs.length; i++) {
			mainContainerDivs[i].style.transition = "1s";
		}
		if(countTimer_0 >= 0 && countTimer_0 < 40) {
			countTimer_0 = 0;
			countTimer_1 = 40;
			countTimer_2 = 80;
			countTimer_3 = 120;
			countTimer_4 = 160;
			countTimer_5 = 200;
			countTimer_6 = 240;
			countTimer_7 = 280;
			countTimer_8 = 320;
			mainContainerDivs[0].style.transform = "rotateY("+countTimer_0+"deg) translateZ(475px)";
			mainContainerDivs[1].style.transform = "rotateY("+countTimer_1+"deg) translateZ(475px)";
			mainContainerDivs[2].style.transform = "rotateY("+countTimer_2+"deg) translateZ(475px)";
			mainContainerDivs[3].style.transform = "rotateY("+countTimer_3+"deg) translateZ(475px)";
			mainContainerDivs[4].style.transform = "rotateY("+countTimer_4+"deg) translateZ(475px)";
			mainContainerDivs[5].style.transform = "rotateY("+countTimer_5+"deg) translateZ(475px)";
			mainContainerDivs[6].style.transform = "rotateY("+countTimer_6+"deg) translateZ(475px)";
			mainContainerDivs[7].style.transform = "rotateY("+countTimer_7+"deg) translateZ(475px)";
			mainContainerDivs[8].style.transform = "rotateY("+countTimer_8+"deg) translateZ(475px)";
			slider_antenna.style.background = "url(images/slider/" + 1 + ".jpg) no-repeat center center";
			slider_antenna.style.backgroundSize = "cover";
			sliderClickerContainerDivs_Opacity(0);
			stopSlider();	 
		}
		if(countTimer_0 >= 40 && countTimer_0 < 80) {
			countTimer_0 = 40;
			countTimer_1 = 80;
			countTimer_2 = 120;
			countTimer_3 = 160;
			countTimer_4 = 200;
			countTimer_5 = 240;
			countTimer_6 = 280;
			countTimer_7 = 320;
			countTimer_8 = 360;
			mainContainerDivs[0].style.transform = "rotateY("+countTimer_0+"deg) translateZ(475px)";
			mainContainerDivs[1].style.transform = "rotateY("+countTimer_1+"deg) translateZ(475px)";
			mainContainerDivs[2].style.transform = "rotateY("+countTimer_2+"deg) translateZ(475px)";
			mainContainerDivs[3].style.transform = "rotateY("+countTimer_3+"deg) translateZ(475px)";
			mainContainerDivs[4].style.transform = "rotateY("+countTimer_4+"deg) translateZ(475px)";
			mainContainerDivs[5].style.transform = "rotateY("+countTimer_5+"deg) translateZ(475px)";
			mainContainerDivs[6].style.transform = "rotateY("+countTimer_6+"deg) translateZ(475px)";
			mainContainerDivs[7].style.transform = "rotateY("+countTimer_7+"deg) translateZ(475px)";
			mainContainerDivs[8].style.transform = "rotateY("+countTimer_8+"deg) translateZ(475px)";
			slider_antenna.style.background = "url(images/slider/" + 2 + ".jpg) no-repeat center center";
			slider_antenna.style.backgroundSize = "cover";
			sliderClickerContainerDivs_Opacity(1);
			stopSlider();			 	 
		}
		if(countTimer_0 >= 80 && countTimer_0 < 120) {
			countTimer_0 = 80;
			countTimer_1 = 120;
			countTimer_2 = 160;
			countTimer_3 = 200;
			countTimer_4 = 240;
			countTimer_5 = 280;
			countTimer_6 = 320;
			countTimer_7 = 360;
			countTimer_8 = 400;
			mainContainerDivs[0].style.transform = "rotateY("+countTimer_0+"deg) translateZ(475px)";
			mainContainerDivs[1].style.transform = "rotateY("+countTimer_1+"deg) translateZ(475px)";
			mainContainerDivs[2].style.transform = "rotateY("+countTimer_2+"deg) translateZ(475px)";
			mainContainerDivs[3].style.transform = "rotateY("+countTimer_3+"deg) translateZ(475px)";
			mainContainerDivs[4].style.transform = "rotateY("+countTimer_4+"deg) translateZ(475px)";
			mainContainerDivs[5].style.transform = "rotateY("+countTimer_5+"deg) translateZ(475px)";
			mainContainerDivs[6].style.transform = "rotateY("+countTimer_6+"deg) translateZ(475px)";
			mainContainerDivs[7].style.transform = "rotateY("+countTimer_7+"deg) translateZ(475px)";
			mainContainerDivs[8].style.transform = "rotateY("+countTimer_8+"deg) translateZ(475px)";
			slider_antenna.style.background = "url(images/slider/" + 3 + ".jpg) no-repeat center center";
			slider_antenna.style.backgroundSize = "cover";
			sliderClickerContainerDivs_Opacity(2);
			stopSlider();			 	 
		}
		if(countTimer_0 >= 120 && countTimer_0 < 160) {
			countTimer_0 = 120;
			countTimer_1 = 160;
			countTimer_2 = 200;
			countTimer_3 = 240;
			countTimer_4 = 280;
			countTimer_5 = 320;
			countTimer_6 = 360;
			countTimer_7 = 400;
			countTimer_8 = 440;
			mainContainerDivs[0].style.transform = "rotateY("+countTimer_0+"deg) translateZ(475px)";
			mainContainerDivs[1].style.transform = "rotateY("+countTimer_1+"deg) translateZ(475px)";
			mainContainerDivs[2].style.transform = "rotateY("+countTimer_2+"deg) translateZ(475px)";
			mainContainerDivs[3].style.transform = "rotateY("+countTimer_3+"deg) translateZ(475px)";
			mainContainerDivs[4].style.transform = "rotateY("+countTimer_4+"deg) translateZ(475px)";
			mainContainerDivs[5].style.transform = "rotateY("+countTimer_5+"deg) translateZ(475px)";
			mainContainerDivs[6].style.transform = "rotateY("+countTimer_6+"deg) translateZ(475px)";
			mainContainerDivs[7].style.transform = "rotateY("+countTimer_7+"deg) translateZ(475px)";
			mainContainerDivs[8].style.transform = "rotateY("+countTimer_8+"deg) translateZ(475px)";
			slider_antenna.style.background = "url(images/slider/" + 4 + ".jpg) no-repeat center center";
			slider_antenna.style.backgroundSize = "cover";
			sliderClickerContainerDivs_Opacity(3);
			stopSlider();			 	 
		}
		if(countTimer_0 >= 160 && countTimer_0 < 200) {
			countTimer_0 = 160;
			countTimer_1 = 200;
			countTimer_2 = 240;
			countTimer_3 = 280;
			countTimer_4 = 320;
			countTimer_5 = 360;
			countTimer_6 = 400;
			countTimer_7 = 440;
			countTimer_8 = 480;
			mainContainerDivs[0].style.transform = "rotateY("+countTimer_0+"deg) translateZ(475px)";
			mainContainerDivs[1].style.transform = "rotateY("+countTimer_1+"deg) translateZ(475px)";
			mainContainerDivs[2].style.transform = "rotateY("+countTimer_2+"deg) translateZ(475px)";
			mainContainerDivs[3].style.transform = "rotateY("+countTimer_3+"deg) translateZ(475px)";
			mainContainerDivs[4].style.transform = "rotateY("+countTimer_4+"deg) translateZ(475px)";
			mainContainerDivs[5].style.transform = "rotateY("+countTimer_5+"deg) translateZ(475px)";
			mainContainerDivs[6].style.transform = "rotateY("+countTimer_6+"deg) translateZ(475px)";
			mainContainerDivs[7].style.transform = "rotateY("+countTimer_7+"deg) translateZ(475px)";
			mainContainerDivs[8].style.transform = "rotateY("+countTimer_8+"deg) translateZ(475px)";
			slider_antenna.style.background = "url(images/slider/" + 5 + ".jpg) no-repeat center center";
			slider_antenna.style.backgroundSize = "cover";
			sliderClickerContainerDivs_Opacity(4);
			stopSlider();		 
		}
		if(countTimer_0 >= 200 && countTimer_0 < 240) {
			countTimer_0 = 200;
			countTimer_1 = 240;
			countTimer_2 = 280;
			countTimer_3 = 320;
			countTimer_4 = 360;
			countTimer_5 = 400;
			countTimer_6 = 440;
			countTimer_7 = 480;
			countTimer_8 = 520;
			mainContainerDivs[0].style.transform = "rotateY("+countTimer_0+"deg) translateZ(475px)";
			mainContainerDivs[1].style.transform = "rotateY("+countTimer_1+"deg) translateZ(475px)";
			mainContainerDivs[2].style.transform = "rotateY("+countTimer_2+"deg) translateZ(475px)";
			mainContainerDivs[3].style.transform = "rotateY("+countTimer_3+"deg) translateZ(475px)";
			mainContainerDivs[4].style.transform = "rotateY("+countTimer_4+"deg) translateZ(475px)";
			mainContainerDivs[5].style.transform = "rotateY("+countTimer_5+"deg) translateZ(475px)";
			mainContainerDivs[6].style.transform = "rotateY("+countTimer_6+"deg) translateZ(475px)";
			mainContainerDivs[7].style.transform = "rotateY("+countTimer_7+"deg) translateZ(475px)";
			mainContainerDivs[8].style.transform = "rotateY("+countTimer_8+"deg) translateZ(475px)";
			slider_antenna.style.background = "url(images/slider/" + 6 + ".jpg) no-repeat center center";
			slider_antenna.style.backgroundSize = "cover";
			sliderClickerContainerDivs_Opacity(5);
			stopSlider();			 
		}
		if(countTimer_0 >= 240 && countTimer_0 < 280) {
			countTimer_0 = 240;
			countTimer_1 = 280;
			countTimer_2 = 320;
			countTimer_3 = 360;
			countTimer_4 = 400;
			countTimer_5 = 440;
			countTimer_6 = 480;
			countTimer_7 = 520;
			countTimer_8 = 560;
			mainContainerDivs[0].style.transform = "rotateY("+countTimer_0+"deg) translateZ(475px)";
			mainContainerDivs[1].style.transform = "rotateY("+countTimer_1+"deg) translateZ(475px)";
			mainContainerDivs[2].style.transform = "rotateY("+countTimer_2+"deg) translateZ(475px)";
			mainContainerDivs[3].style.transform = "rotateY("+countTimer_3+"deg) translateZ(475px)";
			mainContainerDivs[4].style.transform = "rotateY("+countTimer_4+"deg) translateZ(475px)";
			mainContainerDivs[5].style.transform = "rotateY("+countTimer_5+"deg) translateZ(475px)";
			mainContainerDivs[6].style.transform = "rotateY("+countTimer_6+"deg) translateZ(475px)";
			mainContainerDivs[7].style.transform = "rotateY("+countTimer_7+"deg) translateZ(475px)";
			mainContainerDivs[8].style.transform = "rotateY("+countTimer_8+"deg) translateZ(475px)";
			slider_antenna.style.background = "url(images/slider/" + 7 + ".jpg) no-repeat center center";
			slider_antenna.style.backgroundSize = "cover";
			sliderClickerContainerDivs_Opacity(6);
			stopSlider();		 
		}
		if(countTimer_0 >= 280 && countTimer_0 < 320) {
			countTimer_0 = 280;
			countTimer_1 = 320;
			countTimer_2 = 360;
			countTimer_3 = 400;
			countTimer_4 = 440;
			countTimer_5 = 480;
			countTimer_6 = 520;
			countTimer_7 = 560;
			countTimer_8 = 600;
			mainContainerDivs[0].style.transform = "rotateY("+countTimer_0+"deg) translateZ(475px)";
			mainContainerDivs[1].style.transform = "rotateY("+countTimer_1+"deg) translateZ(475px)";
			mainContainerDivs[2].style.transform = "rotateY("+countTimer_2+"deg) translateZ(475px)";
			mainContainerDivs[3].style.transform = "rotateY("+countTimer_3+"deg) translateZ(475px)";
			mainContainerDivs[4].style.transform = "rotateY("+countTimer_4+"deg) translateZ(475px)";
			mainContainerDivs[5].style.transform = "rotateY("+countTimer_5+"deg) translateZ(475px)";
			mainContainerDivs[6].style.transform = "rotateY("+countTimer_6+"deg) translateZ(475px)";
			mainContainerDivs[7].style.transform = "rotateY("+countTimer_7+"deg) translateZ(475px)";
			mainContainerDivs[8].style.transform = "rotateY("+countTimer_8+"deg) translateZ(475px)";
			slider_antenna.style.background = "url(images/slider/" + 8 + ".jpg) no-repeat center center";
			slider_antenna.style.backgroundSize = "cover";
			sliderClickerContainerDivs_Opacity(7);
			stopSlider();	 
		}
		if(countTimer_0 >= 320 && countTimer_0 < 360) {
			countTimer_0 = 320;
			countTimer_1 = 360;
			countTimer_2 = 400;
			countTimer_3 = 440;
			countTimer_4 = 480;
			countTimer_5 = 520;
			countTimer_6 = 560;
			countTimer_7 = 600;
			countTimer_8 = 640;
			mainContainerDivs[0].style.transform = "rotateY("+countTimer_0+"deg) translateZ(475px)";
			mainContainerDivs[1].style.transform = "rotateY("+countTimer_1+"deg) translateZ(475px)";
			mainContainerDivs[2].style.transform = "rotateY("+countTimer_2+"deg) translateZ(475px)";
			mainContainerDivs[3].style.transform = "rotateY("+countTimer_3+"deg) translateZ(475px)";
			mainContainerDivs[4].style.transform = "rotateY("+countTimer_4+"deg) translateZ(475px)";
			mainContainerDivs[5].style.transform = "rotateY("+countTimer_5+"deg) translateZ(475px)";
			mainContainerDivs[6].style.transform = "rotateY("+countTimer_6+"deg) translateZ(475px)";
			mainContainerDivs[7].style.transform = "rotateY("+countTimer_7+"deg) translateZ(475px)";
			mainContainerDivs[8].style.transform = "rotateY("+countTimer_8+"deg) translateZ(475px)";
			slider_antenna.style.background = "url(images/slider/" + 9 + ".jpg) no-repeat center center";
			slider_antenna.style.backgroundSize = "cover";
			stopSlider();		 
			sliderClickerContainerDivs_Opacity(8);
		}
		if(countTimer_0 >= 360 && countTimer_0 < 400) {
			countTimer_0 = 360;
			countTimer_1 = 400;
			countTimer_2 = 440;
			countTimer_3 = 480;
			countTimer_4 = 520;
			countTimer_5 = 560;
			countTimer_6 = 600;
			countTimer_7 = 640;
			countTimer_8 = 680;
			mainContainerDivs[0].style.transform = "rotateY("+countTimer_0+"deg) translateZ(475px)";
			mainContainerDivs[1].style.transform = "rotateY("+countTimer_1+"deg) translateZ(475px)";
			mainContainerDivs[2].style.transform = "rotateY("+countTimer_2+"deg) translateZ(475px)";
			mainContainerDivs[3].style.transform = "rotateY("+countTimer_3+"deg) translateZ(475px)";
			mainContainerDivs[4].style.transform = "rotateY("+countTimer_4+"deg) translateZ(475px)";
			mainContainerDivs[5].style.transform = "rotateY("+countTimer_5+"deg) translateZ(475px)";
			mainContainerDivs[6].style.transform = "rotateY("+countTimer_6+"deg) translateZ(475px)";
			mainContainerDivs[7].style.transform = "rotateY("+countTimer_7+"deg) translateZ(475px)";
			mainContainerDivs[8].style.transform = "rotateY("+countTimer_8+"deg) translateZ(475px)";
			slider_antenna.style.background = "url(images/slider/" + 1 + ".jpg) no-repeat center center";
			slider_antenna.style.backgroundSize = "cover";
			sliderClickerContainerDivs_Opacity(0);
			stopSlider();	 
		}
		if(countTimer_0 >= 400 && countTimer_0 < 440) {
			countTimer_0 = 400;
			countTimer_1 = 440;
			countTimer_2 = 480;
			countTimer_3 = 520;
			countTimer_4 = 560;
			countTimer_5 = 600;
			countTimer_6 = 640;
			countTimer_7 = 680;
			countTimer_8 = 720;
			mainContainerDivs[0].style.transform = "rotateY("+countTimer_0+"deg) translateZ(475px)";
			mainContainerDivs[1].style.transform = "rotateY("+countTimer_1+"deg) translateZ(475px)";
			mainContainerDivs[2].style.transform = "rotateY("+countTimer_2+"deg) translateZ(475px)";
			mainContainerDivs[3].style.transform = "rotateY("+countTimer_3+"deg) translateZ(475px)";
			mainContainerDivs[4].style.transform = "rotateY("+countTimer_4+"deg) translateZ(475px)";
			mainContainerDivs[5].style.transform = "rotateY("+countTimer_5+"deg) translateZ(475px)";
			mainContainerDivs[6].style.transform = "rotateY("+countTimer_6+"deg) translateZ(475px)";
			mainContainerDivs[7].style.transform = "rotateY("+countTimer_7+"deg) translateZ(475px)";
			mainContainerDivs[8].style.transform = "rotateY("+countTimer_8+"deg) translateZ(475px)";
			slider_antenna.style.background = "url(images/slider/" + 2 + ".jpg) no-repeat center center";
			slider_antenna.style.backgroundSize = "cover";
			sliderClickerContainerDivs_Opacity(1);
			stopSlider();			 	 
		}
		if(countTimer_0 >= 440 && countTimer_0 < 480) {
			countTimer_0 = 400;
			countTimer_1 = 440;
			countTimer_2 = 480;
			countTimer_3 = 520;
			countTimer_4 = 560;
			countTimer_5 = 600;
			countTimer_6 = 640;
			countTimer_7 = 680;
			countTimer_8 = 720;
			mainContainerDivs[0].style.transform = "rotateY("+countTimer_0+"deg) translateZ(475px)";
			mainContainerDivs[1].style.transform = "rotateY("+countTimer_1+"deg) translateZ(475px)";
			mainContainerDivs[2].style.transform = "rotateY("+countTimer_2+"deg) translateZ(475px)";
			mainContainerDivs[3].style.transform = "rotateY("+countTimer_3+"deg) translateZ(475px)";
			mainContainerDivs[4].style.transform = "rotateY("+countTimer_4+"deg) translateZ(475px)";
			mainContainerDivs[5].style.transform = "rotateY("+countTimer_5+"deg) translateZ(475px)";
			mainContainerDivs[6].style.transform = "rotateY("+countTimer_6+"deg) translateZ(475px)";
			mainContainerDivs[7].style.transform = "rotateY("+countTimer_7+"deg) translateZ(475px)";
			mainContainerDivs[8].style.transform = "rotateY("+countTimer_8+"deg) translateZ(475px)";
			slider_antenna.style.background = "url(images/slider/" + 3 + ".jpg) no-repeat center center";
			slider_antenna.style.backgroundSize = "cover";
			sliderClickerContainerDivs_Opacity(2);
			stopSlider();			 	 
		}
		if(countTimer_0 >= 120 && countTimer_0 < 160) {
			countTimer_0 = 120;
			countTimer_1 = 160;
			countTimer_2 = 200;
			countTimer_3 = 240;
			countTimer_4 = 280;
			countTimer_5 = 320;
			countTimer_6 = 360;
			countTimer_7 = 400;
			countTimer_8 = 440;
			mainContainerDivs[0].style.transform = "rotateY("+countTimer_0+"deg) translateZ(475px)";
			mainContainerDivs[1].style.transform = "rotateY("+countTimer_1+"deg) translateZ(475px)";
			mainContainerDivs[2].style.transform = "rotateY("+countTimer_2+"deg) translateZ(475px)";
			mainContainerDivs[3].style.transform = "rotateY("+countTimer_3+"deg) translateZ(475px)";
			mainContainerDivs[4].style.transform = "rotateY("+countTimer_4+"deg) translateZ(475px)";
			mainContainerDivs[5].style.transform = "rotateY("+countTimer_5+"deg) translateZ(475px)";
			mainContainerDivs[6].style.transform = "rotateY("+countTimer_6+"deg) translateZ(475px)";
			mainContainerDivs[7].style.transform = "rotateY("+countTimer_7+"deg) translateZ(475px)";
			mainContainerDivs[8].style.transform = "rotateY("+countTimer_8+"deg) translateZ(475px)";
			slider_antenna.style.background = "url(images/slider/" + 4 + ".jpg) no-repeat center center";
			slider_antenna.style.backgroundSize = "cover";
			sliderClickerContainerDivs_Opacity(3);
			stopSlider();			 	 
		}
		if(countTimer_0 >= 160 && countTimer_0 < 200) {
			countTimer_0 = 160;
			countTimer_1 = 200;
			countTimer_2 = 240;
			countTimer_3 = 280;
			countTimer_4 = 320;
			countTimer_5 = 360;
			countTimer_6 = 400;
			countTimer_7 = 440;
			countTimer_8 = 480;
			mainContainerDivs[0].style.transform = "rotateY("+countTimer_0+"deg) translateZ(475px)";
			mainContainerDivs[1].style.transform = "rotateY("+countTimer_1+"deg) translateZ(475px)";
			mainContainerDivs[2].style.transform = "rotateY("+countTimer_2+"deg) translateZ(475px)";
			mainContainerDivs[3].style.transform = "rotateY("+countTimer_3+"deg) translateZ(475px)";
			mainContainerDivs[4].style.transform = "rotateY("+countTimer_4+"deg) translateZ(475px)";
			mainContainerDivs[5].style.transform = "rotateY("+countTimer_5+"deg) translateZ(475px)";
			mainContainerDivs[6].style.transform = "rotateY("+countTimer_6+"deg) translateZ(475px)";
			mainContainerDivs[7].style.transform = "rotateY("+countTimer_7+"deg) translateZ(475px)";
			mainContainerDivs[8].style.transform = "rotateY("+countTimer_8+"deg) translateZ(475px)";
			slider_antenna.style.background = "url(images/slider/" + 5 + ".jpg) no-repeat center center";
			slider_antenna.style.backgroundSize = "cover";
			sliderClickerContainerDivs_Opacity(4);
			stopSlider();		 
		}
		if(countTimer_0 >= 200 && countTimer_0 < 240) {
			countTimer_0 = 200;
			countTimer_1 = 240;
			countTimer_2 = 280;
			countTimer_3 = 320;
			countTimer_4 = 360;
			countTimer_5 = 400;
			countTimer_6 = 440;
			countTimer_7 = 480;
			countTimer_8 = 520;
			mainContainerDivs[0].style.transform = "rotateY("+countTimer_0+"deg) translateZ(475px)";
			mainContainerDivs[1].style.transform = "rotateY("+countTimer_1+"deg) translateZ(475px)";
			mainContainerDivs[2].style.transform = "rotateY("+countTimer_2+"deg) translateZ(475px)";
			mainContainerDivs[3].style.transform = "rotateY("+countTimer_3+"deg) translateZ(475px)";
			mainContainerDivs[4].style.transform = "rotateY("+countTimer_4+"deg) translateZ(475px)";
			mainContainerDivs[5].style.transform = "rotateY("+countTimer_5+"deg) translateZ(475px)";
			mainContainerDivs[6].style.transform = "rotateY("+countTimer_6+"deg) translateZ(475px)";
			mainContainerDivs[7].style.transform = "rotateY("+countTimer_7+"deg) translateZ(475px)";
			mainContainerDivs[8].style.transform = "rotateY("+countTimer_8+"deg) translateZ(475px)";
			slider_antenna.style.background = "url(images/slider/" + 6 + ".jpg) no-repeat center center";
			slider_antenna.style.backgroundSize = "cover";
			sliderClickerContainerDivs_Opacity(5);
			stopSlider();			 
		}
		if(countTimer_0 >= 240 && countTimer_0 < 280) {
			countTimer_0 = 240;
			countTimer_1 = 280;
			countTimer_2 = 320;
			countTimer_3 = 360;
			countTimer_4 = 400;
			countTimer_5 = 440;
			countTimer_6 = 480;
			countTimer_7 = 520;
			countTimer_8 = 560;
			mainContainerDivs[0].style.transform = "rotateY("+countTimer_0+"deg) translateZ(475px)";
			mainContainerDivs[1].style.transform = "rotateY("+countTimer_1+"deg) translateZ(475px)";
			mainContainerDivs[2].style.transform = "rotateY("+countTimer_2+"deg) translateZ(475px)";
			mainContainerDivs[3].style.transform = "rotateY("+countTimer_3+"deg) translateZ(475px)";
			mainContainerDivs[4].style.transform = "rotateY("+countTimer_4+"deg) translateZ(475px)";
			mainContainerDivs[5].style.transform = "rotateY("+countTimer_5+"deg) translateZ(475px)";
			mainContainerDivs[6].style.transform = "rotateY("+countTimer_6+"deg) translateZ(475px)";
			mainContainerDivs[7].style.transform = "rotateY("+countTimer_7+"deg) translateZ(475px)";
			mainContainerDivs[8].style.transform = "rotateY("+countTimer_8+"deg) translateZ(475px)";
			slider_antenna.style.background = "url(images/slider/" + 7 + ".jpg) no-repeat center center";
			slider_antenna.style.backgroundSize = "cover";
			sliderClickerContainerDivs_Opacity(6);
			stopSlider();		 
		}
		if(countTimer_0 >= 280 && countTimer_0 < 320) {
			countTimer_0 = 280;
			countTimer_1 = 320;
			countTimer_2 = 360;
			countTimer_3 = 400;
			countTimer_4 = 440;
			countTimer_5 = 480;
			countTimer_6 = 520;
			countTimer_7 = 560;
			countTimer_8 = 600;
			mainContainerDivs[0].style.transform = "rotateY("+countTimer_0+"deg) translateZ(475px)";
			mainContainerDivs[1].style.transform = "rotateY("+countTimer_1+"deg) translateZ(475px)";
			mainContainerDivs[2].style.transform = "rotateY("+countTimer_2+"deg) translateZ(475px)";
			mainContainerDivs[3].style.transform = "rotateY("+countTimer_3+"deg) translateZ(475px)";
			mainContainerDivs[4].style.transform = "rotateY("+countTimer_4+"deg) translateZ(475px)";
			mainContainerDivs[5].style.transform = "rotateY("+countTimer_5+"deg) translateZ(475px)";
			mainContainerDivs[6].style.transform = "rotateY("+countTimer_6+"deg) translateZ(475px)";
			mainContainerDivs[7].style.transform = "rotateY("+countTimer_7+"deg) translateZ(475px)";
			mainContainerDivs[8].style.transform = "rotateY("+countTimer_8+"deg) translateZ(475px)";
			slider_antenna.style.background = "url(images/slider/" + 8 + ".jpg) no-repeat center center";
			slider_antenna.style.backgroundSize = "cover";
			sliderClickerContainerDivs_Opacity(7);
			stopSlider();	 
		}
		if(countTimer_0 >= 320 && countTimer_0 < 360) {
			countTimer_0 = 320;
			countTimer_1 = 360;
			countTimer_2 = 400;
			countTimer_3 = 440;
			countTimer_4 = 480;
			countTimer_5 = 520;
			countTimer_6 = 560;
			countTimer_7 = 600;
			countTimer_8 = 640;
			mainContainerDivs[0].style.transform = "rotateY("+countTimer_0+"deg) translateZ(475px)";
			mainContainerDivs[1].style.transform = "rotateY("+countTimer_1+"deg) translateZ(475px)";
			mainContainerDivs[2].style.transform = "rotateY("+countTimer_2+"deg) translateZ(475px)";
			mainContainerDivs[3].style.transform = "rotateY("+countTimer_3+"deg) translateZ(475px)";
			mainContainerDivs[4].style.transform = "rotateY("+countTimer_4+"deg) translateZ(475px)";
			mainContainerDivs[5].style.transform = "rotateY("+countTimer_5+"deg) translateZ(475px)";
			mainContainerDivs[6].style.transform = "rotateY("+countTimer_6+"deg) translateZ(475px)";
			mainContainerDivs[7].style.transform = "rotateY("+countTimer_7+"deg) translateZ(475px)";
			mainContainerDivs[8].style.transform = "rotateY("+countTimer_8+"deg) translateZ(475px)";
			slider_antenna.style.background = "url(images/slider/" + 9 + ".jpg) no-repeat center center";
			slider_antenna.style.backgroundSize = "cover";
			stopSlider();		 
			sliderClickerContainerDivs_Opacity(8);
		}
		stopSlider();
	}

	slider_antenna.onmouseout = function() {
		for(var i = 0; i < mainContainerDivs.length; i++) {
			mainContainerDivs[i].style.transition = "";
		}
		goSlider();
	}

	slider_antenna.onmousemove = function() {
		slider_antenna_count_timer = 0;
		stopSlider();
	}

	var sliderClicker = document.getElementById('slider-clicker');

	sliderClicker.onmouseover = function() {
		stopSlider();
	}

	sliderClicker.onmouseout = function() {
		for(var i = 0; i < mainContainerDivs.length; i++) {
			mainContainerDivs[i].style.transition = "";
		}
		goSlider();
	}


/*menu..................................................................................................................................*/


	menuMain[0].style.backgroundColor = "#1c2028";
	menuMainDiv[0].style.display = "block";

	function removeColor(elem) {
		for(var j = 0; j < menuMain.length; j++) {
			menuMainDiv[j].style.display = "none";
			menuMain[j].style.backgroundColor = "#1f5fd6";
			menuMain[elem].style.backgroundColor = "#1c2028";
			menuMainDiv[elem].style.display = "block";
		}
	}

	for(var i = 0; i < menuMain.length; i++) {
		menuMain[0].onmouseover = function() {
			removeColor(0);
		}
		menuMain[1].onmouseover = function() {
			removeColor(1);
		}
		menuMain[2].onmouseover = function() {
			removeColor(2);
		}
		menuMain[3].onmouseover = function() {
			removeColor(3);
		}
		menuMain[4].onmouseover = function() {
			removeColor(4);
		}
		menuMain[5].onmouseover = function() {
			removeColor(5);
		}
	}
/*menu-slider..........................................................................................................................*/

	var countTimer_menuMainDivContainerMain = 0;
	var timer_menuMainDivContainerMain;

	for(var i = 0; i < menuMainDivContainerMain.length; i++) {
		menuMainDivContainerMain[i].onmouseover = function() {
			countTimer_menuMainDivContainerMain = 0;
			menuMainDivContainerMain_Finish();
		}
		menuMainDivContainerMain[i].onmousemove = function() {
			countTimer_menuMainDivContainerMain = 0;
			menuMainDivContainerMain_Finish();
		}
		menuMainDivContainerMain[i].onclick = function() {
			countTimer_menuMainDivContainerMain = 0;
			menuMainDivContainerMain_Finish();
		}
		menuMainDivContainerMain[i].onmouseout = function() {	
			menuMainDivContainerMain_Start();
		}
	}

	function menuMainDivContainerMain_Animation_Right() {
		menuMainDivContainerContainerBlockCount -= 590;
		if(menuMainDivContainerContainerBlockCount < -2950) {
			menuMainDivContainerContainerBlockCount = 0;
		}
		for(var j = 0; j < menuMainDivContainerContainerBlock.length; j++) {
			menuMainDivContainerContainerBlock[j].style.marginLeft = menuMainDivContainerContainerBlockCount + "px";
		}
	}

	function menuMainDivContainerMain_Animation_Left() {
		menuMainDivContainerContainerBlockCount += 590;
		if(menuMainDivContainerContainerBlockCount > 0) {
			menuMainDivContainerContainerBlockCount = -2950;
		}
		for(var j = 0; j < menuMainDivContainerContainerBlock.length; j++) {
			menuMainDivContainerContainerBlock[j].style.marginLeft = menuMainDivContainerContainerBlockCount + "px";
		}
	}

	var countTimer_Animation = 0;
	var timer_Animation;

	function menuMainDivContainerMain_Start () {
		timer_menuMainDivContainerMain = setInterval(function(){
			countTimer_menuMainDivContainerMain++;
			if(countTimer_menuMainDivContainerMain >= 1) {
				timer_Animation = setTimeout(menuMainDivContainerMain_Animation_Right, 1);						
			}
		}, 5000);
	}

	function menuMainDivContainerMain_Finish () {
		clearInterval(timer_menuMainDivContainerMain);
		clearTimeout(timer_Animation);
	}

	menuMainDivContainerMain_Start();

/*main-header-news..........................................................................................................................*/

var menuMainDivContainerDivsBlockAccount = document.getElementsByClassName('menu-main-div-container-divs-block-account');

	var handlerv_Active = function() {
		var index = this.getAttribute('data-index');
		menuMainDivContainerDivsBlockAccountA[index].style.display = "block"; 
	}
	var handlerv_Active_None = function() {
		var index = this.getAttribute('data-index');
		menuMainDivContainerDivsBlockAccountA[index].style.display = "none"; 
	}
	for(var i = 0; i < menuMainDivContainerDivsBlockAccount.length; i++) {
		menuMainDivContainerDivsBlockAccount[i].setAttribute('data-index', i);
		menuMainDivContainerDivsBlockAccount[i].onmouseover = handlerv_Active;
		menuMainDivContainerDivsBlockAccount[i].onmouseout = handlerv_Active_None;
	}

	var mainHeaderNewsA = document.getElementsByClassName('main-header-news-a');
	var timer_mainHeaderNewsA;
	var timer_count_mainHeaderNewsA = 0;
	var count_mainHeaderNewsA = 0;
	var timer_timer_mainHeaderNewsA;
	var mainHeaderNewsUl = document.getElementById('main-header-news-ul');

	mainHeaderNewsUl.onmousemove = function() {
		timer_mainHeaderNewsA_Stop();
		timer_count_mainHeaderNewsA = 0;
	}

	mainHeaderNewsUl.onmouseover = function() {
		timer_mainHeaderNewsA_Stop();
		timer_count_mainHeaderNewsA = 0;
	}

	mainHeaderNewsUl.onmouseclick = function() {
		timer_mainHeaderNewsA_Stop();
		timer_count_mainHeaderNewsA = 0;
	}

	mainHeaderNewsUl.onmouseout = function() {
		timer_mainHeaderNewsA_Start();
	}

	function timer_mainHeaderNewsA_Active() {
		count_mainHeaderNewsA -= 50;
		if(count_mainHeaderNewsA <= -250) {
			count_mainHeaderNewsA = 0;
		}
		mainHeaderNewsA[0].style.marginTop = count_mainHeaderNewsA + "px";
	}

	function timer_mainHeaderNewsA_Start() {
		timer_mainHeaderNewsA = setInterval(function(){
			timer_count_mainHeaderNewsA++;
			if(timer_count_mainHeaderNewsA >= 1) {
				timer_timer_mainHeaderNewsA = setTimeout(timer_mainHeaderNewsA_Active,1);
			}
		}, 6000);		
	}

	function timer_mainHeaderNewsA_Stop() {
		clearInterval(timer_mainHeaderNewsA);
		clearTimeout(timer_timer_mainHeaderNewsA);
	}
	
	timer_mainHeaderNewsA_Start();
	
/*main-slider..................................................................................................................................*/	

	var sliderClickerContainerDivCount = 0;
	var sliderClickerContainerDiv = document.getElementById('slider-clicker-container-div');

	for(var i = 0; i < menuMainDivContainerContainerRightPointer.length; i++) {
		menuMainDivContainerContainerRightPointer[i].onclick = menuMainDivContainerMain_Animation_Right;
	}

	for(var i = 0; i < menuMainDivContainerContainerLeftPointer.length; i++) {
		menuMainDivContainerContainerLeftPointer[i].onclick = menuMainDivContainerMain_Animation_Left;
	}

	var sliderClickerContainerDivs = document.getElementsByClassName('slider-clicker-container-divs');
	var sliderClickerContainerDivsImg = document.querySelectorAll('div.slider-clicker-container-divs > img');

	function sliderClickerContainerDivs_click(index) {
			for(var i = 0; i < sliderClickerContainerDivs.length; i++) {
				sliderClickerContainerDivs[i].style.opacity = ".6";
			}
			for(var i = 0; i < mainContainerDivs.length; i++) {
				mainContainerDivs[i].style.transition = "1s";
			}
			sliderClickerContainerDivs[index].style.opacity = "1";
			stopSlider();
	}

	for(var i = 0; i < sliderClickerContainerDivs.length; i++) {
		sliderClickerContainerDivs[0].onclick = function(){
			countTimer_0 = 0;
			countTimer_1 = 40;
			countTimer_2 = 80;
			countTimer_3 = 120;
			countTimer_4 = 160;
			countTimer_5 = 200;
			countTimer_6 = 240;
			countTimer_7 = 280;
			countTimer_8 = 320;
			mainContainerDivs[0].style.transform = "rotateY("+countTimer_0+"deg) translateZ(475px)";
			mainContainerDivs[1].style.transform = "rotateY("+countTimer_1+"deg) translateZ(475px)";
			mainContainerDivs[2].style.transform = "rotateY("+countTimer_2+"deg) translateZ(475px)";
			mainContainerDivs[3].style.transform = "rotateY("+countTimer_3+"deg) translateZ(475px)";
			mainContainerDivs[4].style.transform = "rotateY("+countTimer_4+"deg) translateZ(475px)";
			mainContainerDivs[5].style.transform = "rotateY("+countTimer_5+"deg) translateZ(475px)";
			mainContainerDivs[6].style.transform = "rotateY("+countTimer_6+"deg) translateZ(475px)";
			mainContainerDivs[7].style.transform = "rotateY("+countTimer_7+"deg) translateZ(475px)";
			mainContainerDivs[8].style.transform = "rotateY("+countTimer_8+"deg) translateZ(475px)";
			slider_antenna.style.background = "url(images/slider/" + 1 + ".jpg) no-repeat center center";
			slider_antenna.style.backgroundSize = "cover";
			sliderClickerContainerDivs_Opacity(0);
			sliderClickerContainerDivs_click(0);
			stopSlider();
		}
		sliderClickerContainerDivs[1].onclick = function(){
			countTimer_0 = 40;
			countTimer_1 = 80;
			countTimer_2 = 120;
			countTimer_3 = 160;
			countTimer_4 = 200;
			countTimer_5 = 240;
			countTimer_6 = 280;
			countTimer_7 = 320;
			countTimer_8 = 360;
			mainContainerDivs[0].style.transform = "rotateY("+countTimer_0+"deg) translateZ(475px)";
			mainContainerDivs[1].style.transform = "rotateY("+countTimer_1+"deg) translateZ(475px)";
			mainContainerDivs[2].style.transform = "rotateY("+countTimer_2+"deg) translateZ(475px)";
			mainContainerDivs[3].style.transform = "rotateY("+countTimer_3+"deg) translateZ(475px)";
			mainContainerDivs[4].style.transform = "rotateY("+countTimer_4+"deg) translateZ(475px)";
			mainContainerDivs[5].style.transform = "rotateY("+countTimer_5+"deg) translateZ(475px)";
			mainContainerDivs[6].style.transform = "rotateY("+countTimer_6+"deg) translateZ(475px)";
			mainContainerDivs[7].style.transform = "rotateY("+countTimer_7+"deg) translateZ(475px)";
			mainContainerDivs[8].style.transform = "rotateY("+countTimer_8+"deg) translateZ(475px)";
			slider_antenna.style.background = "url(images/slider/" + 2 + ".jpg) no-repeat center center";
			slider_antenna.style.backgroundSize = "cover";
			sliderClickerContainerDivs_Opacity(1);
			sliderClickerContainerDivs_click(1);
			stopSlider();
		}
		sliderClickerContainerDivs[2].onclick = function(){
			countTimer_0 = 80;
			countTimer_1 = 120;
			countTimer_2 = 160;
			countTimer_3 = 200;
			countTimer_4 = 240;
			countTimer_5 = 280;
			countTimer_6 = 320;
			countTimer_7 = 360;
			countTimer_8 = 400;
			mainContainerDivs[0].style.transform = "rotateY("+countTimer_0+"deg) translateZ(475px)";
			mainContainerDivs[1].style.transform = "rotateY("+countTimer_1+"deg) translateZ(475px)";
			mainContainerDivs[2].style.transform = "rotateY("+countTimer_2+"deg) translateZ(475px)";
			mainContainerDivs[3].style.transform = "rotateY("+countTimer_3+"deg) translateZ(475px)";
			mainContainerDivs[4].style.transform = "rotateY("+countTimer_4+"deg) translateZ(475px)";
			mainContainerDivs[5].style.transform = "rotateY("+countTimer_5+"deg) translateZ(475px)";
			mainContainerDivs[6].style.transform = "rotateY("+countTimer_6+"deg) translateZ(475px)";
			mainContainerDivs[7].style.transform = "rotateY("+countTimer_7+"deg) translateZ(475px)";
			mainContainerDivs[8].style.transform = "rotateY("+countTimer_8+"deg) translateZ(475px)";
			slider_antenna.style.background = "url(images/slider/" + 3 + ".jpg) no-repeat center center";
			slider_antenna.style.backgroundSize = "cover";
			sliderClickerContainerDivs_Opacity(2);
			sliderClickerContainerDivs_click(2);
			stopSlider();
		}
		sliderClickerContainerDivs[3].onclick = function(){
			countTimer_0 = 120;
			countTimer_1 = 160;
			countTimer_2 = 200;
			countTimer_3 = 240;
			countTimer_4 = 280;
			countTimer_5 = 320;
			countTimer_6 = 360;
			countTimer_7 = 400;
			countTimer_8 = 440;
			mainContainerDivs[0].style.transform = "rotateY("+countTimer_0+"deg) translateZ(475px)";
			mainContainerDivs[1].style.transform = "rotateY("+countTimer_1+"deg) translateZ(475px)";
			mainContainerDivs[2].style.transform = "rotateY("+countTimer_2+"deg) translateZ(475px)";
			mainContainerDivs[3].style.transform = "rotateY("+countTimer_3+"deg) translateZ(475px)";
			mainContainerDivs[4].style.transform = "rotateY("+countTimer_4+"deg) translateZ(475px)";
			mainContainerDivs[5].style.transform = "rotateY("+countTimer_5+"deg) translateZ(475px)";
			mainContainerDivs[6].style.transform = "rotateY("+countTimer_6+"deg) translateZ(475px)";
			mainContainerDivs[7].style.transform = "rotateY("+countTimer_7+"deg) translateZ(475px)";
			mainContainerDivs[8].style.transform = "rotateY("+countTimer_8+"deg) translateZ(475px)";
			slider_antenna.style.background = "url(images/slider/" + 4 + ".jpg) no-repeat center center";
			slider_antenna.style.backgroundSize = "cover";
			sliderClickerContainerDivs_Opacity(3);
			sliderClickerContainerDivs_click(3);
			stopSlider();
		}
		sliderClickerContainerDivs[4].onclick = function(){
			countTimer_0 = 160;
			countTimer_1 = 200;
			countTimer_2 = 240;
			countTimer_3 = 280;
			countTimer_4 = 320;
			countTimer_5 = 360;
			countTimer_6 = 400;
			countTimer_7 = 440;
			countTimer_8 = 480;
			mainContainerDivs[0].style.transform = "rotateY("+countTimer_0+"deg) translateZ(475px)";
			mainContainerDivs[1].style.transform = "rotateY("+countTimer_1+"deg) translateZ(475px)";
			mainContainerDivs[2].style.transform = "rotateY("+countTimer_2+"deg) translateZ(475px)";
			mainContainerDivs[3].style.transform = "rotateY("+countTimer_3+"deg) translateZ(475px)";
			mainContainerDivs[4].style.transform = "rotateY("+countTimer_4+"deg) translateZ(475px)";
			mainContainerDivs[5].style.transform = "rotateY("+countTimer_5+"deg) translateZ(475px)";
			mainContainerDivs[6].style.transform = "rotateY("+countTimer_6+"deg) translateZ(475px)";
			mainContainerDivs[7].style.transform = "rotateY("+countTimer_7+"deg) translateZ(475px)";
			mainContainerDivs[8].style.transform = "rotateY("+countTimer_8+"deg) translateZ(475px)";
			slider_antenna.style.background = "url(images/slider/" + 5 + ".jpg) no-repeat center center";
			slider_antenna.style.backgroundSize = "cover";
			sliderClickerContainerDivs_Opacity(4);
			sliderClickerContainerDivs_click(4);
			stopSlider();
		}
		sliderClickerContainerDivs[5].onclick = function(){
			countTimer_0 = 200;
			countTimer_1 = 240;
			countTimer_2 = 280;
			countTimer_3 = 320;
			countTimer_4 = 360;
			countTimer_5 = 400;
			countTimer_6 = 440;
			countTimer_7 = 480;
			countTimer_8 = 520;
			mainContainerDivs[0].style.transform = "rotateY("+countTimer_0+"deg) translateZ(475px)";
			mainContainerDivs[1].style.transform = "rotateY("+countTimer_1+"deg) translateZ(475px)";
			mainContainerDivs[2].style.transform = "rotateY("+countTimer_2+"deg) translateZ(475px)";
			mainContainerDivs[3].style.transform = "rotateY("+countTimer_3+"deg) translateZ(475px)";
			mainContainerDivs[4].style.transform = "rotateY("+countTimer_4+"deg) translateZ(475px)";
			mainContainerDivs[5].style.transform = "rotateY("+countTimer_5+"deg) translateZ(475px)";
			mainContainerDivs[6].style.transform = "rotateY("+countTimer_6+"deg) translateZ(475px)";
			mainContainerDivs[7].style.transform = "rotateY("+countTimer_7+"deg) translateZ(475px)";
			mainContainerDivs[8].style.transform = "rotateY("+countTimer_8+"deg) translateZ(475px)";
			slider_antenna.style.background = "url(images/slider/" + 6 + ".jpg) no-repeat center center";
			slider_antenna.style.backgroundSize = "cover";
			sliderClickerContainerDivs_Opacity(5);
			sliderClickerContainerDivs_click(5);
			stopSlider();
		}
		sliderClickerContainerDivs[6].onclick = function(){
			countTimer_0 = 240;
			countTimer_1 = 280;
			countTimer_2 = 320;
			countTimer_3 = 360;
			countTimer_4 = 400;
			countTimer_5 = 440;
			countTimer_6 = 480;
			countTimer_7 = 520;
			countTimer_8 = 560;
			mainContainerDivs[0].style.transform = "rotateY("+countTimer_0+"deg) translateZ(475px)";
			mainContainerDivs[1].style.transform = "rotateY("+countTimer_1+"deg) translateZ(475px)";
			mainContainerDivs[2].style.transform = "rotateY("+countTimer_2+"deg) translateZ(475px)";
			mainContainerDivs[3].style.transform = "rotateY("+countTimer_3+"deg) translateZ(475px)";
			mainContainerDivs[4].style.transform = "rotateY("+countTimer_4+"deg) translateZ(475px)";
			mainContainerDivs[5].style.transform = "rotateY("+countTimer_5+"deg) translateZ(475px)";
			mainContainerDivs[6].style.transform = "rotateY("+countTimer_6+"deg) translateZ(475px)";
			mainContainerDivs[7].style.transform = "rotateY("+countTimer_7+"deg) translateZ(475px)";
			mainContainerDivs[8].style.transform = "rotateY("+countTimer_8+"deg) translateZ(475px)";
			slider_antenna.style.background = "url(images/slider/" + 7 + ".jpg) no-repeat center center";
			slider_antenna.style.backgroundSize = "cover";
			sliderClickerContainerDivs_Opacity(6);
			sliderClickerContainerDivs_click(6);
			stopSlider();
		}
		sliderClickerContainerDivs[7].onclick = function(){
			countTimer_0 = 280;
			countTimer_1 = 320;
			countTimer_2 = 360;
			countTimer_3 = 400;
			countTimer_4 = 440;
			countTimer_5 = 480;
			countTimer_6 = 520;
			countTimer_7 = 560;
			countTimer_8 = 600;
			mainContainerDivs[0].style.transform = "rotateY("+countTimer_0+"deg) translateZ(475px)";
			mainContainerDivs[1].style.transform = "rotateY("+countTimer_1+"deg) translateZ(475px)";
			mainContainerDivs[2].style.transform = "rotateY("+countTimer_2+"deg) translateZ(475px)";
			mainContainerDivs[3].style.transform = "rotateY("+countTimer_3+"deg) translateZ(475px)";
			mainContainerDivs[4].style.transform = "rotateY("+countTimer_4+"deg) translateZ(475px)";
			mainContainerDivs[5].style.transform = "rotateY("+countTimer_5+"deg) translateZ(475px)";
			mainContainerDivs[6].style.transform = "rotateY("+countTimer_6+"deg) translateZ(475px)";
			mainContainerDivs[7].style.transform = "rotateY("+countTimer_7+"deg) translateZ(475px)";
			mainContainerDivs[8].style.transform = "rotateY("+countTimer_8+"deg) translateZ(475px)";
			slider_antenna.style.background = "url(images/slider/" + 8 + ".jpg) no-repeat center center";
			slider_antenna.style.backgroundSize = "cover";
			sliderClickerContainerDivs_Opacity(7);
			sliderClickerContainerDivs_click(7);
			stopSlider();
		}
		sliderClickerContainerDivs[8].onclick = function(){
			countTimer_0 = 320;
			countTimer_1 = 360;
			countTimer_2 = 400;
			countTimer_3 = 440;
			countTimer_4 = 480;
			countTimer_5 = 520;
			countTimer_6 = 560;
			countTimer_7 = 600;
			countTimer_8 = 640;
			mainContainerDivs[0].style.transform = "rotateY("+countTimer_0+"deg) translateZ(475px)";
			mainContainerDivs[1].style.transform = "rotateY("+countTimer_1+"deg) translateZ(475px)";
			mainContainerDivs[2].style.transform = "rotateY("+countTimer_2+"deg) translateZ(475px)";
			mainContainerDivs[3].style.transform = "rotateY("+countTimer_3+"deg) translateZ(475px)";
			mainContainerDivs[4].style.transform = "rotateY("+countTimer_4+"deg) translateZ(475px)";
			mainContainerDivs[5].style.transform = "rotateY("+countTimer_5+"deg) translateZ(475px)";
			mainContainerDivs[6].style.transform = "rotateY("+countTimer_6+"deg) translateZ(475px)";
			mainContainerDivs[7].style.transform = "rotateY("+countTimer_7+"deg) translateZ(475px)";
			mainContainerDivs[8].style.transform = "rotateY("+countTimer_8+"deg) translateZ(475px)";
			slider_antenna.style.background = "url(images/slider/" + 9 + ".jpg) no-repeat center center";
			slider_antenna.style.backgroundSize = "cover";
			sliderClickerContainerDivs_Opacity(8);
			sliderClickerContainerDivs_click(8);
			stopSlider();
		}
	}

	window.onscroll = function() {
		var windowHeight = document.documentElement.scrollTop || document.body.scrollTop;
		var mainRight = document.getElementById('main-right');
		var mainRightLastComment = document.getElementById('main-right-last-comment');
		var buttonTop = document.getElementById('button-top');
		var height = document.documentElement || document.body;
		var height_count = 0;
		var timer_scroll;

		if(windowHeight > 1900 && windowHeight < 4150) {
			mainRight.style.position = "fixed";	
			mainRightLastComment.style.position = "fixed";	
			mainRight.style.top = "-10px";
			mainRightLastComment.style.top = "310px";
		} else if(windowHeight > 4150){
			mainRight.style.position = "";
			mainRightLastComment.style.position = "";
			mainRight.style.top = "2310px";
			mainRightLastComment.style.top = "2310px";
		} else {
			mainRight.style.position = "";
			mainRightLastComment.style.position = "";
			mainRight.style.top = "";
			mainRightLastComment.style.top = "";
		}
		if(windowHeight > 1080) {
			buttonTop.style.display = "block";
		} else {
			buttonTop.style.display = "";
		}
		function backToTop() {
			if(window.pageYOffset > 0) {
      			window.scrollBy(0, -50);
      			setTimeout(backToTop, 0);
   			}
		}
		buttonTop.onclick = backToTop;
	}
}

