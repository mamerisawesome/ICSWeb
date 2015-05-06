$(document).ready(function(){

    $("#firstName").keyup(function(){
        var name = $(this).val();
        $("#welcome-user").html("WELCOME<br>" + name + "!");
    });

    $("#retypePassword").keyup(function(){
        var password = $("#password").val();
        var retype = $(this).val();
//        alert(password);
        if(password != retype) {
            $("#error-message").html("Password do not match!");
        }
        else{
            $("#error-message").html("");   
        }
    });
});