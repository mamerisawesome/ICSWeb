@extends('layouts.default')
@section('content')
	@foreach($result as $book)
		@if($book->year == $year)
		<h1>{{ $book->title }}</h2>
		<p>by {{ $book->author }}</p>
		<p><img src="{{$book->url}}"/></p>
		@endif
	@endforeach
@stop