<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
        <a href="index.html"> <img alt="image" src="/assets/img/logo.png" class="header-logo" /> <span
                class="logo-name">Otika</span>
        </a>
    </div>
    <ul class="sidebar-menu">
        <li class="menu-header">Main</li>
        <li class="dropdown active">
            <a href="index.html" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
        </li>
        <li class="dropdown">
            <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="briefcase"></i><span>Master
                    Setup</span></a>
            <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{ route('profile.index') }}">Company Profile</a></li>
                <li><a class="nav-link" href="{{ route('menu.index') }}">Menu Setup</a></li>
            </ul>
        </li>
        <li><a class="nav-link" href="{{ route('about.index') }}"><i data-feather="briefcase"></i> About us</a></li>
        <li><a class="nav-link" href="{{ route('carousel.index') }}"><i class="fa fa-sliders" aria-hidden="true"></i> Carousel</a></li>

        <li class="dropdown">
            <a href="#" class="menu-toggle nav-link has-dropdown"><i class="fa fa-suitcase" aria-hidden="true"></i></i><span>Service</span></a>
            <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{ route('scheme.index') }}">Scheme</a></li>
                <li><a class="nav-link" href="{{ route('service.index') }}">Service</a></li>
            </ul>
        </li>
        <li><a class="nav-link" href="{{ route('post.index') }}"><i data-feather="briefcase"></i> Posts</a></li>
        <li><a class="nav-link" href="{{ route('gallery.index') }}"><i class="fa fa-camera-retro" aria-hidden="true"></i> Gallery</a></li>
        <li><a class="nav-link" href="{{ route('event.index') }}"><i data-feather="briefcase"></i> Event</a></li>
        <li><a class="nav-link" href="{{ route('download.index') }}"><i class="fa fa-download" aria-hidden="true"></i> Download</a></li>
        <li><a class="nav-link" href="{{ route('notice.index') }}"><i class="fa fa-comments" aria-hidden="true"></i> Notice</a></li>
        <li><a class="nav-link" href="{{ route('message.index') }}"><i class="fa fa-envelope" aria-hidden="true"></i> Message</a></li>


    </ul>
    </li>
    </ul>
</aside>
