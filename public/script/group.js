$(document).ready(function(){

    $.ajax({
        url: "../JSONcontents/accounts/groups/"+$("#username").html()+"_groups.json",
        success: function(data){
            var groupData = JSON.parse(data);
            var studentData = groupData.groups;
            var html = '';
            var groupList = '';
            $("#group-panel").click(function () {
                if (studentData.length == 0) {
                    $('#input-post-field').slideUp('slow');
                    groupList = '' +
                    '<div class="update-panel-wrapper">' +
                        '<div class="container-fluid update-panel">' +
                            '<div class="col-md-12">' +
                                '<h4 class="pull-center">NO GROUPS YET!</h4>' +
                            '</div>' +
                        '</div>' +
                    '</div>';

                    function done() {
                        $("#welcome").html("Groups");
                        $("#content-box").html(groupList);
                        $("#group-feed").slideToggle("slow");
                    }

                    $("#group-feed").slideUp("slow", done);
                }
            });
            if (studentData.length == 0) {
                $('#input-post-field').slideUp('slow');
                groupList = '' +
                '<div class="update-panel-wrapper">' +
                    '<div class="container-fluid update-panel">' +
                        '<div class="col-md-12">' +
                            '<h4 class="pull-center">NO GROUPS YET!</h4>' +
                        '</div>' +
                    '</div>' +
                '</div>';
                $("#content-box").html(groupList);
            }
            for (var i = 0; i < studentData.length; i += 1) {
                html += '' +
                '<div class="col-md-12 user-group">' +
                    '<input class="groupName" type="hidden" subject="' + studentData[i].subject + '" section="' + studentData[i].section + '">' +
                    '<span class="glyphicon glyphicon-heart group-icon"></span>' +
                    '<div class="col-sm-12">' +
                        '<h5 class="group-name">' + studentData[i].subject + ' ' + studentData[i].section + '</h5>' +
                    '</div>' +
                    '<div class="circle"><p class="notif-number">' + 0 + '</p></div>' +
                '</div>';
            }

            $("#group-field-content").html(html);

            $(".user-group").click(function () {
                var header = $(this).find(".groupName").attr("subject") + " " + $(this).find(".groupName").attr("section");
                var group = $(this).find(".groupName").attr("subject") + $(this).find(".groupName").attr("section");
                $('#subject-name').val($(this).find(".groupName").attr("subject"));
                $('#section-name').val($(this).find(".groupName").attr("section"));
                $.ajax({
                    url: "../JSONcontents/groups/posts/" + group + "_posts.json",
                    success: function (posts) {
                        $('#input-post-field').slideDown('slow');
                        $('#postIn').fadeOut('slow', function () {
                            $(this).html(header);
                            $(this).fadeIn();
                        });
                        var post = JSON.parse(posts);
                        var groupContent = '';
                        for (var j = 0; j < post.length; j += 1) {
                            groupContent += '' +
                            '<div class="update-panel-wrapper">' +
                                '<div class="container-fluid update-panel">' +
                                    '<div class="col-md-12">' +
                                        '<div class="col-sm-1 feed-icon-wrapper">' +
                                            '<img src="http://localhost:8000/res/images/sample1.png" class="feed-icon" class="img-rounded" alt="sample">' +
                                        '</div>' +
                                        '<div class="col-sm-11 post-title">' +
                                            '<h4>' + post[j].postTitle + ' <small>' + post[j].dateOfPost + '</small>' + '</h4>' +
                                            '<h6> by ' + post[j].postBy + '</h6>' +
                                        '</div>' +
                                        '<div class="col-sm-11 feed-text">' +
                                        '<p>' + post[j].postContent + '</p>' +
                                        '</div>' +
                                    '</div>' +
                                '</div>' +
                            '</div>';
                        }
                        function done() {
                            $("#welcome").html(header);
                            $("#content-box").html(groupContent);
                            $("#group-feed").slideToggle("slow");
                        }

                        $("#group-feed").slideUp("slow", done);
                    }
                });
            });
        }
    });

    $("#inbox-panel").click(function(){
        //If kaya ng by whole na i-load
        //$("#group-feed").load("/script/sample2.html")
        $("#group-field").slideUp("slow");
        $.ajax({
            url: "../JSONcontents/accounts/messages/"+$("#username").html()+"_messages.json",
            success: function(messages){
                $('#input-post-field').slideUp('slow');
                var message = JSON.parse(messages);
                var inboxContent = '';
                if(message.length == 0){
                    inboxContent = ''+
                        '<div class="update-panel-wrapper">'+
                            '<div class="container-fluid update-panel">'+
                                '<div class="col-md-12">'+
                                    '<h4 class="pull-center">NO MESSAGES YET!</h4>'+
                                '</div>'+
                            '</div>'+
                        '</div>';
                }
                for(var l = 0; l < message.length; l += 1){
                    inboxContent += ''+
                        '<div class="update-panel-wrapper">'+
                            '<div class="container-fluid update-panel">'+
                                '<div class="col-md-12">'+
                                    '<div class="col-sm-1 feed-icon-wrapper">'+
                                        '<img src="http://localhost:8000/res/images/sample1.png" class="feed-icon" class="img-rounded" alt="sample">'+
                                    '</div>'+
                                    '<div class="col-sm-11 post-title">'+
                                        '<h4>'+ message[l].messageTitle + ' <small>' + message[l].dateOfMessage + '</small>' +'</h4>' +
                                        '<h6> by ' + message[l].sentFrom + '</h6>'+
                                    '</div>'+
                                    '<div class="col-sm-11 feed-text">'+
                                        '<p>' + message[l].messageContent + '</p>'+
                                    '</div>'+
                                '</div>'+
                            '</div>'+
                        '</div>';
                }
                function done(){
                    $("#welcome").html("Inbox");
                    $("#content-box").html(inboxContent);
                    $("#group-feed").slideToggle("slow");
                }

                $("#group-feed").slideUp("slow", done);
            }
        });

    });

});

/*
$(document).ready(function(){
    //$(".user-group").click(function(){
     //   $("#group-feed").slideUp("slow");
     //   //$("#group-feed").css('display','none');
     //   $("#group-feed").slideToggle("slow");
	//	groupStatus = true;
	//});
	//$(window).resize(function(){
	//	if($(window).width() < 975){
	//		$(".profile-icon").hide();
	//		$(".group-icon").hide();
	//	}
	//	else{
	//		$(".profile-icon").show();
	//		$(".group-icon").show();
	//	}
    //
	//});


    */
/*$(".user-group").click(function(){
		*//*
*/
/* If kaya ng by whole na i-load
		$("#group-feed").load("/script/sample.html")
		*//*
*/
/*
        $("#group-feed").slideUp("slow");
        $("#welcome-note").load("/script/sample.html")
		$(".feed-text").load("/script/sample2.txt")
        $("#group-feed").slideToggle("slow");
    });

	$("#inbox-panel").click(function(){
		*//*
*/
/* If kaya ng by whole na i-load
		$("#group-feed").load("/script/sample2.html")
		*//*
*/
/*
        $("#group-feed").slideUp("slow");
        $("#welcome-note").load("/script/sample2.html")
		$(".feed-text").load("/script/sample.txt")
        $("#group-feed").slideToggle("slow");
    });*//*

});
*/
