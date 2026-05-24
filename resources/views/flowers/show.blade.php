<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Flower</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&family=DM+Sans:wght@300;400;500&display=swap" rel="stylesheet">
    <style>
        body { background: #f7f3ee; font-family: 'DM Sans', sans-serif; }
        .topbar { background: #2c2c2c; padding: 14px 40px; display: flex; justify-content: space-between; align-items: center; }
        .topbar-brand { font-family: 'DM Serif Display', serif; color: #f7f3ee; font-size: 1.6rem; letter-spacing: 2px; }
        .topbar-brand span { color: #c9a96e; }
        .btn-back { border: 1.5px solid #f7f3ee; color: #f7f3ee; padding: 9px 22px; border-radius: 4px; font-size: 0.85rem; background: transparent; }
        .btn-back:hover { background: #f7f3ee; color: #2c2c2c; }
        .flower-banner { background: #f0ebe3; border-radius: 8px 8px 0 0; padding: 60px; text-align: center; font-size: 7rem; border-bottom: 1px solid #e8e0d5; }
        .card { border: 1px solid #e8e0d5; border-radius: 8px; overflow: hidden; }
        .page-title { font-family: 'DM Serif Display', serif; color: #2c2c2c; font-size: 2rem; }
        .tag { display: inline-block; font-size: 0.7rem; text-transform: uppercase; letter-spacing: 1.5px; color: #888; border: 1px solid #ddd; padding: 3px 10px; border-radius: 3px; }
        .category-tag { display: inline-block; font-size: 0.78rem; background: #f0ebe3; color: #7a5c2e; border-radius: 4px; padding: 4px 12px; font-weight: 500; }
        .desc-box { background: #f7f3ee; border-left: 3px solid #c9a96e; padding: 20px; border-radius: 0 6px 6px 0; font-size: 0.92rem; color: #555; line-height: 1.9; }
        .price-big { font-family: 'DM Serif Display', serif; font-size: 2rem; color: #2c2c2c; }
        .info-label { font-size: 0.75rem; text-transform: uppercase; letter-spacing: 1.5px; color: #c9a96e; font-weight: 500; }
        .btn-edit { background: #c9a96e; color: #2c2c2c; border: none; padding: 10px 25px; border-radius: 4px; font-size: 0.88rem; }
        .btn-edit:hover { background: #b8955a; color: #2c2c2c; }
        .btn-del { background: transparent; border: 1.5px solid #e05c5c; color: #e05c5c; padding: 10px 25px; border-radius: 4px; font-size: 0.88rem; }
        .btn-del:hover { background: #e05c5c; color: white; }
        .category-info { background: #f0ebe3; border-radius: 6px; padding: 16px 20px; margin-bottom: 24px; }
        .category-info p { margin: 0; font-size: 0.85rem; color: #7a5c2e; }
        footer { background: #2c2c2c; color: #666; text-align: center; padding: 25px; font-size: 0.82rem; letter-spacing: 1px; margin-top: 60px; }
        footer span { color: #c9a96e; }
    </style>
</head>
<body>

<div class="topbar">
    <div class="topbar-brand">FLORI<span>STA</span></div>
    <a href="{{ route('flowers.index') }}" class="btn btn-back">← Back to Collection</a>
</div>

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
                <div class="p-4">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <h2 class="page-title mb-0">{{ $flower->nama }}</h2>
                        <span class="tag">{{ $flower->jenis }}</span>
                    </div>

                    @if($flower->category)
                    <div class="category-info">
                        <div class="d-flex align-items-center gap-2 mb-1">
                            <span style="font-size:1.2rem">{{ $flower->category->icon }}</span>
                            <span class="category-tag">{{ $flower->category->name }}</span>
                        </div>
                        <p>{{ $flower->category->description }}</p>
                    </div>
                    @endif

                    <div class="desc-box mb-4">
                        {{ $flower->deskripsi }}
                    </div>

                    <div class="row mb-4">
                        <div class="col-6">
                            <div class="info-label mb-1">Price</div>
                            <div class="price-big">Rp {{ number_format($flower->harga, 0, ',', '.') }}</div>
                        </div>
                        <div class="col-6">
                            <div class="info-label mb-1">Stock Available</div>
                            <div class="price-big">{{ $flower->stok }} <small style="font-size:1rem; color:#888;">pcs</small></div>
                        </div>
                    </div>

                    <div class="d-flex gap-3">
                        <a href="{{ route('flowers.edit', $flower->id) }}" class="btn btn-edit">✏️ Edit</a>
                        <form action="{{ route('flowers.destroy', $flower->id) }}" method="POST" onsubmit="return confirm('Delete this flower?')">
                            @csrf @method('DELETE')
                            <button class="btn btn-del">🗑️ Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<footer>
    <span>FLORISTA</span> copy; 2026
</footer>

</body>
</html>