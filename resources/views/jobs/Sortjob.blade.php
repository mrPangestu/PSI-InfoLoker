<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Job Listings</title>
    <!-- Tambahkan link FontAwesome jika diperlukan -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: 20px auto;
        }
        .job-card {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 15px;
            margin-bottom: 15px;
        }
        .job-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
        }
        .job-header h3 {
            margin: 0;
            font-size: 18px;
        }
        .badge {
            background-color: #ffc107;
            color: #fff;
            padding: 5px 10px;
            border-radius: 5px;
        }
        .job-body p {
            margin: 5px 0;
        }
        .job-footer {
            text-align: right;
        }
        .btn {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 15px;
            cursor: pointer;
            border-radius: 5px;
        }
        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Menampilkan hasil pencarian untuk lowongan "Semua"</h2>
        @foreach ($jobs as $job)
            <div class="job-card">
                <div class="job-header">
                    <h3>{{ $job->title }}</h3>
                </div>
                <div class="job-body">
                    <p>{{ $job->company }}</p>
                    <p><i class="fas fa-map-marker-alt"></i> {{ $job->location }}</p>
                    <p><i class="fas fa-graduation-cap"></i> Minimal {{ $job->study->title }}</p>
                    <p>{{ $job->updated_at }}</p>
                </div>

            </div>
        @endforeach
    </div>
</body>
</html>
