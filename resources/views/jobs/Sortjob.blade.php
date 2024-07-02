@extends('Beranda.beranda')

@section('css')
    <link rel="stylesheet" href="/css/style-sortjob.css">

@endsection
    @section('content')
    <div class="container">
        <h2>
            @if($jobdescTitle)
                Menampilkan hasil pencarian untuk Bidang {{ $jobdescTitle }}
            @elseif($jobs->isEmpty())
                Tidak ada pekerjaan dalam bidang ini
            @else
                Menampilkan semua pekerjaan
            @endif
        </h2>
        @include('jobs.jobList')
    </div>
@endsection

