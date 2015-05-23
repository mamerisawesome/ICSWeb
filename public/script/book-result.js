$(document).ready(function(){

	$(".result-img-container").click(function(){
		var cont = $(this).html();
		$("#preview-wrapper").html(cont);
		$("#SPT-preview").slideToggle("slow");
		$("#result-container").slideToggle("slow");
	});

	$("#search-result-back").click(function(){
		$("#SPT-preview").slideToggle("slow");
		$("#result-container").slideToggle("slow");		
	});


	$("#library-switch").click(function(){
		window.location.replace("/pages/library");
	});

	$("#back-to-library").click(function(){
		window.location.replace("/pages/library");		
	});
});