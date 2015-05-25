<?php
	$avatar = Session::get('avatarProf');
	$firstname = Session::get('firstNameProf');
	$middlename = Session::get('middleNameProf');
	$lastname = Session::get('lastNameProf');
	$username = Session::get('usernameProf');
	$academic = Session::get('academicProf');
	$room = Session::get('roomProf');
	$consult = Session::get('consultProf');
	$guide = Session::get('guideProf');
	$bio = Session::get('bioProf');
	 //start of the session
?>
@extends('layouts.default')
@section('content')

    {{ HTML::style('css/profile.css'); }}
    <?php $filename= $username.".jpg"; ?>
	<title>{{ $firstname. ' ' . $lastname }}</title>
	<div id="profile-body">
	<div class="container" id="body-wrapper">
		<div class="col-md-12" id="upper-panel">
			<div class="col-md-4" id="profile-upper-left-panel">
				<?php if($avatar!=null) {?>
					<img src="{{URL::to('upload/'.$filename)}}" id="profile-pic"/>
				<?php }else{ ?>	
					<img src="{{URL::to('res/images/blue_contacts.png')}}" id="profile-pic"/>
				<?php } ?>
				<form action="upload_file" method="post" enctype="multipart/form-data">
					<input type="file" name="uploadfile" size="20"/>
					<input type="submit" name="upload" value="upload" class="btn btn-primary"/> 
				</form>
				<div id="profile-basic-info">
					<h4 class="prof-info" id="prof-name"><?php echo $lastname. ', '. $firstname .' '. $middlename; ?></h4>
					<h5 class="prof-info" id="prof-desig"><?php echo Session::get('academic'); ?></h5>
				</div>
			</div>
			<div class="col-md-8" id="profile-upper-right-panel">
				<div id="profile-info">
					<p id="room-assignment"><?php echo Session::get('room'); ?></p>
					<p id="consultation-hours">CONSULTATION HOURS <br><?php if($consult ==null){ echo "No Consultation Hours Yet."; }else{echo $consult;} ?> </p>
					<p id="bio">
						<h5 class="prof-info" id="prof-bio/info">BIO/INFO<br><?php if($bio==null){ echo "No Bio/Info Yet."; }else{echo $bio;} ?></h5>
					</p>
				</div>
				<?php if(Session::get('type')=='faculty'){ ?>
						<div id="profile-message-wrapper">
							<p>
							<a href="{{URL::to('pages/profile-edit')}}">Edit your profile <span class="fa fa-user" id="sample"></span></a>
							</p>
						</div>
				<?php } else { ?>
					<div id="profile-message-wrapper">
						<p><a href="#">Message <span class="fa fa-envelope-o" id="sample"></span></a></p>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
	
	<div class="container" id="body-wrapper">
		<div class="col-md-12" id="prof-bottom-panel">
			<div id="prof-bottom-panel-content">
				<div class="col-md-4" id="text-panel">
					<h4>Guide/Reminders</h4>
					<ul>
						<br><?php if($guide==null){ echo "No Guides/Reminders Yet."; }else{echo $guide;} ?>
					</ul>
				</div>
				<?php if(Session::get('type')=='student'){ ?>
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
				<?php }else{ ?>
				
				<div id="groups-panel" class="col-md-8">
						<h3><a href="{{URL::to('pages/group')}}">Go to timeline</a></h3>
						<h4>You can see the latest updates from your groups, create groups, and view your messages.</h4>
				</div>
				<?php } ?>
				
			</div>
		
		</div>
		
	</div>
	</div>

@stop