<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'MicroBlog') - Laravel 入门教程</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ mix('css/layout.css') }}">
</head>
<body>

@include('layouts._header')

<div class="container">
    <div class="offset-md-1 col-md-10">
        @include('shared._messages')
        @yield('content')
        @include('layouts._footer')
    </div>
    <script src="{{ mix('js/app.js') }}"></script>
</div>
</body>
</html>