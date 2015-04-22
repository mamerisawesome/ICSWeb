@extends('layouts.default')

@section('content')
    <div>
        <div>
            <div>
                <h2>ICS Student Register Form</h2>
                {{ Form::open(array('route'=>'pages.students.store', 'name'=>'reg-form', 'id'=>'reg-form'))}}
                
                    {{Form::macro('regInput', function($inputType, $idName, $placeholderValue, $labelValue)
                        {
                            echo Form::label($idName, $labelValue);
                            echo Form::input($inputType, $idName, '' , array('id'=>$idName,'class'=>'form-control','placeholder'=>$placeholderValue));
                        });
                    }}

                    {{ Form::regInput('text','firstName','Enter your first name here','First Name') }}
                    <em>{{ $errors->first('firstName') }}</em>
                    <br>
                    {{ Form::regInput('text','middleName','Enter your middle name here','Middle Name') }}
                    <em>{{ $errors->first('middleName') }}</em>
                    <br>
                    {{ Form::regInput('text','lastName','Enter your last name here','Last Name') }}
                    <em>{{ $errors->first('lastName') }}</em>
                    <br>
                    {{ Form::regInput('date','birthdate', 'YYYY-MM-DD', 'Birthdate') }}
                    <br>
                    {{ Form::label('sex',"Sex")}}
                    <em>{{ $errors->first('sex') }}</em>
                    <br>
                    {{ Form::radio('sex', 'male') }} Male
                    <br>
                    {{ Form::radio('sex', 'female') }} Female
                    <br>
                    {{ Form::regInput('email','email','Enter a valid email address','E-mail Address') }}
                    <em>{{ $errors->first('email') }}</em>
                    <br>
                    {{ Form::regInput('text','username','Enter your username','Username') }}
                    <em>{{ $errors->first('username') }}</em>
                    <br>
                    {{ Form::regInput('password','password','Make this password secure','Password') }}
                    <em>{{ $errors->first('password') }}</em>
                    <br>
                    {{ Form::regInput('password','retypePassword','Retype your password','Retype Password') }}
                    <em>{{ $errors->first('retypePassword') }}</em>
                    <br>
                    {{ Form::regInput('text','studentNumber','XXXX-XXXXX','Student Number') }}
                    <em>{{ $errors->first('studentNumber') }}</em>
                    <br>
                    {{ Form::regInput('text','accessCode','Access code given by faculty members','Access Code') }}
                    <em>{{ $errors->first('accessCode') }}</em>

                    <br>
                    {{ Form::submit('Submit', array('class'=>'btn btn-primary')) }}
                {{ Form::close() }}

            </div>
        </div>
    </div>

@stop