<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Bunga</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">
    <style>
        body { background-color: #fff5f7; font-family: 'Poppins', sans-serif; }
        .navbar-brand { font-family: 'Playfair Display', serif; font-size: 1.8rem; color: #c2185b !important; }
        .card { border: none; border-radius: 20px; box-shadow: 0 4px 20px rgba(194,24,91,0.1); }
        .flower-banner { background: linear-gradient(135deg, #f8bbd0, #f48fb1); border-radius: 20px 20px 0 0; padding: 50px; text-align: center; font-size: 6rem; }
        .page-title { font-family: 'Playfair Display', serif; color: #880e4f; font-size: 2rem; }
        .badge-jenis { background-color: #f8bbd0; color: #880e4f; font-weight: 500; border-radius: 20px; padding: 6px 16px; font-size: 0.9rem; }
        .info-label { color: #ad1457; font-weight: 600; }
        .harga-besar { color: #c2185b; font-size: 1.8rem; font-weight: 700; }
        .btn-edit { background: linear-gradient(135deg, #ff9800, #f57c00); border: none; border-radius: 25px; color: white; padding: 10px 25px; }
        .btn-edit:hover { background: linear-gradient(135deg, #f57c00, #e65100); color: white; }
        .btn-hapus { background: linear-gradient(135deg, #e53935, #b71c1c); border: none; border-radius: 25px; color: white; padding: 10px 25px; }
        .btn-hapus:hover { background: linear-gradient(135deg, #b71c1c, #7f0000); color: white; }
        .btn-kembali { border: 2px solid #e91e63; color: #e91e63; border-radius: 25px; padding: 10px 25px; }
        .btn-kembali:hover { background: #e91e63; color: white; }
        .deskripsi-box { background: #fff0f5; border-left: 4px solid #e91e63; border-radius: 0 12px 12px 0; padding: 20px; font-style: italic; color: #555; line-height: 1.8; }
    </style>
</head>
<body>

<nav class="navbar navbar-light bg-white shadow-sm px-4">
    <span class="navbar-brand">🌸 Toko Bunga</span>
    <a href="{{ route('flowers.index') }}" class="btn btn-kembali">← Kembali</a>
</nav>

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="flower-banner">
                    @if($flower->jenis == 'Rose') 🌹
                    @elseif($flower->jenis == 'Jasmine') 🌼
                    @elseif($flower->jenis == 'Orchid') 🌸
                    @elseif($flower->jenis == 'Tulip') 🌷
                    @elseif($flower->jenis == 'Lily') 🌻
                    @elseif($flower->jenis == 'Sunflower') 🌻
                    @elseif($flower->jenis == 'Lavender') 💜
                    @else 🌺
                    @endif
                </div>
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <h2 class="page-title">{{ $flower->nama }}</h2>
                        <span class="badge-jenis">{{ $flower->jenis }}</span>
                    </div>

                    <div class="mb-4">
                        <p class="deskripsi-box">{{ $flower->deskripsi }}</p>
                    </div>

                    <div class="row mb-4">
                        <div class="col-6">
                            <p class="info-label mb-1">💰 Harga</p>
                            <p class="harga-besar">Rp {{ number_format($flower->harga, 0, ',', '.') }}</p>
                        </div>
                        <div class="col-6">
                            <p class="info-label mb-1">📦 Stok Tersedia</p>
                            <p class="harga-besar">{{ $flower->stok }} <small style="font-size:1rem">pcs</small></p>
                        </div>
                    </div>

                    <div class="d-flex gap-3 justify-content-center">
                        <a href="{{ route('flowers.edit', $flower->id) }}" class="btn btn-edit">✏️ Edit</a>
                        <form action="{{ route('flowers.destroy', $flower->id) }}" method="POST" onsubmit="return confirm('Yakin hapus bunga ini?')">
                            @csrf @method('DELETE')
                            <button class="btn btn-hapus">🗑️ Hapus</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<footer class="text-center py-4 mt-4" style="background:#f8bbd0; color:#880e4f;">
    <p class="mb-0">🌸 Toko Bunga &copy; 2026 — Keindahan di Setiap Kelopak</p>
</footer>

</body>
</html>