$(document).ready(function(){
/*
	$("#group-panel").click(function(){
		$("#group-field").slideToggle("slow");
		groupStatus = true;
	});*/
/*
	$(window).resize(function(){
		if($(window).width() < 975){
			$(".profile-icon").hide();
			$(".group-icon").hide();
		}
		else{
			$(".profile-icon").show();
			$(".group-icon").show();
		} 
		
<<<<<<< HEAD
	}); 
=======
	});

>>>>>>> 452e3973ae4dc9bc5fd346d772d057c2e15af151
*/

$(".user-group").click(function(){
		/* If kaya ng by whole na i-load
		$("#group-feed").load("/script/sample.html")
		*/
		$("#welcome-note").load("/script/sample.html")
		$(".feed-text").load("/script/sample2.txt")
	});

	$("#inbox-panel").click(function(){
		/* If kaya ng by whole na i-load
		$("#group-feed").load("/script/sample2.html")
		*/
		$("#welcome-note").load("/script/sample2.html")
		$(".feed-text").load("/script/sample.txt")
	});	
});
