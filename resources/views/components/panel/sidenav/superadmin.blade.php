<nav class="dash-nav-list">
    <!-- Dashboard -->
    <a href="/super-admin/dashboard"
        class="{{ request()->is('super-admin/dashboard') ? 'bg-primary' : 'text-light' }} dash-nav-item">
        <i class="fas fa-home"></i> Dashboard
    </a>

    <!-- User Management -->
    @php
        $userManagementActive =
            request()->is('super-admin/users*') ||
            request()->is('super-admin/staff*') ||
            request()->is('super-admin/members*') ||
            request()->is('super-admin/roles*');
    @endphp
    <div class="dash-nav-dropdown {{ $userManagementActive ? 'show' : '' }}">
        <a href="#!"
            class="dash-nav-item dash-nav-dropdown-toggle {{ $userManagementActive ? 'text-primary' : 'text-light' }}">
            <i class="fas fa-users-cog"></i> UserManagement
        </a>
        <div class="dash-nav-dropdown-menu" style="{{ $userManagementActive ? 'display: block;' : '' }}">
            <a href="#"
                class="dash-nav-dropdown-item {{ request()->is('super-admin/users/create') ? 'bg-primary' : 'text-light' }}">
                Add User +
            </a>
            <a href="/super-admin/users"
                class="dash-nav-dropdown-item {{ request()->is('super-admin/users/staff') ? 'bg-primary' : 'text-light' }}">
                Staffs
            </a>
            <a href="#"
                class="dash-nav-dropdown-item {{ request()->is('super-admin/users/members') ? 'bg-primary' : 'text-light' }}">
                Members
            </a>
            <a href="#" class="dash-nav-dropdown-item {{ request()->is('super-admin/staff*') ? 'active' : '' }}">
                Staff
            </a>
            <a href="#"
                class="dash-nav-dropdown-item {{ request()->is('super-admin/members*') ? 'active' : '' }}">
                Members
            </a>
            <a href="#" class="dash-nav-dropdown-item {{ request()->is('super-admin/roles*') ? 'active' : '' }}">
                Roles/Permissions
            </a>
        </div>
    </div>

    <div style="border-bottom: 1px solid #6d6d6d; margin: 10px 10px; "></div>



    <!-- Event Management -->
    @php
        $eventsActive = request()->is('super-admin/events*');
        $trashedActive = request()->is('super-admin/events/trashed*');
    @endphp
    <div class="dash-nav-dropdown {{ $eventsActive ? 'show' : '' }}">
        <a href="#!"
            class="dash-nav-item dash-nav-dropdown-toggle {{ $eventsActive ? 'text-primary' : 'text-light' }}">
            <i class="fas fa-calendar-check"></i> Events
        </a>
        <div class="dash-nav-dropdown-menu" style="{{ $eventsActive ? 'display: block;' : '' }}">


            <div class="dash-nav-dropdown  {{ $eventsActive ? 'show' : '' }} ">
                <a href="#"
                    class="dash-nav-dropdown-item dash-nav-dropdown-toggle {{ $eventsActive ? 'text-primary' : 'text-light' }}">
                    <i class="far fa-dot-circle  pr-2"></i>Event posts</a>
                <div class="dash-nav-dropdown-menu">
                    <a href="{{ route('superadmin.events.all.mapathons') }}"
                        class="dash-nav-dropdown-item {{ request()->is('super-admin/events/all/mapathons') ? 'bg-primary' : 'text-light' }}"><i class="far fa-dot-circle  pr-2"></i>Mapathons</a>
                    <a href="{{ route('superadmin.events.all.geosparks') }}"
                        class="dash-nav-dropdown-item {{ request()->is('super-admin/events/all/geosparks') ? 'bg-primary' : 'text-light' }}"><i class="far fa-dot-circle  pr-2"></i>Geosparks</a>

                </div>
            </div>


            <a href="{{ route('superadmin.events.categories') }}"
                class="dash-nav-dropdown-item  {{ request()->is('super-admin/events/categories') ? 'bg-primary' : 'text-light' }}">
              <i class="far fa-dot-circle  pr-2"></i> Categories
            </a>




            <div class="dash-nav-dropdown  {{ $trashedActive ? 'show' : '' }}">
                <a href="#"
                    class="dash-nav-dropdown-item dash-nav-dropdown-toggle {{ $eventsActive ? 'text-primary' : 'text-light' }}"><i class="far fa-dot-circle  pr-2"></i>Trashed</a>
                <div class="dash-nav-dropdown-menu">
                    <a href="{{ route('superadmin.events.trashed.mapathons') }}"
                        class="dash-nav-dropdown-item {{ request()->is('super-admin/events/trashed/mapathons') ? 'bg-primary' : 'text-light' }}"><i class="far fa-dot-circle  pr-2"></i>Mapathons</a>
                </div>
                <div class="dash-nav-dropdown-menu">
                    <a href="{{ route('superadmin.events.trashed.geosparks') }}"
                        class="dash-nav-dropdown-item {{ request()->is('super-admin/events/trashed/geosparks') ? 'bg-primary' : 'text-light' }}"><i class="far fa-dot-circle  pr-2"></i>Geosparks</a>
                </div>
            </div>
        </div>


        <!-- Programs Management -->
        @php
            $programActive = request()->is('super-admin/program*');
        @endphp
        <div class="dash-nav-dropdown {{ $programActive ? 'show' : '' }}">
            <a href="#!"
                class="dash-nav-item dash-nav-dropdown-toggle {{ $programActive ? 'text-primary' : 'text-light' }}">
                <i class="fas fa-puzzle-piece"></i> Programs
            </a>
            <div class="dash-nav-dropdown-menu">

                 <div class="dash-nav-dropdown">
                <a href="#"
                    class="dash-nav-dropdown-item dash-nav-dropdown-toggle"><i class="far fa-dot-circle  pr-2"></i>Program posts</a>
                <div class="dash-nav-dropdown-menu">
                    <a href=""
                        class="dash-nav-dropdown-item"><i class="far fa-dot-circle  pr-2"></i>Mapathons</a>
                    <a href=""
                        class="dash-nav-dropdown-item"><i class="far fa-dot-circle  pr-2"></i>Geosparks</a>

                </div>
            </div>


                <a href="#"
                    class="dash-nav-dropdown-item {{ request()->is('super-admin/program/posts*') ? 'active' : '' }}">
                   <i class="far fa-dot-circle  pr-2"></i> All Posts
                </a>
                <a href="#"
                    class="dash-nav-dropdown-item {{ request()->is('super-admin/program/categories*') ? 'active' : '' }}">
                    <i class="far fa-dot-circle  pr-2"></i> Categories
                </a>
                <a href="#"
                    class="dash-nav-dropdown-item {{ request()->is('super-admin/program/comments*') ? 'active' : '' }}">
                    <i class="far fa-dot-circle  pr-2"></i> Comments
                </a>
            </div>
        </div>





        <!-- Projects Management -->
        @php
            $projectsActive = request()->is('super-admin/projects*');
        @endphp
        <div class="dash-nav-dropdown {{ $projectsActive ? 'show' : '' }}">
            <a href="#!"
                class="dash-nav-item dash-nav-dropdown-toggle {{ $projectsActive ? 'text-primary' : 'text-light' }}">
                <i class="fas fa-project-diagram"></i> Project Posts
            </a>
            <div class="dash-nav-dropdown-menu" style="{{ $projectsActive ? 'display: block;' : '' }}">
                <a href="{{ route('superadmin.projects.create') }}"
                    class="dash-nav-dropdown-item {{ request()->is('super-admin/projects/create') ? 'bg-primary' : 'text-light' }}">
                    Add +
                </a>
                <a href="{{ route('superadmin.projects.all') }}"
                    class="dash-nav-dropdown-item  {{ request()->is('super-admin/projects') ? 'bg-primary' : 'text-light' }}">
                    All
                </a>

                <a href="{{ route('superadmin.projects.trashed') }}"
                    class="dash-nav-dropdown-item {{ request()->is('super-admin/projects/trashed') ? 'bg-primary' : 'text-light' }}">
                    Trashed
                </a>
            </div>
        </div>




        <!-- Publications Management -->
        @php
            $publicationActive = request()->is('super-admin/publication*');
        @endphp
        <div class="dash-nav-dropdown {{ $publicationActive ? 'show' : '' }}">
            <a href="#!"
                class="dash-nav-item dash-nav-dropdown-toggle {{ $publicationActive ? 'text-primary' : 'text-light' }}">
                <i class="far fa-file-alt"></i> Publications
            </a>
            <div class="dash-nav-dropdown-menu" style="{{ $publicationActive ? 'display: block;' : '' }}">
                <a href="#"
                    class="dash-nav-dropdown-item {{ request()->is('super-admin/publication/posts*') ? 'active' : '' }}">
                    All Posts
                </a>
                <a href="#"
                    class="dash-nav-dropdown-item {{ request()->is('super-admin/publication/posts*') ? 'active' : '' }}">
                    All Posts
                </a>
                <a href="#"
                    class="dash-nav-dropdown-item {{ request()->is('super-admin/publication/categories*') ? 'active' : '' }}">
                    Categories
                </a>
                <a href="#"
                    class="dash-nav-dropdown-item {{ request()->is('super-admin/publication/comments*') ? 'active' : '' }}">
                    Comments
                </a>
            </div>
        </div>

        <div style="border-bottom: 1px solid #6d6d6d; margin: 10px 10px; "></div>

        <!-- Settings -->
        <a href="#"
            class="dash-nav-item {{ request()->is('super-admin/settings*') ? 'text-primary' : 'text-light' }}">
            <i class="fas fa-cog"></i> Settings
        </a>

        <a href="/"
            class="dash-nav-item {{ request()->is('super-admin/settings*') ? 'text-primary' : 'text-light' }}">
            <i class="fas fa-globe"></i> Website
        </a>
</nav>
