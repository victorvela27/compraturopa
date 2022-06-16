<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('compraturopa.com', 'compraturopa.com') }}</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('plugins/jQuery/jquery.min.js') }}"></script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('plugins/bootstrap/bootstrap.min.js') }}"></script>
    <!-- slick slider -->
    <script src="{{ asset('plugins/slick/slick.min.js') }}"></script>
    <!-- filter -->
    <script src="{{ asset('plugins/shuffle/shuffle.min.js') }}"></script>

    <!-- Main Script -->
    <script src="{{ asset('js/script.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

      <!-- ** Plugins Needed for the Project ** -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
  <!-- slick slider -->
  <link rel="stylesheet" href="plugins/slick/slick.css">
  <!-- themefy-icon -->
  <link rel="stylesheet" href="plugins/themify-icons/themify-icons.css">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>
<body>
    
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container">
                <a class="navbar-brand font-tertiary h3" href="{{ url('/') }}">
                    {{ config('compraturopa.com', 'compraturopa.com') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="##navigation" aria-controls="navigation" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse text-center" id="navigation">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        <div class="collapse navbar-collapse text-center" id="navigation">
                          <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                              <a class="nav-link" href="index.blade.php">Inicio</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="blog.blade.php">Descuentos</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="portfolio.blade.php">Ventas</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="contact.blade.php">Contact</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="about.blade.php">¿Quienes somos?</a>
                            </li>
                          </ul>
                        </div>
                            @if (Route::has('login'))
                                <li class="nav-item active">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Ingresa') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item active">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registrate') }}</a>
                                </li>
                            @endif
                        @else
                        <div class="collapse navbar-collapse text-center" id="navigation">
                          <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                              <a class="nav-link" href="index.blade.php">Inicio</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="blog.blade.php">Descuentos</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="portfolio.blade.php">Ventas</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="contact.blade.php">Contact</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="about.blade.php">¿Quienes somos?</a>
                            </li>
                          </ul>
                        </div>

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->nombre }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar Sesión') }}
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
            @yield('content')
        </main>
    </div>
  
</body>
</html>
