@extends('layouts.default')
@section('content')
<title>ICS UPLB - Sign Up as Faculty</title>
    <div class="wrapping-panel" id="reg-form-panel">
        <div class="container">
            <div class="col-md-12">
            <div class="col-md-8" id="registration-form-panel">
                <div class="col-md-12" id="reg-form-title">
                <h2>ICS Faculty Register Form</h2>
                </div>
                <div class="col-md-12" id="reg-form-body">
                {{ Form::open(array('route'=>'pages.user.store', 'name'=>'reg-form', 'id'=>'reg-form'))}}

                    {{ Form::macro('regInput', function($inputType, $idName, $placeholderValue, $labelValue)
                        {
                            echo Form::label($idName, $labelValue);
                            echo Form::input($inputType, $idName, '' , array('autocomplete'=>'off','id'=>$idName,'class'=>'form-control','placeholder'=>$placeholderValue, 'required'=>''));
                            echo '<br>';
                        });
                    }}

                    {{ Form::regInput('text','firstName','Enter your first name here','First Name') }}
                    {{ Form::regInput('text','middleName','Enter your middle name here','Middle Name') }}
                    {{ Form::regInput('text','lastName','Enter your last name here','Last Name') }}
                    {{ Form::regInput('date','birthdate', 'YYYY-MM-DD', 'Birthdate') }}

                    {{ Form::label('sex',"Sex")}}
                    <br>
                    {{ Form::radio('sex', 'male') }} Male
                    <br>
                    {{ Form::radio('sex', 'female') }} Female
                    <br><br>

                    {{ Form::regInput('email','email','Enter a valid email address','E-mail Address') }}
                    {{ Form::regInput('text','username','Enter your username','Username') }}
                    {{ Form::regInput('password','password','Make this password secure','Password') }}
                    {{ Form::regInput('password','retypePassword','Retype your password','Retype Password') }}
                    <div id="error-message"></div>
                    {{ Form::regInput('text','employeeNumber','XXXXXXXXXX','Employee Number') }}
                    <div id="error-en"></div>
                    {{ Form::regInput('text','room','(i.e. C-100)','Room') }}
                    <div id="error-room"></div>
                    {{ Form::regInput('text','academicPosition','(i.e. Instructor 1)','Academic Position') }}

                    {{ Form::hidden('studentNumber', NULL, array('id'=>'studentNumber')) }}
                    {{ Form::hidden('type', 'faculty', array('id'=>'type')) }}

                    <div id="valid" class="btn btn-primary">Submit</div>
                </div>

            </div>
            <div class="col-md-4" id="welcome-text-panel">
            <h2 id="welcome-text">WELCOME to ICS Portal!</h2>
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

    <div id="dimmer" class="col-md-12"></div>

    <div id="pop-up">
        <div class="col-md-12">
            <span class="glyphicon glyphicon-ok"></span>
            <div>THANK YOU FOR REGISTERING</div>
                {{ Form::submit('Close', array('id'=>'close-pop','class'=>'btn btn-default')) }}
        </div>
    </div>

                {{ Form::close() }}

@stop