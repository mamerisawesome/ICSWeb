@extends('layouts.default')

@section('content')
	<h2>All students</h2>
    <ol>
    @foreach($students as $s)
           <li>{{ $s->lastName, ", ", $s->firstName, " ", $s->studentNumber }}</li>
           {{ link_to("/pages/students/{$s->username}", 'view more') }}
    @endforeach
    </ol>
    <p><a href="/pages/students/create">Add new student</a></p>
@stop