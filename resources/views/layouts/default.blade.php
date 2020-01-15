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
    @yield('content')
    @include('layouts._footer')
</div>
</body>
</html>