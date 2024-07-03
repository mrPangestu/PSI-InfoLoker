<div class="container-card">
    <h2>Lowongan Direkomendasikan</h2>
    <div class="row-req">
        <!-- card -->
        @foreach ($allJobs['jobs1'] as $job)
            @include('jobs.card', ['job' => $job])
        @endforeach
    </div>
</div>
{{-- - --}}
<div class="container-banner">
    <div class="banner">
        <img src="/img/job1.jpg" alt="Descriptive Text">
    </div>
</div>
{{-- -- --}}
<div class="container-card">
    <h2>Lowongan manajerial</h2>
    <div class="row-req">
        <!-- card -->
        @foreach ($allJobs['jobs2'] as $job)
            @include('jobs.card', ['job' => $job])
        @endforeach
    </div>
</div>
{{-- - --}}

{{-- -- --}}
<div class="container-card">
    <h2>Lowongan Gaji Tinggi</h2>
    <div class="row-req">
        <!-- card -->
        @foreach ($allJobs['jobs3'] as $job)
            @include('jobs.card', ['job' => $job])
        @endforeach
    </div>
</div>
{{-- - --}}
<div class="container-banner">
    <div class="banner">
        <img src="/img/job3.jpg" alt="Descriptive Text">
    </div>
</div>
{{-- -- --}}
<div class="container-card">
    <h2>Lowongan Fresh Graduate</h2>
    <div class="row-req">
        <!-- card -->
        @foreach ($allJobs['jobs4'] as $job)
            @include('jobs.card', ['job' => $job])
        @endforeach
    </div>
</div>
{{-- - --}}

{{-- -- --}}
<div class="container-card">
    <h2>Lowongan SMK/SMA/Sederajat</h2>
    <div class="row-req">
        <!-- card -->
        @foreach ($allJobs['jobs5'] as $job)
            @include('jobs.card', ['job' => $job])
        @endforeach
    </div>
</div>
