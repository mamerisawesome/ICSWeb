@extends('layouts.default')
@section('content')

    {{ HTML::style('css/book-result.css'); }}
    {{ HTML::script('script/book-result.js'); }}
    <title>Search results</title>
    <div id="result-wrapper" class="wrapping-panel">

    	<div id="result-container" class="container">
	    	<div class="col-md-12">		
			@foreach($result as $book)
				<div class="col-md-4">
					<div class="col-md-12">
					<div class="result-img-container"><img class="book-result-thumb" src="{{$book->url}}"/></div>
					<h1>{{ $book->title }}</h1>
					<p>by {{ $book->author }}</p>
					</div>
				</div>
			@endforeach
    		</div>
		</div>

		<div class="container" id="SPT-preview">
			<div id="preview-wrapper" class="col-md-12">
				
			</div>
			<div id="search-result-back"><p>BACK</p></div>
			<div id="library-switch"><p>LIBRARY</p></div>
		</div>

	</div>
@stop