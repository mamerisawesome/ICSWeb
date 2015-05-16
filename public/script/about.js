 $(document).ready(function(){

 	$("#about-panel4").scrollLeft(0);
/* 	$("#tl-entry-1 > .time-text").hide(0);
 	$("#tl-entry-2 > .time-text").hide(0);
 	$("#tl-entry-3 > .time-text").hide(0);
 	$("#tl-entry-4 > .time-text").hide(0);
 	$("#tl-entry-5 > .time-text").hide(0);
 	$("#tl-entry-6 > .time-text").hide(0);
 	$("#tl-entry-7 > .time-text").hide(0);
 	$("#tl-entry-8 > .time-text").hide(0);
*/

 	function timelineSlider(){
	 	var pos = $("#about-panel4").scrollLeft();
 			console.log(pos); 
		return pos;

 	}

/* 	$("#about-panel4").scroll(function(){
 		var pos = timelineSlider();

 		if(pos >= 4100) {
			$("#tl-entry-8 > .time-text").show("slow");
 		}

 		else if(pos >= 3850) {
			$("#tl-entry-7 > .time-text").show("slow");
			$("#tl-entry-8 > .time-text").hide("slow");
 		}

 		else if(pos >= 3440) {
			$("#tl-entry-6 > .time-text").show("slow");
			$("#tl-entry-7 > .time-text").hide("slow");
			$("#tl-entry-8 > .time-text").hide("slow");
 		}

 		else if(pos >= 2640) {
			$("#tl-entry-5 > .time-text").show("slow");
			$("#tl-entry-6 > .time-text").hide("slow");
			$("#tl-entry-7 > .time-text").hide("slow");
			$("#tl-entry-8 > .time-text").hide("slow");
 		}

 		else if(pos >= 1880) {
			$("#tl-entry-4 > .time-text").show("slow");
			$("#tl-entry-5 > .time-text").hide("slow");
			$("#tl-entry-6 > .time-text").hide("slow");
			$("#tl-entry-7 > .time-text").hide("slow");
			$("#tl-entry-8 > .time-text").hide("slow");
 		}

 		else if(pos >= 1400) {
			$("#tl-entry-3 > .time-text").show("slow");
			$("#tl-entry-4 > .time-text").hide("slow");
			$("#tl-entry-5 > .time-text").hide("slow");
			$("#tl-entry-6 > .time-text").hide("slow");
			$("#tl-entry-7 > .time-text").hide("slow");
			$("#tl-entry-8 > .time-text").hide("slow");
 		}

 		else if(pos >= 560) {
			$("#tl-entry-2 > .time-text").show("slow");
			$("#tl-entry-3 > .time-text").hide("slow");
			$("#tl-entry-4 > .time-text").hide("slow");
			$("#tl-entry-5 > .time-text").hide("slow");
			$("#tl-entry-6 > .time-text").hide("slow");
			$("#tl-entry-7 > .time-text").hide("slow");
			$("#tl-entry-8 > .time-text").hide("slow");
 		}

 		else {
			$("#tl-entry-2 > .time-text").hide("slow");
			$("#tl-entry-3 > .time-text").hide("slow");
			$("#tl-entry-4 > .time-text").hide("slow");
			$("#tl-entry-5 > .time-text").hide("slow");
			$("#tl-entry-6 > .time-text").hide("slow");
			$("#tl-entry-7 > .time-text").hide("slow");
			$("#tl-entry-8 > .time-text").hide("slow");
 		}
 	});
 */

 });