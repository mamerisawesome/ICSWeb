$(document).ready(function(){

	$(".result-img-container").click(function(){
		var cont = $(this).html();
		$("#SPT-preview").slideToggle("slow");
		$("#preview-wrapper").html(cont);
	});



});