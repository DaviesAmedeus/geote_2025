<nav id="navbar" class="navbar">
    <ul>
        <li><a href="{{ route('home') }}" class="active">Home</a></li>
        <li><a href="{{ route('about') }}">About</a></li>
        <li><a href="{{ route('projects') }}">Projects</a></li>
        {{-- <li class="dropdown"><a href="#"><span>Blog</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
        <ul>
            <li><a href="">Blog</a></li>
            <li><a href="">Publications</a></li>
        </ul>
        </li> --}}

        <li class="dropdown"><a href="#"><span>Events</span> <i
                    class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
                <li><a href="{{ route('geosparks.index') }}">Geo_spark</a></li>
                <li><a href="{{ route('mapathons.index') }}">Mapathons</a></li>
            </ul>
        </li>
        <li class="dropdown"><a href="#"><span>Programs</span> <i
                    class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
                <li><a href="{{ route('fpt') }}">FPT</a></li>
                <li><a href="{{ route('shortcourses') }}">GIS Short course</a></li>
                <li><a href="{{ route('mentorship') }}">GIS Mentorship</a></li>
                <li><a href="{{ route('membership') }}">GeoTE Membership</a></li>

            </ul>
        </li>


        <li><a class="btn btn-lg btn-outline-success px-3 py-2" href="/donate">Donate</a></li>



        @auth
            <li class="dropdown"><a href="#" class="btn btn-outline-primary px-3 py-2"><span>LOGGED IN</span> <i
                        class="bi bi-chevron-down dropdown-indicator"></i></a>

                        <ul>
                @if (Auth::user()->hasRole('superAdmin'))

                    <li><a href="{{ route('superadmin.dashboard') }}">Dashboard</a></li>

                @endif

                <form action="/logout" method="POST">
                    @csrf
                    <li><button class="btn btn-outline-success ms-3 px-2" href="{{ route('logout') }}">Logout</button></li>
                </form>


                 </ul>

            </li>
        @endauth




    </ul>
</nav>
