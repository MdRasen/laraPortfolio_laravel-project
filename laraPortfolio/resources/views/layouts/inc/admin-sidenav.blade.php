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
                <a class="nav-link {{ Request::is('admin/logo-fav') ? 'active' : '' }}"
                    href="{{ route('admin.logo-fav') }}">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-gear"></i></div>
                    Logo & Favicon
                </a>

                <a class="nav-link {{ Request::is('admin/about/view-about') ? 'active' : '' }}"
                    href="{{ route('admin.view-about') }}">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-user"></i></div>
                    About Me
                </a>

                <a class="nav-link {{ Request::is('admin/skills/view-skills') ? 'active' : '' }}"
                    href="{{ route('admin.view-skills') }}">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-medal"></i></div>
                    Skills
                </a>

                <a class="nav-link {{ Request::is('admin/education/create-edu') ? 'active' : '' }}" href="{{route('admin.create-edu')}}">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-user-graduate"></i></div>
                    Education
                </a>
                <a class="nav-link" href="#">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-rocket"></i></div>
                    Experience
                </a>
                <a class="nav-link" href="#">
                    <div class="sb-nav-link-icon"><i class="fa fa-list"></i></div>
                    Services
                </a>

                <a class="nav-link" href="#">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-briefcase"></i></div>
                    Portfolio
                </a>
                <a class="nav-link" href="#">
                    <div class="sb-nav-link-icon"><i class="fa-brands fa-readme"></i></div>
                    Blogs
                </a>
                <a class="nav-link" href="#">
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
