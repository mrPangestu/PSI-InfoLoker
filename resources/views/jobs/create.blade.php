@extends('Beranda.beranda')
@section('css')
    <link rel="stylesheet" href="/css/style-formloker.css">

@endsection
@section('content')
    <div class="container">
        <h2>Posting Pekerjaan Baru</h2>
        @if (count($errors)>0)
            <div class='alert alert-danger'>
                <p>Salah brow!</p>
                @foreach ($errors->all as $item)
                    <li>{{ $item }}</li>
                @endforeach
            </div>
        @endif
        <form class="row g-3" action="{{ route('job.add') }}" method="POST">
            @csrf
            <div class="col-md-12">
                <select class="form-select" name="jobdesc" required>
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
                </select>
              </div>
            <div class="col-md-6">
              <label class="form-label">Nama Pekerjaan *</label>
              <input type="text" class="form-control" name="title" required>
            </div>
            <div class="col-md-6">
              <label class="form-label">Nama Perusahaan *</label>
              <input type="text" class="form-control" name="company" required>
            </div>
            <div class="col-12">
                <label class="form-label">Deskripsi Perusahaan</label>
                <textarea class="form-control" name="desc_company" style="height: 100px"></textarea>
              </div>
            <div class="col-12">
              <label class="form-label">Daerah *</label>
              <input type="text" class="form-control" name="area" required>
            </div>
            <div class="col-md-3">
              <label class="form-label">Tipe pekerjaan *</label>
              <select class="form-select" name="type" required>
                <option value="Freelance" disabled selected></option>
                <option value="Freelance">Freelance</option>
                <option value="Magang">Magang</option>
                <option value="Part-time">Partime</option>
                <option value="Fulltime">Fulltime</option>
                <option value="Kontrak">kontrak</option>
            </select>
            </div>
            <div class="col-md-3">
              <label class="form-label">Lokasi Kerja *</label>
              <select class="form-select" name="location" required>
                <option value="" disabled selected></option>
                <option value="Kerja di Rumah (WFH)">Kerja Di Rumah</option>
                <option value="Kerja di Kantor (WFO)">Kerj Di Kantor</option>
              </select>
            </div>
            <div class="col-md-6">
              <label class="form-label">Posisi *</label>
              <input type="text" class="form-control" name="position" required>
            </div>
            <div class="col-12">
                <label class="form-label">Deskripsi Pekerjaan</label>
                <textarea class="form-control" style="height: 100px" name="desc_job"></textarea>
            </div>
            <div class="col-12">
                <label class="form-label">Gaji (optional)</label>
                <input type="text" class="form-control" name="salary">
            </div>
            <div class="col-md-3">
                <label class="form-label">Gender</label>
                <select class="form-select" name="gender">
                    <option value="semua"></option>
                    <option value="Laki-laki">Pria</option>
                    <option value="Perempuan">Wanita</option>
                </select>
            </div>
            <div class="col-md-3">
                <label class="form-label">Umur</label>
                <input type="number" min="15" class="form-control" name="age" >
            </div>
            <div class="col-md-3">
                <label class="form-label">Pendidikan *</label>
                <select class="form-select" name="study" required>
                    <option value="" disabled selected></option>
                    <option value="1" >SMK/SMA/Sederajat</option>
                    <option value="2" >D3/D4</option>
                    <option value="3" >S1</option>
                    <option value="4" >S2</option>
                    <option value="5" >S3</option>
                </select>
            </div>
            <div class="col-md-3">
                <label class="form-label">Pengalaman (tahun)</label>
                <input type="number" class="form-control" min="0" name="experience">
            </div>
            <div class="col-md-6 mb-0">
                <label class="form-label">Hari Kerja</label>
    
            </div>
            <div class="col-md-6 mb-0">
                <label  class="form-label">Jam Kerja</label>
    
            </div>
            <div class="col-md-3">
                <label class="form-label">Mulai</label>
                <select class="form-select" name="workday_start" required>
                    <option value="Senin" selected>Senin</option>
                    <option value="Selasa">Selasa</option>
                    <option value="Rabu">Rabu</option>
                    <option value="Kamis">Kamis</option>
                    <option value="Jumat">Jumat</option>
                    <option value="Sabtu">Sabtu</option>
                    <option value="Minggu">Minggu</option>
                </select>
            </div>
    
            <div class="col-md-3">
                <label class="form-label">Selesai</label>
                <select id="inputState" class="form-select" name="workday_end" required>
                    <option value="Senin">Senin</option>
                    <option value="Selasa">Selasa</option>
                    <option value="Rabu">Rabu</option>
                    <option value="Kamis">Kamis</option>
                    <option value="Jumat" selected>Jumat</option>
                    <option value="Sabtu">Sabtu</option>
                    <option value="Minggu">Minggu</option>
                </select>
            </div>
            <div class="col-md-3">
                <label class="form-label">Mulai</label>
                <input type="time" id="jam_kerja" name="workhour_start" class="form-control" name="workhour_start">
            </div>
            <div class="col-md-3">
                <label class="form-label">Selesai</label>
                <input type="time" id="jam_kerja" name="workhour_end" class="form-control" name="workhour_end">
            </div>
    
    
            <div class="col-12">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
    </div>



    
@endsection
