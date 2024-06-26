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
                <label for="title">Nama Pekerjaan:</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="form-group">
                <label for="description">Deskripsi Pekerjaan:</label>
                <textarea class="form-control" id="description" name="description" rows="4" required></textarea>
            </div>
            <div class="form-group">
                <label for="company_name">Nama Perusahaan:</label>
                <input type="text" class="form-control" id="company_name" name="company_name" required>
            </div>
            <div class="form-group">
                <label for="location">Lokasi:</label>
                <input type="text" class="form-control" id="location" name="location" required>
            </div>
            <div class="form-group">
                <label for="salary">Gaji (optional):</label>
                <input type="text" class="form-control" id="salary" name="salary">
            </div>
            <button type="submit" class="btn btn-primary">Bagikan Pekerjaan</button>
        </form>
    </div>
</body>
</html>
