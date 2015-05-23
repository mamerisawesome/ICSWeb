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
                        <p>The Institute of Computer Science (ICS) is an autonomous institute of the College of Arts and Sciences (CAS) of the University of the Philippines Los Baños (UPLB). ICS is Commission on Higher Education's (CHED) Center of Excellence in Information Technology Education. ICS has strong undergraduate and graduate (Diploma, MIT, MS and PhD) degree programs in computer science and information technology with more than 30 faculty members, and about 600 students. ICS is committed to excellence in teaching, research, and extension. ICS is home to the first and only Academician in Computer Science.</p>
                        <hr>
                        <h3>Contact Information</h3> <p>Daytime Phone (8:00-17:00 +8:00GMT): 63-49-536-2313 | Facsimile: 63-49-536-2302</p>
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
                            e0wH fH0uwHz bH3bhE qH0u,.. muZhsTa nA U?? KuM@in qHa na B@... ?? jHe Jhe jH3... wHala n@ aQh0ug mSavI.. sLe3p nA mIii... jHe jHe jHe - lHiL zHupLad0uwH.214 _..,,
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
                            <ul>
                            <li>
                                To produe the needed quality manpower for the software industry of the Philippines and the manpower needed to carry out the information processing functions of private and government institutions
                            </li>
                            <li>
                                To carry out high-level research and development in computer science and computer hardware so as to enhance locally produed computer products
                            </li>
                            <li>
                                To continuously upgrade the computing personnel of industry and government through training.
                            </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6" id="vision-wrapper">
                        <div class="col-md-12">
                            <h2>VISION</h2>                             
                            <p>To become the National Center of Excellence in Computer Science </p>
                            <p><b>UPDATE</b>: The Institute is CHED's National Center of Excellence in Information Technology Education. CHED is Commission on Higher Education under the Office of the President of the Republic of the Philippines.</p>
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