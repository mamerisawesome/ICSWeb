@extends('layouts.default')
@section('content')

    {{ HTML::style('css/book-result.css'); }}
    {{ HTML::script('script/book-result.js'); }}

	<div id="not-found" class="wrapping-panel">
		<div class="container">
			<div class="col-md-12">
			<center>
				<div id="cute-pusheen"><img src="{{URL::to('res/images/pusheen.gif')}}"></div>
				
					<h1>Account not found.</h1>
				<button id="back-to-library" class="btn btn-primary"><a class="btn btn-primary" href="{{ URL::to('pages/directory') }}">Back to Faculties</a></button>
			</center>
			</div>			
		</div>
	</div>
@stop