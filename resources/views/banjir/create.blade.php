<!DOCTYPE html>
<html lang="id">
<head><meta charset="UTF-8"><title>Form Laporan Banjir</title><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"></head>
<body class="bg-light">
    <div class="container mt-5 mb-5" style="max-width: 600px;">
        <div class="card shadow border-0 rounded-4">
            <div class="card-header bg-primary text-white text-center py-4 rounded-top-4">
                <h3>Formulir Pelaporan Banjir</h3>
                <small class="text-white-50">Pelapor: {{ Auth::user()->name }}</small>
            </div>
            <div class="card-body p-4">
                <form action="{{ route('banjir.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Lokasi / Titik Genangan:</label>
                        <input type="text" name="lokasi" class="form-control" placeholder="Contoh: Jl. Terusan Buahbatu No. 10" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Estimasi Ketinggian Air:</label>
                        <select name="ketinggian" class="form-select" required>
                            <option value="" disabled selected>-- Pilih Ketinggian Air --</option>
                            <option value="Semata Kaki (10-30 cm)">Semata Kaki (10-30 cm)</option>
                            <option value="Lutut (30-50 cm)">Lutut (30-50 cm)</option>
                            <option value="Pinggang (>50 cm)">Pinggang (>50 cm)</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label class="form-label fw-semibold">Keterangan Tambahan:</label>
                        <textarea name="keterangan" class="form-control" rows="4" placeholder="Kondisi arus air, warga terjebak, dll..." required></textarea>
                    </div>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary fw-bold py-2">Kirim Laporan Banjir</button>
                        <a href="{{ route('home') }}" class="btn btn-outline-secondary">Kembali ke Beranda</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>