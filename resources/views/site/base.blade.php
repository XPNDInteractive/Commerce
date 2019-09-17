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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link href="{{ asset('css/site.css') }}" rel="stylesheet">
</head>
<body>
    <header>
        <div class="top">
            <div class="container-fluid">
                <div class="row m-0 align-items-center">
                    <div class="col-sm-12 col-md-4 p-0">
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link">Technology</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link">Blog</a>
                            </li>

                        </ul>
                    </div>
                    <div class="col-sm-12 col-md-8 d-flex p-0">
                        <ul class="nav  ml-auto">
                             @guest
                                <li class="nav-item">
                                    <a class="nav-link open-account-dialog">Join / Login</a>
                                </li>
                            @else
                                
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        Welcome, {{ Auth::user()->name }} 
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="">My Account</a>
                                        @if(Auth::user()->roles()->first()->name == "admin")
                                        <a class="dropdown-item" href="/admin">Admin Panel</a>
                                        @endif
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
                            
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown">Help</a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="">FAQ</a>
                                    <a class="dropdown-item" href="">Return/Exhange</a>
                                    <a class="dropdown-item" href="">Customer Service</a>
                                    <a class="dropdown-item" href="">Contact Us</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown"><i class="fas fa-shopping-cart"></i></a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                   
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown">Language</a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="">English</a>
                                    <a class="dropdown-item" href="">Spanish</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="middle">
             <div class="container-fluid">
                <div class="row m-0 align-items-center">
                    <a class="mr-3 mr-md-5 logo" href="/">
                        <img class="height:1.5rem;" src="{{url('/')}}/img/logo-black.png"/>
                    </a>
                    <button class="btn btn-primary btn-sm d-md-none"><i class="fas fa-bars"></i></button>
                    <ul class="nav ml-auto">
                    @if(!is_null($menu::where('name', 'categories menu')->first()))
                        @foreach($menu::where('name', 'categories menu')->first()->menuItems()->whereNull('parent_id')->get() as $menuItem)
                            <li class="nav-item">
                                <a href="{{url('/') . '/'. $menuItem->path}}" class="nav-link">{{$menuItem->name}}</a>
                                 @if(!is_null($menuItem->children()->first()))
                                 <div class="dropdown justify-content-center">
                                    <div class="col-12">
                                        <div class="row m-0 p-0 justify-content-center align-items-center">
                                            
                                            <div class="col-5 left">
                                                
                                                <div class="row dropdown-links">
                                                    @foreach($menuItem->children()->get() as $child)
                                                    <div class="col-3">
                                                        <div class="row p-0 m-0">
                                                            <h6 class="w-100">{{$child->name}}</h6>
                                                            <ul class="nav flex-column">
                                                                
                                                                <li class="nav-item">
                                                                    <a class="nav-link" href="#">Tank Tops</a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link" href="#">Tee's</a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link" href="#">Polo</a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link" href="#">Button Up</a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link" href="#">Long Sleve</a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link" href="#">Sweaters</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            <div class="col-2">
                                                <img class="w-100 h-75" src="https://arcticcool.com/wp-content/uploads/2018/05/Running_P1810656-e1525806474230.jpg"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endif
                            </li>
                        @endforeach
                    @endif
                    </ul>
                    <form class="d-flex ml-auto col-5 col-md-3 p-0" action="" method="get">
                        <i class="fas fa-search"></i><input type="text" class="form-control" name="search">

                    </form>

                </div>

            </div>
        </div>



    </header>


            @yield('content')

    
    <div class="dialog dialog-login {{!$errors->isEmpty() && old('dialog-active') == 'login' ? 'dialog-active':null}}">
           <div class="login-form">
                <div class="row m-0 p-0">
                    <button class="btn btn-icon close-account-dialog m-1 ml-auto"><i class="fas fa-times"></i></button>
                </div>
                <div class="row m-0 p-0 justify-content-center text-center">
                    <div class="col-10">
                        <img class="logo-tag" src="img/logo-blue.png"/>
                        <h5 class="m-0 mb-3">PLEASE LOGIN TO CONTINUE</h5>
                        <p>Don't have an account <a class="open-register-dialog" href="">Join now</a> to and get exlusive member offers and much more.</p>
                    </div>
                </div>
                <div class="row m-0 p-0 justify-content-center mt-2">
                    <form method="POST" action="{{ route('login') }}">
                    <input type="hidden" name="dialog-active" value="login"/>
                        @csrf
                        <div class="form-group">
                            <input class="form-control {{$errors->has('email') && old('dialog-active') == 'login' ? 'is-invalid':''}}" type="text" name="email" placeholder="Email" value="{{old('email') }}"/>
                            @if ($errors->has('email') && old('dialog-active') == 'login')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <input class="form-control {{$errors->has('password') && old('dialog-active') == 'login' ? 'is-invalid':''}}" type="password" name="password" placeholder="Password" value=""/>
                            @if ($errors->has('password') && old('dialog-active') == 'login')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group d-flex">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck1" name="remember-me">
                                <label class="custom-control-label" for="customCheck1">Remember Me</label>
                            </div>
                            <a class="ml-auto" href="">Forgot your password?</a>
                        </div>
                        <p>By logging in, you agree to Arctic Cool's Privacy Policy and Terms of Use.</p>
                        <button type="submit" class="btn btn-primary btn-block mb-2">LOGIN</button>
                        <hr/>
                        <a class="btn btn-facebook btn-block mt-2">
                            <i class="fab fa-facebook-f"></i> LOGIN WITH FACEBOOK
                        </a>
                        <a class="btn btn-google btn-block">
                            <i class="fab fa-google"></i> LOGIN WITH GOOGLE
                        </a>
                        <p class="d-block mt-5 text-center">Not a member? <a class="open-register-dialog" href="#">Join now</a></p>
                    </form>
                </div>
           </div>
    </div>
    <div class="dialog dialog-register {{!$errors->isEmpty() && old('dialog-active') == 'register' ? 'dialog-active':null}}">
           <div class="login-form">
                <div class="row m-0 p-0">
                    <button class="btn btn-icon close-register-dialog m-1 ml-auto"><i class="fas fa-times"></i></button>
                </div>
                <div class="row m-0 p-0 justify-content-center text-center">
                    <div class="col-10">
                        <img class="logo-tag" src="img/logo-blue.png"/>
                        <h5 class="m-0 mb-3">BECOME AN ARTIC COOL MEMBER</h5>
                        <p>Create your account and get access to member exclusive products, instant benefits and so much more</p>
                        <p>Already have an account? <a class="open-account-dialog">Login</a> </p>
                    </div>
                </div>
                <div class="row m-0 p-0 justify-content-center mt-2">
                    <form method="POST" action="{{ route('register') }}">
                    <input type="hidden" name="dialog-active" value="register"/>
                    @csrf
                        <div class="form-group">
                            <input id="name" type="text" class="form-control{{ $errors->has('name') && old('dialog-active') == 'register' ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" placeholder="Name" autofocus>

                            @if ($errors->has('name') && old('dialog-active') == 'register')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <input id="email" type="text" class="form-control{{ $errors->has('email') && old('dialog-active') == 'register' ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Email" autofocus>

                            @if ($errors->has('email') && old('dialog-active') == 'register')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <input id="password" type="password" class="form-control{{ $errors->has('password') && old('dialog-active') == 'register' ? ' is-invalid' : '' }}" placeholder="Password" name="password">

                            @if ($errors->has('password') && old('dialog-active') == 'register')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="password" name="password_confirmation" placeholder="Confirm Password" value=""/>
                        </div>
                        
                        <p>By signing up, you agree to Arctic Cool's Privacy Policy and Terms of Use.</p>
                        <button type="submit" class="btn btn-primary btn-block mb-2">SIGN UP</button>
                        <hr/>
                        <a class="btn btn-facebook btn-block mt-2">
                            <i class="fab fa-facebook-f"></i> SIGN UP USING FACEBOOK
                        </a>
                        <a class="btn btn-google btn-block">
                            <i class="fab fa-google"></i> SIGN UP USING GOOGLE
                        </a>
                        <p class="d-block mt-5 text-center">ALready have an account? <a class="open-account-dialog" href="#">Login</a></p>
                    </form>
                </div>
           </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script src="{{ asset('js/rater.min.js') }}"></script>
</body>
</html>
