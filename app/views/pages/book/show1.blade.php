@extends('layouts.default')
@section('content')

    {{ HTML::style('css/book-result.css'); }}

    <div id="result-wrapper" class="wrapping-panel">
    	<div id="result-container" class="container">    
		@foreach($result as $book)
			@if($book->year == $year)
			<h1>{{ $book->title }}</h1>
			<p>by {{ $book->author }}</p>
			<p><img src="{{$book->url}}"/></p>
			@endif
		@endforeach
		</div>
	</div>
	
@stop