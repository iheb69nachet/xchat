<!-- Header -->
<header>
    <!-- Header desktop -->
    <div class="container-menu-desktop">
        <div class="wrap-menu-desktop">
            <nav class="limiter-menu-desktop d-flex bd-highlight container">

                <!-- Logo desktop -->
                <a href="#" class="logo1 p-2 w-100 bd-highlight">
                    <span>X.</span>Chat
                </a>

                <!-- Menu desktop -->
                <div class="menu-desktop ">

                    <!-- Icon header -->
                    <div class="wrap-icon-header flex-r-m ">
                         @guest
                                <a class="btn btn-outline-primary btn_login js-show-modal1" role="button" aria-disabled="true" href="#">{{ __('Login') }}</a>

                        @else
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ Auth::user()->nom }}
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                @if(auth()->user()->is_admin ==NULL)
                                    <a class="dropdown-item" href="" data-toggle="modal" data-target="#edit_profile" data-nom="{{Auth::user()->nom}}"
                                        onclick="localStorage.setItem('photos',(JSON.parse(`{{ json_encode($phs =\App\Photos::where('user_id',Auth::user()->id)->pluck('user_imgs')) }}`)))"
                                        data-id="{{Auth::user()->id}}"
                                        data-age="{{\Carbon\Carbon::parse(Auth::user()->dtn)->diff(\Carbon\Carbon::now())->format('%y ans')}}">
                                        Profile
                                    </a>
                                    <a class="dropdown-item" href="/chatify/{{Auth::user()->id}}">
                                        Messages
                                    </a>
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
                            </div>
                        @endguest
                    </div>

            </nav>
            </div>
        </div>

        <!-- Header Mobile -->
        <div class="wrap-header-mobile">
            <!-- Logo moblie -->
            <div class="logo-mobile">
                <a href="#" class="logo1 p-2 w-100 bd-highlight">
                    <span>X.</span>Chat
                </a>
            </div>

            <!-- Icon header -->

            <!-- Button show menu -->
            <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
                <span class="hamburger-box">
                <span class="hamburger-inner"></span>
                </span>
            </div>
        </div>


        <!-- Menu Mobile -->
        <div class="menu-mobile">
            <ul class="main-menu-m">
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

        <!-- Modal Search -->
        <div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
            <div class="container-search-header">
                <button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
                <img src="images/icons/icon-close2.png" alt="CLOSE">
            </button>

                <form class="wrap-search-header flex-w p-l-15">
                    <button class="flex-c-m trans-04">
                    <i class="zmdi zmdi-search"></i>
                </button>
                    <input class="plh3" type="text" name="search" placeholder="Search...">
                </form>
            </div>
        </div>
</header>
