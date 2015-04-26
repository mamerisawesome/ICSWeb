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
                    <li><a href="{{URL::to('pages/publication')}}">Publications</a></li>
                    <li><a href="{{URL::to('pages/library')}}">ICS Online Library</a></li>
                    <li><a href="{{URL::to('pages/directory')}}">Faculty and Staff</a></li>
                    <li><a href="{{URL::to('pages/curriculum')}}">Courses</a></li>
                    <li><a href="{{URL::to('pages/division')}}">Divisions</a></li>
                    <li><a href="{{URL::to('pages/about')}}">About Us</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{ URL::to('pages/students/create') }}"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li id="login-toggle"><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                </ul>
            </div>
            <div id="login-field" class="col-md-12">
                <div id="login-field-content" class="col-md-6">
                <center>
                    <h5>LOGIN to ICS Portal</h5>
                    <input type="text" name="username" class="log-in-input-field" id="log-in-userna me" placeholder="username"><br>
                    <input type="password" name="password" class="log-in-input-field" id="log-in-password" placeholder="password"><br>
                    <a href="group.html">
                    <button class="btn log-in-button" id="log-in-password">Log In</button>
                    </a>
                    <p id="forget-text">forgot username or password?</p>
                </center>
                </div>
            </div>

        </div>
    </nav>

