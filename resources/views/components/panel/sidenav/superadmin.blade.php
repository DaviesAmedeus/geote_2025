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

    <!-- Event Management -->
    @php
        $eventActive = request()->is('super-admin/event*');
    @endphp
    <div class="dash-nav-dropdown {{ $eventActive ? 'show' : '' }}">
        <a href="#!"
            class="dash-nav-item dash-nav-dropdown-toggle {{ $eventActive ? 'text-primary' : 'text-light' }}">
            <i class="far fa-newspaper"></i> Events
        </a>
        <div class="dash-nav-dropdown-menu" style="{{ $eventActive ? 'display: block;' : '' }}">
            <a href="#"
                class="dash-nav-dropdown-item {{ request()->is('super-admin/event/posts*') ? 'active' : '' }}">
                All Posts
            </a>
            <a href="#"
                class="dash-nav-dropdown-item {{ request()->is('super-admin/event/posts*') ? 'active' : '' }}">
                All Posts
            </a>
            <a href="#"
                class="dash-nav-dropdown-item {{ request()->is('super-admin/event/categories*') ? 'active' : '' }}">
                Categories
            </a>
            <a href="#"
                class="dash-nav-dropdown-item {{ request()->is('super-admin/event/comments*') ? 'active' : '' }}">
                Comments
            </a>
        </div>
    </div>


     <!-- Programs Management -->
    @php
        $programActive = request()->is('super-admin/program*');
    @endphp
    <div class="dash-nav-dropdown {{ $programActive ? 'show' : '' }}">
        <a href="#!"
            class="dash-nav-item dash-nav-dropdown-toggle {{ $programActive ? 'text-primary' : 'text-light' }}">
            <i class="far fa-newspaper"></i> Programs
        </a>
        <div class="dash-nav-dropdown-menu" style="{{ $programActive ? 'display: block;' : '' }}">
            <a href="#"
                class="dash-nav-dropdown-item {{ request()->is('super-admin/program/posts*') ? 'active' : '' }}">
                All Posts
            </a>
            <a href="#"
                class="dash-nav-dropdown-item {{ request()->is('super-admin/program/posts*') ? 'active' : '' }}">
                All Posts
            </a>
            <a href="#"
                class="dash-nav-dropdown-item {{ request()->is('super-admin/program/categories*') ? 'active' : '' }}">
                Categories
            </a>
            <a href="#"
                class="dash-nav-dropdown-item {{ request()->is('super-admin/program/comments*') ? 'active' : '' }}">
                Comments
            </a>
        </div>
    </div>





    <!-- Projects -->
    @php
        $projectsActive = request()->is('super-admin/projects*');
    @endphp
    <div class="dash-nav-dropdown {{ $projectsActive ? 'show' : '' }}">
        <a href="#!"
            class="dash-nav-item dash-nav-dropdown-toggle {{ $projectsActive ? 'text-primary' : 'text-light' }}">
            <i class="fas fa-project-diagram"></i> Projects
        </a>
        <div class="dash-nav-dropdown-menu" style="{{ $projectsActive ? 'display: block;' : '' }}">
            <a href="/super-admin/projects/create"
                class="dash-nav-dropdown-item {{ request()->is('super-admin/projects/create') ? 'bg-primary' : 'text-light' }}">
                Add Project +
            </a>
            <a href="/super-admin/projects"
                class="dash-nav-dropdown-item  {{ request()->is('super-admin/projects') ? 'bg-primary' : 'text-light' }}">
                All Projects
            </a>

            <a href="/super-admin/projects/trashed"
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

    <!-- Settings -->
    <a href="#"
        class="dash-nav-item {{ request()->is('super-admin/settings*') ? 'text-primary' : 'text-light' }}">
        <i class="fas fa-cog"></i> Settings
    </a>
</nav>
