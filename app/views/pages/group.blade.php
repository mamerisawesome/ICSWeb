@extends('layouts.default')
@section('content')
	<div class="container-fluid" id="body-wrapper">
		<div class="container">
			<div class="row col-md-3" id="profile-panel">
			
				<div id="user-info-wrapper">
					<div id="prof-pic">
						<img src="res/images/sample3.png" alt="Profile-Pic">
					</div>
					<div id="user-info">
						<p class="user-info" id="name">Name:</p>
						<p class="user-info" id="stdNo">STDNo:</p>
						<p class="user-info" id="degree">Degree:</p>
					</div>
					<div id="user-bio">
					<p class="user-info" id="bio">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
					</div>
				</div>

				<div class="col-sm-12" id="inbox-panel">
					<a href="#"><div>
						<div class="col-sm-4">
							<a href="#"><img src="res/images/envelope.png" id="inbox-pic" class="img-rounded" alt="INBOX"></a>
						</div>
						<div class="col-sm-8">
							<h3>INBOX</h3>
						</div>
					</div></a>
				</div>
				
				<div class="col-sm-12" id="group-panel">
					<a href="#"><div>
						<div class="col-sm-4">
							<a href="#"><img src="res/images/group.png" id="group-pic" class="img-rounded" alt="GROUPS"></a>
						</div>
						<div class="col-sm-8">
							<h3 id="sample">GROUPS</h3>
						</div>
					</div></a>
				</div>

			</div>
				
			<div class="row col-md-9" id="group-feed">
				<div id="welcome-note">
					<h3 id="welcome">{ Welcome to ICS WEBSITE! }</h3>
				</div>

				<div class="update-panel-wrapper">
					<div class="container-fluid update-panel">
						<div class="col-sm-1 feed-icon-wrapper">
							<img src="res/images/sample1.png" class="feed-icon" class="img-rounded" alt="sample">
						</div>
						<div class="col-sm-11 feed-text">
							<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
						</div>
					</div>
				</div>

				<div class="update-panel-wrapper">
					<div class="container-fluid update-panel">
						<div class="col-sm-1 feed-icon-wrapper">
							<img src="res/images/sample2.png" class="feed-icon" class="img-rounded" alt="sample">
						</div>
						<div class="col-sm-11 feed-text">
							<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
						</div>
					</div>
				</div>

				<div class="update-panel-wrapper">
					<div class="container-fluid update-panel">
						<div class="col-sm-1 feed-icon-wrapper">
							<img src="res/images/sample1.png" class="feed-icon" class="img-rounded" alt="sample">
						</div>
						<div class="col-sm-11 feed-text">
							<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
						</div>
					</div>
				</div>

				<div class="update-panel-wrapper">
					<div class="container-fluid update-panel">
						<div class="col-sm-1 feed-icon-wrapper">
							<img src="res/images/sample2.png" class="feed-icon" class="img-rounded" alt="sample">
						</div>
						<div class="col-sm-11 feed-text">
							<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
						</div>
					</div>
				</div>

			</div>

		</div>

	</div>

		<div class="row">
			
		</div>
@stop