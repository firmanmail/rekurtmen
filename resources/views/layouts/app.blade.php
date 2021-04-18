<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title></title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-md navbar-light navbar-laravel">
  <div class="container">
      <a class="navbar-brand" href="{{ url('/') }}">
          {{ config('app.name', 'Event') }}
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Left Side Of Navbar -->
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
            </li>
            <li class="nav-item">
                 <a class="nav-link" href="{{ route('notifikasi.sms.create') }}">{{ __('SMS') }}</a>
            </li>
            <li class="nav-item">
                 <a class="nav-link" href="{{ route('notifikasi.email.create') }}">{{ __('EMAIL') }}</a>
            </li>
            @auth()
            @if (Auth::check())
                            @can('view_users')
                                <li class="{{ Request::is('users*') ? 'active' : '' }}">
                                    <a href="{{ route('users.index') }}">
                                        <span class="text-info glyphicon glyphicon-user"></span> Users
                                    </a>
                                </li>
                            @endcan

                            @can('view_posts')
                                <li class="{{ Request::is('posts*') ? 'active' : '' }}">
                                    <a href="{{ route('posts.index') }}">
                                        <span class="text-success glyphicon glyphicon-text-background"></span> Posts
                                    </a>
                                </li>
                            @endcan
                        @endif

            @endauth
            </ul>
                <ul class="navbar-nav ml-auto">
                    @guest
                    <div class="dropdown">
                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="{{asset('img/Bruno.jpg')}}" width="25" class="rounded-circle" height="25" widthalt="" srcset="">
                        </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#"><li class="nav-item">
                      <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                  </li>
                  @if (Route::has('register'))
                      <li class="nav-item">
                          <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                      </li>
                  @endif
                @else</a>
                    </div>
                </div>
                  <li class="nav-item dropdown">
                      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                          {{ Auth::user()->name }} <span class="caret"></span>
                      </a>

                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="{{ route('logout') }}"
                             onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                              {{ __('Logout') }}
                          </a>

                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              @csrf
                          </form>
                      </div>
                  </li>
              @endguest
        </ul>
    </div>
</nav>


<div id="app">
        <div class="container-fluid">
            <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-with sidebar collapse show" stle="">
        <div class="sidebar-sticky pt-3">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" href="{{route('backend.home.index')}}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">           
                    <a class="nav-link" href="{{route('backend.pengguna.index')}}">Pengguna</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('backend.bagian.index')}}">Bagian</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('backend.pelamar.index')}}">Pelamar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('backend.penerima.index')}}">Penerimaan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Laporan</a>
                </li>
            </ul>
        </div>
    </nav>

<div class="col-md-10">
        <main class="py-4">
            @yield('content')
        </main>
        </div>
    </div>
</body>
</html>
