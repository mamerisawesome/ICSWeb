$(document).ready(function(){

	var loginFieldStatus = false;
	var drop = false;
	
	$("#login-toggle").click(function(){
		if(loginFieldStatus) {
			$("#login-field").slideUp("slow");			
			loginFieldStatus = false;
		}
		else {
			$("#login-field").slideDown("slow");			
			loginFieldStatus = true;
		}
	});

	$("#drop-toggle").click(function(){
		if(drop) {
			$("#drop-field").slideUp("slow");			
			drop = false;
		}
		else {
			$("#drop-field").slideDown("slow");			
			drop = true;
		}
	});
	
	$(window).scroll(function () {
		if ($(window).scrollTop() > 60) {
  			$(".navbar").addClass('navbar-fixed');
		}
		
		if ($(window).scrollTop() < 60) {
  			$(".navbar").removeClass('navbar-fixed');
		}
	});

});