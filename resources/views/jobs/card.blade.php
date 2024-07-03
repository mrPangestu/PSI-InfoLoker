<div class="card shadow p-3 mb-2 bg-body" style="cursor: pointer;" onclick="event.stopPropagation(); detailId({{ $job->job_id }});">
    <div class="image">
        <i class="fa-solid fa-building"></i>
    </div>
    <div class="card-body">
        <h4 class="card-title">{{ $job->title }}</h4>
        <p class="card-title" style="margin-bottom: 20px; font-size: 20px;">{{ $job->company }}</p>
        <p class="card-text"><i class="fa-solid fa-location-dot" style="margin: 0 14px 0 4px;"></i>{{ $job->area }}</p>
        <p class="card-text"><i class="fa-solid fa-graduation-cap" style="margin: 0 10px 0 0;"></i>Minimal {{ $job->study->title }}</p>
        <p class="card-text" style="height: 10px; margin-bottom:20px;">
            @if ($job->salary)
                <i class="fa-solid fa-sack-dollar" style="margin: 0 13px 0 0;"></i>{{ $job->formattedSalary }}
            @endif
        </p>
        <p class="fst-italic text-end" style="margin-top: 35px; font-size: 12px; height: 10px;">{{ $job->relativeDate ? 'Terakhir di Update pada ' . $job->relativeDate : '' }}</p>
        
        @auth
            @if(auth()->user()->is_admin)
                <form action="{{ route('jobs.destroy', $job->job_id) }}" method="POST" onsubmit="event.stopPropagation();">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm float-right" onclick="return confirm('Apakah Anda yakin ingin menghapus pekerjaan ini?')">
                        <i class="fa-solid fa-trash"></i> Hapus
                    </button>
                </form>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="event.stopPropagation(); showAppliesModal({{ $job->job_id }});">
                    Lihat Lamaran
                </button>
            @endif
        @endauth
    </div>
</div>
