$(document).ready(function(){

	$.getJSON("../res/courses.json", function(data){
		
		var courses = data['courses'];
		var coursecontent = "";

		for(var i = 0; i<10; i++){
			coursecontent += "<div class='col-md-12'>"
			for(var j = 3*i; j< [(3*i)+3]; j++) {
				coursecontent += "<div class='course col-md-4'>"
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
			}
			coursecontent += "</div>"
		}

		$("#curriculum-container").html(coursecontent);

	});

});