<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

<meta charset="UTF-8">

    <title>{{'Imperial' }}</title>

    <script>
        window.Laravel = {!! json_encode([
            'csrf' => csrf_token(),
            'pusher' => [
                'key' => config('broadcasting.connections.pusher.key'),
                'cluster' => config('broadcasting.connections.pusher.options.cluster')
            ],
            'user' => auth()->check() ? auth()->user()->id : '',
        ]) !!}
    </script>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">
    

    <!-- Fontfaces CSS-->
    <link href="{{ asset('adm/css/font-face.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('adm/vendor/font-awesome-4.7/css/font-awesome.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('adm/vendor/font-awesome-5/css/fontawesome-all.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('adm/vendor/mdi-font/css/material-design-iconic-font.min.css') }}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{ asset('adm/vendor/bootstrap-4.1/bootstrap.min.css') }}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{ asset('adm/vendor/animsition/animsition.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('adm/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('adm/vendor/wow/animate.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('adm/vendor/css-hamburgers/hamburgers.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('adm/vendor/slick/slick.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('adm/vendor/select2/select2.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('adm/vendor/perfect-scrollbar/perfect-scrollbar.css') }}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{ asset('adm/css/theme.css')}}" rel="stylesheet" media="all">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">    

    <style>
        /* .header-desktop{
            background-color: rgba(10, 10 10,.8) !important;
        } */
    </style>
</head>
<body class="animsition">
    <!-- <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel top-0">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/home') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
               
                    <ul class="navbar-nav mr-auto">

                    </ul>

               
                    <ul class="navbar-nav ml-auto">
               
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @else

                        <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Mes <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}">
                                        Message
                                    </a>

                                    
                                </div>
                            </li>

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
            </div>
        </nav> -->

        
            @yield('content')
        
    <!-- </div> -->

    <!-- Jquery JS-->
    <script src="{{ asset('adm/vendor/jquery-3.2.1.min.js') }}"></script>
    <!-- Bootstrap JS-->
    <script src="{{ asset('adm/vendor/bootstrap-4.1/popper.min.js') }}"></script>
    <script src="{{ asset('adm/vendor/bootstrap-4.1/bootstrap.min.js') }}"></script>
    <!-- Vendor JS       -->
    <script src="{{ asset('adm/vendor/slick/slick.min.js') }}">
    </script>
    <script src="{{ asset('adm/vendor/wow/wow.min.js') }}"></script>
    <script src="{{ asset('adm/vendor/animsition/animsition.min.js') }}"></script>
    <script src="{{ asset('adm/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js') }}">
    </script>
    <script src="{{ asset('adm/vendor/counter-up/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('adm/vendor/counter-up/jquery.counterup.min.js') }}">
    </script>
    <script src="{{ asset('adm/vendor/circle-progress/circle-progress.min.js') }}"></script>
    <script src="{{ asset('adm/vendor/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('adm/vendor/chartjs/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('adm/vendor/select2/select2.min.js') }}">
    </script>

    <!-- Main JS-->
    <script src="{{ asset('adm/js/main.js') }}"></script>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <script src="{{ asset('js/javascript.js')}}"></script>

    <script src="{{ asset('js/compramodals.js')}}"></script>

    <!-- <script src="{{ asset('js/vers.js')}}"></script> -->

</body>
</html>
