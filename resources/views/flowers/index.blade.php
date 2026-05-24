<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Florista</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&family=DM+Sans:wght@300;400;500&display=swap" rel="stylesheet">
    <style>
        * { box-sizing: border-box; }
        body { background: #f7f3ee; font-family: 'DM Sans', sans-serif; color: #2c2c2c; }
        .topbar { background: #2c2c2c; padding: 14px 40px; display: flex; justify-content: space-between; align-items: center; }
        .topbar-brand { font-family: 'DM Serif Display', serif; color: #f7f3ee; font-size: 1.6rem; letter-spacing: 2px; }
        .topbar-brand span { color: #c9a96e; }
        .btn-add { background: #c9a96e; color: #2c2c2c; border: none; padding: 9px 22px; font-size: 0.85rem; font-weight: 500; border-radius: 4px; }
        .btn-add:hover { background: #b8955a; color: #2c2c2c; }

        .hero { background: #2c2c2c; color: #f7f3ee; padding: 70px 40px; display: flex; align-items: center; justify-content: space-between; gap: 40px; }
        .hero-left h1 { font-family: 'DM Serif Display', serif; font-size: 3.2rem; line-height: 1.2; color: #f7f3ee; }
        .hero-left h1 em { color: #c9a96e; font-style: normal; }
        .hero-left p { color: #aaa; margin-top: 15px; font-size: 1rem; font-weight: 300; max-width: 400px; line-height: 1.8; }
        .hero-right { font-size: 7rem; opacity: 0.6; }
        .hero-stats { display: flex; gap: 40px; margin-top: 35px; padding-top: 30px; border-top: 1px solid #3d3d3d; }
        .stat-num { font-family: 'DM Serif Display', serif; font-size: 2.2rem; color: #c9a96e; }
        .stat-lbl { font-size: 0.75rem; color: #888; text-transform: uppercase; letter-spacing: 1.5px; }

        .content { max-width: 1200px; margin: 0 auto; padding: 50px 20px; }
        .section-label { font-size: 0.75rem; text-transform: uppercase; letter-spacing: 3px; color: #c9a96e; font-weight: 500; }
        .section-heading { font-family: 'DM Serif Display', serif; font-size: 2rem; color: #2c2c2c; margin-top: 4px; }

        /* Category Filter */
        .category-filter { display: flex; gap: 10px; flex-wrap: wrap; margin-bottom: 30px; }
        .cat-btn { background: white; border: 1px solid #e8e0d5; color: #888; padding: 7px 16px; border-radius: 4px; font-size: 0.82rem; text-decoration: none; transition: 0.2s; }
        .cat-btn:hover, .cat-btn.active { background: #2c2c2c; color: #f7f3ee; border-color: #2c2c2c; }

        .flower-card { background: white; border-radius: 8px; overflow: hidden; border: 1px solid #e8e0d5; transition: 0.3s; }
        .flower-card:hover { transform: translateY(-4px); box-shadow: 0 12px 30px rgba(0,0,0,0.08); }
        .card-thumb { height: 180px; background: #f0ebe3; display: flex; align-items: center; justify-content: center; font-size: 4.5rem; border-bottom: 1px solid #e8e0d5; }
        .card-body { padding: 20px; }
        .tag { display: inline-block; font-size: 0.7rem; text-transform: uppercase; letter-spacing: 1.5px; color: #888; border: 1px solid #ddd; padding: 3px 10px; border-radius: 3px; margin-bottom: 10px; }
        .card-title { font-family: 'DM Serif Display', serif; font-size: 1.25rem; color: #2c2c2c; margin-bottom: 8px; }
        .card-desc { font-size: 0.82rem; color: #777; line-height: 1.7; margin-bottom: 14px; }
        .card-footer-row { display: flex; justify-content: space-between; align-items: center; padding-top: 14px; border-top: 1px solid #f0ebe3; }
        .card-price { font-family: 'DM Serif Display', serif; font-size: 1.2rem; color: #2c2c2c; }
        .card-stock { font-size: 0.75rem; color: #aaa; }
        .card-actions { display: flex; gap: 8px; margin-top: 14px; }
        .btn-view { background: #2c2c2c; color: #f7f3ee; border: none; padding: 8px 16px; font-size: 0.82rem; border-radius: 4px; flex: 1; transition: 0.2s; text-align: center; text-decoration: none; display: block; }
        .btn-view:hover { background: #444; color: #f7f3ee; }
        .btn-icon { background: transparent; border: 1px solid #ddd; color: #888; padding: 8px 12px; border-radius: 4px; font-size: 0.82rem; transition: 0.2s; }
        .btn-icon:hover { border-color: #c9a96e; color: #c9a96e; }
        .btn-icon-del:hover { border-color: #e05c5c; color: #e05c5c; }

        .alert-custom { background: #f0ebe3; border: 1px solid #c9a96e; color: #7a5c2e; border-radius: 6px; padding: 12px 18px; font-size: 0.9rem; }
        .active-category-banner { background: #f0ebe3; border-radius: 6px; padding: 14px 20px; margin-bottom: 20px; font-size: 0.9rem; color: #7a5c2e; }

        footer { background: #2c2c2c; color: #666; text-align: center; padding: 25px; font-size: 0.82rem; letter-spacing: 1px; }
        footer span { color: #c9a96e; }
    </style>
</head>
<body>

<div class="topbar">
    <div class="topbar-brand">FLORI<span>STA</span></div>
    <a href="{{ route('flowers.create') }}" class="btn btn-add">+ Add Flower</a>
</div>

<div class="hero">
    <div class="hero-left">
        <h1>Fresh Blooms,<br><em>Timeless</em> Stories.</h1>
        <p>Every flower carries a meaning, a memory, and a moment worth celebrating. Find yours.</p>
        <div class="hero-stats">
            <div>
                <div class="stat-num">{{ $flowers->count() }}</div>
                <div class="stat-lbl">Collections</div>
            </div>
            <div>
                <div class="stat-num">{{ $flowers->sum('stok') }}</div>
                <div class="stat-lbl">In Stock</div>
            </div>
            <div>
                <div class="stat-num">{{ $categories->count() }}</div>
                <div class="stat-lbl">Varieties</div>
            </div>
        </div>
    </div>
    <div class="hero-right">🌿</div>
</div>

<div class="content">
    @if(session('success'))
        <div class="alert-custom mb-4">{{ session('success') }}</div>
    @endif

    <div class="mb-4">
        <div class="section-label">What we offer</div>
        <div class="section-heading">Our Collection</div>
    </div>

    <!-- Category Filter -->
    <div class="category-filter">
        <a href="{{ route('flowers.index') }}" class="cat-btn {{ !isset($category) ? 'active' : '' }}">All</a>
        @foreach($categories as $cat)
            <a href="{{ route('flowers.byCategory', $cat->id) }}" class="cat-btn {{ isset($category) && $category->id == $cat->id ? 'active' : '' }}">
                {{ $cat->icon }} {{ $cat->name }}
            </a>
        @endforeach
    </div>

    @if(isset($category))
        <div class="active-category-banner">
            Showing <strong>{{ $category->icon }} {{ $category->name }}</strong> — {{ $category->description }}
        </div>
    @endif

    <div class="row">
        @foreach($flowers as $flower)
        <div class="col-md-4 mb-4">
            <div class="flower-card h-100 d-flex flex-column">
                <div class="card-thumb">
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
                <div class="card-body d-flex flex-column flex-grow-1">
                    <span class="tag">{{ $flower->jenis }}</span>
                    <div class="card-title">{{ $flower->nama }}</div>
                    <div class="card-desc flex-grow-1">{{ Str::limit($flower->deskripsi, 110) }}</div>
                    <div class="card-footer-row">
                        <div class="card-price">Rp {{ number_format($flower->harga, 0, ',', '.') }}</div>
                        <div class="card-stock">{{ $flower->stok }} in stock</div>
                    </div>
                    <div class="card-actions">
                        <a href="{{ route('flowers.show', $flower->id) }}" class="btn-view">View</a>
                        <a href="{{ route('flowers.edit', $flower->id) }}" class="btn-icon">✏️</a>
                        <form action="{{ route('flowers.destroy', $flower->id) }}" method="POST" onsubmit="return confirm('Delete this flower?')">
                            @csrf @method('DELETE')
                            <button class="btn-icon btn-icon-del">🗑️</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<footer>
    <span>FLORISTA</span> &copy; 2026
</footer>

</body>
</html>