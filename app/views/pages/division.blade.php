@extends('layouts.default')
@section('content')

    {{ HTML::style('css/division.css'); }}
    {{ HTML::script('script/division.js'); }}

	<!-- whole body (content) wrapped by a single div -->


	<div id="div-and-faci">
		<div class="wrapping-panel" id="div-faci-header">
			<div class="container">
				<h1>Divisions and Facilities</h1>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. 	Integer vitae elementum nibh, vitae malesuada nulla. Donec id urna nunc. Aenean volutpat, ex eu congue lacinia, erat nulla scelerisque nisi, molestie vestibulum tortor metus quis lacus. Nam diam ipsum, accumsan eget iaculis a, fringilla quis ipsum. Vivamus odio orci, dictum nec condimentum sed, vehicula eu dolor.
				</p>
				<p>
					Integer vitae elementum nibh, vitae malesuada nulla. Donec id urna nunc. Aenean volutpat, ex eu congue lacinia, erat nulla scelerisque nisi, molestie vestibulum tortor metus quis lacus. Nam diam ipsum, accumsan eget iaculis a, fringilla quis ipsum. Vivamus odio orci, dictum nec condimentum sed, vehicula eu dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
				</p>
			</div>
		</div>
	</div>
 
    <div id="divisions-panel">
    <div class="container">
    	<div class="col-md-12" id="division-group-wrapper">
    		<div class="col-md-6 division-wrapper">
				<div class="div-title-bar">
					<h3>Computer Training and Extension Division</h3>
	    		</div>
	    		<div class="col-md-12 division">
					<p>The Computer Training and Extension Division (CTED) is responsible for conducting short courses and training programs whose main clients are employees of industries and government institutions who need upgrading of skills. It also coordinates seminars, workshops, and conferences on advanced topics in computer science.
					</p><p>CTED monitors and coordinates the extension activities of ICS faculty and staff. It also serves as a liaison between ICS and different units of the UPLB and other institutions and agencies in extension activities.</p>
				</div>
			</div>
    		<div class="col-md-6 division-wrapper">
		   		<div class="div-title-bar">
		   			<h3>Research and Development Division</h3>
		   		</div>
		    	<div class="col-md-12 division">
		    		<p>The RDD is responsible for the direction and implementation of the research programs of the institute. Under the Research and Development Division are research programs in Client/Server Computing, Distributed and Parallel Computing, Software Engineering, and Applied Computational Intelligence.
		    		</p><p>RDD is currently headed by Prof. Jaime M. Samaniego.
		    		</p><p>Some researches are listed in the ICS Research and Development section of this web page.</p>
		    	</div>
		    </div>
		    	
	    </div>
    	<div class="col-md-12" id="division-group-wrapper">
		    	<div class="col-md-4 division-wrapper">
	    			<div class="div-title-bar">
		    			<h3>Networking and Data Communications Division</h3>
		    		</div>
			    	<div class="division">
			    		<p>The Networking and Data Communications Division (NCD) is responsible for the design and maintenance of the campus (UPLB) network. It also provides networking services to the constituents of the University and is responsible for making the Internet connection of UPLB self-sustaining.
			    		</p>
			    		<p>NCD is currently headed by Prof. Jaderick P. Pabico.</p>
			    	</div>
		    	</div>
		    	<div class="col-md-4 division-wrapper">
	    			<div class="div-title-bar">
	    				<h3>Academic Programs Division</h3>
	    			</div>
		    		<div class="col-md-12 division">
						<p>The APD is responsible for the academic programs of the institute. Its main role is to continously improve the teaching of the courses and to develop textbooks for the different courses in the institute. It is responsible for the residential degree programs of the institute.</p>
						<p>APD is currently headed by Prof. Margarita Carmen S. Paterno</p>
					</div>
		    	</div>
		    	<div class="col-md-4 division-wrapper">
	    			<div class="div-title-bar">
	    				<h3>Los Ba&ntildeos Computer Center</h3>
	    			</div>
		    		<div class="col-md-12 division">
						<p>The Los Ba&ntildeos Computer Center (LBCC) provides computing services to the University. It embarks into software development and mainly is responsible for commercializing the results of the RDD. It also carries out software and hardware development projects identified by the institute to have a commercial value.
						</p><p>The LBCC is currently headed by Prof. Eliezer A. Albacea, Ph.D.</p>
					</div>
    			</div>
    	</div>
    	<div class="col-md-12 division-wrapper">
	    		<div class="div-title-bar">
	    			<h3>Regional Units and Outreach Division</h3>
	    		</div>
		    	<div class="col-md-12 division">
		    		<p>The Regional Units and Outreach Division (RUOD) assists, monitors, coordinates and supports other UP System units institute computer science courses and programs in their respective campuses. Priority is the institution of computer science courses as part of general computer literacy programs and then subsequently or circumstances warrant develop into formal degree programs. The RUOD shares ICS' courses and curricula and assists in the recruitment and training of computer science faculty of the regional units until they can stand on their own. This division is responsible for the direction and implementation of the degree programs of the Institute which are offered in distance education mode.</p>
		    	</div>
    	</div>
	    </div>
    </div>
	</div>

    <div class="container" id="facilities-panel">
    	<h1>Facilities</h1>
    	<p>Sed massa ex, accumsan sed convallis vitae, placerat ut risus. Vestibulum sed molestie lorem. Nunc et ex malesuada, auctor arcu sed, rutrum ligula. Nam in sodales leo. Duis dui tortor, convallis sit amet vulputate sed, pulvinar vel quam.</p><br />
    	<div class="col-md-12" id="facilities-gallery">
    		<div class="col-md-3"><img class="faci-img" src="{{URL::to('res/images/physci.jpg')}}"></div>
    		<div class="col-md-3"><img class="faci-img" src="{{URL::to('res/images/sample2.jpg')}}"></div>
    		<div class="col-md-3"><img class="faci-img" src="{{URL::to('res/images/sample.jpg')}}"></div>
    		<div class="col-md-3"><img class="faci-img" src="{{URL::to('res/images/sample2.jpg')}}"></div>
    	</div>
    	<div class="col-md-12" id="facilities-gallery">
    		<div class="col-md-3"><img class="faci-img" src="{{URL::to('res/images/sample.jpg')}}"></div>
    		<div class="col-md-3"><img class="faci-img" src="{{URL::to('res/images/sample2.jpg')}}"></div>
    		<div class="col-md-3"><img class="faci-img" src="{{URL::to('res/images/sample.jpg')}}"></div>
    		<div class="col-md-3"><img class="faci-img" src="{{URL::to('res/images/physci.jpg')}}"></div>
    	</div>
    	<div class="col-md-12" id="facilities-gallery">
    		<div class="col-md-3"><img class="faci-img" src="{{URL::to('res/images/physci.jpg')}}"></div>
    		<div class="col-md-3"><img class="faci-img" src="{{URL::to('res/images/sample2.jpg')}}"></div>
    		<div class="col-md-6">
    			<p id="facilities-quote">
    					"Vestibulum sed molestie lorem. Nunc et ex malesuada, auctor arcu sed, rutrum ligula. Nam in sodales leo. Duis dui tortor, convallis sit amet vulputate sed, pulvinar vel quam. Nam in sodales leo. "
    			</p>
    		</div>
    	</div>
    	<div class="col-md-12" id="facilities-gallery">
    		<div class="col-md-3"><img class="faci-img" src="{{URL::to('res/images/sample2.jpg')}}"></div>
    		<div class="col-md-3"><img class="faci-img" src="{{URL::to('res/images/sample.jpg')}}"></div>
    		<div class="col-md-3"><img class="faci-img" src="{{URL::to('res/images/physci.jpg')}}"></div>
    		<div class="col-md-3"><img class="faci-img" src="{{URL::to('res/images/sample.jpg')}}"></div>
    	</div>
   	</div>

@stop