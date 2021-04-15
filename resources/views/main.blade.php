<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>About me</title>
    <link href="{{ asset('css/about_me.css') }}" rel="stylesheet"/>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>


</head>
<body>
@include('menu')

<div id="container">
    @yield('content')
</div>

@include('footer')
<script src="{{ asset('js/about_me.js') }}"></script>
</body>
</html>

