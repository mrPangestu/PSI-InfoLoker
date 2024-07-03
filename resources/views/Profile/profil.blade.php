@extends('Beranda.beranda')

@section('css')
    <link rel="stylesheet" href="/css/style-profil.css">

@endsection

@section('content')
    <div class="profile-container">
        <div class="profile-header">
            <div class="profile-picture">
                <img src="/img/kabogoh abi.jpeg" alt="Profile Picture">
            </div>
            @auth
            <div class="profile-info">
                        @if(isset($user))
            <h1>{{ $user->name }}</h1>
            <p>{{ $user->email }}</p>
        @else
            <p>User not found.</p>
        @endif
            </div>
            @endauth
        </div>
        <div class="profile-stats">
            <div class="stat-box">
                <p>{{ $favoritejob }}</p>
                <p>Lowongan Disukai</p>
            </div>
            <div class="stat-box">
                <p>{{ $applyHistory }}</p>
                <p>Riwayat Lamaran</p>
            </div>
        </div>
        <div class="profile-menu">
            <a href="#" class="menu-item">
                <i class="icon-cv"></i>
                <span>CV</span>
            </a>
            <a href="#" class="menu-item">
                <span>Panduan</span>
            </a>
            <a href="#" class="menu-item">
                <span>Pengaturan dan Privasi</span>
            </a>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-danger mt-3">Logout</button>
            </form>
        </div>
    </div>
@endsection

