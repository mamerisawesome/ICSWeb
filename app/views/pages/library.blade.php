@extends('layouts.default')
@section('content')
 
    {{ HTML::style('css/library.css'); }}
    {{ HTML::script('script/library.js'); }}

	<div id="shelf">
		<div id="shelf-overlay" class="container-fluid wrapping-panel">
			<div id="shelf-panel1" class="container">
				<div class="col-md-12" id="shelf-header">
					<h1>ICS LIBRARY</h1>
				</div>
				<div class="col-md-12" id="shelf-menu">
					<div class="col-md-7" id="shelf-info-panel">
						At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
						praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias
						excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui
						officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem
						rerum facilis est et expedita distinctio.
						<br><br>
						OFFICE HOURS:
						<br><br>
						At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
						praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias
						excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui
						officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem
						rerum facilis est et expedita distinctio.

					</div>
					<div class="col-md-5" id="shelf-search-panel">
						<h3>What are you looking for?</h3>
						Author<br>
						<input class="search-text-input" type="text" name="author" placeholder="author"><br>
						Title<br>
						<input class="search-text-input" type="text" name="title" placeholder="book title"><br>
						Year of Publication<br>
						<input class="search-text-input" type="number"  min="1990" max="2015" placeholder="year"><br>
						Type<br>
						<div class="col-md-12">
							<div class="col-md-6 type-button" id="thesis-button">UNDERGRADUATE<br>THESIS</div>
							<div class="col-md-6 type-button" id="sp-button">SPECIAL<br>PROBLEM</div>
						</div>
						<button class="btn btn-default" name="submit-search-form" id="search-SPT">Search</button>
						<button class="btn btn-default" name="submit-clear-form" id="search-SPT">Clear</button>
					</div>
				</div>
			</div>

		</div>
	</div>
	

		<div class="col-md-12" id="shelf-wrapper">
			<div id="shelf-wrapper-content">
			<div id="date-container">
				<h3>SPECIAL PROJECT AND THESIS</h3>
				<h5>AY 2014-2015</h5>
			</div>
			
			<ul class="book-list">
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
			<div class="" id="search-result">
				<div class="container">
				<h4>SEARCH RESULTS</h4>
				<hr>
				<div id="results-field">
					<p>NO RESULTS FOUND</p>
				</div>
				<div id="back-to-shelf"><p>BACK</p></div>
				</div>
			</div>


	<!-- whole body (content) wrapped by a single div -->

	</div>
	<div class="container body-wrapper" id="SPT-preview">
		<img src={{URL::to('/res/images/temp.jpg')}}>
		<div id="library-switch"><p>LIBRARY</p></div>
	</div>

@stop