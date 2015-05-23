var inputAuthor;
var inputTitle;
var inputYear;
var c = true;

function checker(c){
    if(c==true) return false;
    else if(c==false) return true;
}

function getSearchQuery(){
	inputAuthor = $("#spt-author").val();
	inputTitle = $("#spt-title").val();
	inputYear = $("#spt-year").val();
}

function clearSearchQuery(){
	inputAuthor = $("#spt-author").val("");
	inputTitle = $("#spt-title").val("");
	inputYear = $("#spt-year").val("");	
}

function validateSearchQuery(){
	getSearchQuery();
	if(inputAuthor.length > 0 || inputYear.length > 0 || inputTitle.length > 0) return true;
	else {
		alert("Please put at least one search query!");
	}
}

function fetchSearchQuery(){
	
	getSearchQuery();

	var author = $("#search-query-author").text();
	var title = $("#search-query-title").text();
	var year = $("#search-query-year").text();

	if(inputAuthor.length > 0){
		$("#search-query-author").text(author + " " + inputAuthor);
	}
	else {
		$("#search-query-author").text(author + " you do not specify an author");
	}

	if(inputTitle.length > 0){
		$("#search-query-title").text(title + " " + inputTitle);
	}
	else {
		$("#search-query-title").text(title + " you do not specify a title");
	}

	if(inputYear >= 2000 && inputYear <= 2014){
		$("#search-query-year").text(year + " " + inputYear);
	}
	else {
		$("#search-query-year").text(year + " you do not specify a year");
	}
}



$(document).ready(function(){

	$("#library-switch").show("slow");

	$("#search-SPT").click(function(){
		if(validateSearchQuery()) {
			$("#shelf-body").slideToggle("slow");
			$("#shelf").slideToggle("slow");
			$("#shelf-search-results").slideToggle("slow");	
			fetchSearchQuery();			
		}
	});

	$("#back-to-shelf").click(function(){
		$("#shelf-body").slideToggle("slow");
		$("#shelf").slideToggle("slow");
		$("#shelf-search-results").slideToggle("slow");
		clearSearchQuery();		
	});

	$(".book").click(function(){
		var content = $(this).html();
		$("#preview-wrapper").html(content);
		$("#library-switch").show("slow");
		$("#shelf").slideUp("slow");
		$("#shelf-body").slideUp("slow");
		$("#SPT-preview").slideDown("slow");
	});
	
	$("#library-switch").click(function(){
		$("#library-switch").hide("slow");
		$("#shelf").slideDown("slow");
		$("#shelf-body").slideDown("slow");
		$("#SPT-preview").slideUp("slow");
	});

	$("#spt-year").keyup(function(){
		var year = $(this).val();
		if(year.length == 4 && (year >= 2008 && year <= 2014)) {
			$("#spt-year-note").html("");
		}
		if(year.length > 4) {
			$("#spt-year-note").html("please enter a 4-digit year");
		}
		if(year < 2008 || year > 2014) {
			$("#spt-year-note").html("plase choose a year from 2008 to 2014 only");			
		}
	});

});