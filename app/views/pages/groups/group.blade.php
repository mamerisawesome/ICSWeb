<?php
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

    <script>
        x = "{{ $data->name }}";
        document.write(x);

        $(".user-group").click(function(){
            //If kaya ng by whole na i-load
            $("#group-feed").load("/script/sample.html")

            //$("#welcome-note").load("/script/sample.html")
            $('#welcome-note').html('{{ $data->name }}');
            //$(".feed-text").load("/script/sample2.txt")
            $('.feed-text').html('This is some text that I just typed right now!');
        });

        $("#inbox-panel").click(function(){
            //If kaya ng by whole na i-load
            $("#group-feed").load("/script/sample2.html")

            $("#welcome-note").load("/script/sample2.html")
            $(".feed-text").load("/script/sample.txt")
        });
    </script>

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
					<div class="col-md-12" id="group-icon-wrapper">
						<div class="col-md-6" id="inbox-panel">
							<div class="col-md-12">
								<span class="glyphicon glyphicon-envelope profile-icon"></span>
								<div class="circle"><p class="notif-number">2</p></div>
							</div>
						</div>
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
        	</div>

		    {{-- Division that displays the group content --}}
			<div class="col-md-9" id="group-feed-wrapper">
				<div class="col-md-12" id="group-feed">

                {{-- Header of the div --}}
				<div id="welcome-note">
					<h3 id="welcome">NEWS FEED</h3>
				</div>

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
@stop