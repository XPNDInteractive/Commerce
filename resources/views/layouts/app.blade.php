<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    <header>
        <div class="top">
            <div class="container-fluid">
                <div class="row m-0 align-items-center">
                    <div class="col-sm-12 col-md-4 p-0">
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link">Technoligy</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link">Blog</a>
                            </li>

                        </ul>
                    </div>
                    <div class="col-sm-12 col-md-8 d-flex p-0">
                        <ul class="nav  ml-auto">
                            <li class="nav-item">
                                <a class="nav-link">Join / Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link">Return's</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link">Help</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"><i class="fas fa-shopping-cart"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link">English</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="middle">
             <div class="container-fluid">
                <div class="row m-0 align-items-center">
                    <a class="mr-5 logo" href="/">
                        <img class="height:1.5rem;" src="img/logo.png"/>
                    </a>

                    <ul class="nav ml-auto">
                        @foreach($categories_menu->menuItems()->get() as $menuItem)
                            <li class="nav-item">
                                <a href="{{$menuItem->path}}" class="nav-link">{{$menuItem->name}}</a>
                            </li>
                        @endforeach
                    </ul>
                    <form class="d-flex ml-auto col-3 p-0" action="" method="get">
                        <i class="fas fa-search"></i><input type="text" class="form-control" name="search">

                    </form>

                </div>

            </div>
        </div>



    </header>


            @yield('content')


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>
