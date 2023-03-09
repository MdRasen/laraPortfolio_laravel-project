<!-- Aside Start -->
<div class="aside">
    <div class="logo">
        <a href="{{ route('public.index') }}">
            <span>{{ $about ? $about->nickname[0] : 'A' }}</span>{{ $about ? ltrim($about->nickname, $about->nickname[0]) : 'amin' }}
        </a>
    </div>
    <div class="nav-toggler">
        <span></span>
    </div>
    <ul class="nav">
        <li>
            <a href="#home" class="active"><i class="fa fa-home"></i> Home</a>
        </li>
        <li>
            <a href="#about"><i class="fa fa-user"></i> About</a>
        </li>
        <li>
            <a href="#service"><i class="fa fa-list"></i> Services</a>
        </li>
        <li>
            <a href="#portfolio"><i class="fa fa-briefcase"></i> Portfolio</a>
        </li>
        <li>
            <a href="#blog"><i class="fa-brands fa-readme"></i> Blog</a>
        </li>
        <li>
            <a href="#contact"><i class="fa fa-comments"></i> Contact</a>
        </li>

    </ul>
</div>
<!-- Aside End -->
