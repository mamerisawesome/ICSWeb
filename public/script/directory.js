$(document).ready(function(){

	//toggle true = scroll view
	//toggle false = grid view

	var toggle = true;

	$("#toggle-button").click(function(){
		if(toggle) {
			$("#toggle").animate({
				"margin-left":"50%",
				"box-shadow": "1px 1px 5px #333333",
				"background-color": "#3090d9"
			}, "slow", gridViewOpen());
			toggle = false;
		}
		else {
			$("#toggle").animate({
				"margin-left":"0",
				"box-shadow": "-1px -1px 5px #333333",
				"background-color": "#354458"
			}, "slow", slideViewOpen());
			toggle = true;	
		}
	});
	$("#scroll").scrollLeft(500);

	function gridViewOpen(){
		var data = $("#slide-view").html();
		$("#grid-view").html(data);
		$("#slide-view").slideUp("slow");
		$("#grid-view").slideDown("slow");
		$(".control").toggle("slow");
		$("#scroll-content li").css({
			"box-shadow": "1px 1px 5px #888888"
		});
	}

	function slideViewOpen(){
		$("#slide-view").slideDown("slow");
		$("#grid-view").slideUp("slow");
		$(".control").toggle("slow");
		$("#scroll-content li").css({
			"box-shadow": "3px 3px 10px black"
		});
	}

});