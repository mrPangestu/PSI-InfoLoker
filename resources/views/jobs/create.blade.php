<!DOCTYPE html>
<html>
<head>
    <title> Membuat Pekerjaan Baru</title>
    <link rel="stylesheet" href="{{ asset('css/style-formloker.css') }}">
</head>
<body>
    <div class="container">
        <h2>Posting Pekerjaan Baru</h2>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <form action="{{ route('jobs.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <select class="field1" name="jobdesc">
                    <option value="" disabled selected>Jenis Pekerjaan</option>
                    <option value="1" >Freelance</option>
                    <option value="2" >Sales</option>
                    <option value="3" >Staff Restoran</option>
                    <option value="4" >Pendidikan</option>
                    <option value="5" >IT</option>
                    <option value="6" >Admin</option>
                    <option value="7" >Marketing</option>
                    <option value="8" >Perhotelan</option>
                    <option value="9" >Keuangan</option>
                </select><br />
            </div>
            <div class="form-group">
                <label for="title">Nama Pekerjaan</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="form-group">
                <label for="company_name">Nama Perusahaan:</label>
                <input type="text" class="form-control" id="company_name" name="company" required>
            </div>
            <div class="form-group">
                <label for="location">Lokasi</label>
                <input type="text" class="form-control" id="location" name="location" required>
            </div>
            <div class="form-group">
                <select class="field1" name="study">
                    <option value="" disabled selected>Pendidikan</option>
                    <option value="1" >SMK/SMA/Sederajat</option>
                    <option value="2" >D3/D4</option>
                    <option value="3" >S1</option>
                    <option value="4" >S2</option>
                    <option value="5" >S3</option>
                </select><br />
            </div>
            <div class="form-group">
                <label for="salary">Gaji (optional)</label>
                <input type="text" class="form-control" id="salary" name="salary">
            </div>
            <button type="submit" class="btn btn-primary">Bagikan Pekerjaan</button>
        </form>
    </div>
</body>
</html>
