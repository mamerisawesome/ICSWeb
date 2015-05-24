@extends('layouts.default')
@section('content')

	{{ Form::open(array('files' => true)) }}
	{{ Form::label('logo', 'Name') }}
	{{ Form::file('logo') }}
	{{ Form::submit('Save Changes') }}

@stop