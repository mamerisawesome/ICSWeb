
@extends('layouts.default')
@section('content')
	<div class="wrapping-panel" id="reg-form-panel">
        <div class="container">
            <div class="col-md-12">
            <div class="col-md-8" id="registration-form-panel">
                <div class="col-md-12" id="reg-form-title">
                <h2>ICS Log in</h2>
                </div>
                <div class="col-md-12" id="reg-form-body">

                {{ Form::open(array('route' => 'user.login.post', 'name'=>'reg-form', 'id'=>'reg-form')) }}
                    {{Form::macro('regInput', function($inputType, $idName, $placeholderValue, $labelValue)
                        {
                            echo Form::label($idName, $labelValue);
                            echo Form::input($inputType, $idName, '' , array('id'=>$idName,'class'=>'form-control','placeholder'=>$placeholderValue,'required'=>''));
                        });
                    }}

            {{ Form::regInput('email','email','Enter your email address','E-mail Address') }}
            {{ Form::regInput('password','password','Enter your password','Password') }}
            {{ Form::submit('Submit', array('class'=>'btn btn-primary')) }}
                    {{ Form::regInput('password','password','Enter your password','Password') }}
                 <br>   
                    {{ Form::submit('Submit', array('class'=>'btn btn-primary')) }}
                {{ Form::close() }}

            </div>
        </div>
    </div>
</div>
</div>
@stop