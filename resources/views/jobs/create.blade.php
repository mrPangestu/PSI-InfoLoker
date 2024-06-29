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
        <form action="{{ route('job.add') }}" method="POST">
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
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="form-group">
                <label for="company_name">Nama Perusahaan:</label>
                <input type="text" class="form-control" id="company_name" name="company" >
            </div>
            <label for="deskripsi_perusahaan">Deskripsi Perusahaan:</label>
            <textarea id="deskripsi_perusahaan" name="desc_company" rows="4" ></textarea></textarea>


            <label for="daerah">Daerah:</label>
            <input type="text" id="daerah" name="area">

            <label for="gender">Tipe pekerjaan</label>
            <select id="gender" name="type">
                <option value="Freelance">Freelance</option>
                <option value="Magang">Magang</option>
                <option value="Part-time">Partime</option>
                <option value="Fulltime">Fulltime</option>
                <option value="Kontrak">kontrak</option>
            </select>

            <label for="location">Lokasi Kerja</label>
            <select id="gender" name="location">
                <option value="Kerja di Rumah (WFH)">WFH</option>
                <option value="Kerja di Kantor (WFO)">WFO</option>
            </select>

            <div class="form-group">
                <label for="position">Posisi</label>
                <input type="text" class="form-control" id="location" name="position">
            </div>

            <label for="deskripsi">Deskripsi Pekerjaan:</label>
            <textarea id="deskripsi" name="desc_job" rows="4" ></textarea>

            <div class="form-group">
                <label for="salary">Gaji (optional)</label>
                <input type="text" class="form-control" id="salary" name="salary">
            </div>


            <label for="gender">Gender:</label>
            <select id="gender" name="gender" required>
                <option value="Laki-laki">Pria</option>
                <option value="Perempuan">Wanita</option>
            </select>

            <label for="usia">Usia:</label>
            <input type="number" id="usia" name="age" min="18" >

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

            <label for="pengalaman">Pengalaman (tahun):</label>
            <input type="text" id="pengalaman" name="experience" min="0" >


            <label for="hari_kerja">Hari Kerja:</label>
            <div>
                <label for="hari_kerja">Mulai</label>
                <select id="workday" name="workday_start" >
                    <option value="Senin">Senin</option>
                    <option value="Selasa">Selasa</option>
                    <option value="Rabu">Rabu</option>
                    <option value="Kamis">Kamis</option>
                    <option value="Jumat">Jumat</option>
                    <option value="Sabtu">Sabtu</option>
                    <option value="Minggu">Minggu</option>
                </select>

                <label for="hari_kerja">Selesai</label>
                <select id="workday" name="workday_end" >
                    <option value="Senin">Senin</option>
                    <option value="Selasa">Selasa</option>
                    <option value="Rabu">Rabu</option>
                    <option value="Kamis">Kamis</option>
                    <option value="Jumat">Jumat</option>
                    <option value="Sabtu">Sabtu</option>
                    <option value="Minggu">Minggu</option>
                </select>
            </div>

            <label for="jam_kerja">Jam Kerja:</label>
            <div>
                <label for="jam_kerja">Mulai</label>
                <input type="time" id="jam_kerja" name="workhour_start" >

                <label for="jam_kerja">Selesai</label>
                <input type="time" id="jam_kerja" name="workhour_end" >
            </div>

            <button type="submit" class="btn btn-primary">Bagikan Pekerjaan</button>
        </form>
    </div>
</body>
</html>
