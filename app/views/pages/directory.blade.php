@extends('layouts.default')
@section('content')

    {{ HTML::style('css/directory.css'); }}
    {{ HTML::script('script/directory.js'); }}

	<!-- whole body (content) wrapped by a single div -->
	<div>
		<div id="directory-image-header">
			<img src="{{URL::to('res/images/faculty-directory-header-2.jpg')}}">
		</div>

		<div id="directory-body" class="wrapping-panel">
		
			<div class="container">
				<div class="col-md-12">
					<h1>MEET THE GEEKS</h1>
					<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>				
					<br>
					<div class="col-md-12" id="faculty-container">
					</div>
				</div>
			</div>

		</div>

	</div>
@stop