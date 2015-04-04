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
<div id="main" class="row">
    @yield('content')
</div>

<!-- footer -->
<div class="footer">
    @include('includes.footer')
</div>

</body>

</html>