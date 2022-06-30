<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link ref="stylesheet" type="text/css" href="{{url('css/main.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{ asset('css/app.scss') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
       
            
            <nav class="navbar navbar-expand" style="background-color: #FF7A00;">
                <div class="logo">
                    <img src="{{ asset('img/Little_ngang.png') }}" alt="logo little ngang">
                </div>
                
            
                <div class="navbar" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    @foreach ($navbars as $navbarItem)
                                <form class="container-fluid justify-content-start">
                                    <button class="btn btn-outline-light" type="button">
                                        <a class="nav-link text-light" href="{{ route($navbarItem->route) }}">{{ $navbarItem->name }}</a>
                                    </button>
                                </form>
                                <!--<li class="tags">
                                    
                                </li>-->
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