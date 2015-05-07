@extends('layouts.default')
@section('content')

    <div class="container">
        <h1>Create new group</h1>
        {{ Form::open(array('route'=>'pages.group.index', 'name'=>'reg-form', 'id'=>'reg-form'))}}

            {{Form::macro('regInput', function($inputType, $idName, $placeholderValue, $labelValue)
                {
                    echo Form::label($idName, $labelValue);
                    echo Form::input($inputType, $idName, '' , array('id'=>$idName,'class'=>'form-control','placeholder'=>$placeholderValue));
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

            {{ Form::regInput('text','accessCode','','Access Code') }}
            <em>{{ $errors->first('accessCode') }}</em>
            <br>

            {{ Form::submit('Submit', array('class'=>'btn btn-primary')) }}
        {{ Form::close() }}

    </div>
@stop