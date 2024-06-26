<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Misi Seru Freelance Admin Remote</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .icon-text {
            display: flex;
            align-items: center;
        }

        .icon-text img {
            width: 1.5em;
            height: 1.5em;
            margin-right: 0.5em;
        }

        .location-icon {
            width: 1.5em;
            height: 1.5em;
        }

        #love {
            color: #007bff;
            margin-right: 10px;
            font-size: 35px;
            background: none; 
            border: none; 
            padding: 0; 
            cursor: pointer;
        }
        #love:hover {
            color: red; 
        }
    </style>
</head>

<br>
<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            <h2>Loker</h2>
            <h6 class="text-muted">Pekerjaan</h6>
        </div>
        <div class="card-body">
            <div class="mb-2 icon-text">
                <img src="/img/location.png" class="location-icon" alt="Location">
                <h3>Daerah</h3>
            </div>
            <div class="mb-2">
                <h6 class="badge bg-primary">jenis pekerjaan</h6>
                <h6 class="badge bg-secondary">Kerja di rumah</h6>
            </div>
            <div class="font-size-8 d-flex justify-content-end mb-3">
                <small>Terakhir diperbarui hari ini</small>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3 icon-text">
                        <img src="/img/pendidikan.png" alt="Pendidikan">
                        <h5 class="mb-0">Pendidikan</h5>
                    </div>
                    <p>Minimal SMA/SMK/Sederajat</p>
                </div>
                <div class="col-md-6">
                    <div class="mb-3 icon-text">
                        <img src="/img/gender.png" alt="Jenis Kelamin">
                        <h5 class="mb-0">Jenis Kelamin</h5>
                    </div>
                    <p>Semua Jenis Kelamin</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3 icon-text">
                        <img src="/img/usia.png" alt="Usia">
                        <h5 class="mb-0">Usia</h5>
                    </div>
                    <p>Tidak ada batasan usia</p>
                </div>
                <div class="col-md-6">
                    <div class="mb-3 icon-text">
                        <img src="/img/pengalaman.png" alt="Pengalaman">
                        <h5 class="mb-0">Pengalaman</h5>
                    </div>
                    <p>Tanpa pengalaman</p>
                </div>
            </div>
            <hr>
            <div class="mb-3">
                <h5>Pekerjaan ini membutuhkan</h5>
                <ul>
                    <li>Posisi lowongan</li>
                </ul>
            </div>
            <hr>
            <div class="mb-3">
                <h5>Deskripsi Pekerjaan</h5>
                <ol>
                    <li>Isi Deskripsi</li>
                </ol>
                <p>Yuk ikuti lowongan kerja</p>
            </div>
            </br>
            </br>
            </br>
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3 icon-text">
                        <img src="/img/hari.png" alt="Hari Kerja">
                        <h5 class="mb-0">Hari Kerja</h5>
                    </div>
                    <p>Senin-Jumat</p>
                </div>
                <div class="col-md-6">
                    <div class="mb-3 icon-text">
                        <img src="/img/jam.png" alt="Jam Kerja">
                        <h5 class="mb-0">Jam Kerja</h5>
                    </div>
                    <p>08.00-17.00</p>
                </div>
            </div>
            <hr>
            <div class="mb-3">
                <h6>Tentang Perusahaan</h6>
                <div class="mb-3 icon-text">
                    <img src="/img/perusahaan.png" alt="Perusahaan">
                    <h4 class="mb-0">Nama Perusahaan</h4>
                </div>
                <p>Deskripsi tentang perusahaan</p>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-end mt-3">
        <button href="#" id="love" class="fa-regular fa-heart"></button>
        <a href="#" class="btn btn-primary">Lamar Pekerjaan</a>
    </div>
</div>
</br>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/7b730c13ab.js"></script>
<script>
    document.getElementById('love').addEventListener('click', function() {
        this.classList.toggle('clicked');
        if (this.classList.contains('clicked')) {
            this.classList.remove('fa-regular');
            this.classList.add('fa-solid');
        } else {
            this.classList.remove('fa-solid');
            this.classList.add('fa-regular');
        }
    });
</script>
</body>

</html>
