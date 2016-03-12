var app = {};

app.hamburger = function() {
	$('.mobileMenu').on('click', function(){
		// e.preventDefault();
	  $('.overlayMenu').fadeToggle(),$(this).toggleClass('open');
	});
	// $('#menuBurger').on('click', function (e) {
	//   e.preventDefault();
	//   $('.overlayMenu').fadeOut(400).hide();
	// });
};

app.slideMenu = function() {
	$('#menuBurger').on('click', function(){
		// e.preventDefault();
		$('.mainNav').toggleClass('active');
	  $(this).toggleClass('open');
	});
}

app.init = function() {
	// app.hamburger();
	app.slideMenu();
};

$(function(){
	app.init();
	console.log("It's working");

});
