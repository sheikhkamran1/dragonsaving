<nav class="navbar navbar-expand-lg" style="background-color: #00aeef !important">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-auto">
                @foreach ($menus as $menu)
                    <li class="nav-item dropdown">
                        @if (count($menu->posts) > 0)
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                {{ $menu->name }}
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        @else
                            <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                {{ $menu->name }}
                            </a>
                        @endif
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</nav>
{{--
<div class="container-fluid navbar navbar-expand-lg" style="background-color: #00aeef">
    <div class="container">
        <ul class="nav justify-content-center align-items-center">
           @foreach ($menus as $menu)
           <li class="nav-item dropdown">
            @if (count($menu->pages) > 0)
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{ $menu->name }}
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            @else
            <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{ $menu->name }}
              </a>
            @endif
          </li>
           @endforeach

        </ul>

    </div>
</div> --}}
