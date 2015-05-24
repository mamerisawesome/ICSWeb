@extends('layouts.default')
@section('content')
    <div class="wrapping-panel" id="login-form-wrapper">
        <div class="container">
            <div class="col-md-12">
                <div class="col-md-12" id="login-form-panel">
                    <div class="col-md-12" id="login-icon"><img src="{{URL::to('res/faces/faculty/dummy.png')}}"/>
                    </div>
                    <div class="col-md-12" id="login-form-title">
                        <h2>SEND A MESSAGE TO</h2>
                        <h4>{{ $information['nameContainer'] }}</h4>
                    </div>
                    <div class="col-md-12" id="login-form-body">
                        {{ Form::open(array('route' => 'page.user.message.store', 'name'=>'message-form', 'id'=>'message-form')) }}
                            {{Form::macro('regInput', function($inputType, $idName, $placeholderValue, $labelValue)
                                {
                                    echo Form::label($idName, $labelValue);
                                    echo Form::input($inputType, $idName, '' , array('autocomplete'=>'off','id'=>$idName,'class'=>'form-control','placeholder'=>$placeholderValue,'required'=>''));
                                });
                            }}
                            <?php $senderName = $information['senderFirstname'] . ' ' . $information['senderLastname']; ?>
                            {{ Form::input('hidden','sentFrom', $senderName ,array('id'=>'userName')) }}
                            {{ Form::input('hidden','sendTo', $information['usernameContainer'] ,array('id'=>'userName')) }}

                            {{ Form::regInput('text','messageTitle','','Message Title') }}
                            <br>
                            {{ Form::label('messageContent', 'Message Content') }}
                            {{ Form::textarea('messageContent', '' , array('style'=>'resize:none;max-width:100%;max-height:130px','autocomplete'=>'off','id'=>'messageTitle','class'=>'form-control','required'=>'')) }}
                            <br>
                            {{ Form::submit('Send', array('class'=>'btn btn-primary', 'id'=>'login-submit')) }}

                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>


@stop