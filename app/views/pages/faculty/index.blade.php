@extends('layouts.default')

@section('content')
	<h2>All faculty</h2>
    <ol>
    @foreach($faculties as $s)
           <li>{{ $s->lastName, ", ", $s->firstName, " ", $s->room }}</li>
           <!--{{ link_to("/pages/faculty/{$s->username}", 'view more') }}-->
    @endforeach
    </ol>
    <p><a href="/pages/faculty/create">Add new faculty</a></p>
@stop