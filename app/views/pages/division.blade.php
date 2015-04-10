@extends('layouts.default')
@section('content')
	<!-- whole body (content) wrapped by a single div -->

	<div class="container">

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
						<img src="{{URL::to('res/images/temp.jpg')}}">
						<div class="carousel-caption">
							<h3>Chania</h3>
						    <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
						</div>
					</div>
					<div class="item">
						<img src="{{URL::to('res/images/temp.jpg')}}">
						<div class="carousel-caption">
							<h3>Chania</h3>
						    <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
						</div>
					</div>
					<div class="item">
						<img src="{{URL::to('res/images/temp.jpg')}}">
						<div class="carousel-caption">
							<h3>Chania</h3>
						    <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
						</div>
					</div>
					<div class="item">
						<img src="{{URL::to('res/images/temp.jpg')}}">
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

	<div class="container">

	<div class="body-wrapper">
		<div class="container" id="publication-content-wrapper">
			<h2 class="segment-title">ICS DIVISIONS</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			<div class="publication-entry" id="publication1">
				<div class="pub-title-bar"><h3>Division</h3></div>
				<div class="pub-text"><p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p></div>
			</div>
			<div class="publication-entry" id="publication2">
				<div class="pub-title-bar"><h3>Division</h3></div>
				<div class="pub-text"><p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p></div>
			</div>
			<div class="publication-entry" id="publication3">
				<div class="pub-title-bar"><h3>Division</h3></div>
				<div class="pub-text"><p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p></div>
			</div>
			<div class="publication-entry" id="publication4">
				<div class="pub-title-bar"><h3>Division</h3></div>
				<div class="pub-text"><p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p></div>
			</div>
			<div class="publication-entry" id="publication5">
				<div class="pub-title-bar"><h3>Division</h3></div>
				<div class="pub-text"><p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p></div>
			</div>
		</div>
	</div>
	</div>
@stop