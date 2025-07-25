<nav id="navbar" class="navbar">
    <ul>
         <li><a href="{{ route('home') }}">Home</a></li>
       <li><a href="{{ route('about') }}">About</a></li>
       <li><a href="{{ route('projects') }}">Projects</a></li>
         <li class="dropdown"><a href="#"><span>Blog</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
             <ul>
               {{-- <li><a href="{{ route('blog.index') }}">Blog</a></li> --}}
               {{-- <li><a href="{{ route('publications') }}">Publications</a></li> --}}
             </ul>
        </li>
       <li><a href="#">Gallery</a></li>

         <li class="dropdown"><a href="#"><span>Events</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
             <ul>
               <li><a href="{{ route('geospark') }}">Geo_spark</a></li>
               <li><a href="{{ route('mapathons') }}">Mapathons</a></li>
             </ul>
        </li>
        <li class="dropdown"><a href="#"><span>Programs</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="{{ route('fpt') }}">FPT</a></li>
              <li><a href="{{ route('shortcourses') }}">GIS Short course</a></li>
              <li><a href="{{ route('mentorship') }}">GIS Mentorship</a></li>

            </ul>
       </li>
        @if (optional(Auth::user())->is_admin)
        <li class="dropdown"><a href="#"><span>LOGGED IN</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="/admin/dashboard">Dashboard</a></li>
          </li>
            </ul>
       </li>
        @endif

         <li><a class="btn btn-lg btn-outline-success px-3 py-2" href="#">Donate</a></li>


     </ul>
 </nav>
