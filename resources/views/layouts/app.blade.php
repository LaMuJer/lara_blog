<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield("title",Info::$name)</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @yield('head')
</head>
<body>

@guest
    <div class="container">
        <div class="row justify-content-center align-items-center min-vh-100">-
            <div class="col-lg-5">
                @yield('content')
            </div>
        </div>
    </div>

@endguest

@auth

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-xl-2 bg-white shadow-sm">
                @include('layouts.sidebar')
            </div>
            <div class="col-lg-9 col-xl-10">
                <div class="content">
                    @include('layouts.header')
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    <form action="{{ route('logout') }}" class="d-none" method="post" id="logoutForm">@csrf</form>
@endauth




<script src="{{ asset('js/app.js') }}"></script>
@include('layouts.toast')
@yield("foot")
</body>
</html>
