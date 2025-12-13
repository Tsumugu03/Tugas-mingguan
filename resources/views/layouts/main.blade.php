<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layout</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <!-- Cyberpunk theme -->
    <link rel="stylesheet" href="/css/cyber.css">
</head>
<body>
    <!-- ✅ Navbar harus di sini -->
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="#">LaravelTI</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" 
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item ">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/profile') }}">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/berita">berita</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact">contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/datamahasiswa">Data Mahasiswa</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Konten halaman -->
    <div class="container">
        <div class="row">
            <div class="col-12">
                @yield('content')
            </div>
        </div>
    </div>

    <!-- Script -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>