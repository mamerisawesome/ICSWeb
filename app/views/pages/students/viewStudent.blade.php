@extends('layouts.default')

@section('content')
    <h2>Your information</h2>
    <li>Name: {{ $student->lastName, ", ", $student->firstName, " ", $student->middleName }}</li>
    <li>Student Number: {{ $student->studentNumber }}</li>
    <li>Birthdate: {{ $student->birthdate }}</li>
    <li>Sex: {{ $student->sex }}</li>
    <li>Username: {{ $student->username }}</li>
    <li>E-mail: {{ $student->email }}</li>
    <br>
    <p><a href="/pages/students">Back to students master list</a></p>
@stop