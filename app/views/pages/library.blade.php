
@extends('layouts.default')
@section('content')
 
    {{ HTML::style('css/library.css'); }}
    {{ HTML::script('script/library.js'); }}

    <title>Library</title>

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
						<br><br>
					</div>
					<div class="col-md-5" id="shelf-search-panel">
						{{ Form::open(array('route'=>'pages.library.search', 'name'=>'spt-form', 'id'=>'spt-form'))}}
						<h3>What are you looking for?</h3>
						<div class="form-group">
								Author
								<input class="form-control" type="text" name="spt-author" id="spt-author" placeholder="Last Name only">
								<p id="spt-author-note" class="spt-search-note"></p>
							</div>

							<div class="form-group">
								Title
								<input class="form-control" type="text" name="spt-title" id="spt-title" placeholder="ICS SP or Thesis Title">
								<p id="spt-title-note" class="spt-search-note"></p>
							</div>
							<div class="form-group">
								Date
								<input class="form-control" type="number" min="2008" max="2014" name="spt-year" id="spt-year">
								<p id="spt-year-note" class="spt-search-note"></p>
							</div>
							<div class="col-md-12">
								<div id="search">
									<button name="submit-search-form" id="search-SPT">									
 										<span class="fa fa-search"></span>
									</button>
								</div>							
							</div>
						{{ Form::close() }}	
					</div>
				</div>
			</div>

		</div>
	</div>
	
	<div id="shelf-body" class="wrapping-panel">
		<div class="container">
			<div class="col-md-12" id="shelf-body-wrapper">
				<div id="shelf-body-title-container">
					<h2>UNDERGRADUATE SPECIAL PROJECT AND THESIS</h2>
					<h4>AY 2014-2015</h4>
				</div>

				<div><img id="shelf-image" src="{{URL::to('res/images/shelf.png')}}"></div>
				<div class="col-md-12" id="book-list">
					<table id="book-list-table">
						<?php 							
							for($l=0; $l<14; $l++) { 
						?>
							<tr>
								<?php								
									for($m=($l*5)+1; $m<=($l+1)*5; $m++) {
								?>
									<td>
										<?php								       
									        $libro = DB::table('library')->where('id', $m)->first();
									    ?>
										<div class="book" id="sp-thesis">
											<img src="{{URL::to($libro->url)}}">
											<br>
											<!-- Method for DISPLAYING $libro 's title and author field-->
											<!--{{ $libro->title, ' by ', $libro->author }}-->
										</div>
									</td>
								<?php 
									}								
								 ?>
							</tr>
						<?php } ?>						
					</table>
				</div>
			</div>
		</div>
	</div>

	<div id="shelf-search-results" class="wrapping-panel">
		<div class="container">
			<div class="col-md-12" id="search-result">
				<div class="container">
					<h4>SEARCH RESULTS</h4>
					<div id="search-queries">
						<p id="search-query-author">Author:</p>
						<p id="search-query-title">Title:</p>
						<p id="search-query-year">Year Published:</p>
					</div>
					<hr>
					<div id="results-field">
						<p>NO RESULTS FOUND</p>
					</div>
					<div id="back-to-shelf"><p>BACK</p></div>
				</div>
			</div>						
		</div>
	</div>



	<!-- whole body (content) wrapped by a single div -->

		<div class="container" id="SPT-preview">
			<div id="preview-wrapper" class="col-md-12">
				
			</div>
			<div id="library-switch"><p>LIBRARY</p></div>
		</div>

	</div>

@stop