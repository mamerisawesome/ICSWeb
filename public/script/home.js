$(document).ready(function(){

	var pubStatus = new Array(true, true, true);
	var height = $("#publication-preview").height();
	
	function adjustHeightDown(input) {
		height = $("#publication-preview").height();
		height -= input;
		$("#publication-list").animate({
				"height":height
		}, "slow");
	}

	function adjustHeightUp(input) {
		height = $("#publication-preview").height();
		height += input;
		$("#publication-list").animate({
				"height":height
		}, "slow");
	}

	$("#publication1 > .pub-title-bar").click(function(){
		input = $("#publication1 > .pub-text").height();
		if(pubStatus[0]) {
			$("#publication1 > .pub-text").slideUp("slow");
			pubStatus[0] = false;
			adjustHeightDown(input);
		}
		else {
			$("#publication1 > .pub-text").slideDown("slow");
			pubStatus[0] = true;			
			adjustHeightUp(input);				
		}
	});

	$("#publication2 > .pub-title-bar").click(function(){
		input = $("#publication2 > .pub-text").height();
		if(pubStatus[1]) {
			$("#publication2 > .pub-text").slideUp("slow");
			pubStatus[1] = false;
			adjustHeightDown(input);
		}
		else {
			$("#publication2 > .pub-text").slideDown("slow");
			pubStatus[1] = true;
			adjustHeightUp(input);				
		}
	});

	$("#publication3 > .pub-title-bar").click(function(){
		input = $("#publication3 > .pub-text").height();
		if(pubStatus[2]) {
			$("#publication3 > .pub-text").slideUp("slow");
			pubStatus[2] = false;
			adjustHeightDown(input);
		}
		else {
			$("#publication3 > .pub-text").slideDown("slow");
			pubStatus[2] = true;		
			adjustHeightUp(input);				
		}
	});

});