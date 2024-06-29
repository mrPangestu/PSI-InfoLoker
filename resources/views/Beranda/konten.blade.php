<div class="container-card">
    <h2>Rekomendasi</h2>
    <div class="row-req">
        <!-- card -->

        @foreach ($jobs as $job)
            <div class="card shadow p-3 mb-2 bg-body" onclick="detailId({{ $job->job_id }})">
                <div class="image">
                    <i class="fa-solid fa-building"></i>
                </div>
                <div class="card-body">
                    <h4 class="card-title">{{ $job->title }}</h4>
                    <p class="card-title" style="margin-bottom: 20px; font-size: 20px;">{{ $job->company }}</p>
                    <p class="card-text"><i class="fa-solid fa-location-dot" style="margin: 0 14px 0 4px"></i>{{ $job->area }}</p>
                    <p class="card-text"><i class="fa-solid fa-graduation-cap" style="margin: 0 10px 0 0"></i>Minimal {{ $job->study->title }}</p>
                    <p class="card-text" style="height: 10px; margin-bottom:20px;">
                        @if ($job->salary)
                            <i class="fa-solid fa-sack-dollar" style="margin: 0 10px 0 0"></i>{{ $job->salary }}
                        @endif
                    </p>
                    <p style="margin-top: 35px; font-size: 12px; height: 10px;"><i>{{ $job->updated_at ? 'Terakhir di Update pada ' . $job->updated_at->format('d-m-Y') : '' }}</i></p>

                    {{-- Tombol Hapus --}}
                    @auth
                        {{-- Cek apakah pengguna adalah admin --}}
                        @if(auth()->user()->is_admin)
                            <form action="{{ route('jobs.destroy', $job->job_id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm float-right" onclick="return confirm('Apakah Anda yakin ingin menghapus pekerjaan ini?')">
                                    <i class="fa-solid fa-trash"></i> Hapus
                                </button>
                            </form>
                        @endif
                    @endauth

                </div>
            </div>
        @endforeach


        @auth
            {{-- Cek apakah pengguna adalah admin --}}
            @if(auth()->user()->is_admin)
                <div class="card shadow p-3 mb-2 bg-body" id="add-job" onclick="create()">
                    <div class="add-job" >
                        <i class="fa-solid fa-plus"></i>
                    </div>
                </div>
            @endif
        @endauth



    </div>
</div>
