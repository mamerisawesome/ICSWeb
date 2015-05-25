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
	$consult = Session::get('consult');
	$bio = Session::get('bio');
	$guide = Session::get('guide');
				
	 //start of the session
?>
@extends('layouts.default')
@section('content')

    {{ HTML::style('css/profile-edit.css'); }}
    {{ HTML::script('script/edit-profile.js'); }}

    <title>Edit Your Profile</title>
	<div id="profile-body">
	{{ Form::open(array('route'=>'user.edit', 'name'=>'reg-form', 'id'=>'reg-form', 'files' => true))}}
        {{ Form::macro('regInput', function($inputType, $idName, $value, $placeholderValue, $labelValue)
            {
                echo Form::label($idName, $labelValue);
                if($idName == 'room') echo Form::input($inputType, $idName, $value , array('id'=>$idName,'class'=>'form-control','placeholder'=>$placeholderValue, 'required'=>'', 'maxlength'=>'5'));
                else echo Form::input($inputType, $idName, $value , array('id'=>$idName,'class'=>'form-control','placeholder'=>$placeholderValue, 'required'=>''));
                echo '<br>';
            });
         }}
	<div class="container" id="body-wrapper">
		<div class="col-md-12" id="upper-panel">
			<div id="form-title">
				<h3>Edit Your Profile</h3>
			</div>
			<div class="col-md-4" id="profile-upper-left-panel">
				<div id="profile-basic-info">
					{{ Form::regInput('text','lastName',$lastname,'Enter your Last Name','Last Name') }}
					{{ Form::regInput('text','firstName',$firstname,'Enter your First Name','First Name') }}
					{{ Form::regInput('text','middleName',$middlename,'Enter your Middle Name','Middle Name') }}
					{{ Form::regInput('text','academicPosition',$academic,'Enter your Academic Position','Academic Position') }}
				</div>
				
			</div>
			<div class="col-md-8" id="profile-upper-right-panel">
				<div id="profile-info">
					{{ Form::regInput('text','room',$room,'Enter your Room Number','Room Number') }}
					<div id="error-room"></div>
					{{ Form::regInput('text','consultation',$consult,'Enter your Consultation Hours','Consultation Hours') }}
					{{ Form::regInput('text','bio',$bio,'Enter your Bio/Info','Bio/Info') }}
					{{ Form::regInput('text','guide',$guide,'Enter your Guide/Reminders','Guide/Reminders') }}				
			
				</div>
			</div>
		</div>
	</div>
	
	<div class="container" id="body-wrapper">
		<div class="col-md-12" id="prof-bottom-panel">
			<div class="col-md-4">
					<a href={{URL::to('pages/profile')}}><div id="back" class="btn btn-primary" onclick=>Back</div></a>
			</div>
			<div class="col-md-8" id="prof-bottom-panel-content">
					{{ Form::submit('Submit', array('id'=>'submit','class'=>'btn btn-primary')) }}
					{{ Form::close() }}	
			</div>
		</div>
	</div>

@stop