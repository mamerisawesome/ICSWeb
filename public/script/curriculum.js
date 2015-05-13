$(document).ready(function(){
	$.getJSON("../res/courses.json", function(data){
		
		var courses = data['courses'];
		var coursecontent = "";

		for(var i = 0; i<7; i++){
			coursecontent += "<div class='col-md-12'>"
			for(var j = 4*i; j< [(4*i)+4]; j++) {
				coursecontent += "<div class='course col-md-3'>"
											+ "<div class='col-md-12' id='curriculum-content'>"
												+ "<div id='curriculum-text'>"
													+ "<h3>"
														+ courses[j]['number']
													+ "</h3>"
													+ "<h5>"
														+ courses[j]['title'] + "<br />"
													+ "</h5>"
													+ "<p>"
														+ courses[j]['description']
													+ "</p>"
												+ "</div>"						
											+ "</div>"
									+ "</div>"
				console.log(j);										
				console.log(i);										

			}
			coursecontent += "</div>"
		}

		$("#curriculum-container").html(coursecontent);

	});

});