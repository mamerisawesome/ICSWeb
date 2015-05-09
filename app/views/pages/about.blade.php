@extends('layouts.default')
@section('content')

    {{ HTML::style('css/about.css'); }}
    {{ HTML::script('script/about.js'); }}

    <div>
    	<div class="" id="about-panel1">
    		<div class="wrapping-panel" id="about-panel1-content">
	    		<div class="container">
	    			<div class="col-md-12">
	    				<h1>The UPLB Institute of Computer Science</h1>
	    				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
	    				Integer vitae elementum nibh, vitae malesuada nulla. Donec id urna nunc. Aenean volutpat,
	    				ex eu congue lacinia, erat nulla scelerisque nisi, molestie vestibulum tortor metus quis lacus.
	    				Nam diam ipsum, accumsan eget iaculis a, fringilla quis ipsum. Vivamus odio orci, dictum nec
	    				condimentum sed, vehicula eu dolor. Curabitur condimentum ante sapien, a finibus tortor interdum eget.
	    				Sed ultrices sollicitudin vestibulum. Cras non felis eget tellus luctus efficitur. Nulla ac justo eget
	    				nibh lobortis vulputate et sit amet orci. In scelerisque sit amet sapien venenatis ornare.
	    				Pellentesque magna nibh, porttitor quis est at, rutrum euismod metus.</p>
	    				<hr>
	    				<h3>Contact Information</h3>
	    			</div>
	    		</div>
    		</div>
    	</div>

    	<div class="wrapping-panel" id="about-panel2">
    		<div class="container">
    			<div class="col-md-12">
    				<div class="col-md-8" id="director-quote">
		                <hr>
		                <h3 id="director-quote-text">
			            <span class="fa fa-quote-left"></span>
							Sed massa ex, accumsan sed convallis vitae, placerat ut risus.
							Vestibulum sed molestie lorem. Nunc et ex malesuada, auctor arcu sed, rutrum ligula.
							Nam in sodales leo. Duis dui tortor, convallis sit amet vulputate sed, pulvinar vel quam.
						<span class="fa fa-quote-right"></span>
						</h3>
		                <hr>
					</div>
    				<div class="col-md-4" id="director-bio-panel">
    					<img id="ics-director-image" src="{{URL::to('res/faces/faculty/samaniego.jpg')}}">
    					<h4>Mr. Jaime M. Samaniego</h4>
    					<h6>ICS Director</h6>
    				</div>
    			</div>
    		</div>
    	</div>

    	<div class="wrapping-panel" id="about-panel3">
    		<div class="container">
    			<div class="col-md-12">
    				<div class="col-md-6" id="mission-wrapper">
    					<div class="col-md-12">
    						<h2>MISSION</h2>
    						<p>Mauris accumsan metus eget tortor imperdiet, fermentum consequat erat tempus. Maecenas sed ultricies arcu. Sed eu consectetur arcu. Donec dignissim dolor eu viverra sodales. Phasellus iaculis felis ac auctor tincidunt.</p>

    					</div>
    				</div>
    				<div class="col-md-6" id="vision-wrapper">
  						<div class="col-md-12">
    						<h2>VISION</h2>  							
    						<p>Quisque feugiat finibus leo. Sed et odio sagittis, accumsan purus sit amet, consequat dolor. In dapibus dui a nulla feugiat, at aliquet quam vulputate. Suspendisse pellentesque porta lobortis. </p>
  						</div>
    				</div>
    			</div>
    		</div>
    	</div>

    </div>

@stop