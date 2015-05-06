@extends('layouts.default')
@section('content') 

    {{ HTML::style('css/group.css'); }}
    {{ HTML::script('script/group.js'); }}

	<div class="wrapping-panel">

	<div class="container">
	
		<div class="col-md-12">

			<div class="col-md-3" id="profile-panel-wrapper">

				<div class="col-md-12" id="profile-panel">
					<div id="user-info-wrapper">
						<div class="col-md-12">
							<h4 class="user-info" id="name">LASTNAME, FIRSTNAME, MIDDLENAME</h4>
							<h5 class="user-info" id="stdNo">2013-04596</h5>
						</div>
					</div>
				</div>

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
				
<<<<<<< HEAD
				<a href="#"><div class="col-md-12" id="group-panel">
					<div>
						<div class="col-sm-3">
							<span class="fa fa-users profile-icon"></span>
						</div>
						<div class="col-sm-7">
							<h3 class="label-text">GROUPS</h3>
						</div>
						<div class="col-sm-2">
						<div id="circle"><p class="notif-number">2</p></div>
						</div>
					</div>
				</div></a>
            <div id="group-field" class="col-md-12">
                <div id="group-field-content">
                	<a href="#"><div class="col-md-12 user-group">
                			<div class="col-sm-2">
                				<span class="glyphicon glyphicon-th group-icon"></span>
                			</div>
							<div class="col-sm-8">
								<h3 class="group-name">Almer and Friends</h3>
							</div>
							<div class="col-sm-2">
								<div id="circle"><p class="notif-number">2</p></div>
							</div>                			
                	</div></a>
                	<a href="#"><div class="col-md-12 user-group" id="sample-group">
                			<div class="col-sm-2">
                				<span class="glyphicon glyphicon-file group-icon"></span>
                			</div>
							<div class="col-sm-8">
								<h3 class="group-name">CMSC 100 Reporting</h3>
							</div>
							<div class="col-sm-2">
								<div id="circle"><p class="notif-number">2</p></div>
							</div>                			
                	</div></a>
                </div>
            </div>
=======

		            <div id="group-field" class="col-md-12">
		                <div id="group-field-content">
		                	<div class="col-md-12 user-group">
		                		<span class="glyphicon glyphicon-heart group-icon"></span>
								<div class="col-sm-12">
									<h5 class="group-name">Edi Sa Puso Mo!</h5>
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
>>>>>>> c8c19178c353d0be7e2e307b5fa794972d05c912

        	</div>
		
			<div class="col-md-9" id="group-feed-wrapper">
				<div class="col-md-12" id="group-feed">

				<div id="welcome-note">
					<h3 id="welcome">NEWS FEED</h3>
				</div>

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
				</div>
			</div>
		</div>
	</div>

</div>
@stop