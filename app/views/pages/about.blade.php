@extends('layouts.default')
@section('content')

    {{ HTML::style('css/about.css'); }}
    {{ HTML::script('script/about.js'); }}

    <title>About Us</title>

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

        <div class="wrapping-panle" id="about-panel4">
            <div id="timeline-content">
                <div id="tic">
                    <div id="tic-icon"></div>
                </div>
                <div id="tl-train">
                    <img src="{{URL::to('res/timeline/train.png')}}">
                </div>

                <div class="date-entry col-md-12" id="tl-entry-1">
                    <div class="time-text">The first time Computer Science was
                        recognized as a discipline in UPLB when the Institute of
                        Mathematical Sciences and Physics (IMSP) was established with
                        the Division of Computer Science as on of its divisions.
                        Dr. Ann Inez N. Gironella was the first director of IMSP and Prof.
                        Wilfredo Cabezon was the first Division Head of the
                        Division of Computer Science. IMSP was established when
                        Dr. Emil Q. Javier was the Chancellor of UPLB. Together with the esablishment of the Division of Computer Science was the institution of the BS Computer Science (BSCS) curriculum in UPLB. Hence, the BS Computer Science Progrm was officially instituted in 1982.
                    </div>
                    <div class="tl-photo-wrapper"><img class="tl-photo" src="{{URL::to('res/timeline/IMSP-logo.jpg')}}"></div>
                </div>

                <div class="date-entry col-md-12" id="tl-entry-2">
                    <div class="time-text">During the initial implementation of the BSCS program,
                    three professors and instructors in Statistics handled the computer science courses.
                    There three are: Dr. Manuel M. Manuel, Prof. Wilfredo E. Cabezon, and
                    Dr. Eliezer A. Albacea (Instructor then). With the help of the Australian
                    government through the International Development Program (IDP) of Australian
                    Univerities and Colleges, the staff of the Division grew in number from initially
                    three to about ten with graduate degrees in Computer Sience.
                    The first students in the program were admitted.
                    </div>
                    <div class="tl-photo-wrapper"><img class="tl-photo" src="{{URL::to('res/faces/faculty/albacea.jpg')}}"></div>
                </div>

                <div class="date-entry col-md-12" id="tl-entry-3">
                    <div class="time-text">
                    The Division instituted the Master of Science in Computer Science. This became very popular among the teaching staff of the Division. 
                    </div>
                    <div class="tl-photo-wrapper"><img class="tl-photo" src="{{URL::to('res/faces/faculty/albacea.jpg')}}"></div>
                </div>

                <div class="date-entry col-md-12" id="tl-entry-4">
                    <div class="time-text">
                    In January 26, 1995, the UP Board of Regents separated the Division of Computer Science from IMSP and merged this with the existing Los Banos Computer Center to form the Institute of Computer Science (ICS). This happened when Dr. Eliezer A. Albacea was the head of the Division, Dr. Ruben Villareal was the Chancellor of UPLB and Dr. Emil Q. Javier was the President of UP. Dr Eliezer A. Albacea became the first Director of ICS.                    </div>
                    <div class="tl-photo-wrapper"><img class="tl-photo" src="{{URL::to('res/images/ics_logo.jpg')}}"></div>
                </div>

                <div class="date-entry col-md-12" id="tl-entry-5">
                    <div class="time-text">
                        The Institute was designated by Board of Regents as a pilot institute to implement the concept of a System Academi Program. Dr. Eliezer A. Albacea was designated System Director for the UP System Computer Science Program. ICS is instrumental in the institution of BSCS programs in UP Manila, UP in the Visayas (Cebu, Tacloban, and Iloilo), UP College Baguio, and UP Mindanao.
                        ICS instituted the Diploma in Computer Science both in residential and distance education modes.
                    </div>
                    <div class="tl-photo-wrapper"><img class="tl-photo" src="{{URL::to('res/images/ics_logo.jpg')}}"></div>
                </div>

                <div class="date-entry col-md-12" id="tl-entry-6">
                    <div class="time-text">
                        Ph.D. in Computer Science was instituted.
                    </div>
                    <div class="tl-photo-wrapper"><img class="tl-photo" src="{{URL::to('res/images/ics_logo.jpg')}}"></div>
                </div>

                <div class="date-entry col-md-12" id="tl-entry-7">
                    <div class="time-text">
                        Master in Information Technology was instituted.
                    </div>
                    <div class="tl-photo-wrapper"><img class="tl-photo" src="{{URL::to('res/images/ics_logo.jpg')}}"></div>
                </div>

                <div class="date-entry col-md-12" id="tl-entry-8">
                    <div class="time-text">
                        ICS was designated as National Center of Excellence (COE) in Information Technology by CHED.
                    </div>
                    <div class="tl-photo-wrapper"><img class="tl-photo" src="{{URL::to('res/images/ics_logo.jpg')}}"></div>
                </div>

            </div>
        </div>

    </div>

@stop