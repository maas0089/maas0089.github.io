<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('pageTitle', 'Stijn Maas')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">


</head>
<body>
    <div class="content">

        @section('links')
            <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark mb-5">
                <a class="navbar-brand" href="./">Stijn Maas</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mr-auto">
                        {{--<li class="nav-item active">--}}
                            {{--<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>--}}
                        {{--</li>--}}
                        <li class="nav-item">
                            <a class="nav-link" href="..">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/opdrachten">Opdrachten</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/dashboard">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/beroepsbeeld">Beroepsbeeld</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/motivatie">Motivatie</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/profiel">Profiel</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contact">Contact</a>
                        </li>

                    </ul>
                </div>
            </nav>

        @show

        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-3">@yield('header')</h1>

                <h1 class="text-muted">
                    @yield('subheader')
                </h1>

                <p class="lead">
                    @yield('content')
                </p>
            </div>
        </div>

        @yield('extraContent')
    </div>
</body>
</html>
