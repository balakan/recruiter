<div id="widemenu" class="top-bar-container" data-sticky-container>
    <div class="sticky" data-options="marginTop:0;" data-sticky data-sticky-on="small" style="width:100%;">
        <div class="top-bar">
            <div class="top-bar-left">
                <a href="{{ url('/') }}">
                    {{--{{ config('app.name', 'Laravel') }}--}}
                    <img src="{{ URL::to('/') }}/images/recruitment-header-logo.png" alt="Logo" style="height: 36px">
                </a>
            </div>

            <div class="top-bar-right">
                <ul class="dropdown menu" data-dropdown-menu>

                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="has-submenu">
                            <a href="#">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="menu submenu vertical" data-submenu>
                                <li>
                                    <a href="{{ url('/logout') }}"
                                       onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
</div>