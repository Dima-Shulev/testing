<!doctype html>
<html lang="{{config('app.local')}}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="@yield('keywords')" />
    <meta name="description" content="@yield('description')" />
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <title>@yield('title',config('app.name'))</title>
</head>
<body class="bg-light">
    @include('modules.nav')

    <main class="container">
        @yield('content')
    </main>

    @include('modules.footer')
</body>
<script src="{{asset('js/bootstrap.js')}}"></script>
</html>
