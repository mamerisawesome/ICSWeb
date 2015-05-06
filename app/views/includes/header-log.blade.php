
<?php $username = Session::get('username'); ?>
    <div id="title-bar-wrapper">
        <div class="container" id="title-bar">
             <a href="{{URL::to('/')}}"><img src="{{URL::to('res/images/ics_logo.jpg')}}"></a>
            <h2 id="site-title">INSTITUTE OF COMPUTER SCIENCE</h2>
        </div>
    </div> 

    <nav class="navbar navbar-default" id="navigation-menu">
        <div class="container">
            <div class="navbar-header" id="site-name">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>

              <a class="navbar-brand" href="{{URL::to('/')}}">ICS UPLB</a>

            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a href="{{URL::to('/')}}">Home</a></li>
                    <li><a href="{{URL::to('pages/publication')}}">News</a></li>
                    <li><a href="{{URL::to('pages/library')}}">Library</a></li>
                    <li><a href="{{URL::to('pages/directory')}}">Faculty and Staff</a></li>
                    <li><a href="{{URL::to('pages/curriculum')}}">Courses</a></li>
                    <li><a href="{{URL::to('pages/division')}}">Divisions</a></li>
                    <li><a href="{{URL::to('pages/about')}}">About Us</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
<!--                    <li><a href="{{ URL::to('pages/students/create') }}"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
-->                 <p> <?php echo $username ?></p>
                     <li><a href="{{URL::to('pages/student/logout')}}"><span class="glyphicon glyphicon-user"></span> Log out</a></li> 
                </ul>
            </div>

        </div>
    </nav>

