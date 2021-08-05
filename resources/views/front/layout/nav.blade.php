<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
    <a class="navbar-brand" href="#">Pegotec</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            @php
                $menus = \App\Models\Menu::latest()->get();
            @endphp    
            @foreach ($menus as $menu)
                <li class="nav-item">
                    <a class="nav-link" href="/page/{{ $menu->page->slug }}">{{ $menu->page->title }}</a>
                </li>
            @endforeach
        </ul>
        <div class="form-inline mt-2 mt-md-0">
            @if (Auth::guest())
            <button class="btn btn-outline-success my-2 my-sm-0">
                <a href="/login">
                    Login
                </a>
            </button>
            <button class="btn btn-outline-primary my-2 my-sm-0 ml-2">
                <a href="/register">
                    Register
                </a>
            </button>
            @else 
            @if (strtolower(Auth::user()->role) == "admin")
            <button class="btn btn-outline-primary my-2 my-sm-0 ml-2">
                <a href="/dashboard">
                    Dashboard
                </a>
            </button>
            @endif
            <button class="btn btn-outline-danger my-2 my-sm-0">
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </button>
            @endif
        </div>
    </div>
</nav>