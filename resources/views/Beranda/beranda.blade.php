<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/style-beranda.css">
    <title>Document</title>
</head>
<body>
    @include('Beranda.nav')
    <div class="menu-beranda">
        <div class="container-menu">
            <div class="menu1">
                <div class="items">
                    <div class="icon-menu">
                        <i class="fa-solid fa-address-card"></i>
                    </div>
                    <p>Semua</p>
                </div>
                <div class="items">
                    <div class="icon-menu">
                        <i class="fa-solid fa-address-card"></i>
                    </div>
                    <p>Freelance</p>
                </div>
                <div class="items">
                    <div class="icon-menu">
                        <i class="fa-solid fa-address-card"></i>
                    </div>
                    <p>Sales</p>
                </div>
                <div class="items">
                    <div class="icon-menu">
                        <i class="fa-solid fa-address-card"></i>
                    </div>
                    <p>Staff Restoran</p>
                </div>
                <div class="items">
                    <div class="icon-menu">
                        <i class="fa-solid fa-address-card"></i>
                    </div>
                    <p>Staff Restoran</p>
                </div>
                <div class="items">
                    <div class="icon-menu">
                        <i class="fa-solid fa-address-card"></i>
                    </div>
                    <p>Pendidikan</p>
                </div>
                <div class="items">
                    <div class="icon-menu">
                        <i class="fa-solid fa-address-card"></i>
                    </div>
                    <p>Admin</p>
                </div>
                <div class="items">
                    <div class="icon-menu">
                        <i class="fa-solid fa-address-card"></i>
                    </div>
                    <p>Marketing</p>
                </div>
                <div class="items">
                    <div class="icon-menu">
                        <i class="fa-solid fa-address-card"></i>
                    </div>
                    <p>Marketing</p>
                </div>
                <div class="items">
                    <div class="icon-menu">
                        <i class="fa-solid fa-address-card"></i>
                    </div>
                    <p>Marketing</p>
                </div>
            </div>
        </div>

    </div>
    @extends('Beranda.konten')
    @yield('content')


    <script src="https://kit.fontawesome.com/7b730c13ab.js" crossorigin="anonymous"></script>
</body>
</html>
