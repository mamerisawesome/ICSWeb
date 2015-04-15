    <div class="container-fluid" id="main-header-wrapper">
        <div class="container" id="main-header">
            <a href="{{URL::to('/')}}"><img id="site-logo" src="{{URL::to('res/images/ics_logo.jpg')}}"></a>
            <div class="row-fluid" id="main-header-content-wrapper">
                <div class="col-sm-7">
                    <h2 id="site-title">INSTITUTE OF COMPUTER SCIENCE</h2>
                </div>
                <div class="col-sm-2" id="external-links"></div>
                <div class="col-sm-3" id="search-panel">
                    <div id="search-panel-inner-wrapper">
                    <input type="text" id="search-bar">
                    <span class="glyphicon glyphicon-search" id="search-icon"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <nav class="navbar navbar-default" id="navigation-menu">
        <div class="container">
            <div class="navbar-header" id="site-name">
              <a class="navbar-brand" href="{{URL::to('/')}}">ICS UPLB</a>
            </div>
            <div class="collapse navbar-collapse" id="navigation-menu-content">
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
                <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li id="login-toggle"><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
              </ul>
              <div id="login-field">
                    <div class="login-filed-content-wrapper">
                        <p>User Name: </p>
                        <input type="text" name="username" class="log-in-input-field" id="log-in-userna me"><br>
                        <p>Password: </p>
                        <input type="password" name="password" class="log-in-input-field" id="log-in-password"><br><br>
                        <a href="group.html">
                        <button class="btn log-in-button" id="log-in-password">Log In</button>
                        </a>
                    </div>
              </div>
            </div>
        </div>
    </nav>