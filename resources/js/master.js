/*Feito por Grinalda Soares em 24/08/2017 00:01 */

//********** Scrollable ****** 
$('a[href^="#"]').on('click', function(event) {
	event.preventDefault();

	$('.menus li').removeClass('active');
	$(this).parents('li').addClass('active');

	var target = this.hash;

	var $target = $(target);

	$('html, body').animate({
		'scrollTop': $target.offset().top
	}, 1000, 'swing');
});

//********** Controlo Menu Index******

$(window).scroll(function() {
	if ($(this).scrollTop() > 100) {
		$('.areaMenu').delay(100).addClass('smal');
	} if ($(this).scrollTop() < 100){
		$('.areaMenu').delay(100).removeClass('smal');
	}
});


//********** Carrousel - Testemunho ****** 
$('.carousel').carousel({
  interval: 10000
});


