@extends('layouts.default')
@section('content')
    <div class="wrapping-panel" id="reg-form-panel">
        <div class="container">
            <div class="col-md-12">
            <div class="col-md-8" id="registration-form-panel">
                <div class="col-md-12" id="reg-form-title">
                <h2>ICS Student Register Form</h2>
                </div>
                <div class="col-md-12" id="reg-form-body">
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
            <div class="col-md-4" id="welcome-text-panel">
            <h2>WELCOME to ICS Portal!</h2>
            <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit,
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi<br><br>
            ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
            oluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
            occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
            anim id est laborum."</p>
            <span>
                <hr>
                <span class="fa fa-quote-left"></span>
                <p id="quote-text">Everyone in this country should know how to program, because it teaches you how to think.</p>
                <span class="fa fa-quote-right"></span>
                <p id="quote-author">- Steve Jobs<p>
                <hr>
            </span>
            </div>
            </div>
        </div>
    </div>

@stop