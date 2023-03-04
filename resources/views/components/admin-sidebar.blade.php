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
            <a href="#" class="menu-toggle nav-link has-dropdown"><i
                    data-feather="briefcase"></i><span>Master</span></a>
            <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{ route('profile.index') }}">Profile</a></li>
                <li><a class="nav-link" href="{{ route('menu.index') }}">Menu</a></li>
                <li><a class="nav-link" href="{{ route('post.index') }}">Posts</a></li>
                <li><a class="nav-link" href="{{ route('about.index') }}">About us</a></li>
                <li><a class="nav-link" href="{{ route('carousel.index') }}">Carousel</a></li>
                <li><a class="nav-link" href="{{ route('scheme.index') }}">Scheme</a></li>
                <li><a class="nav-link" href="{{ route('service.index') }}">Service</a></li>
                <li><a class="nav-link" href="{{ route('message.index') }}">Message</a></li>
                <li><a class="nav-link" href="{{ route('gallery.index') }}">Gallery</a></li>
                <li><a class="nav-link" href="{{ route('event.index') }}">Event</a></li>
                <li><a class="nav-link" href="{{ route('download.index') }}">Download</a></li>
                <li><a class="nav-link" href="{{ route('notice.index') }}">Notice</a></li>
            </ul>
        </li>
    </ul>
</aside>
