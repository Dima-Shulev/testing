<!doctype html>
<html lang="{{config('app.local')}}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <title>@yield('titleCheck')</title>
</head>
<body class="bg-light">
    <div class="d-flex justify-content-center align-items-center min-vh-100">
            <main class="w-75">@yield('contentForm')</main>
    </div>
</body>
<script src="{{asset('js/bootstrap.js')}}"></script>
</html>
