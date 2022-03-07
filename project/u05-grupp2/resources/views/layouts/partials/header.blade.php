<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img style="max-width: 130px" src="{{ asset('assets/logos/logo.png') }}" alt="logo Group2"> {{--LOGO --}}
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02"
            aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span> {{-- Hamburger menu --}}
        </button>

        <div class="collapse navbar-collapse mt-5" id="navbarColor02">
            <ul class="navbar-nav me-auto">
                <form action="/search/query" method="GET" class="d-flex"> {{--Search Bar--}}
                    @csrf
                    <input 
                        class="form-control me-sm-2" 
                        type="text" 
                        name="search" 
                        placeholder="Search...">
                    <button 
                        class="btn btn-light my-2 my-sm-0" 
                        type="submit">
                        <i class="fa fa-search" style="font-size:24px"></i>
                    </button>
                  </form>

                {{-- {{dd();}} --}}
                @guest <!-- validates if as visitor -->
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="navbar-brand nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="navbar-brand nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                    @else
                        <li class="nav-item dropdown">
                            {{-- avatar --}}
                            <a class="nav-link nav-sign-out dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                <img style="max-width: 35px" src="{{ asset('assets/logos/login.png') }}" alt="logo Group2">
                            </a>
                            {{-- {{$user->username}} --}}
                            <div class="dropdown-menu dropdown-nav nav-sign-out-bar bg-light">
                                <a class="dropdown-item" href="{{ route('displayWatchlist',['id'=> Auth::user()->id]) }}">Watchlist</a>
                                <a class="dropdown-item" href="#">My lists</a>
                                <a class="dropdown-item" href="#">Settings</a>
                                <div class="dropdown-divider"></div>
                                <a class="nav-link" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                    {{-- <i class="fa fa-sign-out"></i>{{ __('Logout') }}</a> --}}
                                    <i class="fa fa-sign-out"></i>Logout</a>
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
