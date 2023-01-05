const showPassword = login.querySelector
("#show-password");
const passwordField = login.querySelector
("#password");

const showPassword = register.querySelector
("#show-password");
const passwordField = register.querySelector
("#password");

showPassword.addEventListener("click", function(){
	this.classList.toggle("fa-eye-slash");
	const type = passwordField.getAttribute("type")
	=== "password" ? "text" : "password";
	passwordField.setAttribute("type", type);
})

/*(function($) {

	"use strict";

	var fullHeight = function() {

		$('.js-fullheight').css('height', $(window).height());
		$(window).resize(function(){
			$('.js-fullheight').css('height', $(window).height());
		});

	};
	fullHeight();

	$(".toggle-password").click(function() {

	  $(this).toggleClass("fa-eye fa-eye-slash");
	  var input = $($(this).attr("toggle"));
	  if (input.attr("type") == "password") {
	    input.attr("type", "text");
	  } else {
	    input.attr("type", "password");
	  }
	});

})(jQuery);
