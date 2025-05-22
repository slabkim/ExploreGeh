<nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
    <div class="container">

        <a class="navbar-brand" href="/">
            <img src="{{ asset('img/Logo_ExploreGeh.png') }}" alt="Logo" height="50">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto me-3">
                <li class="nav-item">
                    <a class="nav-link {{ ($title ?? '') === 'Home' ? 'active' : '' }}" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($title ?? '') === 'Destination' ? 'active' : '' }}"
                        href="/destinasi">Destination</a>
                </li>
            </ul>

            <form class="d-flex" role="search" action="{{ route('destinasi.index') }}" method="GET">
                <div class="input-group rounded-pill shadow-sm overflow-hidden">
                    <span class="input-group-text bg-white border-0">
                        <i class="bi bi-search text-muted"></i>
                    </span>
                    <input type="search" name="search" class="form-control border-0" placeholder="Search"
                        aria-label="Search" value="{{ request('search') }}">
                </div>
            </form>

        </div>
    </div>
</nav>
