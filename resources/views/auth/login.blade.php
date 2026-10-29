<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8"><title>Login - SiagaBanjir</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-light d-flex align-items-center justify-content-center" style="height: 100vh;">
    <div class="card shadow border-0 rounded-4 p-4" style="width: 100%; max-width: 400px;">
        <div class="text-center mb-4">
            <div class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3 shadow" style="width: 60px; height: 60px; font-size: 24px;"><i class="fa-solid fa-lock"></i></div>
            <h3 class="fw-bold text-primary">Login SiagaBanjir</h3>
        </div>
        @if($errors->any())<div class="alert alert-danger py-2 small">{{ $errors->first() }}</div>@endif
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="mb-3"><label class="form-label fw-semibold">Email:</label><input type="email" name="email" class="form-control" required value="{{ old('email') }}"></div>
            <div class="mb-4"><label class="form-label fw-semibold">Password:</label><input type="password" name="password" class="form-control" required></div>
            <div class="d-grid"><button type="submit" class="btn btn-primary fw-bold py-2 shadow-sm">Masuk</button></div>
        </form>
        <div class="text-center mt-3">
            <p class="small text-muted mb-1">Belum punya akun? <a href="{{ route('register') }}" class="text-primary fw-semibold text-decoration-none">Register</a></p>
            <a href="{{ route('home') }}" class="text-decoration-none small text-muted"><i class="fa-solid fa-arrow-left"></i> Beranda</a>
        </div>
    </div>
</body>
</html>