
@extends('layouts.default')
@section('content')
	<h2>ICS Log in</h2>
                {{ Form::open(array('route' => 'student.login.post', 'name'=>'reg-form', 'id'=>'reg-form')) }}
                    {{Form::macro('regInput', function($inputType, $idName, $placeholderValue, $labelValue)
                        {
                            echo Form::label($idName, $labelValue);
                            echo Form::input($inputType, $idName, '' , array('id'=>$idName,'class'=>'form-control','placeholder'=>$placeholderValue,'required'=>''));
                        });
                    }}

                    {{ Form::regInput('email','email','Enter your email address','E-mail Address') }}

                    {{ Form::regInput('password','password','Enter your password','Password') }}
                    
                    {{ Form::submit('Submit', array('class'=>'btn btn-primary')) }}
                {{ Form::close() }}
@stop