$(document).ready(function(){

	$(window).scroll(function(){
		if ($(window).scrollTop() > 50) {
			$(".navbar").addClass('navbar-fixed-top');
			$("#login-field").slideUp("slow");			
		}
		if ($(window).scrollTop() < 50) {
			$(".navbar").removeClass('navbar-fixed-top');
		}
	});

	$("#login-toggle").click(function(){
		$("#login-field").slideToggle("slow");
	});

});