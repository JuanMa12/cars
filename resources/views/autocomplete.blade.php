
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="">

    <link rel="icon" type="image/png" href="{{asset('image/lamborghini.png')}}" />
    <title>Cars</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/autocomplete.css')}}">
    <style>body{  margin-top: 60px;  }</style>

</head>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div id="navbar" class="collapse navbar-collapse">
            <a class="navbar-brand" href="#">Project name</a>
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>

    </div>
</nav>
<div class="container">
    @yield('content')
</div>

<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/autocomplete.js')}}"></script>
@yield('scripts')
</body>
</html>
