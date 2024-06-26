<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/style-beranda.css">
    <title>Info Loker</title>
</head>
<body>
    @include('Beranda.nav')
    <div class="menu-beranda">
        <div class="container-menu">
            <div class="menu1">
                <div class="items" onclick="sortAllJob()">
                    <div class="icon-menu" >
                        <i class="fa-solid fa-globe"></i>
                    </div>
                    <p>Semua</p>
                </div>
                <div class="items" onclick="sortJob(1)">
                    <div class="icon-menu" >
                        <i class="fa-solid fa-person-circle-question"></i>
                    </div>
                    <p>Freelance</p>
                </div>
                <div class="items" onclick="sortJob(2)">
                    <div class="icon-menu">
                        <i class="fa-solid fa-comments-dollar"></i>
                    </div>
                    <p>Sales</p>
                </div>
                <div class="items" onclick="sortJob(3)">
                    <div class="icon-menu">
                        <i class="fa-solid fa-kitchen-set"></i>
                    </div>
                    <p>Staff Restoran</p>
                </div>
                <div class="items" onclick="sortJob(4)">
                    <div class="icon-menu">
                        <i class="fa-solid fa-chalkboard-user"></i>
                    </div>
                    <p>Pendidikan</p>
                </div>
                <div class="items" onclick="sortJob(5)">
                    <div class="icon-menu">
                        <i class="fa-solid fa-laptop-code"></i>
                    </div>
                    <p>IT</p>
                </div>
                <div class="items" onclick="sortJob(6)">
                    <div class="icon-menu">
                        <i class="fa-solid fa-headset"></i>
                    </div>
                    <p>Admin</p>
                </div>
                <div class="items" onclick="sortJob(7)">
                    <div class="icon-menu">
                        <i class="fa-solid fa-money-bill-trend-up"></i>
                    </div>
                    <p>Marketing</p>
                </div>
                <div class="items" onclick="sortJob(8)">
                    <div class="icon-menu">
                        <i class="fa-solid fa-hotel"></i>
                    </div>
                    <p>Perhotelan</p>
                </div>
                <div class="items" onclick="sortJob(9)">
                    <div class="icon-menu">
                        <i class="fa-solid fa-money-check-dollar"></i>
                    </div>
                    <p>Keuanagan</p>
                </div>
            </div>
        </div>

    </div>
    @extends('Beranda.konten')
    @yield('content')


    <script src="https://kit.fontawesome.com/7b730c13ab.js" crossorigin="anonymous"></script>
    <script>
        function detail() {
            window.location.href = "{{ route('job.detail') }}";
        }
        function add() {
            window.location.href = "{{ route('job.add') }}";
        }
        function sortJob(jobdesc_id) {
            window.location.href = "{{ route('sort.job', ['jobdesc_id' => ':jobdesc_id']) }}".replace(':jobdesc_id', jobdesc_id);
        }

        function sortAllJob() {
            window.location.href = "{{ route('sortAll.job') }}";
        }
    </script>
</body>
</html>
