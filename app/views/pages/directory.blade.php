@extends('layouts.default')
@section('content')

    {{ HTML::style('css/directory.css'); }}
    {{ HTML::script('script/directory.js'); }}

	<!-- whole body (content) wrapped by a single div -->
	<title>Faculty</title>
	
	<div>
		<div id="directory-image-header">
			<img src="{{URL::to('res/images/faculty-directory-header-2.jpg')}}">
		</div>

		<div id="directory-body" class="wrapping-panel">
		
			<div class="container">
				<div class="col-md-12">
					<h1>MEET THE GEEKS</h1>
					<p>These are the members of the ICS Faculty. You may view their pictures, names, position, and room assignment here. To be able to view their consultation hours and other information, please sign up or log in to our portal.</p>				
					<br>
					<div class="col-md-12" id="faculty-container">
					</div>
				</div>
			</div>

		</div>

	</div>
@stop