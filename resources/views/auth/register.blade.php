<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8"><title>Register - SiagaBanjir</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light py-5">
    <div class="container" style="max-width: 450px;">
        <div class="card shadow border-0 rounded-4 p-4">
            <h3 class="fw-bold text-primary text-center mb-3">Daftar Akun Warga</h3>
            @if($errors->any())<div class="alert alert-danger small"><ul class="mb-0">@foreach ($errors->all() as $e)<li>{{$e}}</li>@endforeach</ul></div>@endif
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="mb-3"><label class="form-label fw-semibold">Nama Lengkap:</label><input type="text" name="name" class="form-control" required value="{{ old('name') }}"></div>
                <div class="mb-3"><label class="form-label fw-semibold">Email:</label><input type="email" name="email" class="form-control" required value="{{ old('email') }}"></div>
                <div class="mb-3"><label class="form-label fw-semibold">Password:</label><input type="password" name="password" class="form-control" required></div>
                <div class="mb-4"><label class="form-label fw-semibold">Konfirmasi Password:</label><input type="password" name="password_confirmation" class="form-control" required></div>
                <div class="d-grid"><button type="submit" class="btn btn-primary fw-bold py-2">Daftar</button></div>
            </form>
            <div class="text-center mt-3"><a href="{{ route('home') }}" class="text-decoration-none small text-muted">Kembali ke Beranda</a></div>
        </div>
    </div>
</body>
</html>