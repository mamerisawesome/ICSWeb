@extends('layouts.default')
@section('content')

    {{ HTML::style('css/group.css'); }}
	<div class="wrapping-panel">
	<div class="container">
		<div class="col-md-12">
			<div class="col-md-3" id="profile-panel-wrapper">
				<div class="col-md-12" id="profile-panel">
				<div id="user-info-wrapper">
					<div id="user-bio">
						<div class="col-md-12">
						<p class="user-info" id="name">Name:</p>
						<p class="user-info" id="stdNo">STDNo:</p>
					</div>
					</div>
				</div>
				</div>
				<div class="col-md-12" id="inbox-panel">
					<a href="#"><div>
						<div class="col-sm-3">
							<span class="glyphicon glyphicon-envelope profile-icon"></span>
						</div>
						<div class="col-sm-7">
							<h3 class="label-text">INBOX</h3>
						</div>
						<div class="col-sm-2">
							<div id="circle"><p class="notif-number">2</p></div>
						</div>
					</div></a>
				</div>
				
				<a href="#"><div class="col-md-12" id="group-panel">
					<div>
						<div class="col-sm-3">
							<span class="fa fa-users profile-icon" id="sample"></span>
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
                				<span class="glyphicon glyphicon-heart group-icon"></span>
                			</div>
							<div class="col-sm-8">
								<h3 class="group-name">Edi Sa Puso Mo!</h3>
							</div>
							<div class="col-sm-2">
								<div id="circle"><p class="notif-number">2</p></div>
							</div>                			
                	</div></a>
                	<a href="#"><div class="col-md-12 user-group">
                			<div class="col-sm-2">
                				<span class="glyphicon glyphicon-king group-icon"></span>
                			</div>
							<div class="col-sm-8">
								<h3 class="group-name">Chess Groups</h3>
							</div>
							<div class="col-sm-2">
								<div id="circle"><p class="notif-number">2</p></div>
							</div>                			
                	</div></a>
                </div>
            </div>

        	</div>
		
		<div class="col-md-9" id="group-feed">
			<div class="col-md-12">
			<div id="welcome-note">
				<h3 id="welcome">{ Welcome to ICS WEBSITE! }</h3>
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