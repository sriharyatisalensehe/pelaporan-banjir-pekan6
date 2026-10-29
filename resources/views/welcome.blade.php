<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>SiagaBanjir - Pusat Pelaporan Darurat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body { background-color: #f8f9fa; }
        .hero-section { background: linear-gradient(135deg, #0d6efd, #0dcaf0); color: white; padding: 80px 0; border-radius: 0 0 30px 30px; }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ route('home') }}"><i class="fa-solid fa-water"></i> SiagaBanjir</a>
            <div class="ms-auto d-flex align-items-center gap-2">
                @auth
                    @if(Auth::user()->role == 'admin')
                        <a class="btn btn-outline-light btn-sm" href="{{ route('banjir.index') }}">Kelola Laporan</a>
                    @endif
                    <a class="btn btn-outline-light btn-sm" href="{{ route('profile') }}">{{ Auth::user()->name }}</a>
                    <form action="{{ route('logout') }}" method="POST" class="d-inline">
                        @csrf
                        <button type="submit" class="btn btn-light text-primary btn-sm fw-bold">Logout</button>
                    </form>
                @endauth
                @guest
                    <a class="btn btn-light text-primary btn-sm px-3 fw-semibold" href="{{ route('login') }}">Login</a>
                    <a class="btn btn-outline-light btn-sm px-3" href="{{ route('register') }}">Register</a>
                @endguest
            </div>
        </div>
    </nav>

    <div class="container text-center my-4">
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show shadow-sm" role="alert">
                <i class="fa-solid fa-check-circle"></i> {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        <div class="hero-section shadow-sm mb-5">
            <h1 class="display-5 fw-bold mb-3">Tanggap Darurat SiagaBanjir 🌊</h1>
            <p class="lead mb-4">Laporkan genangan air, ketinggian banjir, dan evakuasi secara <i>real-time</i>.</p>
            <a href="{{ route('banjir.create') }}" class="btn btn-light text-primary btn-lg fw-bold shadow">
                <i class="fa-solid fa-triangle-exclamation"></i> Buat Laporan Banjir Sekarang
            </a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>