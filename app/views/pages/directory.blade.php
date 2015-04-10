@extends('layouts.default')
@section('content')
	<!-- whole body (content) wrapped by a single div -->
	<div class="container body-wrapper">

		<div class="row" id="command">
			<br>
			<h2 class="segment-title">{ ICS FACULTY and STAFF DIRECTORY }</h2>
			<div class="row" id="toggle-view-command">
				<div class="col-md-4">
					<p id="slide-view-label">SLIDE VIEW</p>
				</div>
				<div class="col-md-4">
					<div id="toggle-button">
						<div id="toggle"></div>
					</div>
				</div>
				<div class="col-md-4">
					<p id="grid-view-label">GRID VIEW</p>
				</div>
			</div>
			<br>
		</div>

		<div class="control" id="previous">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</div>
		<div class="control" id="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</div>
		
		<div class="row" id="slide-view">
			<ul id="scroll-content">
				<?php for($i = 0; $i < 100; $i += 1){ ?>
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

		<div class="row" id="grid-view">
		</div>

	</div>
@stop