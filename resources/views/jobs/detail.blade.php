@extends('Beranda.beranda')

@section('css')
    <link rel="stylesheet" href="/css/style-jobdetail.css">
@endsection

@section('content')

    @if ($errors->has('error'))
        <div class="alert alert-danger">
            {{ $errors->first('error') }}
        </div>
    @endif

    <div class="container mt-5" >
        <div class="card " style="background: #F7EEDD">
            <div class="row g-0 py-2 px-4" style="background: #ACE2E1">
                <div class="col-md-1 ms-3 d-flex justify-content-center align-items-center" style="background: aliceblue; border-radius:15px;">
                    <i class="fa-regular fa-building" style="font-size: 80px; text-align: center;"></i>
                </div>
                <div class="col-md-8" >
                    <div class="card-body">
                        <h4 class="card-title"><b>{{ $job->title }}</b></h4>
                        <h5 class="card-text"><b>{{ $job->company }}</b></h5>
                    </div>
                </div>
            </div>
            <div class="card-body mx-4">
                <div class="icon-text">

                    <h5><i class="fa-solid fa-location-dot" style="margin-right: 10px"></i>Berlokasi di {{ $job->area }}</h5>
                </div>
                <div class="mb-2">
                    <h5 class="badge bg-success">{{ $job->type }}</h5>
                    <h5 class="badge bg-warning text-dark">{{ $job->location }}</h5>
                </div>
                <div class="font-size-8 d-flex justify-content-end mb-0">
                    <small class="fst-italic text-end">{{ $job->relativeDate ?  'Terakhir di Update pada ' . $job->relativeDate : '' }}</small>
                </div>
            </div>
        </div>
    </div>


    <div class="container mt-3" >
        <div class="card px-4" style="background: #F7EEDD">
            <div class="container text-left">
                <div class="row row-cols-2">
                    <div class="col">
                        <div class="mt-4">
                            <h6 class="my-2" ><i class="fa-solid fa-graduation-cap " style="margin-right: 10px"></i>Pendidikan</h6>
                        </div>
                        <h5>Minimal {{ $job->study->title }}</h5>
                    </div>
                    <div class="col">
                        <div class="mt-4">
                            <h6 class="my-2"><i class="fa-solid fa-venus-mars" style="margin-right: 10px"></i>Jenis Kelamin</h6>
                        </div>
                        <h5>{{ $job->gender }}</h5>
                    </div>
                    <div class="col">
                        <div class="mt-4">
                            <h6 class="my-2"><i class="fa-regular fa-user" style="margin-right: 10px"></i>Usia</h6>
                        </div>
                        <h5 class="mb-4">{{ $job->age }} Tahun</h5>
                    </div>
                    <div class="col">
                        <div class="mt-4">
                            <h6 class="my-2"><i class="fa-solid fa-id-card" style="margin-right: 10px"></i>Pengalaman</h6>
                        </div>
                        <h5 class="mb-4">{{ $job->experience ? 'Minimal ' . $job->experience . ' Tahun Kerja' : 'Tidak ada Pengalaman'}}</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="container mt-3">
        <div class="card px-4" style="background: #F7EEDD">
            <div class="card-body">
                <div class="mb-3">
                    <h6>Pekerjaan ini membutuhkan</h6>
                        <h5>{{ $job->position }}</h5>
                </div>
                <hr>
                <div class="mb-3">
                    <h5>Deskripsi Pekerjaan</h5>
                    <p>{{ $job->desc_job }}</p>
                </div>

                <hr>
                <div class="row text-left">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <h5 class="mb-0"><i class="fa-solid fa-calendar-days" style="margin-right: 10px"></i>Hari Kerja</h5>
                        </div>
                        <p>{{ $job->workday_start .' - ' . $job->workday_end }}</p>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <h5 class="mb-0"><i class="fa-solid fa-clock" style="margin-right: 10px"></i>Jam Kerja</h5>
                        </div>
                        <p>{{  $job->workhour_start->format('H:i') . ' - ' . $job->workhour_end->format('H:i') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-3">
        <div class="card px-4" style="background: #F7EEDD">
            <div class="card-body">
                <div class="mb-3">
                    <h6><i class="fa-regular fa-building" style="font-size: 20px; margin-right: 10px "></i>Tentang Perusahaan</h6>
                    <div class="mb-3 icon-text">
                        <h5 class="mb-0">{{ $job->company }}</h5>
                    </div>
                    <p>{{ $job->desc_company }}</p>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-end mt-3">
            
            <form action="{{ route('jobs.apply') }}" method="POST">
                @csrf
                @auth
                <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                <input type="hidden" name="job_id" value="{{ $job->job_id }}">
                @endauth
                
                
                <button href="#" type="submit" id="love" class="fa-regular fa-heart"></button>
            </form>
            <form action="{{ route('jobs.apply') }}" method="POST">
                @csrf
                @auth
                <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                <input type="hidden" name="job_id" value="{{ $job->job_id }}">
                @endauth


                <button type="submit" class="btn btn-info">Lamar</button>
            </form>
        </div>
    </div>
    </br>
@endsection

