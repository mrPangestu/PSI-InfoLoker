@extends('Beranda.beranda')
@section('css')
    <link rel="stylesheet" href="/css/style-regis.css">
@endsection

@section('content')
    <div class="main-signin">
        <input type="checkbox" id="chk" aria-hidden="true">

        <div class="signup">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <label for="chk" aria-hidden="true">Login</label>
                <div class="inputBox">
                    <input type="email" name="email" required="">
                    <span>Email</span>
                </div>
                <div class="inputBox">
                    <input type="password" name="password" required="">
                    <span>Password</span>
                </div>
                <button type="submit" value="simpan">login</button>
            </form>
        </div>
        <div class="login">
            <form action="{{ route('user.reg') }}" method="POST">
                @csrf
                <label for="chk" aria-hidden="true">Sign Up</label>
                <div class="inputBox">
                    <input type="text" name="buat_name"  required="">
                    <span>Username</span>
                </div>
                <div class="inputBox">
                    <input type="email" name="buat_email" required="">
                    <span>Email</span>
                </div>
                <div class="inputBox">
                    <input type="password" name="buat_password" required="">
                    <span>Password</span>
                </div>
                <button type="submit" value="simpan">Sign up</button>
            </form>
        </div>
    </div>
@endsection
