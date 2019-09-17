
        <nav class="navbar navbar-expand-sm">
                <a class="navbar-brand  m-0 " href="{{ url('/admin') }}">
                    <img class="m-0" src="{{url('/')}}/img/madidon.png"/>
                </a>
                <div class="navbar-container">
                   
                        <button class="btn btn-menu menu-toggle ml-auto ml-md-0" data-toggle="tooltip" data-placement="left" title="Menu" ><i class="fas fa-bars"></i></button>
                   
                  
                    <a href="/" class="  ml-3 d-none d-md-flex align-items-center"><i class="fas fa-home mr-1"></i> Back to site</a>
                     <button class="btn ml-auto  btn-sm d-none d-md-inline-block" data-toggle="tooltip" data-placement="left" title="Sync with swan"><i class="fas fa-sync"></i></button>
                    <button class="btn ml-1  btn-sm d-none d-md-inline-block" data-toggle="tooltip" data-placement="left" title="Messages"><i class="fas fa-comment"></i></button>
                    <button class="btn ml-1  btn-sm d-none d-md-inline-block" data-toggle="tooltip" data-placement="left" title="Alerts"><i class="fas fa-exclamation-triangle"></i></button>
                    <button class="btn ml-1  btn-sm d-none d-md-inline-block" data-toggle="tooltip" data-placement="left" title="Settings"><i class="fas fa-cog"></i></button>
                    <ul class="navbar-nav ml-3 d-none d-md-flex">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle " href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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

        
      