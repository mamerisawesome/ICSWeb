$(document).ready(function(){
	
	var fName = mName = lName = sex = bdate = email = uName = pword = rpword = sNumber = aCode = false;

	$("#submit").attr('disabled','disabled');

	$("#firstName").keyup(function(){
		var temp = $(this).val();
		$("#welcome-text").html("WELCOME<br>" + temp + "!");
		if(temp != '') fName = true;
		else{
			$("#submit").attr('disabled','disabled');
			fName = false;
		}
		
		if(fName && mName && lName && sex && bdate && email && uName && pword && rpword && sNumber) $("#submit").removeAttr('disabled');    
	});

	$("#middleName").keyup(function(){
		var temp = $(this).val();
		if(temp != '') mName = true;
		else{
			$("#submit").attr('disabled','disabled');
			mName = false;
		} 
		if(fName && mName && lName && sex && bdate && email && uName && pword && rpword && sNumber) $("#submit").removeAttr('disabled');    
	});

	$("#lastName").keyup(function(){
		var temp = $(this).val();
		if(temp != '') lName = true; 
		else{
			$("#submit").attr('disabled','disabled');   
			lName = false;  
		} 
		if(fName && mName && lName && sex && bdate && email && uName && pword && rpword && sNumber) $("#submit").removeAttr('disabled');    
	});
	
	$("#password").keyup(function(){
		var password = $(this).val();
		var retype = $("#retypePassword").val();

		if(password != '') pword = true; 
		else $("#submit").attr('disabled','disabled');   
		
		 if(password != retype){
			pword = false;
			$("#error-message").html("Password do not match!<br>");
			$("#submit").attr('disabled','disabled');  
		}
		else{
			$("#error-message").html("");  
			if(password != ''){
				pword = true;
				rpword = true;   
			}     
		} 
		if(fName && mName && lName && sex && bdate && email && uName && pword && rpword && sNumber) $("#submit").removeAttr('disabled');    
	});

	$("#retypePassword").keyup(function(){
		var password = $("#password").val();
		var retype = $(this).val();
		if(retype != '') rpword = true;
		else $("#submit").attr('disabled','disabled');  

		if(password != retype){
			rpword = false;
			$("#error-message").html("Password do not match!");
			$("#submit").attr('disabled','disabled');  
		}
		else{
			 $("#error-message").html("");  
			 if(retype != ''){
			   rpword = true;
			   pword = true; 
			 } 
		}
		if(fName && mName && lName && sex && bdate && email && uName && pword && rpword && sNumber) $("#submit").removeAttr('disabled');    
	});

	$("#birthdate").keyup(function(){
		var temp = $(this).val();
		if(temp != "") bdate = true; 
		else{
			$("#submit").attr('disabled','disabled');   
			bdate = false;  
		} 
		if(fName && mName && lName && sex && bdate && email && uName && pword && rpword && sNumber) $("#submit").removeAttr('disabled');    
	});

	$("#sex").keyup(function(){
		var temp = $(this).val();
        if(temp == "male" || temp == "female") sex = true;
		else{
			$("#submit").attr('disabled','disabled');
			sex = false;  
		} 
		if(fName && mName && lName && sex && bdate && email && uName && pword && rpword && sNumber) $("#submit").removeAttr('disabled');    
	});

	$("#email").keyup(function(){
		var temp = $(this).val();
		if(temp != '') email = true; 
		else{
			$("#submit").attr('disabled','disabled');  
			email = false;
		} 
		if(fName && mName && lName && sex && bdate && email && uName && pword && rpword && sNumber) $("#submit").removeAttr('disabled');    
	});

	$("#username").keyup(function(){
		var temp = $(this).val();
		if(temp != '') uName = true; 
		else{
			$("#submit").attr('disabled','disabled');   
			uName = false;  
		} 
		if(fName && mName && lName && sex && bdate && email && uName && pword && rpword && sNumber) $("#submit").removeAttr('disabled');    
	});

	$("#studentNumber").keyup(function(){
		var temp = $(this).val();
		var temp2;
		if(temp != ''){
			temp2 = temp.split("-");
			if($.isNumeric(temp2[0]) && temp2[0].length == 4 && $.isNumeric(temp2[1]) && temp2[1].length == 5){
				sNumber = true;	
			}
			else{
				$("#submit").attr('disabled','disabled');
				sNumber = false;	
			}				
		}  
		else{
			$("#submit").attr('disabled','disabled');
			sNumber = false;     
		} 
		if(fName && mName && lName && sex && bdate && email && uName && pword && rpword && sNumber) $("#submit").removeAttr('disabled');
        if(!fName) alert("fName");
        if(!mName) alert("mName");
        if(!lName) alert("lName");
        if(!sex) alert("sex");
        if(!bdate) alert("bdate");
        if(!email) alert("email");
        if(!uName) alert("uName");
        if(!pword) alert("pword");
        if(!rpword) alert("rpword");
	});


	/*$("#accessCode").keyup(function(){
		var temp = $(this).val();
		if(temp != '') aCode = true; 
		else{
			$("#submit").attr('disabled','disabled');   
			aCode = false;  
		} 
		if(fName && mName && lName && sex && bdate && email && uName && pword && rpword) $("#submit").removeAttr('disabled');    
	
		if(!fName) alert("fName");
		if(!mName) alert("mName");
		if(!lName) alert("lName");
		if(!sex) alert("sex");
		if(!bdate) alert("bdate");
		if(!email) alert("email");
		if(!uName) alert("uName");
		if(!pword) alert("pword");
		if(!rpword) alert("rpword");


	});*/    
   

});