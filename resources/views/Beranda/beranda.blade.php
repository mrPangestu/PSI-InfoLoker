<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    @yield('css')
    <title>Info Loker</title>
</head>
<body>
    @yield('content')



    <script src="https://kit.fontawesome.com/7b730c13ab.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script>
        function detailId(jobId) {
            window.location.href = `/jobs/detail/${jobId}`;
            
        }
        function showAppliesModal(jobId) {
            fetch(`/jobs/apply/${jobId}`)
                .then(response => response.json())
                .then(data => {
                    const applies = data.applies;
                    const appliesTableBody = document.getElementById('appliesTableBody');
                    appliesTableBody.innerHTML = ''; // Kosongkan tabel sebelum memasukkan data baru

                    applies.forEach((apply, index) => {
                        const row = `
                            <tr>
                                <th scope="row">${index + 1}</th>
                                <td>${apply.user_id}</td>
                                <td>${apply.user.name}</td>
                                <td>${apply.user.email}</td>
                            </tr>
                        `;
                        appliesTableBody.innerHTML += row;
                    });
                })
                .catch(error => {
                    console.error('Error fetching applies:', error);
                });
        }
        function create() {
            window.location.href = "{{ route('jobs.create') }}";
        }
        function sortJob(jobdesc_id) {
            window.location.href = '/jobs/sort/' + jobdesc_id;
        }

        function sortAllJob() {
            window.location.href = '/jobs/sort';
        }
        document.getElementById('love').addEventListener('click', function() {
            this.classList.toggle('clicked');
            if (this.classList.contains('clicked')) {
                this.classList.remove('fa-regular');
                this.classList.add('fa-solid');
            } else {
                this.classList.remove('fa-solid');
                this.classList.add('fa-regular');
            }
        });
        function detailId(jobId) {
            window.location.href = `/jobs/detail/${jobId}`;
        }


    </script>
</body>
</html>
