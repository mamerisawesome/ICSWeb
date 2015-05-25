$(document).ready(function(){

	$.getJSON("../res/faculty.json", function(data){

		var faculty = data['faculty'];
		var content = "";

		for(var i = 0; i<38; i ++) {
			content +=	"<div class='person col-md-3'>"
							+ "<div class='col-md-12 person-content'>"
								+ "<img class='people-image' src=" + faculty[i]['icon'] + "/>"
								+ "<div class='people-text'>"
									+ "<h5>"
										+ faculty[i]['last'] + ", "
										+ faculty[i]['first'] + " "
										+ faculty[i]['middle']
									+ "</h5>"
									+ faculty[i]['position'] + "<br>"
									+ faculty[i]['room'] + "<br>"
									+ "<a href='/pages/profiles/"+faculty[i]['last']+"'>Go to Profile Page</a>"
								+ "</div>"						
							+ "</div>"
						+ "</div>"
		}

		$("#faculty-container").html(content);

	});

});