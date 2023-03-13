<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Core</div>
                <a class="nav-link {{ Request::is('admin/dashboard') ? 'active' : '' }}"
                    href="{{ route('admin.dashboard') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <div class="sb-sidenav-menu-heading">Interface</div>
                <a class="nav-link {{ Request::is('admin/about/view-about') || Request::is('admin/about/edit-about') ? 'active' : '' }}"
                    href="{{ route('admin.view-about') }}">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-user"></i></div>
                    About Me
                </a>

                <a class="nav-link {{ Request::is('admin/logo-fav') ? 'active' : '' }}"
                    href="{{ route('admin.logo-fav') }}">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-gear"></i></div>
                    Logo & Favicon
                </a>

                <a class="nav-link {{ Request::is('admin/skills/view-skills') || Request::is('admin/skills/edit-skills/*') ? 'active' : '' }}"
                    href="{{ route('admin.view-skills') }}">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-medal"></i></div>
                    Skills
                </a>

                <a class="nav-link {{ Request::is('admin/education/create-edu') || Request::is('admin/education/edit-edu/*') ? 'active' : '' }}"
                    href="{{ route('admin.create-edu') }}">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-user-graduate"></i></div>
                    Education
                </a>
                <a class="nav-link {{ Request::is('admin/experience/create-exp') || Request::is('admin/experience/edit-exp/*') ? 'active' : '' }}"
                    href="{{ route('admin.create-exp') }}">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-rocket"></i></div>
                    Experience
                </a>
                <a class="nav-link {{ Request::is('admin/service/create-service') || Request::is('admin/service/edit-service/*') ? 'active' : '' }}"
                    href="{{ route('admin.create-service') }}">
                    <div class="sb-nav-link-icon"><i class="fa fa-list"></i></div>
                    Services
                </a>

                <a class="nav-link {{ Request::is('admin/portfolio/create-portfolio') || Request::is('admin/portfolio/edit-portfolio/*') ? 'active' : '' }}"
                    href="{{ route('admin.create-portfolio') }}">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-briefcase"></i></div>
                    Portfolio
                </a>
                <a class="nav-link {{ Request::is('admin/blog/create-blog') || Request::is('admin/blog/edit-blog/*') ? 'active' : '' }}"
                    href="{{ route('admin.create-blog') }}">
                    <div class="sb-nav-link-icon"><i class="fa-brands fa-readme"></i></div>
                    Blogs
                </a>
                <a class="nav-link {{ Request::is('admin/contact/view-contact') ? 'active' : '' }}"
                    href="{{ route('admin.view-contact') }}">
                    <div class="sb-nav-link-icon"><i class="fa fa-comments"></i></div>
                    Contact
                </a>
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            {{ Auth::user()->name }}
        </div>
    </nav>
</div>
