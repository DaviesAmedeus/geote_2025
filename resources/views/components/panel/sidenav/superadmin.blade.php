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

    <!-- Blog Management -->
    @php
        $blogActive = request()->is('super-admin/blog*');
    @endphp
    <div class="dash-nav-dropdown {{ $blogActive ? 'show' : '' }}">
        <a href="#!"
            class="dash-nav-item dash-nav-dropdown-toggle {{ $blogActive ? 'text-primary' : 'text-light' }}">
            <i class="far fa-newspaper"></i> Blog
        </a>
        <div class="dash-nav-dropdown-menu" style="{{ $blogActive ? 'display: block;' : '' }}">
            <a href="#"
                class="dash-nav-dropdown-item {{ request()->is('super-admin/blog/posts*') ? 'active' : '' }}">
                All Posts
            </a>
            <a href="#"
                class="dash-nav-dropdown-item {{ request()->is('super-admin/blog/posts*') ? 'active' : '' }}">
                All Posts
            </a>
            <a href="#"
                class="dash-nav-dropdown-item {{ request()->is('super-admin/blog/categories*') ? 'active' : '' }}">
                Categories
            </a>
            <a href="#"
                class="dash-nav-dropdown-item {{ request()->is('super-admin/blog/comments*') ? 'active' : '' }}">
                Comments
            </a>
        </div>
    </div>


     <!-- Publications Management -->
    @php
        $blogActive = request()->is('super-admin/blog*');
    @endphp
    <div class="dash-nav-dropdown {{ $blogActive ? 'show' : '' }}">
        <a href="#!"
            class="dash-nav-item dash-nav-dropdown-toggle {{ $blogActive ? 'text-primary' : 'text-light' }}">
            <i class="far fa-file-alt"></i> Publications
        </a>
        <div class="dash-nav-dropdown-menu" style="{{ $blogActive ? 'display: block;' : '' }}">
            <a href="#"
                class="dash-nav-dropdown-item {{ request()->is('super-admin/blog/posts*') ? 'active' : '' }}">
                All Posts
            </a>
            <a href="#"
                class="dash-nav-dropdown-item {{ request()->is('super-admin/blog/posts*') ? 'active' : '' }}">
                All Posts
            </a>
            <a href="#"
                class="dash-nav-dropdown-item {{ request()->is('super-admin/blog/categories*') ? 'active' : '' }}">
                Categories
            </a>
            <a href="#"
                class="dash-nav-dropdown-item {{ request()->is('super-admin/blog/comments*') ? 'active' : '' }}">
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

    <!-- Settings -->
    <a href="#"
        class="dash-nav-item {{ request()->is('super-admin/settings*') ? 'text-primary' : 'text-light' }}">
        <i class="fas fa-cog"></i> Settings
    </a>
</nav>
