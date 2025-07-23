 <div class="dash-nav dash-nav-dark ">
     <header>
         <a href="#!" class="menu-toggle">
             <i class="fas fa-bars"></i>
         </a>


         <a href="index.html" class="spur-logo"><i class="fas fa-bolt text-success"></i> <span>{{ Auth::user()->getRoleNames()->first() }}</span></a>
     </header>
     @if (Auth::user()->hasRole('superAdmin'))
         <x-panel.sidenav.superadmin />
     @endif

      @if (Auth::user()->hasRole('jobSeeker'))
         <x-panel.sidenav.jobseeker />
     @endif
 </div>
