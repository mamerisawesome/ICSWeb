@extends('layouts.default')
@section('content')

    {{ HTML::style('css/directory.css'); }}
    {{ HTML::script('script/directory.js'); }}

	<!-- whole body (content) wrapped by a single div -->
	<div>
		<div id="directory-image-header">
			<img src="{{URL::to('res/images/faculty-directory-header.jpg')}}">
		</div>

		<div id="directory-body" class="wrapping-panel">
<!--			<div>
						<div class="row" id="slide-view">
			<ul id="scroll-content">
				<?php for($i = 0; $i < 10; $i += 1){ ?>
					<li>
					<div class="person">
						<img src="{{URL::to('res/images/blue_contacts.png')}}" class="people-image">
						<div class="people-text">
							<h4>SURNAME, FIRST NAME, MI.</h4>
							<p>DESIGNATION</p>
							<p>Room Assignment</p>
						</div>
					</div>
					</li>
				<?php } ?>
			</ul>
		</div>

			</div>
-->		
		
			<div class="container">
				<div class="col-md-12">
					<h1>MEET THE GEEKS</h1>
					<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>				
					<hr>
					<div class="col-md-12">
						<?php

						for($i = 0; $i<38; $i += 1){ ?>
							<div class="person col-md-3">
								<div class="col-md-12 person-content">
								<img src="{{URL::to('res/faces/faculty/bulalacao.jpg')}}" class="people-image">
								<div class="people-text">
									<h5>SURNAME, FIRST NAME, MI.</h5>
									Position<br>Room Assignment
								</div>
								</div>
							</div>
						<?php } ?>
						
					</div>
				</div>
			</div>



		</div>
	

	</div>
@stop