<nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand">Info Loker</a>
        <form class="d-flex" method="GET" action="{{ route('jobs.search') }}">
            <input class="form-control me-2" type="search" placeholder="Search" name="keyword" aria-label="Search">
            <button class="btn btn-outline-success me-3" type="submit">Search</button>
            <a href="{{ route('Profile.profil') }}" class="profile"><i class="fa-solid fa-user"></i></a>
        </form>
    </div>
</nav>
