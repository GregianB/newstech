@auth
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
@endauth

<nav class="navbar navbar-expand-sm navbar-custom">
    <div class="container-sm">
        <a class="navbar-brand" href="#">Xiaomi Community</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
            aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 navbar-nav-custom">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Berita</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input type="text" class="form-control form-control-custom" placeholder="Cari" aria-label="Cari"
                    aria-describedby="addon-wrapping">
            </form>
        </div>
    </div>
</nav>
