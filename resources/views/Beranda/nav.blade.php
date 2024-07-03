<nav class="navbar navbar-light" style="background: #ACE2E1">
    <div class="container-fluid" style="margin:0px; height:40px">
        <a class="navbar-brand" style="margin-top:-15px;">Info Loker</a>
        <form class="d-flex" method="GET" action="{{ route('jobs.search') }}" >
            @auth
                {{-- Cek apakah pengguna adalah admin --}}
                @if(auth()->user()->is_admin)
                    <button type="button" class="btn btn-primary mx-5" onclick="create()">Tambah</button> 
                @endif
            @endauth
            <input class="form-control me-2" type="search" placeholder="Search" name="keyword" aria-label="Search">
            <button class="btn btn-outline-primary me-3" type="submit">Search</button>
            <a href="{{ route('Profile.profil') }}" class="profile"><i class="fa-solid fa-user"></i></a>
        </form>
    </div>
</nav>

