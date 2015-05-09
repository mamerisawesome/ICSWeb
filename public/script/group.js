<<<<<<< HEAD
// $(document).ready(function(){

// 	$("#group-panel").click(function(){
// 		$("#group-field").slideToggle("slow");
// 		groupStatus = true;
// 	});

// 	$(window).resize(function(){
// 		if($(window).width() < 975){
// 			$(".profile-icon").hide();
// 			$(".group-icon").hide();
// 		}
// 		else{
// 			$(".profile-icon").show();
// 			$(".group-icon").show();
// 		} 
		
// 	});

// });
=======
$(document).ready(function(){
	//$(".user-group").click(function(){
     //   $("#group-feed").slideUp("slow");
     //   //$("#group-feed").css('display','none');
     //   $("#group-feed").slideToggle("slow");
	//	groupStatus = true;
	//});
	//$(window).resize(function(){
	//	if($(window).width() < 975){
	//		$(".profile-icon").hide();
	//		$(".group-icon").hide();
	//	}
	//	else{
	//		$(".profile-icon").show();
	//		$(".group-icon").show();
	//	}
    //
	//});


    $(".user-group").click(function(){
		/* If kaya ng by whole na i-load
		$("#group-feed").load("/script/sample.html")
		*/
        $("#group-feed").slideUp("slow");
        $("#welcome-note").load("/script/sample.html")
		$(".feed-text").load("/script/sample2.txt")
        $("#group-feed").slideToggle("slow");
    });

	$("#inbox-panel").click(function(){
		/* If kaya ng by whole na i-load
		$("#group-feed").load("/script/sample2.html")
		*/
        $("#group-feed").slideUp("slow");
        $("#welcome-note").load("/script/sample2.html")
		$(".feed-text").load("/script/sample.txt")
        $("#group-feed").slideToggle("slow");
    });
});
>>>>>>> 03e74102f7541d270cb15b1f9d435dfd4cb6f8ff
