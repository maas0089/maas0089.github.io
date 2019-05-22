<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('pageTitle', 'Stijn Maas')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
          integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">


</head>
<body>
<div class="content">

    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark mb-5">
        <a class="navbar-brand" href="{{route('home')}}">Stijn Maas</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">

                @section('sublinks')
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('home')}}">Home</a>
                    </li>

                    @if (\Illuminate\Support\Facades\Auth::user() !== null)
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
                            <a class="nav-link" href="/template">Template</a>
                        </li>

                        @if (\Illuminate\Support\Facades\Auth::user()->role == 'student' || \Illuminate\Support\Facades\Auth::user()->role == 'admin')
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('opdrachten.index')}}">Opdrachten</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('courses.index')}}">Dashboard</a>
                            </li>
                        @endif

                    @endif
                    <li class="nav-item">
                        <a class="nav-link" href="/contact">Contact</a>
                    </li>
            </ul>


            <ul class="nav">
                <li class="nav-item dropdown">
                    @if (\Illuminate\Support\Facades\Auth::user() !== null)
                        <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                           aria-expanded="false">
                            <i class="fas fa-user-cog"></i> {{ \Illuminate\Support\Facades\Auth::user()->name }}
                        </a>
                        <div class="dropdown-menu dropdown-menu-right bg-info">

                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="fa fa-sign-out-alt"></i> Log uit
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="post" style="display: none;">
                                @csrf
                            </form>
                        </div>
                </li>
            </ul>

            @else

                <li class="nav-item">
                    <a class="nav-link" href="/login">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/register">Registreer</a>
                </li>


            @endif



            @show

        </div>
    </nav>

    <div class="jumbotron jumbotron-fluid">
        <div class="container text-center">
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

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>
</html>
