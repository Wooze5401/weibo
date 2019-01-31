<html>
<head>
    <title>
        @yield('title', 'Weibo App') - 入门教程
    </title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
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