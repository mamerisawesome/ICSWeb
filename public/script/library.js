$(document).ready(function(){

	$("#search-SPT").click(function(){
		$("#shelf-body").slideToggle("slow");
		$("#shelf").slideToggle("slow");
		$("#shelf-search-results").slideToggle("slow");			
	});

	$("#back-to-shelf").click(function(){
		$("#shelf-body").slideToggle("slow");
		$("#shelf").slideToggle("slow");
		$("#shelf-search-results").slideToggle("slow");			
	});

	$(".book").click(function(){
		$("#library-switch").show("slow");
		$("#shelf").slideUp("slow");
		$("#shelf-body").slideUp("slow");
		$("#SPT-preview").slideDown("slow");
	});
	
	$("#library-switch").click(function(){
		$("#library-switch").hide("slow");
		$("#shelf").slideDown("slow");
		$("#shelf-body").slideDown("slow");
		$("#SPT-preview").slideUp("slow");
	});

});