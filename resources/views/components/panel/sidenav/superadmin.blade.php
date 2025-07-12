<nav class="dash-nav-list">
    <!-- Dashboard -->
    <a href="/super-admin/dashboard"
        class="{{ request('/super-admin/dashboard') ? 'text-primary' : 'text-light' }} dash-nav-item">
        <i class="fas fa-home"></i> Dashboard
    </a>

    <!-- User Management -->
    <div class="dash-nav-dropdown">
        <a href="#!" class="dash-nav-item dash-nav-dropdown-toggle">
            <i class="fas fa-users-cog"></i> UserManagement
        </a>
        <div class="dash-nav-dropdown-menu">
            <a href="/super-admin/users" class="dash-nav-dropdown-item">
                All Users
            </a>
            <a href="#" class="dash-nav-dropdown-item">
                Staff
            </a>
            <a href="#" class="dash-nav-dropdown-item">
                Members
            </a>
            <a href="#" class="dash-nav-dropdown-item">
                Roles/Permissions
            </a>
        </div>
    </div>

    <!-- Blog Management -->
    <div class="dash-nav-dropdown">
        <a href="#!" class="dash-nav-item dash-nav-dropdown-toggle">
            <i class="fas fa-blog"></i> Blog
        </a>
        <div class="dash-nav-dropdown-menu">
            <a href="/super-admin/blog/posts" class="dash-nav-dropdown-item">
                All Posts
            </a>
            <a href="#" class="dash-nav-dropdown-item">
                Categories
            </a>
            <a href="#" class="dash-nav-dropdown-item">
                Comments
            </a>
        </div>
    </div>

    <!-- Projects -->
    <div class="dash-nav-dropdown">
        <a href="#!" class="dash-nav-item dash-nav-dropdown-toggle">
            <i class="fas fa-project-diagram"></i> Projects
        </a>
        <div class="dash-nav-dropdown-menu">
             <a href="/super-admin/projects/create" class="dash-nav-dropdown-item"> <!--/super-admin/projects/create -->
                New Project +
        </a>
            <a href="/super-admin/projects" class="dash-nav-dropdown-item">
                 All Projects
            </a>
            <a href="#" class="dash-nav-dropdown-item">
               Project Categories
            </a>
            <a href="#" class="dash-nav-dropdown-item">
               Archived
            </a>
        </div>
    </div>

    <!-- Settings (Optional) -->
    <a href="#"
        class="dash-nav-item {{ request('/super-admin/settings') ? 'text-primary' : 'text-light' }}">
        <i class="fas fa-cog"></i> Settings
    </a>
</nav>
