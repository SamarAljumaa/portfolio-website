var app = {};

app.hamburger = function() {
	$('#menuBurger').click(function(e){
		e.preventDefault();
		$(this).toggleClass('open');
	  $('.overlayMenu').fadeIn(400).show();
	});
	$('').on('click', function (e) {
	  e.preventDefault();
	  $('.overlayMenu').fadeOut(400).hide();
	});
};

app.init = function() {
	app.hamburger();
};

$(function(){
	app.init();
	console.log("It's working");

});
