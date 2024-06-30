<!DOCTYPE html>
<html>
<head>
    <title>Search Results</title>
</head>
<body>
    <h2>Hasil pencarian untuk "{{ $keyword }}"</h2>

    @if ($jobs->isEmpty())
        <p>Tidak ada hasil yang ditemukan untuk pencarian ini.</p>
    @else
        <ul>
            @foreach ($jobs as $job)
                <li>{{ $job->title }}</li>
                <!-- Tampilkan informasi pekerjaan lainnya sesuai kebutuhan -->
            @endforeach
        </ul>
    @endif
</body>
</html>
