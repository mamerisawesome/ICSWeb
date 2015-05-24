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

    {{ HTML::style('css/profile.css'); }}


	<div>
	{{ Form::open(array('route'=>'user.edit', 'name'=>'reg-form', 'id'=>'reg-form', 'files' => true))}}
        {{ Form::macro('regInput', function($inputType, $idName, $value, $placeholderValue, $labelValue)
            {
                echo Form::label($idName, $labelValue);
                echo Form::input($inputType, $idName, $value , array('id'=>$idName,'class'=>'form-control','placeholder'=>$placeholderValue, 'required'=>''));
                echo '<br>';
            });
         }}
	<div class="container" id="body-wrapper">
		<div class="col-md-12" id="upper-panel">
			<div class="col-md-4" id="profile-upper-left-panel">
				
				
				<div id="profile-basic-info">


					{{ Form::regInput('text','lastName',$lastname,'Enter your Last Name','Last Name') }}
					{{ Form::regInput('text','firstName',$firstname,'Enter your First Name','First Name') }}
					{{ Form::regInput('text','middleName',$middlename,'Enter your Middle Name','Middle Name') }}
					{{ Form::regInput('text','academicPosition',$academic,'Enter your Acadimic Position','Academic Position') }}
					
				</div>
				
			</div>
			<div class="col-md-8" id="profile-upper-right-panel">
				<div id="profile-info">
					{{ Form::regInput('text','room',$room,'Enter your Room Number','Room Number') }}
					{{ Form::regInput('text','consultation',$consult,'Enter your Consultation Hours','Consultation Hours') }}
					{{ Form::regInput('text','bio',$bio,'Enter your Bio/Info','Bio/Info') }}
					
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
					{{ Form::regInput('text','guide',$guide,'Enter your Guide/Reminders','Guide/Reminders') }}
				</div>
				
			</div>
		
		</div>
		
	</div>
	{{ Form::submit('Submit', array('id'=>'submit','class'=>'btn btn-primary')) }}
	{{ Form::close() }}	
	</div>

@stop