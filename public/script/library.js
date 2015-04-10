$(document).ready(function(){

	$(".book").hover(function(){
		$(this).animate({
			"top": "-10px"
		},  "fast");
		$(this).css({
			"background":"khaki"
		});
	});

	$(".book").mouseout(function(){
		$(this).animate({
			"top": "0"
		},  "slow");
		$(this).css({
			"background":"#e9e0d6"
		});
	});

	$("#search-SPT").click(function(){
		$("#shelf-wrapper-content").hide("slow");
		$("#search-result").show("slow");			
	});

	$("#back-to-shelf").click(function(){
		$("#shelf-wrapper-content").toggle("slow");
		$("#search-result").toggle("slow");			
	});

	$(".book").click(function(){
		$("#library-switch").show("slow");
		$("#shelf").slideUp("slow");
		$("#SPT-preview").slideDown("slow");
	});
	
	$("#library-switch").click(function(){
		$("#library-switch").hide("slow");
		$("#shelf").slideDown("slow");
		$("#SPT-preview").slideUp("slow");
	});

});