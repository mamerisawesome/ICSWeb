<?php
	$type = Session::get('type');
	$username = Session::get('username');
	$id = Session::get('id');
	$firstname = Session::get('firstName');
	$middlename = Session::get('middleName');
	$lastname = Session::get('lastName');
	$birthdate = Session::get('birthdate');
	$sex = Session::get('sex');
	$email = Session::get('email');
	$password = Session::get('password');
	$studentNumber = Session::get('studentNumber');
	 $accessCode = Session::get('accessCode');
	 //start of the session
?>
@extends('layouts.default')
@section('content')

    {{ HTML::style('css/group.css'); }} 
    {{ HTML::script('script/group.js'); }}

    <div class="wrapping-panel">

	<div class="container">
	
		<div class="col-md-12">

			<div class="col-md-3" id="profile-panel-wrapper">

				{{-- Panel of the user to navigate groups and messages --}}
				<div class="col-md-12" id="profile-panel">
					<div id="user-info-wrapper">
						<div class="col-md-12">
							<h4 class="user-info" id="name"> <?php echo $lastname. ', '. $firstname .' '. $middlename; ?>  </h4>
							<h5 class="user-info" id="stdNo"><?php echo $studentNumber ?></h5>
						</div>
					</div>
				</div>

                {{-- Buttons found beneath the profile panel --}}
				<div class="col-md-12" id="group-control-panel">

                    {{-- Inbox and Group buttons --}}
					<div class="col-md-12" id="group-icon-wrapper">

					    {{-- Inbox button --}}
						<div class="col-md-6" id="inbox-panel">
							<div class="col-md-12">
								<span class="glyphicon glyphicon-envelope profile-icon"></span>
								<div class="circle"><p class="notif-number">2</p></div>
							</div>
						</div>

						{{-- Group button --}}
						<div class="col-md-6" id="group-panel">
							<div class="col-md-12">
								<span class="fa fa-users profile-icon"></span>
								<div class="circle"><p class="notif-number">2</p></div>
							</div>
						</div>

					</div>

                    {{-- List of groups --}}
		            <div id="group-field" class="col-md-12">
		                <div id="group-field-content">
		                	{{-- Make this dynamic: groups will be fetched in a json file --}}
		                	<div class="col-md-12 user-group">
		                		<span class="glyphicon glyphicon-heart group-icon"></span>
								<div class="col-sm-12">
									<h5 class="group-name">Almer and Friends</h5>
								</div>
								<div class="circle"><p class="notif-number">2</p></div>
		                	</div>
		                	<div class="col-md-12 user-group">
		                		<span class="glyphicon glyphicon-heart group-icon"></span>
								<div class="col-sm-12">
									<h5 class="group-name">CMSC 100 UV-2L</h5>
								</div>
								<div class="circle"><p class="notif-number">2</p></div>
		                	</div>
		                </div>
		            </div>

    			</div>

    			{{-- Input field to post --}}
                <div id="input-post-field" class="col-md-12">
                    <h5>Post something in <span id="postIn"></span></h5>
                    {{ Form::open(array('action'=>'page.group.post', 'name'=>'post-form', 'id'=>'post-form'))}}
                        <?php $name = Session::get('firstName') . ' ' . Session::get('lastName'); ?>

                        {{ Form::input('hidden','postBy',$name,array('value'=>$name,'id'=>'postBy')) }}
                        {{ Form::input('hidden','subject-name','',array('value'=>'','id'=>'subject-name')) }}
                        {{ Form::input('hidden','section-name','',array('value'=>'','id'=>'section-name')) }}

                        {{ Form::label('Title') }}
                        {{ Form::input('text','postTitle','',array('autocomplete'=>'off','class'=>'form-control','id'=>'postTitle')) }}

                        {{ Form::label('Content') }}
                        {{ Form::textarea('postContent','',array('autocomplete'=>'off','class'=>'form-control','id'=>'postContent','style'=>'resize:none;max-width:100%;max-height:130px;padding-top:-100px;')) }}
                        <br>

                        {{ Form::submit('Post',array('class'=>'btn btn-primary pull-right','id'=>'postDone')) }}

                    {{ Form::close() }}

                </div>

        	</div>

		    {{-- Division that displays the group content --}}
			<div class="col-md-9" id="group-feed-wrapper">
				<div class="col-md-12" id="group-feed">

                {{-- Header of the div --}}
				<div id="welcome-note">
					<h3 id="welcome">NEWS FEED</h3>
				</div>

                    <div id="content-box">

                    <?php for($i = 0; $i < 3; $i += 1){ ?>
                    <div class="update-panel-wrapper">
                        <div class="container-fluid update-panel">
                            <div class="col-md-12">
                            <div class="col-sm-1 feed-icon-wrapper">
                                <img src="{{URL::to('res/images/sample1.png')}}" class="feed-icon" class="img-rounded" alt="sample">
                            </div>
                            <div class="col-sm-11 feed-text">
                                <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
                            </div>
                            </div>
                        </div>
                    </div>

                    <div class="update-panel-wrapper">
                        <div class="container-fluid update-panel">
                            <div class="col-md-12">
                            <div class="col-sm-1 feed-icon-wrapper">
                                <img src="{{URL::to('res/images/sample2.png')}}" class="feed-icon" class="img-rounded" alt="sample">
                            </div>
                            <div class="col-sm-11 feed-text">
                                <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
                            </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    </div>
				</div>
			</div>
		</div>
	</div>

    <div class="update-panel-wrapper username-container hidden">
        <div class="container-fluid update-panel">
            <div class="col-md-12">
                <h4 class="pull-center">
                {{ Form::open(array('action'=>'page.user.message', 'name'=>'usernameForm', 'class'=>'usernameForm')) }}

                    {{ Form::hidden('senderUsername',Session::get('username'),array('class'=>'usernameContainer')) }}
                    {{ Form::hidden('senderFirstname',Session::get('firstName'),array('class'=>'firstnameContainer')) }}
                    {{ Form::hidden('senderMiddlename',Session::get('middleName'),array('class'=>'middlenameContainer')) }}
                    {{ Form::hidden('senderLastname',Session::get('lastName'),array('class'=>'lastnameContainer')) }}

                    {{ Form::hidden('usernameContainer','',array('class'=>'usernameContainer')) }}
                    {{ Form::hidden('nameContainer','',array('class'=>'nameContainer')) }}
                    {{ Form::submit('', array("style"=>"background-color: transparent;border:none;color:#34495e;",'class'=>'selectUsername')) }}
                {{ Form::close() }}
            </div>
        </div>
    </div>

    <div class="update-panel-wrapper comment-container-input hidden">
        <div class="container-fluid comment-panel">
            <div class="col-md-12">
            <h4 class="pull-center">
            {{ Form::open(array('action'=>'page.user.comment.store', 'name'=>'commentForm', 'class'=>'commentForm')) }}

                {{ Form::hidden('commentBy',Session::get('firstName') . " " . Session::get('lastname'),array('class'=>'usernameContainer')) }}
                {{ Form::hidden('commentGroup','',array('class'=>'commentGroup')) }}
                {{ Form::hidden('commentPostIndex',-1,array('class'=>'commentPostIndex')) }}
                <div class="input-group">
                    {{ Form::text('commentContent','',array('id'=>'commentContent','class'=>'form-control')) }}
                    <span class="input-group-btn">
                        {{ Form::submit('Comment',array('class'=>'btn btn-primary')) }}
                    </span>
                </div><!-- /input-group -->

            {{ Form::close() }}
            </div>
        </div>
    </div>

</div>
@stop