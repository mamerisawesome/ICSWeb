$(document).ready(function(){
	$.getJSON("../res/facilities-gallery.json", function(data){

		var picture = data['facilities'];
		var gallerycontent = "";

		for(var i = 0; i<4; i++){
			gallerycontent += "<div class='col-md-12' id='facilities-gallery'>"
			for(var j = 4*i; j< [(4*i)+4]; j++) {
				gallerycontent += "<div class='col-md-3'>"
									+ "<img class='faci-img' src=" + picture[j]['gallery-pic'] + "/>"
									+ "<div id='img-caption'>"
										+ "<p>"
											+ picture[j]['caption']
										+ "</p>"
									+ "</div>"
								+ "</div>"
			}
			gallerycontent += "</div>"
		}

		$("#gallery-container").html(gallerycontent);

	});
});