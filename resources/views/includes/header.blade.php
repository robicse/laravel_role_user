<nav class="navbar navbar-inverse">
    <div class="container">
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li @if (Request::segment(1) == '') class="active" @endif><a href="{{URL::to('')}}">Main Page</a></li>
                <li @if (Request::segment(1) == 'author') class="active" @endif ><a href="{{ URL::to('/author') }}">Author</a></li>
                <li @if (Request::segment(1) == 'admin') class="active" @endif ><a href="{{ URL::to('/admin') }}">Admin</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">


                @if (Auth::guest())
                    <li><a href="{{ URL::to('/login') }}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    <li><a href="{{ URL::to('/signup') }}"><span class="glyphicon glyphicon-user"></span> sign up</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->first_name."(".Auth::user()->last_name.")" }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>