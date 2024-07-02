@extends('Beranda.beranda')

@section('css')
    <link rel="stylesheet" href="/css/style-sortjob.css">

@endsection
    @section('content')
    <div class="container">
        @include('jobs.jobList')
    </div>
@endsection
