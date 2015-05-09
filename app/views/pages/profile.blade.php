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
	$accessCode = Session::get('accessCode');
	$academic = Session::get('academic');
	$employeeNumber = Session::get('employeeNumber');
	$room = Session::get('room');
				
	 //start of the session
?>
@extends('layouts.default')
@section('content')

    {{ HTML::style('css/profile.css'); }}


	<div>
	<div class="container" id="body-wrapper">
		<div class="col-md-12" id="upper-panel">
			<div class="col-md-4" id="profile-upper-left-panel">
				<img src="{{URL::to('res/faces/faculty/bulalacao.jpg')}}" id="profile-pic" alt="Profile Picture">
				<div id="profile-basic-info">
					<h4 class="prof-info" id="prof-name"><?php echo $lastname. ', '. $firstname .' '. $middlename; ?></h4>
					<h5 class="prof-info" id="prof-desig"><?php echo $academic; ?></h5>
					<h5 class="prof-info" id="prof-bio/info">BIO/INFO</h5>
				</div>
			</div>
			<div class="col-md-8" id="profile-upper-right-panel">
				<div id="profile-info">
					<p id="room-assignment"><?php echo $room; ?></p>
					<p id="consultation-hours">CONSULTATION HOURS</p>
					<p id="bio">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
				</div>
				<div id="profile-message-wrapper">
					<p><a href="#">Message <span class="fa fa-envelope-o" id="sample"></span></a></p>
				</div>
			</div>
		</div>
	</div>
	
	<!-- 
		The following div (for sending exers) will not be visible should the prof log in
		Not yet implemented
	-->

	<div class="container" id="body-wrapper">
		<div class="col-md-12" id="prof-bottom-panel">
			<div id="prof-bottom-panel-content">
				<div class="col-md-4" id="text-panel">
					<h4>Guide/Reminders</h4>
					<ul>
						<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
						<li>Ut enim ad minim veniam, quis nostrud exercitation ullamco.</li>
						<li>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</li>
						<li>Non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</li>
					</ul>
				</div>
				<div class="col-md-8" id="send-exer-panel">
					<h5>{ SEND YOUR EXERCISE }</h5>
					<form id="profile-exer" action="#">
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
						<button type="button" class="btn btn-primary">UPLOAD FILE</button>

					</form>
				</div>	
			</div>
		
		</div>
		
	</div>
	</div>

@stop