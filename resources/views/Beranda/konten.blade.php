<div class="container-card">
    <h2>Rekomendasi</h2>
    <div class="row-req">
        <!-- card -->
        <div class="card shadow p-3 mb-2 bg-body" onclick="detail()">
            <div class="image">
                <i class="fa-solid fa-building"></i>
            </div>
            <div class="card-body">
                <h4 class="card-title">Judul</h4>
                <p class="card-title" style="margin-bottom: 20px; font-size: 20px;">perusahaan</p>
                <div></div>
                <p class="card-text"><i class="fa-solid fa-location-dot" style="margin: 0 14px 0 4px"></i>Dekripsi</p>
                <p class="card-text"><i class="fa-solid fa-graduation-cap" style="margin: 0 10px 0 0"></i>Dekripsi</p>
                <p style="margin-top: 35px"><i>waktu</i></p>
            </div>
        </div>

        @foreach ($jobs as $job)
            <div class="card shadow p-3 mb-2 bg-body" onclick="detail()">
                <div class="image">
                    <i class="fa-solid fa-building"></i>
                </div>
                <div class="card-body">
                    <h4 class="card-title">{{ $job->title }}</h4>
                    <p class="card-title" style="margin-bottom: 20px; font-size: 20px;">{{ $job->company }}</p>
                    <p class="card-text"><i class="fa-solid fa-location-dot" style="margin: 0 14px 0 4px"></i>{{ $job->location }}</p>
                    <p class="card-text"><i class="fa-solid fa-graduation-cap" style="margin: 0 10px 0 0"></i>Minimal {{ $job->study->title }}</p>
                    <p class="card-text"><i class="fa-solid fa-sack-dollar" style="margin: 0 10px 0 0"></i>{{ $job->salary }}</p>
                    <p style="margin-top: 35px; font-size: 12px;"><i>{{ $job->updated_at ? 'Terakhir di Update pada ' . $job->updated_at->format('d-m-Y') : '' }}</i></p>
                </div>
            </div>
        @endforeach


        <div class="card shadow p-3 mb-2 bg-body" id="add-job" onclick="add()">
            <div class="add-job" >
                <i class="fa-solid fa-plus"></i>
            </div>
        </div>



    </div>
</div>
