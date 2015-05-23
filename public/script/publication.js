/*function sample(){
	$.ajax({url: "/script/sample.txt",
	 success: function(result){
            $("#title-panel").html("sample");
        }});
}*/

/*$(document).ready(function(){
	$(".links-panel").click(function(){
		$.ajax({url: "/script/News1.txt",
		success: function(result){
			$("#title-panel").html("<h2>" + result) + "</h2>";
		}});
	});

});
*/
$(document).ready(function(){
	var NEWS;
	var i;
	var ID;
	var name = "#news";
	var name2;
	$.ajax({
	dataType: "json",
	url: "../res/News1.json",
	success: function(result){
		NEWS = result['news'];
		for(i = 0; i < 5; i++){
			name2 = name + i;
			$(name2).html("<a href='#'>" + NEWS[i]['title'] + "</a>");
		}
			$("#title-panel").html("<h2 class='text'>" + NEWS[0]['title'] + "</h2>" + "<hr>");
			$("#body-panel").html("<p class='text'>" + NEWS[0]['content'] + "</p>");
		
		$(".links").click(function(){
			ID = $(this).attr('id');
			ID = ID[4];
			$("#title-panel").html("<h2 class='text'>" + NEWS[ID]['title'] + "</h2>" + "<hr>");
			$("#body-panel").html("<p class='text'>" + NEWS[ID]['content'] + "</p>");
		});	

		$("#news-searchbar-wrapper").click(function(){
			document.getElementById('news-searchbar').value = null;
		});
	}});
});
