<html>
<head>
@include('includes.head')
</head>

<body>

<!-- header / navigation bar -->
<header class="row">
    @include('includes.header')
</header>


<!-- whole body (content) wrapped by a single div -->

<div class="body-wrapper container">
<div id="carousel-wrapper">

	<div class="col-md-12" id="image-slider-wrapper">
		<div id="image-slider" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#image-slider" data-slide-to="0" class="active"></li>
			    <li data-target="#image-slider" data-slide-to="1"></li>
			    <li data-target="#image-slider" data-slide-to="2"></li>
			    <li data-target="#image-slider" data-slide-to="3"></li>
			</ol>

			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<img src="res/images/temp.jpg">
					<div class="carousel-caption">
						<h3>Chania</h3>
					    <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
					</div>
				</div>
				<div class="item">
					<img src="res/images/temp.jpg">
					<div class="carousel-caption">
						<h3>Chania</h3>
					    <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
					</div>
				</div>
				<div class="item">
					<img src="res/images/temp.jpg">
					<div class="carousel-caption">
						<h3>Chania</h3>
					    <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
					</div>
				</div>
				<div class="item">
					<img src="res/images/temp.jpg">
					<div class="carousel-caption">
						<h3>Chania</h3>
					    <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
					</div>
				</div>
			</div>

			<a class="left carousel-control" href="#image-slider" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#image-slider" role="button" data-slide="next">
			    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			</a>
		</div>

	</div>

</div>
</div>


<div class="body-wrapper container">
	<div id="event-preview-wrapper">
		<h2 class="segment-title">{ CREATIVE EVENTS }</h2>
		<div class="col-md-4" id="event1">
			<div class="event-wrapper">
				<div>
				<img src="{{ URL::to('res/images/android.png'); }}" alt="about ICS">
				</div>
				<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
			</div>
		</div>
		<div class="col-md-4" id="event2">
			<div class="event-wrapper">
				<div>
				<img src="{{ URL::to('res/images/android.png'); }}" alt="ICS history">
				</div>
				<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
			</div>			
		</div>
		<div class="col-md-4" id="event3">
			<div class="event-wrapper">
				<div>
				<img src="{{ URL::to('res/images/android.png'); }}" alt="ICS Mission & Vision">
				</div>
				<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
			</div>			
		</div>
	</div>

	<div class="container" id="publication-content-wrapper">
		<h2 class="segment-title">{ PUBLICATION FEED }</h2>
		<div class="publication-entry" id="publication1">
			<div class="pub-title-bar"><h3>Title</h3></div>
			<div class="pub-text"><p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"</p></div>
		</div>
		<div class="publication-entry" id="publication2">
			<div class="pub-title-bar"><h3>Title</h3></div>
			<div class="pub-text"><p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"</p></div>
		</div>
		<div class="publication-entry" id="publication3">
			<div class="pub-title-bar"><h3>Title</h3></div>
			<div class="pub-text"><p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"</p></div>
		</div>
	</div>

</div>

<!-- footer -->
<div class="footer">
    @include('includes.footer')
</div>

</body>

</html>