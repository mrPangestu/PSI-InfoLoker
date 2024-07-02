@foreach ($jobs as $job)

    <div class="container" >
        <div class="card " style="background: #fefefe">
            <div class="row g-0 mt-2 mx-2 px-1" style="background: #F7EEDD; border-radius: 10px;">
                <div class="col-md-8" >
                    <div class="card-body">
                        <h5 class="card-title">{{ $job->title }}</h5>
                        <h6 class="card-text">{{ $job->company }}</h6>
                    </div>
                </div>
            </div>
            <div class="job-body py-2 px-4">
                <p><i class="fa-solid fa-location-dot" style="margin: 0 14px 0 4px"></i> {{ $job->location }}</p>
                <p><i class="fas fa-graduation-cap" style="margin: 0 10px 0 0"></i> Minimal {{ $job->study->title }}</p>
                <p class="card-text" style="height: 10px; margin-bottom:20px;">
                    @if ($job->salary)
                        <i class="fa-solid fa-sack-dollar" style="margin: 0 17px 0 0"></i>{{ $job->formattedSalary }}
                    @endif
                </p>
                <p class="fst-italic text-end mb-3" style="margin-top: 35px; font-size: 12px; height: 10px;">{{ $job->relativeDate ? 'Terakhir di Update pada ' . $job->relativeDate : '' }}</p>
            </div>
        </div>
    </div>
@endforeach
