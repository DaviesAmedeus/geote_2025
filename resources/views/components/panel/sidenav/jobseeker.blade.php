<nav class="dash-nav-list">
    <a href="/job-seeker/dashboard"
        class="{{ request('/job-seeker/dashboard') ? 'text-primary' : 'text-light' }} dash-nav-item">
        <i class="fas fa-home"></i> Dashboard </a>

    <div class="dash-nav-dropdown">
        <a href="#!" class="dash-nav-item dash-nav-dropdown-toggle">
            <i class="fas fa-user"></i> My Profile </a>
        <div class="dash-nav-dropdown-menu">
            <a href="/job-seeker/profile"
                class="dash-nav-dropdown-item" >Personal Details</a>
            <a href="http://hackerthemes.com" class="dash-nav-dropdown-item">Rusume Upload</a>
        </div>
    </div>



    <a href="/job-seeker/dashboard"
        class="{{ request('/job-seeker/dashboard') ? 'text-primary' : 'text-light' }} dash-nav-item">
        <i class="fas fa-file-alt"></i> My Applications </a>

            <a href="/job-seeker/dashboard"
        class="{{ request('/job-seeker/dashboard') ? 'text-primary' : 'text-light' }} dash-nav-item">
        <i class="fas fa-id-card"></i> Resume Builder </a>



</nav>
