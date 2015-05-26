@extends('layouts.default')
@section('content')
    <title>Join group</title>
    <div class="wrapping-panel" id="login-form-wrapper">
        <div class="container">
            <div class="col-md-12">
                <div class="col-md-12" id="login-form-panel">
                    <div class="col-md-12" id="login-icon"><img src="{{URL::to('res/faces/faculty/dummy.png')}}"/>
                    </div>
                    <div class="col-md-12" id="login-form-title">
                        <h2>JOIN A GROUP</h2>
                    </div>
                    <div class="col-md-12" id="login-form-body">
                        {{ Form::open(array('route' => 'page.group.join.post', 'name'=>'reg-form', 'id'=>'reg-form')) }}
                            {{Form::macro('regInput', function($inputType, $idName, $placeholderValue, $labelValue)
                                {
                                    echo Form::label($idName, $labelValue);
                                    echo Form::input($inputType, $idName, '' , array('autocomplete'=>'off','id'=>$idName,'class'=>'form-control','placeholder'=>$placeholderValue,'required'=>''));
                                });
                            }}
                            {{ Form::input('hidden','userName',Session::get('username'),array('id'=>'userName')) }}
                            {{ Form::regInput('text','accessCode','Access Code','Enter the access code given by the professor / instructor') }}
                            <br>
                            {{ Form::submit('Join', array('class'=>'btn btn-primary', 'id'=>'login-submit')) }}

                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>


@stop