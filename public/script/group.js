$(document).ready(function(){
    var currentGroup = '';
    var currentSubject = '';
    var currentSection = '';

    /* WILL GET GROUP LIST FROM ACCOUNTS */
    $.ajax({
        url: "../JSONcontents/accounts/groups/"+$("#username").html()+"_groups.json",
        success: function(data){
            var groupData = JSON.parse(data);
            var studentData = groupData.groups;
            var html = '';
            var groupList = '';
            var endHtml = '';
            /* WILL TOGGLE GROUP LIST */
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
                    '<input class="groupName" style="display:none;" subject="' + studentData[i].subject + '" section="' + studentData[i].section + '">' +
                    '<span class="glyphicon glyphicon-heart group-icon"></span>' +
                    '<div class="col-sm-12">' +
                        '<h5 class="group-name">' + studentData[i].subject + ' ' + studentData[i].section + '</h5>' +
                    '</div>' +
                    '<div class="circle"><p class="notif-number">' + 0 + '</p></div>' +
                '</div>';
            }

            var checker = $("#checker").val();

            if(checker!='student'){
                endHtml = '' +
                    '<div class="col-md-12 user-group">' +
                        '<span class="glyphicon glyphicon-plus group-icon"></span>' +
                        '<div class="col-sm-12">' +
                            '<h5 class="group-name"><a href="/pages/group/join">JOIN A GROUP</a></h5>' +
                        '</div>' +
                    '</div>'+
                    '<div class="col-md-12 user-group">' +
                        '<span class="glyphicon glyphicon-plus group-icon"></span>' +
                        '<div class="col-sm-12">' +
                            '<h5 class="group-name"><a href="/pages/group/create">CREATE A GROUP</a></h5>' +
                        '</div>' +
                    '</div>';
            }

            else{
                endHtml = '' +
                    '<div class="col-md-12 user-group">' +
                        '<span class="glyphicon glyphicon-plus group-icon"></span>' +
                        '<div class="col-sm-12">' +
                            '<h5 class="group-name"><a href="/pages/group/join">JOIN A GROUP</a></h5>' +
                        '</div>'+
                    '</div>';
            }

            $("#group-field-content").html(html+endHtml);



            /* WILL GET POST DATA FROM GROUPS */
            $(".user-group").click(function () {
                var header = $(this).find(".groupName").attr("subject") + " " + $(this).find(".groupName").attr("section");
                var group = $(this).find(".groupName").attr("subject") + $(this).find(".groupName").attr("section");
                currentGroup = group;
                currentSubject = $(this).find(".groupName").attr("subject");
                currentSection = $(this).find(".groupName").attr("section");
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
                        var commentList = '';
                        if(post.length == 0){
                            groupContent = '' +
                                '<div class="update-panel-wrapper">' +
                                    '<div class="container-fluid update-panel">' +
                                        '<div class="col-md-12">' +
                                            '<h4 class="pull-center">NO POSTS YET!</h4>' +
                                        '</div>' +
                                    '</div>' +
                                '</div>';
                        }
                        post.reverse();
                        for (var j = 0; j < post.length; j += 1) {
                            groupContent += '' +
                            '<div class="update-panel-wrapper post-container">' +
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
                            '<small style="cursor:pointer" class="pull-right post-controller">COMMENTS</small>'+
                            '</div>';
                            groupContent += '' + '<div class="comment-frame" style="display:none">';
                            for(var k = 0; k < post[j]['comments'].length; k += 1) {
                                groupContent += '' +
                                '<div class="comment-container-wrapper">' +
                                '<div class="container-fluid comment-container">' +
                                '<div class="col-md-12">' +
                                '<div class="col-sm-11 comment-header">' +
                                '<h5>' +
                                post[j]['comments'][k]['commentBy'] +
                                ' <small>' + post[j]['comments'][k]['date'] + '</small>' +
                                '</h5>' +
                                '</div>' +
                                '<div class="col-sm-11 comment-content">' +
                                '<p>' + post[j]['comments'][k]['content'] + '</p>' +
                                '</div>' +
                                '</div>' +
                                '</div>' +
                                '</div>';
                            }
                            $('.comment-container-input').find('.commentGroup').val(group);
                            $('.comment-container-input').closest('.postIndex').val();
                            var size = post.length - j - 1;
                            $('.comment-container-input').find('.commentPostIndex').val(size);
                            groupContent += ''+
                            '<div class="update-panel-wrapper comment-container-send" >' +
                            $('.comment-container-input').html() +
                            '</div>';
                            groupContent += '</div>';


                            groupContent += '</div>';

                        }
                        var classList = ''+
                            '<a id="showList" href="#">'+
                                '<div class="col-md-12 user-group">' +
                                    '<span class="glyphicon glyphicon-user group-icon"></span>' +
                                    '<div class="col-sm-12">' +
                                        '<h5 class="group-name">See class list</h5>' +
                                    '</div>' +
                                '</div>'+
                            '</a>';
                        function done() {
                            $("#welcome").html(header);
                            $("#content-box").html(groupContent+classList);
                            $("#group-feed").slideToggle("slow");
                        }

                        $("#group-feed").slideUp("slow", done);
                    }
                });
            });
            /* --------------------------------- */




        }
    });
    /* --------------------------------- */





    /* WILL GET LIST OF STUDENTS / FACULTY FROM GROUPS */
    $('body').off('click','#showList');
    $('body').on('click','#showList',function(e){
        $.ajax({
            url:"../JSONcontents/groups/classList/"+currentGroup+"_classList.json",
            success:function(list){
                var classlist = JSON.parse(list);
                var listHtml = '';

                for(var h = 0; h < classlist.length; h += 1){
                    if(classlist[h].username != $('#username').text()){
                        $('.username-container').find('.usernameContainer').val(classlist[h].username);
                        $('.username-container').find('.selectUsername').val(classlist[h].firstname + " " + classlist[h].lastname);
                        $('.username-container').find('.nameContainer').val(classlist[h].firstname + " " + classlist[h].lastname);
                        //$('.username-container').find('.usernameForm').attr('action','/pages/message/');
                        listHtml += '' +
                        '<div class="update-panel-wrapper">' +
                        $('.username-container').html() +
                        '</div>';
                    }
                }

                var back = ''+
                    '<a id="showGroup" href="#">'+
                        '<div class="col-md-12 user-group">' +
                            '<span class="glyphicon glyphicon-eject group-icon"></span>' +
                            '<div class="col-sm-12">' +
                                '<h5 class="group-name">Back to posts</h5>' +
                            '</div>' +
                        '</div>'+
                    '</a>';

                function done() {
                    $("#content-box").html(listHtml+back);
                    $("#group-feed").slideToggle("slow");
                }

                $("#group-feed").slideUp("slow", done);
            }
        });
        e.preventDefault();

    });
    /* --------------------------------- */





    /* WILL SHOW LIST OF POSTS FROM GROUPS */
    $('body').off('click','#showGroup');
    $('body').on('click','#showGroup',function(e){
        var group = currentGroup;
        $('#subject-name').val(currentSubject);
        $('#section-name').val(currentSection);
        $.ajax({
            url: "../JSONcontents/groups/posts/" + group + "_posts.json",
            success: function (posts) {
                $('#input-post-field').slideDown('slow');
                $('#postIn').fadeOut('slow', function () {
                    $(this).html(currentGroup);
                    $(this).fadeIn();
                });
                var post = JSON.parse(posts);
                var groupContent = '';
                var commentList = '';
                if(post.length == 0){
                    groupContent = '' +
                    '<div class="update-panel-wrapper">' +
                        '<div class="container-fluid update-panel">' +
                            '<div class="col-md-12">' +
                                '<h4 class="pull-center">NO POSTS YET!</h4>' +
                            '</div>' +
                        '</div>' +
                    '</div>';
                }
                post.reverse();
                for (var j = 0; j < post.length; j += 1) {
                    groupContent += '' +
                        '<div class="update-panel-wrapper post-container">' +
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
                                '<small style="cursor:pointer" class="pull-right post-controller">COMMENTS</small>'+
                            '</div>';
                    if(post[j]['comments'].length) groupContent += '' + '<div class="comment-frame" style="display:none">';
                    for(var k = 0; k < post[j]['comments'].length; k += 1) {
                        groupContent += '' +
                            '<div class="comment-container-wrapper">' +
                                '<div class="container-fluid comment-container">' +
                                    '<div class="col-md-12">' +
                                        '<div class="col-sm-11 comment-header">' +
                                            '<h5>' +
                                                post[j]['comments'][k]['commentBy'] +
                                                ' <small>' + post[j]['comments'][k]['date'] + '</small>' +
                                            '</h5>' +
                                        '</div>' +
                                        '<div class="col-sm-11 comment-content">' +
                                            '<p>' + post[j]['comments'][k]['content'] + '</p>' +
                                        '</div>' +
                                    '</div>' +
                                '</div>' +
                            '</div>';
                    }
                    if(post[j]['comments'].length) groupContent += '</div>';
                    groupContent += '</div>';
                }
                var classList = ''+
                    '<a id="showList" href="#">'+
                        '<div class="col-md-12 user-group">' +
                            '<span class="glyphicon glyphicon-user group-icon"></span>' +
                            '<div class="col-sm-12">' +
                                '<h5 class="group-name">See class list</h5>' +
                            '</div>' +
                        '</div>'+
                    '</a>';
                function done() {
                    $("#content-box").html(groupContent+classList);
                    $("#group-feed").slideToggle("slow");
                }

                $("#group-feed").slideUp("slow", done);
            }
        });
        e.preventDefault();
    });
    /* --------------------------------- */





    /* WILL GET MESSAGES FROM ACCOUNTS */
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
                message.reverse();
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
    /* --------------------------------- */

    $('body').off('click','.post-controller');
    $('body').on('click','.post-controller',function(){
        //$(this).closest('.post-container').find('.comment-frame').slideDown('slow');
        $(this).closest('.post-container').find('.comment-container-input').slideToggle('slow');
        $(this).closest('.post-container').find('.comment-frame').slideToggle('slow');
        //alert('Hello');
    });



    // database connection
    //$('body').click(function(){
    //    document.write();
    //});
});
