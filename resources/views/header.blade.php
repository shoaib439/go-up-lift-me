<!--================ Start Header Menu Area =================-->
<header class="header_area">
    <div class="main_menu">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href={{url('/')}}><img class="img-fluid" src="{{ asset('public/img/Logo-on-light.png') }} " width="120px" height="120px" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Discover</a>
                                <ul class="dropdown-menu">

                                    <li class="nav-item"><a class="nav-link" href="event-details.html">Option 1</a>
                                    <li class="nav-item"><a class="nav-link" href="elements.html">Option 2</a></li>
                                </ul>
                            </li>
                            <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Fundraise For</a>
                                <ul class="dropdown-menu">

                                    <li class="nav-item"><a class="nav-link" href="event-details.html">Option 1</a>
                                    <li class="nav-item"><a class="nav-link" href="elements.html">Option 2</a></li>
                                    <li class="nav-item"><a class="nav-link" href="elements.html">Option 2</a></li>
                                    <li class="nav-item"><a class="nav-link" href="elements.html">Option 2</a></li>
                                    <li class="nav-item"><a class="nav-link" href="elements.html">Option 2</a></li>
                                    <li class="nav-item"><a class="nav-link" href="elements.html">Option 2</a></li>
                                </ul>
                            </li>

                            <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">How it Works</a>
                                <ul class="dropdown-menu">

                                    <li class="nav-item"><a class="nav-link" href="event-details.html">Event Details</a>
                                    <li class="nav-item"><a class="nav-link" href="elements.html">Elements</a></li>
                                </ul>
                            </li>
                            <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Plan Your Fundraise</a>
                                <ul class="dropdown-menu">

                                    <li class="nav-item"><a class="nav-link" href="single-blog.html">Team Fundraising</a></li>
                                    <li class="nav-item"><a class="nav-link" href="single-blog.html">Fund Raising Tips</a></li>
                                    <li class="nav-item"><a class="nav-link" href="single-blog.html">Fundraising Ideas</a></li>
                                </ul>
                            </li>


                            {{--//////////--}}

                            @guest
                                <li class="nav-item"><a class="nav-link" href="{{url('Sign-in')}}">Sign in</a></li>
                            @elseif( Auth::guard() )
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
                            @endif
                                {{--////////--}}

                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>
<!--================ End Header Menu Area =================-->