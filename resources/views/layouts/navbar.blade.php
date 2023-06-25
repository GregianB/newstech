{{-- @auth
    <div class="header-custom">
        <a href="/profile">Hello, {{ auth()->user()->name }}</a>
        |
        <a href="/logout">Logout</a>
    </div>
@else
    <div class="header-custom">
        <a href="/login">Login</a>
        |
        <a href="/register">Register</a>
    </div>
@endauth --}}

<nav class="navbar navbar-expand-sm navbar-custom">
    <div class="container-sm">
        <a class="navbar-brand" href="#">Xiaomi Community</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
            aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 navbar-nav-custom">
                @if (auth()->user()->level == 1)
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/admin">Data Berita</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link {{ request()->segment(1) === 'beranda' ? 'active' : '' }}" aria-current="page" href="/beranda">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->segment(1) === 'berita' ? 'active' : '' }}" href="/berita">Berita</a>
                    </li>
                @endif
            </ul>
            <form class="d-flex" role="search">
                <input type="text" class="form-control form-control-custom" placeholder="Cari" aria-label="Cari"
                    aria-describedby="addon-wrapping">
            </form>
            <div class="m-2"></div>
            <div class="dropdown">
                <div class="d-flex justify-content-center align-items-center dropdown-toggle" href="#"
                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <div class="avatar-custom">

                    </div>
                    <div class="avatar-user-custom">
                        &nbsp; {{ auth()->user()->name }}
                    </div>
                </div>

                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#"><i class="fa-solid fa-user fa-fw mr-4"></i>&nbsp;Profile</a></li>
                    <li><a class="dropdown-item logout" href="/logout"><i class="fa-solid fa-right-from-bracket fa-fw"></i>&nbsp;Logout</a></li>
                </ul>
            </div>
            {{-- <div class="d-flex justify-content-center align-items-center">
                <div class="avatar-custom">

                </div>
                <div class="avatar-user-custom">
                    {{ auth()->user()->name }}
                </div>
            </div> --}}
        </div>
    </div>
</nav>
