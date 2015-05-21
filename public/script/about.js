 $(document).ready(function(){

 	$("#about-panel4").scrollLeft(0);

 	function timelineSlider(){
	 	var pos = $("#about-panel4").scrollLeft();
// 			console.log(pos); 
		return pos;
 	}

 	function animate1(status) {
 		if(status) {
 			$("#tl-entry-1").animate({
 				"margin-top":"100px",
 				"opacity":"1"
 			}, "slow");
 		}
 		else {
 			$("#tl-entry-1").animate({
 				"margin-top":"25px"
 			}, "fast");
 		}
 	}

 	function animate2(status) {
 		if(status) {
 			$("#tl-entry-2").animate({
 				"margin-top":"100px",
 				"opacity":"1"
 			}, "slow"); 			
 		}
 		else {
 			$("#tl-entry-2").animate({
 				"margin-top":"25px"
 			}, "slow");
 		}
 	}

 	function animate3(status) {
 		if(status) {
 			$("#tl-entry-3").animate({
 				"margin-top":"100px",
 				"opacity":"1"
 			}, "slow"); 			
 		}

 		else {
 			$("#tl-entry-3").animate({
 				"margin-top":"25px"
 			}, "slow");
 		}
 	}

 	function animate4(status) {
 		if(status) {
 			$("#tl-entry-4").animate({
 				"margin-top":"100px",
 				"opacity":"1"
 			}, "slow"); 			
 		}
 		else {
 			$("#tl-entry-4").animate({
 				"margin-top":"25px"
 			}, "slow");
 		}
 	}

 	function animate5(status) {
 		if(status) {
 			$("#tl-entry-5").animate({
 				"margin-top":"100px",
 				"opacity":"1"
 			}, "slow"); 			
 		}
 		else {
 			$("#tl-entry-5").animate({
 				"margin-top":"25px"
 			}, "slow");
 		}
 	}

 	function animate6(status) {
 		if(status) {
 			$("#tl-entry-6").animate({
 				"margin-top":"100px",
 				"opacity":"1"
 			}, "slow"); 			
 		}

 		else {
 			$("#tl-entry-6").animate({
 				"margin-top":"25px"
 			}, "slow");
 		}
 	}

 	function animate7(status) {
 		if(status) {
 			$("#tl-entry-7").animate({
 				"margin-top":"100px",
 				"opacity":"1"
 			}, "slow"); 			
 		}
 		else {
 			$("#tl-entry-7").animate({
 				"margin-top":"25px"
 			}, "slow");
 		}
 	}

 	function animate8(status) {
 		if(status) {
 			$("#tl-entry-8").animate({
 				"margin-top":"100px",
 				"opacity":"1"
 			}, "slow"); 			
 		}
 		else {
 			$("#tl-entry-8").animate({
 				"margin-top":"25px"
 			}, "slow");
 		}
 	}

 	$("#about-panel4").scroll(function(){
 		var pos = timelineSlider();

 		if (pos >= 280 && pos < 1240) {
 			animate1(true);
 		}
 		if (pos >= 1240 && pos < 2080) {
 			animate2(true);
 		}
 		if (pos >= 2080 && pos < 2560) {
 			animate3(true);
 		}
  		if (pos >= 2560 && pos < 3320) {
 			animate4(true);
 		}
  		if (pos >= 3320 && pos < 4120) {
 			animate5(true);
 		}
  		if (pos >= 4120 && pos < 4560) {
 			animate6(true);
 		}
  		if (pos >= 4560 && pos < 5000) {
 			animate7(true);
 		}
  		if (pos >= 5000 && pos < 5440) {
 			animate8(true);
 		}

 	});

 });