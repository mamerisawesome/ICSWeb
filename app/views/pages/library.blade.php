@extends('layouts.default')
@section('content')

	<div id="shelf">
		<div class="col-md-2" id="shelf-menu">
			<h3>{ ICS LIBRARY }</h3>
			<p>[ ADVANCE SEARCH ]</p>
			<br>
			<p>Author</p>
			<input type="text" name="author"><br><br>
			<p>Title</p>
			<input type="text" name="title"><br><br>
			<p>Year</p>
			<input type="number"  min="1990" max="2015"><br><br><br><br>
			<button class="btn btn-default" name="submit-search-form" id="search-SPT">Search</button>

		</div>
		<div class="col-md-10" id="shelf-wrapper">
			<div class="row" id="shelf-wrapper-content">
			<div id="date-container">
				<h3>SPECIAL PROJECT AND THESIS</h3>
				<h5>AY 2014-2015</h5>
			</div>
			
			<ul class="row book-list">
				<li><div class="col-md-1 book"><h5>SP</h5></div></li>
				<li><div class="col-md-1 book"><h5>SP</h5></div></li>
				<li><div class="col-md-1 book"><h5>SP</h5></div></li>
				<li><div class="col-md-1 book"><h5>SP</h5></div></li>
				<li><div class="col-md-1 book"><h5>SP</h5></div></li>
				<li><div class="col-md-1 book"><h5>SP</h5></div></li>
				<li><div class="col-md-1 book"><h5>SP</h5></div></li>
				<li><div class="col-md-1 book"><h5>Thesis</h5></div></li>
				<li><div class="col-md-1 book"><h5>Thesis</h5></div></li>
				<li><div class="col-md-1 book"><h5>Thesis</h5></div></li>
				<li><div class="col-md-1 book"><h5>Thesis</h5></div></li>
				<li><div class="col-md-1 book"><h5>Thesis</h5></div></li>
			</ul>

			<div id="shelf-wood">
				<div id="plate-top"></div>
				<div id="plate-edge"></div>
			</div>

			<div id="book-title-wrapper"><h4 id="book-title">Title Goes here!</h4></div>
			</div>
			<div class="row" id="search-result">
				<div class="container">
				<h4>SEARCH RESULTS</h4>
				<hr>
				<div id="results-field">
					<p>NO RESULTS FOUND</p>
				</div>
				<div id="back-to-shelf"><p>BACK</p></div>
				</div>
			</div>
		</div>


	<!-- whole body (content) wrapped by a single div -->

	</div>
	<div class="container body-wrapper" id="SPT-preview">
		<img src={{URL::to('/res/images/temp.jpg')}}>
		<div id="library-switch"><p>LIBRARY</p></div>
	</div>

@stop