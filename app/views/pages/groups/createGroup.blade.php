@extends('layouts.default')
@section('content')
    <title>Create group</title>
    <div class="wrapping-panel" id="login-form-wrapper">
        <div class="container">
            <div class="col-md-12">
                <div class="col-md-12" id="login-form-panel">
                    <div class="col-md-12" id="login-icon"><img src="{{URL::to('res/faces/faculty/dummy.png')}}"/></div>
                    <div class="col-md-12" id="login-form-title">
                        <h2>CREATE A GROUP</h2>
                    </div>
                    <div class="col-md-12" id="login-form-body">
                        {{ Form::open(array('route'=>'page.group.store', 'name'=>'reg-form', 'id'=>'reg-form'))}}

                            {{Form::macro('regInput', function($inputType, $idName, $placeholderValue, $labelValue)
                                {
                                    echo Form::label($idName, $labelValue);
                                    echo Form::input($inputType, $idName, '' , array('autocomplete'=>'off','id'=>$idName,'class'=>'form-control','placeholder'=>$placeholderValue,'required'=>''));
                                });
                            }}

                            {{ Form::regInput('text','courseTitle','','Course Title') }}
                            <em>{{ $errors->first('courseTitle') }}</em>
                            <br>

                            {{ Form::regInput('text','section','','Section') }}
                            <em>{{ $errors->first('section') }}</em>
                            <br>

                            {{ Form::regInput('number','classSize','','Class Size') }}
                            <em>{{ $errors->first('classSize') }}</em>
                            <br>

                            {{ Form::label('accessCode', 'Access Code'); }}
                            {{ Form::input('button', 'accessCodeGen', 'Generate' , array('id'=>'accessCodeGen','class'=>'form-control','required'=>'','maxlength'=>'10')); }}

                            <em>{{ $errors->first('accessCode') }}</em>
                            <br>
                            {{ Form::submit('Submit', array('class'=>'btn btn-primary','id'=>'login-submit')) }}
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="http://localhost:8000/script/encryption/sha1.js"></script>
    <script>
        $('body').off('click','#accessCodeGen');
        $('body').on('click','#accessCodeGen',function(){
            var html = '';
            var hash = new String(CryptoJS.SHA1($('#courseTitle').val() + $('#section').val()));
            hash = hash.substring(0,10);
            var output = hash;
            //alert($('#accessCode').val());
            if($('#accessCodeView').val() == undefined && $('#accessCode').val() == undefined){

            } else {
                $('#accessCode').remove();
                $('#accessCodeView').remove();
            }
            var html = ''+
                '<div id="accessCodeView" class="panel panel-default">'+
                    '<div class="panel-body">'+
                        output +
                    '</div>'+
                '</div>'+
                '<input id="accessCode" name="accessCode" type="hidden" value="'+output+'">'+
                '<input id="accessCodeGen" style="margin-top:15px;" class="form-control" required="" name="accessCodeGen" type="button" value="Generate">';
            $(this).replaceWith(html);
        });
//        $('#accessCode').on('focus',function(){
//            var hash = CryptoJS.SHA1($('#courseTitle').val() + $('#section').val());
//            var html = ''+
//                '<input id="accessCode" id="accessCode" class="form-control" required="" maxlength="10" name="accessCode" type="text" value="'+hash+'">';
//            $(this).replaceWith(html);
//            alert(hash);
//        });
    </script>
@stop