@extends('layouts.default')
@section('content')

    <div>
        <div class="container" id="reg-form-div">
                <h2>ICS Sign up</h2>
                {{ Form::open(array('route' => array('index'), 'name'=>'reg-form', 'id'=>'reg-form')) }}
                    {{Form::macro('regInput', function($inputType, $idName, $placeholderValue, $labelValue)
                        {
                            echo Form::label($idName, $labelValue);
                            echo Form::input($inputType, $idName, '' , array('id'=>$idName,'class'=>'form-control','placeholder'=>$placeholderValue,'required'=>''));
                        });
                    }}

                    {{ Form::regInput('text','firstName','Enter your first name here','First Name') }}
                    {{ Form::regInput('text','middleName','Enter your middle name here','Middle Name') }}
                    {{ Form::regInput('text','lastName','Enter your last name here','Last Name') }}

                    {{ Form::regInput('date','birthdate', null,'Birthdate') }}

                    {{ Form::label('sex',"Sex")}}
                    <br>
                    {{ Form::radio('sex', 'male' , array('class'=>'btn btn-default')) }} Male
                    <br>
                    {{ Form::radio('sex', 'female' , array('class'=>'form-control')) }} Female
                    <br>

                    {{ Form::regInput('email','email','Enter a valid email address','E-mail Address') }}

                    {{ Form::regInput('text','userName','Enter your username','Username') }}
                    {{ Form::regInput('password','password','Make this password secure','Password') }}
                    {{ Form::regInput('password','retypePassword','Retype your password','Retype Password') }}

                    {{ Form::regInput('text','studentNumber','XXXX-XXXXX','Student Number') }}
                    {{ Form::regInput('text','accessCode','Access code given by faculty members','Access Code') }}

                    <br>
                    {{ Form::submit('Submit', array('class'=>'btn btn-primary')) }}
                {{ Form::close() }}

        </div>
    </div>

@stop