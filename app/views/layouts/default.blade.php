<?php
	$type = Session::get('type');
	$username = Session::get('username');
	$id = Session::get('id');
	$firstname = Session::get('firstName');
	$middlename = Session::get('middleName');
	$lastname = Session::get('lastName');
	$birthdate = Session::get('birthdate');
	$sex = Session::get('sex');
	$email = Session::get('email');
	$password = Session::get('password');
	$studentNumber = Session::get('studentNumber');
	 $accessCode = Session::get('accessCode');
	 //start of the session
?>
<!DOCTYPE html>
<html>
<head>
    @include('includes.head')
</head>

<body>

<!-- header / navigation bar -->
<header>
    @include('includes.header')
</header>

<!-- whole body (content) wrapped by a single div -->
<div id="main">
    @yield('content')
</div>

<!-- footer -->
<div class="footer">
    @include('includes.footer')
</div>

</body>

</html>