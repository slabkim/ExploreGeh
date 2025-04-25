<nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
    <div class="container">
        <a class="navbar-brand" href="#"><img src="{{ asset('img/Logo_ExploreGeh.png') }}" alt="Logo"
                height="60"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item active">
                    <a class="nav-link {{ ($title ?? '') === 'Home' ? 'active' : '' }}" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($title ?? '') === 'Destination' ? 'active' : '' }}"
                        href="/destinasi">Destination</a>
                </li>
                <form class="d-flex align-items-center rounded-pill px-3 py-1 shadow-sm"
                    style="background-color: white;">
                    <i class="bi bi-search text-muted me-2"></i>
                    <input class="form-control border-0 shadow-none" type="search" placeholder="Search"
                        aria-label="Search" style="width: 150px;">
                </form>
            </ul>
        </div>
    </div>
</nav>
