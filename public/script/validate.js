function validateForm(){
	var x=document.forms["reg-form"]["firstName"].value;
	if(x==null||x==""){
		alert("Please input your First Name.");
		return false;
	}
	var y=document.forms["reg-form"]["middleName"].value;
	if(y==null||y==""){
		alert("Please input your Middle Name.");
		return false;
	}
	var z=document.forms["reg-form"]["lastName"].value;
	if(z==null||z==""){
		alert("Please input your Last Name.");
		return false;
	}
	var a=document.forms["reg-form"]["email"].value;
	if(a==null||a==""){
		alert("Please input your Email Address.");
		return false;
	}
	var b=document.forms["reg-form"]["password"].value;
	if(b==null||b==""){
		alert("Please input your password.");
		return false;
	}
	var c=document.forms["reg-form"]["username"].value;
	if(c==null||c==""){
		alert("Please input your Username.");
		return false;
	}
	var d=document.forms["reg-form"]["studentNumber"].value;
	if(d==null||d==""){
		alert("Please input your Student Number.");
		return false;
	}
	var e=document.forms["reg-form"]["birthdate"].value;
	if(e==null||e==""){
		alert("Please input your Birthday.");
		return false;
	}
	var f=document.forms["reg-form"]["accessCode"].value;
	if(f==null||f==""){
		alert("Please input your Access Code.");
		return false;
	}
	var r = document.getElementsByName("sex")
	var sex = -1

	for(var i=0; i < r.length; i++){
		if(r[i].checked) {
			sex = i; 
		}
	}
	if (sex == -1){ 
		alert("Please choose your Sex.");
		return false;
	}
	
	/*var s = document.getElementsByName("educ-attain")
	var educ = -1

	for(var i=0; i < s.length; i++){
		if(s[i].checked) {
			educ = i; 
		}
	}
	if (educ == -1){
		alert("Please choose your Highest Educational Attainment.");
		return false;
	}*/
}