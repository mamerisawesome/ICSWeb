@extends('layouts.default')
@section('content')

    {{ HTML::style('css/library.css'); }}
    {{ HTML::script('script/library.js'); }}

	<div id="shelf">
		<div id="shelf-panel1">
			<div class="container">
				<div class="col-md-12" id="shelf-header">
					<h1>ICS LIBRARY</h1>
					<div id="advance-search-toggle">
						<p>advanced search</p>
						<span class="glyphicon glyphicon-chevron-down"></span></span>
					</div>

				</div>
			</div>
		</div>
		<div id="shelf-panel2">
			<div class="container">
				<div class="col-md-12" id="shelf-menu">
					<div class="col-md-12">
						<h3>What are you looking for?</h3>
						<p>Welcome to the ICS online library advance search options.
							You may add details on your search query to help you find what you are looking for.
							You may leave a detail blank.
						</p>
					</div>
					<div class="col-md-12">
					<div class="col-md-6">
						<table>
							<tr>
								<td class="search-option-left"><h5>Author</h5></td>
								<td><input class="search-text-input" type="text" name="author" placeholder="author"></td>
							</tr>
							<tr>
								<td class="search-option-left"><h5>Title</h5></td>
								<td><input class="search-text-input" type="text" name="title" placeholder="book title"></td>
							</tr>
							<tr>
								<td class="search-option-left"><h5>Year of Publication</h5></td>
								<td><input class="search-text-input" type="number"  min="1990" max="2015" placeholder="year"></td>
							</tr>
							<tr>
								<td class="search-option-left"><h5>Type</h5></td>
								<td rowspan="2"><input type="radio" name="type" value="SP">&nbsp;SP<br>
											<input type="radio" name="type" value="Thesis">&nbsp;Thesis
								</td>
							</tr>
						</table>
					</div>
					<div class="col-md-6">
						At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
						praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias
						excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui
						officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem
						rerum facilis est et expedita distinctio.
					</div>
					</div>
					<div class="col-md-12">
						<button class="btn btn-default" name="submit-search-form" id="search-SPT">Search</button>
						<button class="btn btn-default" name="submit-clear-form" id="search-SPT">Clear</button>
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
		</div>


	<!-- whole body (content) wrapped by a single div -->

	</div>
	<div class="container body-wrapper" id="SPT-preview">
		<img src={{URL::to('/res/images/temp.jpg')}}>
		<div id="library-switch"><p>LIBRARY</p></div>
	</div>

@stop