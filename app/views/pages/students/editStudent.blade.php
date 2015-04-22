@extends('layouts.studentDefault')

@section('content')
    <div>
        <div>
            <div>
                <h2>Fill up the form below</h2>
                {{ Form::open(array('route'=>'students.update'))}}
                    {{Form::macro('regInput', function($inputType, $idName, $placeholderValue, $labelValue)
                        {
                            echo Form::label($idName, $labelValue);
                            echo Form::input($inputType, $idName, '' , array('id'=>$idName,'class'=>'form-control','placeholder'=>$placeholderValue));
                        });
                    }}

                    {{ Form::regInput('text','firstName', $student->firstName,'First Name') }}
                    <em>{{ $errors->first('firstName') }}</em>
                    <br>
                    {{ Form::regInput('text','middleName',$student->middleName,'Middle Name') }}
                    <em>{{ $errors->first('middleName') }}</em>
                    <br>
                    {{ Form::regInput('text','lastName',$student->lastName,'Last Name') }}
                    <em>{{ $errors->first('lastName') }}</em>
                    <br>
                    {{ Form::regInput('date','birthdate', $student->birthdate, 'Birthdate') }}
                    <br>
                    {{ Form::label('sex',"Sex")}}
                    <em>{{ $errors->first('sex') }}</em>
                    <br>
                    {{ Form::radio('sex', 'male') }} Male
                    <br>
                    {{ Form::radio('sex', 'female') }} Female
                    <br>
                    {{ Form::regInput('email','email',$student->email,'E-mail Address') }}
                    <em>{{ $errors->first('email') }}</em>
                    <br>
                    {{ Form::regInput('text','username', $student->username,'Username') }}
                    <em>{{ $errors->first('username') }}</em>
                    <br>
                    {{ Form::regInput('password','password','Make this password secure','Password') }}
                    <em>{{ $errors->first('password') }}</em>
                    <br>
                    {{ Form::regInput('password','retypePassword','Retype your password','Retype Password') }}
                    <em>{{ $errors->first('retypePassword') }}</em>
                    <br>
                    {{ Form::regInput('text','studentNumber',$student->studentNumber,'Student Number') }}
                    <em>{{ $errors->first('studentNumber') }}</em>
                    <br>
                    {{ Form::submit('Submit') }}
                {{ Form::close() }}

            </div>
        </div>
    </div>

@stop