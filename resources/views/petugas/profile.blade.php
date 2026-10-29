<!DOCTYPE html>
<html lang="id">
<head><meta charset="UTF-8"><title>Profil Pengguna</title><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"></head>
<body class="bg-light">
    <div class="container mt-5" style="max-width: 500px;">
        <div class="card shadow border-0 rounded-4 p-4">
            <h3 class="text-primary text-center fw-bold mb-3">Profil Pengguna</h3>
            <p><strong>Nama:</strong> {{ $user->name }}</p>
            <p><strong>Email:</strong> {{ $user->email }}</p>
            <p><strong>Peran (Role):</strong> <span class="badge bg-primary">{{ ucfirst($user->role) }}</span></p>
            <div class="d-grid mt-4"><a href="{{ route('home') }}" class="btn btn-outline-primary">Kembali ke Beranda</a></div>
        </div>
    </div>
</body>
</html>