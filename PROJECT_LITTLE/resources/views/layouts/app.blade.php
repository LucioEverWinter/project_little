<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link ref="stylesheet" type="text/css" href="{{url('css/main.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <link href="{{ asset('css/app.scss') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
       
            
            <nav class="navbar navbar-expand-lg bg-light">
                <div class="logo">
                    <img src="{{ asset('img/Little_ngang.png') }}" alt="logo little ngang">
                </div>
                </button>
            
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    @foreach ($navbars as $navbarItem)
                                <li class="tags">
                                    <a class="nav-link" href="{{ route($navbarItem->route) }}">{{ $navbarItem->name }}</a>
                                </li>
                            @endforeach
                </ul>
                
                </div>
            </nav>
  
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>