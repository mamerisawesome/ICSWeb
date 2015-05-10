@extends('layouts.default')
@section('content')
	<div class="wrapping-panel" id="login-form-wrapper">
        <div class="container">
            <div class="col-md-12">
                <div class="col-md-12" id="login-form-panel">
                    <div class="col-md-12" id="login-icon"><img src="{{URL::to('res/faces/faculty/dummy.png')}}"/>
                    </div>
                    <div class="col-md-12" id="login-form-title">
                        <h2>LOGIN TO ICS PORTAL</h2>
                    </div>
                    <div class="col-md-12" id="login-form-body">
                        {{ Form::open(array('route' => 'user.login.post', 'name'=>'reg-form', 'id'=>'reg-form')) }}
                            {{Form::macro('regInput', function($inputType, $idName, $placeholderValue, $labelValue)
                                {
                                    echo Form::label($idName, $labelValue);
                                    echo Form::input($inputType, $idName, '' , array('id'=>$idName,'class'=>'form-control','placeholder'=>$placeholderValue,'required'=>''));
                                });
                            }}
                        {{ Form::regInput('email','email','Email address',' ') }}
                        {{ Form::regInput('password','password','Password',' ') }}

                        {{ Form::submit('Login', array('class'=>'btn btn-primary', 'id'=>'login-submit')) }}
                            {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop