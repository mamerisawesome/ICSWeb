@extends('layouts.default')

@section('content')
    <div class="container">
            <div class="col-md-12" id="reg-form-title">
                <h2>User information</h2>
            </div>

            <div class="col-md-12" id="reg-form-body">
            <li>Name: {{ $user->lastName, ", ", $user->firstName, " ", $user->middleName }}</li>

            @if($user->type=='student')
                <li>Student Number: {{ $user->studentNumber }}</li>
            @else
                <li>Employee Number: {{ $user->employeeNumber }}</li>
                <li>Room: {{ $user->room }}</li>
                <li>Academic Position: {{ $user->academicPosition }}</li>
            @endif

            <li>Birthdate: {{ $user->birthdate }}</li>
            <li>Sex: {{ $user->sex }}</li>
            <li>Username: {{ $user->username }}</li>
            <li>E-mail: {{ $user->email }}</li>

            <br>

    <p><a href="/pages/user">Back to users master list</a></p>
    </div>
    </div>
@stop