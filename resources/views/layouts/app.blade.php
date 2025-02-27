<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel App</title>
    <!-- Link ke file CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Bootstrap CSS (jika Anda menggunakan Bootstrap) -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Navbar atau Header -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{ url('/') }}">RS Sigura</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('patients.index') }}">Patients</a>
                </li>
                    <a class="nav-link" href="{{ route('medis.index') }}">Rekam Medis</a>
                    <a class="nav-link" href="{{ route('medicines.index') }}">Medicine</a>
                <!-- Tambahkan item navigasi lainnya di sini -->
            </ul>
        </div>
    </nav>

    <div class="container mt-4">
        @yield('content') <!-- Bagian ini akan diisi dengan konten spesifik dari setiap view -->
    </div>

    <!-- Bootstrap JS dan dependencies (jika Anda menggunakan Bootstrap) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
