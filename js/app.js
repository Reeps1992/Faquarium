'use strict';

// FONCTIONS ******************************************************************

function onScrollBtn() {
	if(window.matchMedia("(max-width:600px)").matches) {
		window.addEventListener("scroll",function() {
			if(window.scrollY > 230) {
				$('.focus-button').fadeIn( 600 );
			}
		},false);
  }
}

function reserve(){

	let lastname;
	let firstname;
	let email;

	var button = $('#final-res');

	button.click( function(){

		let lastname = $('#input1').val().length;
		let firstname = $('#input2').val().length;
		let email = $('#input3').val().length;

		if(lastname > 1 && firstname > 1 && email > 1){
			$('#final-res').css('background-color', 'green');
			$('#final-res:hover').css('color', 'white');
			$('#final-res').css('color', 'white');
			$('#final-res').delay(0.3).html('Réservé !');
		}else {
			console.log('non');
		}

	});

}


function delayBtn() {
	if(window.matchMedia("(min-width:600px)").matches) {
			$('#media-over').delay( 9500 ).fadeIn( 700 );
  }
}

function blurVideo(target) {
	if(window.matchMedia("(min-width:600px)").matches) {
			$('#reserver-over').hover(function(){
				target.css('filter', 'blur(3px)');
			}, function(){
				target.css('filter', 'none');
			});
  }
}

function more(){

	var bullet;
	var target = $('.sample2');
	var trigger = $('#animaux-more button');

	function display(data){
		target.append(data);
	}

	trigger.click(function(){
		$.get("app/more.php", display);
		trigger.css('display', 'none');
  });

}


function menuUnderlineOn() {
	console.log('ON');
	$('.after').css('width', '5em');
}

function menuUnderlineOff() {
	console.log('OFF');
	$('.after').css('width', '0');
}

function menuBtn() {

	var menu = $('nav');
	var cross = $('div.btn-menu.cross');
	var bars = $('div.btn-menu.bars');

	cross.on('click', function(){
		menu.slideToggle( 500 , function(){
			if(window.matchMedia("(max-width:600px)").matches) {
				menuUnderlineOff();
		  }
			cross.fadeOut( 200 );
			bars.delay( 200 ).fadeIn( 200 );
		});
	})

	bars.on('click', function(){
		menu.slideToggle( 500 , function() {
			if(window.matchMedia("(max-width:600px)").matches) {
				menuUnderlineOn();
		  }
			bars.fadeOut( 200 );
			cross.delay( 200 ).fadeIn( 200 );
		});
	})

}

// INIT ***********************************************************************

$(window).on('load', function() {
			$('.flexslider').flexslider({
        animation: "slide",
        animationLoop: true,
        itemWidth: 210,
        itemMargin: 5,
        mousewheel: true,
			});

			menuBtn();
			reserve();
			blurVideo($('iframe'));
			more();
			delayBtn();
			onScrollBtn();

		});
