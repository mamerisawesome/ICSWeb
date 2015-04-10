@extends('layouts.default')
@section('content')

	<div class="container">
	<div class="container" id="body-wrapper">

		<div id="upper-panel">
			<div class="col-md-4" id="profile-upper-left-panel">
				<img src="res/images/sample3.png" id="profile-pic" alt="Profile-Pic">
				<div id="profile-basic-info">
					<h4 class="prof-info" id="prof-name">LASTNAME, FIRSTNAME, MI.</h4>
					<h5 class="prof-info" id="prof-desig">DESIGNATION</h5>
					<h5 class="prof-info" id="prof-bio/info">BIO/INFO</h5>
				</div>
			</div>
			<div class="col-md-8" id="profile-upper-right-panel">
				<div id="profile-info">
				<p id="room-assignment">ROOM ASSIGNMENT</p>
				<p id="consultation-hours">CONSULTATION HOURS</p>
				<p id="bio">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
				</div>
				<div id="profile-message-wrapper">
					<a href="#"><img src="res/images/envelope.png" id="profile-msg-icon" class="img-rounded" alt="MSG"><p>LEAVE A MESSAGE</p></a>
				</div>
			</div>
		</div>

		<div id="prof-bottom-panel">

			<div id="prof-bottom-panel-content">
				<div class="col-md-4" id="text-panel">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</div>
				<div class="col-md-8" id="send-exer-panel">
					<h5>{ SEND YOUR EXERCISE }</h5>
					<form id="profie-exer" action="#">
						<table>
							<tr>
								<td><p class="inputTitle">SUBJECT:</p></td>
								<td><input type="text" class="inputField" id="subject" required></td>
							</tr>
							<tr>
								<td><p class="inputTitle">SECTION:</p></td>
								<td><input type="text" class="inputField" id="section" required></td>
							</tr>
							<tr>
								<td><p class="inputTitle">NAME:</p></td>
								<td><input type="text" class="inputField" id="stdNAME" required></td>
							</tr>
							<tr>
								<td><p class="inputTitle">STD NO:</p></td>
								<td><input type="text" class="inputField" id="stdNo" required></td>
							</tr>
							<tr>
								<td><p class="inputTitle">EX NO/TITLE:</p></td>
								<td><input type="text" class="inputField" id="EXno/title" required></td>
							</tr>
							<tr>
								<td><p class="inputTitle">NOTE:</p></td>
								<td><input type="text" class="inputField" id="NOTE" required></td>
							</tr>
						</table>
						<br>
						<center><button type="button" class="btn btn-primary">UPLOAD FILE</button></center>

					</form>
				</div>	
			</div>
		
		</div>
		
	</div>
	</div>

@stop