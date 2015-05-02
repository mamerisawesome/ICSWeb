@extends('layouts.default')
@section('content')

    {{ HTML::style('css/publication.css'); }}


	<div class="wrapping-panel">
		<div class="container">
			<div class="col-md-12">
				<div class="col-md-3" id="news-left-panel">

					<div id="news-header" class="col-md-12">
						<h1>ICS NEWS</h1>
					</div>
					 
					<div id="news-search-panel" class="col-md-12">
						<div class="col-md-10" id="news-searchbar-wrapper">						
							<input type="text" id="news-searchbar" value="Search Other Documents">
						</div>
						<div class="col-md-2" id="news-search-icon-wrapper">							
							<a href="#"><span class="glyphicon glyphicon-search" id="news-search-icon"></span></a>
						</div>
					</div>
					
					
					<?php
						for($i=1; $i<6; $i++) { ?>
						<div class="links-panel col-md-12">
							<div class="col-md-2"><?php echo $i; ?></div>				
							<div class="col-md-10">	
								<a href="#">NEWS ARTICLE TITLE goes here</a>
							</div>
						</div>
					<?php } ?>
				</div>
			
			<div class="col-md-9" id="news-right-panel">
				<div class="col-md-12" id="news-article-wrapper">				
					<div id="title-panel">
						<h2 class="texts">ICS BEARS 500 GRADUATES, 2015</h2>
						<h5>by ics publication<h5>
						<hr>
					</div>
					<div id="body-panel">
						<p class="texts">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						<p class="texts">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						<p class="texts">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						<p class="texts">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						<p class="texts">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed in lacinia ex. Sed non ullamcorper leo. Sed lobortis turpis vel porta scelerisque. Maecenas porta vitae nisi vel varius. Duis vitae fermentum magna. Sed id quam urna. Morbi faucibus fringilla elit. In ut velit finibus, lobortis urna sed, bibendum urna. Vestibulum in metus efficitur tellus interdum convallis in in leo. Ut et neque sed libero rhoncus mattis nec non sem. Duis tincidunt tellus ornare facilisis malesuada. Proin placerat felis velit, a efficitur ex cursus ut. Cras iaculis nisi sed mi pretium lacinia. Maecenas risus enim, iaculis eget ultrices vel, eleifend non risus. Ut sed ornare magna. Aenean dolor ante, consectetur dictum vulputate vel, auctor ultricies nisi. Nunc interdum bibendum tellus, eget volutpat magna malesuada a. Proin a diam risus. Fusce luctus, lacus vel aliquet posuere, velit mauris tempus purus, ac tristique dui purus ut metus. Maecenas mi ex, fringilla vestibulum augue vitae, vehicula pharetra eros. Donec nec turpis vel risus euismod finibus. Praesent egestas faucibus posuere. Quisque lacinia leo suscipit augue bibendum, sed accumsan nisi tempus. Sed iaculis vulputate risus, et euismod lectus vehicula non. In ipsum velit, luctus vitae semper at, aliquam non urna. Duis sodales lobortis rhoncus. Nullam at suscipit libero. Suspendisse at felis non lorem dapibus mollis vel vitae sem. Morbi quis magna malesuada, facilisis purus ut, accumsan leo. Maecenas nec dignissim ante, nec ultricies urna. Vivamus eget rhoncus dui, a dapibus ligula. Phasellus ultrices tortor vel lacus eleifend, eget semper sem faucibus. Integer dictum id risus vitae fringilla.</p>
					</div>
				</div>
			</div>
			
		</div>
		
	</div>

@stop