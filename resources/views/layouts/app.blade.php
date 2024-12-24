<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-blue shadow-sm" style="background-color: #76e1ff;">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent" >
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Active</a>
                          </li>
                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Data Akademik</a>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="{{ url('Siswa',[]) }}">Data Siswa</a></li>
                              <li><a class="dropdown-item" href="{{ url('Siswa/create',[]) }}">Tambah Siswa</a></li>
                              <li><hr class="dropdown-divider"></li>
                              <li><a class="dropdown-item" href="{{ url('Guru',[]) }}">Data Guru</a></li>
                              <li><a class="dropdown-item" href="{{ url('Guru/create',[]) }}">Tambah Guru</a></li>
                              <li><hr class="dropdown-divider"></li>
                              <li><a class="dropdown-item" href="{{ url('Mapel',[]) }}">Data Pelajaran</a></li>
                              <li><a class="dropdown-item" href="{{ url('Mapel/create',[]) }}">Tambah Pelajaran</a></li>
                              <li><hr class="dropdown-divider"></li>
                              <li><a class="dropdown-item" href="{{ url('Administrasi',[]) }}">Administrasi</a></li>
                              <li><a class="dropdown-item" href="{{ url('Administrasi/create',[]) }}">Tambah Administras</a></li>
                            </ul>
                          </li>
                          
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" style="background-color: #fff478; color:#00087f"type="button" data-bs-toggle="dropdown">Laporan Akademik</button>
                               
                                <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ url('Guru/laporan/cetak',[]) }}">Laporan Guru</a></li>
                                <li><a class="dropdown-item" href="{{ url('Siswa/laporan/cetak',[]) }}">Laporan Siswa</a></li>
                                <li><a class="dropdown-item" href="{{ url('Mapel/laporan/cetak',[]) }}">Mapel</a></li>
                                </ul>
                                </div>
                     
                         
                          
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @if (Session::has('pesan'))
            <div class="alert alert-primary" role="alert">
                {{ Session::get('pesan') }}
            </div>
            @endif
            @yield('content')
        </main>
    </div>
</body>
</html>
<<<<<<< HEAD
a
=======
>>>>>>> f4e61944f63fd80786e8c81a824bdf544359ec7b
