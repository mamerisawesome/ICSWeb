$(document).ready(function(){

	var lName = fName = mName = academicPosition = room = consultationHours = bio = guide = false;
	var lName2, fName2, mName2, academicPosition2, room2, consultationHours2, bio2, guide2;

	lName2 = $("#lastName").val();
	fName2 = $("#firstName").val();
	mName2 = $("#middleName").val();
	academicPosition2 = $("#academicPosition").val();
	room2 = $("#room").val();
	consultationHours2 = $("#consultation").val();
	bio2 = $("#bio").val();
	guide2 = $("#guide").val();

	if(lName2 != '') lName = true;
	if(fName2 != '') fName = true;
	if(mName2 != '') mName = true;
	if(academicPosition2 != '') academicPosition = true;
	if(room2 != '') room = true;
	if(consultationHours2 != '') consultationHours = true;
	if(bio2 != '') bio = true;
	if(guide2 != '') guide = true;

	$("#submit").attr('disabled','disabled');

	$("#lastName").keyup(function(){
		var temp = $(this).val();
		if(temp != '') lName = true; 
		else{
			$("#submit").attr('disabled','disabled');   
			lName = false;  
		} 
		if(lName && fName && mName && academicPosition && room && consultationHours && bio && guide) $("#submit").removeAttr('disabled');
	});

	$("#firstName").keyup(function(){
		var temp = $(this).val();
		if(temp != ''){
			fName = true;
		} 
		else{
			$("#submit").attr('disabled','disabled');
			fName = false;
		}    
		if(lName && fName && mName && academicPosition && room && consultationHours && bio && guide) $("#submit").removeAttr('disabled');
	});

	$("#middleName").keyup(function(){
		var temp = $(this).val();
		if(temp != '') mName = true;
		else{
			$("#submit").attr('disabled','disabled');
			mName = false;
		} 
		if(lName && fName && mName && academicPosition && room && consultationHours && bio && guide) $("#submit").removeAttr('disabled');
	});

	$("#academicPosition").keyup(function(){
		var temp = $(this).val();
		if(temp != '') academicPosition = true;
		
		else{
			$("#submit").attr('disabled','disabled');
			academicPosition = false;
		}
		if(lName && fName && mName && academicPosition && room && consultationHours && bio && guide) $("#submit").removeAttr('disabled');
	});

	$("#room").keyup(function(){
		var temp = $(this).val();
		var temp2;
		if(temp != ''){
			temp2 = temp.split("-");
			if(!($.isNumeric(temp2[0])) && $.isNumeric(temp2[1]) && temp2[1].length == 3 && temp2[0].length == 1){
				room = true;
				$("#error-room").html("");		
			} 
			else{
				$("#submit").attr('disabled','disabled');
				$("#error-room").html("Invalid Room Assignment! (i.e C-100)<br>");
				room = false;
			}
			if(lName && fName && mName && academicPosition && room && consultationHours && bio && guide) $("#submit").removeAttr('disabled');
		}
		else{

			$("#submit").attr('disabled','disabled');
			room = false;
		}
		if(lName && fName && mName && academicPosition && room && consultationHours && bio && guide) $("#submit").removeAttr('disabled');
	});

	$("#consultation").keyup(function(){
		var temp = $(this).val();
		if(temp != '') consultationHours = true;
		
		else{
			$("#submit").attr('disabled','disabled');
			consultationHours = false;
		}
		if(lName && fName && mName && academicPosition && room && consultationHours && bio && guide) $("#submit").removeAttr('disabled');
	});

	$("#bio").keyup(function(){
		var temp = $(this).val();
		if(temp != '') bio = true;
		
		else{
			$("#submit").attr('disabled','disabled');
			bio = false;
		}
		if(lName && fName && mName && academicPosition && room && consultationHours && bio && guide) $("#submit").removeAttr('disabled');
	});

	$("#guide").keyup(function(){
		var temp = $(this).val();
		if(temp != '') guide = true;
		
		else{
			$("#submit").attr('disabled','disabled');
			guide = false;
		}
		if(lName && fName && mName && academicPosition && room && consultationHours && bio && guide) $("#submit").removeAttr('disabled');  
	
	});

	if(lName && fName && mName && academicPosition && room && consultationHours && bio && guide) $("#submit").removeAttr('disabled');

	
});

