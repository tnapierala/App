<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="https://cdn1.iconfinder.com/data/icons/microsoft-product-2/512/36_Microsoft_Project-128.png">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Go to www.addthis.com/dashboard to customize your tools --> <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-60df9b7d0b594d4c"></script>

    <script type="text/javascript">
    function pauseOthers(element){
        $("audio").not(element).each(function(index,audio){
            audio.pause();
        })
    }
</script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                @if(!Auth::check())
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                @endif
                @if(Auth::check())
                    @if(Auth::user()->role =='admin')
                            <a class="navbar-brand" href="{{ url('/ringtone') }}">
                                {{ config('app.name', 'Laravel') }}
                            </a>
                        @else
                            <a class="navbar-brand" href="{{ url('/') }}">
                                {{ config('app.name', 'Laravel') }}
                            </a>
                    @endif
                @endif

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item zdj">
                            <div class="pic">
                                <img src="https://lh3.google.com/u/0/d/1ijnq-BkFfedy77XEKg19tyEY8WZF1Fc8=w2000-h2122-iv1" alt="Jan">
                            </div>
                        </li>
                        <li class="nav-item zdj">
                            <div class="pic">
                                <img src="https://lh3.google.com/u/0/d/1KZw1lX3v3MTPQxZbMIQyFZH7CmrDnaDK=w2000-h2122-iv1" alt="Tomek">
                            </div>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                         @if(!Auth::check())
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/ringtone') }}"> Ringtones</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/wallpapers') }}"> Wallpapers</a>
                            </li>
                        @endif
                        @if(Auth::check())
                            @if(Auth::user()->role =='admin')
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('ringtones.index') }}">Manage Ringtones</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('photos.index') }}">Manage Photos</a>
                            </li>
                            @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/ringtone') }}"> Ringtones</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/wallpapers') }}"> Wallpapers</a>
                            </li>
                            @endif
                        @endif
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>

                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}" style="color:#000!important;"
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
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <style type="text/css">
        body{
            background-image: url(https://lh3.google.com/u/0/d/1v9X9QT2Jf_0tikafRe9UiaUxKfRd58Jg=w2000-h2122-iv1);
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            font-size: 20px;
        }
        .navbar {
            background: rgb(36, 36, 36)!important;
            font-size: 25px;
            font-weight: bold;
        }
        .navbar a{
            color: #fff!important;
            font-size: 25px;
        }
        a{
            color:rgb(6, 156, 243);
        }
        th {
            background-color: #E8E8E8;
        }
        td {
            background-color: #F5F5F5;
        }

        a:hover {
           text-decoration: none;
           color: rgb(36, 36, 36);
        }
        .card-header {
            font-size: 22px;
            background-color: rgb(6, 156, 243);
            color: white;
        }
        .card-footer {
            background-color: #F5F5F5;
        }
        .card-header.head{
            background-color: #D3D3D3;
            color: black;
        }
        .category{
            background-color: #F0F0F0;
            color: black;
        }
        .category:hover {
           background-color: rgb(6, 156, 243);
           color: white;
           text-decoration: none;
        }
        .category:active {
            background-color: rgb(36, 36, 36);
            color: white;
            text-decoration: none;
        }

        .nav-item.zdj {
            margin: 0.3% 0% 0.3% 15%;
            text-align: center;
        }
        .cat-line{
            text-decoration: none;
        }
        .pic {
            width: 12%;
            margin: 0.3% 0 0.3% 0;
            text-align: center;
        }
        .pic img{
            width: 70px;
            height: 70px;
            border-radius: 30%;
            border: 4px solid rgb(6, 156, 243);
            transition: all 0.2s ease-in-out;
            align-self: center;
        }
        .pic img:hover{
            transform: scale(0.8)
        }
        img:hover{
            transform: scale(0.95)
        }
        .btn.btn-secondary.btn-sm {
            font-size: 20px;
        }
        .card-header.homeHeader{
            font-size: 30px;
            text-align: center;
        }
        .card-body.home {
            letter-spacing: 3px;
        }
    </style>
</body>
</html>
