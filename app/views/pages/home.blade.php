@extends('layouts.default')
@section('content')

    {{ HTML::style('css/home.css'); }}
    {{ HTML::script('script/home.js'); }}

    <div id="body-wrapper"> 
    
        <div class="container-fluid" id="carousel-wrapper">
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
                            <img src="{{URL::to('res/slider-images/slide-img1.jpg')}}">
                            <div class="carousel-caption">
                                <h3>Chania</h3>
                                <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
                            </div>
                        </div> 
                        <div class="item">
                            <img src="{{URL::to('res/slider-images/slide-img2.jpg')}}">
                            <div class="carousel-caption">
                                <h3>Chania</h3>
                                <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
                            </div>
                        </div>
                        <div class="item">
                            <img src="{{URL::to('res/slider-images/slide-img3.jpg')}}">
                            <div class="carousel-caption">
                                <h3>Chania</h3>
                                <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
                            </div>
                        </div>
                        <div class="item">
                            <img src="{{URL::to('res/slider-images/slide-img4.jpg')}}">
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


        <div id="welcome-panel" class="wrapping-panel">
            <div class="container">
                <div class="col-md-12" id="welcome-wrapper">
                        <h1 class="segment-title">LEARN FROM THE EXPERTS</h1>
                        <p>ICS UPLB, CHED's National Center of Excellence in Information Technology Education</p>
                        The Institute of Computer Science (ICS) is an autonomous institute of the College of Arts and Sciences (CAS) of the University of the Philippines Los Ba&ntilde;os (UPLB). ICS is Commission on Higher Education's (CHED) Center of Excellence in Information Technology Education. ICS has strong undergraduate and graduate (Diploma, MIT, MS and PhD) degree programs in computer science and information technology with more than 30 faculty members, and about 600 students. ICS is committed to excellence in teaching, research, and extension. ICS is home to the first and only Academician in Computer Science.          
                </div>
                <div class="col-md-12">
                        <hr>
                        <h3 class="segment-title">Degree Programs we offer</h3>
                    <div class="col-md-12" id="degree-programs">
                        <div class="col-md-2"><img id="degree-program-icon" src="{{URL::to('res/icons/graduate.jpg')}}"></div>
                        <div class="col-md-5 degree-program-wrapper">Master of Science in Computer Science</div>
                        <div class="col-md-5 degree-program-wrapper">Bachelor of Science in Computer Science</div>
                        <div class="col-md-5 degree-program-wrapper">Doctor of Science in Computer Science</div>
                        <div class="col-md-5 degree-program-wrapper">Master of Science in Information Technology</div>
                        <div class="col-md-5 degree-program-wrapper">Diploma in Computer Science</div>
                    </div>
                </div>
            </div>
        </div>

        <div id="event-panel" class="wrapping-panel">
            <div class="container">
                
                <div class="col-md-12" id="event-wrapper">
                    <h1 class="segment-title">ACADEMIC & ACTIVITY CALENDAR</h1> 

                    <div class="col-md-12 event-group">
                        <div class="col-md-4 event-entry">
                            <div class="col-md-3 event-date-stamp"><h4>12</h4><p>APRIL 2015</p><p>7PM ICSMH</p></div>
                            <div class="col-md-9 event-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                        </div>
                        <div class="col-md-4 event-entry">
                            <div class="col-md-3 event-date-stamp"><h4>12</h4><p>APRIL 2015</p><p>7PM ICSMH</p></div>
                            <div class="col-md-9 event-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                        </div>
                        <div class="col-md-4 event-entry">
                            <div class="col-md-3 event-date-stamp"><h4>12</h4><p>APRIL 2015</p><p>7PM ICSMH</p></div>
                            <div class="col-md-9 event-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                        </div>
                        <div class="col-md-4 event-entry">
                            <div class="col-md-3 event-date-stamp"><h4>12</h4><p>APRIL 2015</p><p>7PM ICSMH</p></div>
                            <div class="col-md-9 event-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                        </div>
                        <div class="col-md-4 event-entry">
                            <div class="col-md-3 event-date-stamp"><h4>12</h4><p>APRIL 2015</p><p>7PM ICSMH</p></div>
                            <div class="col-md-9 event-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                        </div>
                        <div class="col-md-4 event-entry">
                            <div class="col-md-3 event-date-stamp"><h4>12</h4><p>APRIL 2015</p><p>7PM ICSMH</p></div>
                            <div class="col-md-9 event-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                        </div>

                    </div>
                </div>
            </div>
        </div>


        <div id="publications-panel" class="wrapping-panel">
            <div class="container">
                <h1>ICS PUBLICATIONS</h1>
                <div id="publications-group-content" class="col-md-12">
                    <div class="col-md-12 pub-entry">
                        <div class="col-md-3 pub-image"><img src="{{URL::to('res/publications-images/art-prev-icon1.jpg')}}"></div>
                        <div class="col-md-9 pub-body"> 
                            <h3 pub-title>ICS is proud to be home to 2015 UPLB Outstanding Junior Faculty in the Physical Sciences</h3>
                            <h5>AKSMojar (February 26, 2015)</h5>
                            <p class="pub-text">The Institute of Computer Science (ICS), College of Arts and Sciences (CAS) is very proud that its very own, Reginald Neil Recario was named University of the Philippines Los Ba&ntilde;os (UPLB) Outstanding Teacher Award in the Physical Sciences discipline (Junior Faculty).<br><br>
                            The official ceremony and awarding of the Plaque of Recognition will be held on 5 March 2015, as stated on the letter of notification received by Sir Regi (the name his students and colleagues call him).</p>
                            <br>
                            <a href="">read more</a>
                        </div>
                    </div>
                    <div class="col-md-12 pub-entry">
                        <div class="col-md-3 pub-image"><img src="{{URL::to('res/publications-images/art-prev-icon2.jpg')}}"></div>
                        <div class="col-md-9 pub-body"> 
                            <h3 pub-title>Paper from the Traceability Program presented in PVMA 2015</h3>
                            <h5>Webmaster (February 23, 2015)</h5>
                            <p class="pub-text">The paper A Pen-to-Plate Tracking and Tracing of Pork Through the National Pork Traceability System written by Prof. Jaderick P. Pabico with Ms. Joy B. Banayo, Prof. Marie Yvette B. de Robles, Prof. Medino Gedeun N. Yebron, Jr., Prof. Renato SA. Vega, Ph.D., Ms. Vianice Jasmine S. Olazo, Ms. Alyssa Kay S. Mojar, and Ms. Karen N. dela Cruz as co-authors was accepted and presented in the technical paper session on swine during the recently concluded 82nd Philippine Veterinary Medical Association Scientific Conference and Annual Convention (PVMA 2015) held at the Radisson Blu Hotel Cebu, Cebu City on 18-20 February 2015. The paper is one of the outputs of the collaborative R&D program Development of a National Pork Traceability System funded by the Philippine Council for Agriculture, Aquatic and Natural Resources Research and Development of the Department of Science and technology (PCAARRD-DOST).</p>
                            <br>
                            <a href="">read more</a>
                        </div>
                    </div>
                    <div class="col-md-12 pub-entry">
                        <div class="col-md-3 pub-image"><img src="{{URL::to('res/publications-images/art-prev-icon3.jpg')}}"></div>
                        <div class="col-md-9 pub-body"> 
                            <h3 pub-title>ICS research papers to be presented in conferences in January 2015</h3>
                            <h5>Webmaster (December 17, 2014)</h5>
                            <p class="pub-text">A total of four ICS research papers will be presented in two separate conferences in January 2015. To be presented as oral paper in the 2015 International Conference on Building Resilience and Developing Sustainability (ICBRDS 2015) is the paper Mining the Sentiments in Social Media Microposts for Nowcasting Fish Kill Events in Taal Lake. The paper is one of the many outputs of the collaboration among ICS, IBS, and CHE involving Profs. Jaderick P. Pabico of ICS, Arnold R. Salvacion of CHE, and Damasa B. Magcale-Macandog of IBS. ICBRDS 2015 will be held in Baguio Convention Center and UP Baguio, Baguio City on 14-17 January 2015.</p>
                            <br>
                            <a href="">read more</a>
                        </div>
                    </div>
                    <a href="">Read More Articles</a>
                </div>

            </div>
        </div>
    </div>

@stop