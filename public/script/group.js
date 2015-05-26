$(document).ready(function() {
    var currentGroup = '';
    var currentSubject = '';
    var currentSection = '';

    var profilePicture = 'http://localhost:8000/res/images/pusheen-read.png';
    //if($('#userType').val() == 'student') var profilePicture = 'http://localhost:8000/res/images/pusheen-read.png';
    //else if($('#userType').val() == 'faculty') var profilePicture = 'http://localhost:8000/res/images/ics_logo.jpg';
    //else if($('#userType').val() == 'admin') var profilePicture = 'http://localhost:8000/res/images/sample2.png';

    // For recent posts
    getRecentPostData = function(){
        var groupFromList = '';
        var group = '';
        var subject = '';
        var section = '';
        var groupContent = '';
        var post = [];
        var q = 0;
        $.ajax({
            url: "../JSONcontents/accounts/groups/" + $("#username").html() + "_groups.json",
            success: function (listOfGroups) {
                groupFromList = JSON.parse(listOfGroups);
                group = groupFromList.groups;
                var htmlPost = '';
                if (group.length == 0) {
                    //alert('Hello');
                    htmlPost = '' +
                        '<div class="update-panel-wrapper">' +
                            '<div class="container-fluid update-panel">' +
                                '<div class="col-md-12">' +
                                    '<h4 class="pull-center">NO GROUPS YET!</h4>' +
                                '</div>' +
                            '</div>' +
                        '</div>';
                }
                for (q = 0; q < group.length; q += 1) {
                    //alert(group[q]['subject']);
                    $.ajax({
                        url: "../JSONcontents/groups/posts/" + group[q]['subject'] + group[q]['section'] + "_posts.json",
                        success: function (postIt) {
                            //alert(q - group.length + ' ' + q);
                            //alert(q);
                            post = JSON.parse(postIt);
                            //alert(JSON.stringify(post));
                            //alert(q);
                            htmlPost += '' +
                            '<div class="post-something"><div id="welcome-note" style="background-color:white;">' +
                            '<h3 id="welcome" style="color:black;">' + group[q - group.length]['subject'] + ' ' + group[q - group.length]['section'] + '</h3>' +
                            '</div>';
                            if (post.length == 0) {
                                htmlPost += '' +
                                '<div class="update-panel-wrapper">' +
                                '<div class="container-fluid update-panel">' +
                                '<div class="col-md-12">' +
                                '<h4 class="pull-center">NO POSTS YET!</h4>' +
                                '</div>' +
                                '</div>' +
                                '</div>';
                            } else {
                                htmlPost += '' +
                                '<div class="update-panel-wrapper post-container">' +
                                '<div class="container-fluid update-panel">' +
                                '<div class="col-md-12">' +
                                '<div class="col-sm-1 feed-icon-wrapper">' +
                                '<img src="'+profilePicture+'" class="feed-icon" class="img-rounded" alt="sample">' +
                                '</div>' +
                                '<div class="col-sm-11 post-title">' +
                                '<h4>' + post[post.length - 1].postTitle + ' <small>' + post[post.length - 1].dateOfPost + '</small>' + '</h4>' +
                                '<h6> by ' + post[post.length - 1].postBy + '</h6>' +
                                '</div>' +
                                '<div class="col-sm-11 feed-text">' +
                                '<p>' + post[post.length - 1].postContent + '</p>' +
                                '</div>' +
                                '</div>' +
                                '<small style="cursor:pointer" class="pull-right post-controller">COMMENTS</small>' +
                                '</div>';
                                htmlPost += '' + '<div class="comment-frame" style="display:none">';
                                for (var k = 0; k < post[post.length - 1]['comments'].length; k += 1) {
                                    htmlPost += '' +
                                    '<div class="comment-container-wrapper">' +
                                    '<div class="container-fluid comment-container">' +
                                    '<div class="col-md-12">' +
                                    '<div class="col-sm-11 comment-header">' +
                                    '<h5>' +
                                    post[post.length - 1]['comments'][k]['commentBy'] +
                                    ' <small>' + post[post.length - 1]['comments'][k]['date'] + '</small>' +
                                    '</h5>' +
                                    '</div>' +
                                    '<div class="col-sm-11 comment-content">' +
                                    '<p>' + post[post.length - 1]['comments'][k]['content'] + '</p>' +
                                    '</div>' +
                                    '</div>' +
                                    '</div>' +
                                    '</div>';
                                }
                                $('.comment-container-input').find('.commentGroup').val(group[q - group.length]['subject'] + group[q - group.length]['section']);
                                $('.comment-container-input').closest('.postIndex').val();
                                var size = post.length - 0 - 1;
                                $('.comment-container-input').find('.commentPostIndex').val(size);
                                htmlPost += '' +
                                '<div class="update-panel-wrapper comment-container-send" >' +
                                $('.comment-container-input').html() +
                                '</div>';
                                htmlPost += '</div></div>';

                            }
                            htmlPost += '</div>';
                            q += 1;
                        }
                    });
                }
                function done() {
                    $("#welcome").html('RECENT POSTS');
                    $("#content-box").html(htmlPost);
                    $("#content-box").slideToggle('slow');
                }

                $("#content-box").slideUp("slow", done);

            }
        });
    };
    getRecentPostData();
    $("#recentPosts").click(getRecentPostData);

    /* WILL GET GROUP LIST FROM ACCOUNTS */
    $.ajax({
        url: "../JSONcontents/accounts/groups/"+$("#username").html()+"_groups.json",
        success: function(data){
            var groupData = JSON.parse(data);
            var studentData = groupData.groups;
            var html = '';
            var groupList = '';
            var endHtml = '';
            var accessCodes = '';
            if (studentData.length == 0) {
                if($('#userType').val()== 'student') $('#input-post-field').slideUp('slow');
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
                    '<div class="circle"><p class="notif-number">' + '' + '</p></div>' +
                '</div>';
            }

            if($('#userType').val() != 'student'){
                html += ''+
                '<div id="accessCodeViewer" class="col-md-12 user-links">' +
                '<span class="glyphicon glyphicon-lock group-icon"></span>' +
                '<div class="col-sm-12">' +
                '<h5 class="group-name"><a href="#" style="color:inherit;text-decoration: none;">SHOW ACCESS CODES</a></h5>' +
                '</div>' +
                '</div>';
            }

            endHtml += '' +
                '<a style="color:inherit;text-decoration: none;" href="/pages/group/join">'+
                    '<div class="col-md-12 user-links">' +
                        '<span class="glyphicon glyphicon-plus group-icon"></span>' +
                        '<div class="col-sm-12">' +
                            '<h5 class="group-name">JOIN A GROUP</h5>' +
                        '</div>' +
                    '</div>'+
                '</a>';

            if($('#userType').val() != 'student') {
                endHtml += ''+
                    '<a style="color:inherit;text-decoration: none;" href="/pages/group/create">'+
                        '<div class="col-md-12 user-links">' +
                            '<span class="glyphicon glyphicon-plus group-icon"></span>' +
                            '<div class="col-sm-12">' +
                                '<h5 class="group-name">CREATE A GROUP</h5>' +
                            '</div>' +
                        '</div>'+
                    '</a>';
            }

            $("#group-field-content").html(html+endHtml);


            getGroupPostData = function () {
                if($('#userType').val()!= 'student')
                var header = $(this).find(".groupName").attr("subject") + " " + $(this).find(".groupName").attr("section");
                var group = $(this).find(".groupName").attr("subject") + $(this).find(".groupName").attr("section");
                //alert(group);
                currentGroup = group;
                currentSubject = $(this).find(".groupName").attr("subject");
                currentSection = $(this).find(".groupName").attr("section");
                $('#subject-name').val($(this).find(".groupName").attr("subject"));
                $('#section-name').val($(this).find(".groupName").attr("section"));
                $.ajax({
                    url: "../JSONcontents/groups/posts/" + $(this).find(".groupName").attr("subject") + $(this).find(".groupName").attr("section") + "_posts.json",
                    success: function (posts) {
                        //alert('hie');
                        if($('#userType').val()!= 'student') $('#input-post-field').slideDown('slow');
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
                            '<img src="'+profilePicture+'" class="feed-icon" class="img-rounded" alt="sample">' +
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
                            $('.comment-container-input').find('.commentGroup').val(currentGroup);
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
                            $("#welcome").html(currentSubject + " " + currentSection);
                            $("#content-box").html(groupContent+classList);
                            $("#content-box").slideToggle("slow");
                        }

                        $("#content-box").slideUp("slow", done);
                    },
                    error: function(e){
                        document.write('SOMETHING WENT WRONG');
                    }
                });
            };
            /* WILL GET POST DATA FROM GROUPS */
            $(".user-group").click(getGroupPostData);
            /* --------------------------------- */




        }
    });
    /* --------------------------------- */


    /* WILL GET ACCESS CODES FROM GROUPS */
    $('body').off('click','#accessCodeViewer');
    $('body').on('click','#accessCodeViewer',function(e){
        $.ajax({
            url:"../JSONcontents/accounts/groups/"+$("#username").html()+"_groups.json",
            success: function(data){
                var groupData = JSON.parse(data);
                var studentData = groupData.groups;
                //alert(JSON.stringify(studentData.length));
                var groupContent = '';
                if (studentData.length == 0) {
                    groupContent = '' +
                    '<div class="update-panel-wrapper">' +
                    '<div class="container-fluid update-panel">' +
                    '<div class="col-md-12">' +
                    '<h4 class="pull-center">NO GROUPS YET!</h4>' +
                    '</div>' +
                    '</div>' +
                    '</div>';
                }
                for (var j = 0; j < studentData.length; j += 1) {
                    groupContent += '' +
                    '<div class="update-panel-wrapper post-container">' +
                        '<div class="container-fluid update-panel">' +
                            '<div class="col-md-12">' +
                                '<div class="col-sm-11 post-title">' +
                                    '<h3 class="">' + studentData[j].subject + ' ' + studentData[j].section + '</h3>'+
                                    '<h5 class="accessCode">Code: <small>' + studentData[j].accessCode + '</small></h5>'+
                                '</div>' +
                            '</div>' +
                        '</div>'+
                    '</div>';
                }
                function done() {
                    $("#welcome").html('ACCESS CODES');
                    $("#content-box").html(groupContent);
                    $("#content-box").slideToggle("slow");
                }

                $("#content-box").slideUp("slow", done);
            }
        });
        e.preventDefault();

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
                        //alert(classlist[h].type);
                        if(classlist[h].type != 'student') {
                            $('.username-container').find('.usernameFormSpecial').attr({
                                'action': '//localhost:8000/pages/profiles/' + classlist[h].lastname,
                                'method': 'GET'
                            });
                            $('.username-container').find('.selectUsername').val(classlist[h].firstname + " " + classlist[h].lastname);

                        }else {
                            $('.username-container').find('.usernameForm').attr({
                                'action': '//localhost:8000/pages/user/message',
                                'method': 'POST'
                            });

                            $('.username-container').find('.usernameContainer').val(classlist[h].username);
                            $('.username-container').find('.selectUsername').val(classlist[h].firstname + " " + classlist[h].lastname);
                            $('.username-container').find('.nameContainer').val(classlist[h].firstname + " " + classlist[h].lastname);
                        }
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
                    $("#welcome").html("CLASS LIST");
                    $("#content-box").html(listHtml+back);
                    $("#content-box").slideToggle("slow");
                }

                $("#content-box").slideUp("slow", done);
            }
        });
        e.preventDefault();

    });
    /* --------------------------------- */





    /* WILL SHOW LIST OF POSTS FROM GROUPS */
    $('body').off('click','#showGroup');
    $('body').on('click','#showGroup',function(e){
        var group = currentGroup;
        //alert(group);
        $('#subject-name').val(currentSubject);
        $('#section-name').val(currentSection);
        $.ajax({
            url: "../JSONcontents/groups/posts/" + group + "_posts.json",
            success: function (posts) {
                if($('#userType').val()!= 'student') $('#input-post-field').slideDown('slow');
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
                    '<img src="'+profilePicture+'" class="feed-icon" class="img-rounded" alt="sample">' +
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
                    $('.comment-container-input').find('.commentGroup').val(currentGroup);
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
                    $("#welcome").html(currentSubject + " " + currentSection);
                    $("#content-box").html(groupContent+classList);
                    $("#content-box").slideToggle("slow");
                }

                $("#content-box").slideUp("slow", done);
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
                if($('#userType').val()!= 'student') $('#input-post-field').slideUp('slow');
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
                                        '<img src="'+profilePicture+'" class="feed-icon" class="img-rounded" alt="sample">'+
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
                    $("#welcome").html("INBOX");
                    $("#content-box").html(inboxContent);
                    $("#content-box").slideToggle("slow");
                }

                $("#content-box").slideUp("slow", done);
            }
        });

    });
    /* --------------------------------- */

    /* WILL GET COMMENTS FROM POST DATA */
    $('body').off('click','.post-controller');
    $('body').on('click','.post-controller',function(){
        //$(this).closest('.post-container').find('.comment-frame').slideDown('slow');
        $(this).closest('.post-container').find('.comment-container-input').slideToggle('slow');
        $(this).closest('.post-container').find('.comment-frame').slideToggle('slow');
        //alert('Hello');
    });

});
