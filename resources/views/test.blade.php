<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Привет люди это главная странирца')</title>
    @section('css')
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    @show
</head>
<body>

@include('partial.nav', ['brandName' => 'Барахолка'])

<hr>
<div class="container">
    @yield('content')
</div>
<hr>
<footer>
    @yield('tumba')
    copitight {{ date('Y') }}
</footer>
</body>
</html>