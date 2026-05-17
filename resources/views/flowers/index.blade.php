<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flower Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;600;700&family=Jost:wght@300;400;500&display=swap" rel="stylesheet">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { background-color: #fdf6f0; font-family: 'Jost', sans-serif; color: #3a3a3a; }
        .navbar { background: white; padding: 18px 40px; box-shadow: 0 2px 15px rgba(0,0,0,0.06); }
        .navbar-brand { font-family: 'Cormorant Garamond', serif; font-size: 2rem; color: #b5451b !important; letter-spacing: 1px; }
        .btn-add { background: linear-gradient(135deg, #e07b54, #b5451b); border: none; border-radius: 30px; color: white; padding: 10px 28px; font-size: 0.9rem; letter-spacing: 0.5px; transition: all 0.3s; }
        .btn-add:hover { transform: translateY(-2px); box-shadow: 0 8px 20px rgba(181,69,27,0.3); color: white; }

        .hero { background: linear-gradient(135deg, #fde8df, #fcd5c0, #f9c4a8); padding: 80px 0 60px; text-align: center; position: relative; overflow: hidden; }
        .hero::before { content: '🌸'; font-size: 8rem; position: absolute; top: -20px; left: -20px; opacity: 0.15; }
        .hero::after { content: '🌺'; font-size: 8rem; position: absolute; bottom: -20px; right: -20px; opacity: 0.15; }
        .hero h1 { font-family: 'Cormorant Garamond', serif; font-size: 3.5rem; color: #7d2e0e; font-weight: 700; letter-spacing: 2px; }
        .hero p { color: #b5451b; font-size: 1.1rem; font-weight: 300; letter-spacing: 1px; margin-top: 10px; }
        .hero-stats { display: flex; justify-content: center; gap: 40px; margin-top: 30px; }
        .stat { text-align: center; }
        .stat-number { font-family: 'Cormorant Garamond', serif; font-size: 2rem; color: #7d2e0e; font-weight: 700; }
        .stat-label { font-size: 0.8rem; color: #b5451b; letter-spacing: 1px; text-transform: uppercase; }

        .section-title { font-family: 'Cormorant Garamond', serif; color: #7d2e0e; font-size: 2.2rem; font-weight: 600; }
        .section-line { width: 60px; height: 3px; background: linear-gradient(135deg, #e07b54, #b5451b); border-radius: 2px; margin: 8px 0 30px; }

        .flower-card { border: none; border-radius: 20px; box-shadow: 0 4px 25px rgba(0,0,0,0.07); transition: all 0.4s; overflow: hidden; background: white; }
        .flower-card:hover { transform: translateY(-10px); box-shadow: 0 20px 40px rgba(181,69,27,0.15); }
        .flower-img { height: 200px; display: flex; align-items: center; justify-content: center; font-size: 5rem; background: linear-gradient(135deg, #fde8df, #fcd5c0); position: relative; }
        .flower-img::after { content: ''; position: absolute; bottom: 0; left: 0; right: 0; height: 40px; background: linear-gradient(to top, white, transparent); }
        .badge-type { background: #fde8df; color: #b5451b; border-radius: 20px; padding: 4px 14px; font-size: 0.78rem; font-weight: 500; letter-spacing: 0.5px; display: inline-block; }
        .price { font-family: 'Cormorant Garamond', serif; font-size: 1.4rem; color: #b5451b; font-weight: 700; }
        .stock-badge { font-size: 0.78rem; color: #888; background: #f5f5f5; padding: 3px 10px; border-radius: 10px; }

        .btn-detail { background: linear-gradient(135deg, #e07b54, #b5451b); border: none; border-radius: 20px; color: white; padding: 7px 18px; font-size: 0.85rem; transition: all 0.3s; }
        .btn-detail:hover { transform: translateY(-2px); color: white; box-shadow: 0 5px 15px rgba(181,69,27,0.3); }
        .btn-edit-card { border: 1.5px solid #f0a080; color: #b5451b; border-radius: 20px; padding: 7px 14px; font-size: 0.85rem; background: transparent; transition: all 0.3s; }
        .btn-edit-card:hover { background: #fde8df; color: #b5451b; }
        .btn-del-card { border: 1.5px solid #ffcdd2; color: #e53935; border-radius: 20px; padding: 7px 14px; font-size: 0.85rem; background: transparent; transition: all 0.3s; }
        .btn-del-card:hover { background: #ffebee; color: #e53935; }

        .alert-success { background: #fde8df; border: none; border-left: 4px solid #e07b54; color: #7d2e0e; border-radius: 12px; padding: 15px 20px; }
        footer { background: linear-gradient(135deg, #fde8df, #fcd5c0); color: #7d2e0e; text-align: center; padding: 30px; margin-top: 60px; }
        footer p { font-family: 'Cormorant Garamond', serif; font-size: 1.1rem; letter-spacing: 1px; }
    </style>
</head>
<body>

<nav class="navbar d-flex justify-content-between align-items-center">
    <span class="navbar-brand">🌸 Florista</span>
    <a href="{{ route('flowers.create') }}" class="btn btn-add">+ Add Flower</a>
</nav>

<div class="hero">
    <h1>Where Flowers Tell Stories</h1>
    <p>Discover the beauty and meaning behind every bloom</p>
    <div class="hero-stats">
        <div class="stat">
            <div class="stat-number">{{ $flowers->count() }}</div>
            <div class="stat-label">Collections</div>
        </div>
        <div class="stat">
            <div class="stat-number">{{ $flowers->sum('stok') }}</div>
            <div class="stat-label">In Stock</div>
        </div>
        <div class="stat">
            <div class="stat-number">{{ $flowers->unique('jenis')->count() }}</div>
            <div class="stat-label">Varieties</div>
        </div>
    </div>
</div>

<div class="container my-5">
    @if(session('success'))
        <div class="alert alert-success mb-4">✨ {{ session('success') }}</div>
    @endif

    <h2 class="section-title">Our Collection</h2>
    <div class="section-line"></div>

    <div class="row">
        @foreach($flowers as $flower)
        <div class="col-md-4 mb-4">
            <div class="flower-card h-100">
                <div class="flower-img">
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
                <div class="card-body p-4 d-flex flex-column">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <span class="badge-type">{{ $flower->jenis }}</span>
                        <span class="stock-badge">📦 {{ $flower->stok }} pcs</span>
                    </div>
                    <h5 class="fw-bold mb-1" style="font-family:'Cormorant Garamond',serif; font-size:1.3rem; color:#3a3a3a;">{{ $flower->nama }}</h5>
                    <p class="text-muted small flex-grow-1 mt-2" style="line-height:1.7;">{{ Str::limit($flower->deskripsi, 100) }}</p>
                    <div class="d-flex justify-content-between align-items-center mt-3 mb-3">
                        <span class="price">Rp {{ number_format($flower->harga, 0, ',', '.') }}</span>
                    </div>
                    <div class="d-flex gap-2">
                        <a href="{{ route('flowers.show', $flower->id) }}" class="btn btn-detail flex-grow-1">View Detail</a>
                        <a href="{{ route('flowers.edit', $flower->id) }}" class="btn btn-edit-card">✏️</a>
                        <form action="{{ route('flowers.destroy', $flower->id) }}" method="POST" onsubmit="return confirm('Delete this flower?')">
                            @csrf @method('DELETE')
                            <button class="btn btn-del-card">🗑️</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<footer>
    <p>🌸 Florista — Beauty in Every Petal &copy; 2026</p>
</footer>

</body>
</html>