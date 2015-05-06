
<html>
<head>
    @include('includes.head')
</head>

<body>

<!-- header / navigation bar -->
<header>
    @include('includes.header-log')
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