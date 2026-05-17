<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Bunga</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">
    <style>
        body { background-color: #fff5f7; font-family: 'Poppins', sans-serif; }
        .navbar-brand { font-family: 'Playfair Display', serif; font-size: 1.8rem; color: #c2185b !important; }
        .card { border: none; border-radius: 20px; box-shadow: 0 4px 20px rgba(194,24,91,0.1); }
        .form-control, .form-select { border-radius: 12px; border: 1px solid #f48fb1; }
        .form-control:focus, .form-select:focus { border-color: #e91e63; box-shadow: 0 0 0 0.2rem rgba(233,30,99,0.15); }
        .btn-simpan { background: linear-gradient(135deg, #e91e63, #c2185b); border: none; border-radius: 25px; color: white; padding: 10px 30px; font-weight: 500; }
        .btn-simpan:hover { background: linear-gradient(135deg, #c2185b, #880e4f); color: white; }
        .page-title { font-family: 'Playfair Display', serif; color: #880e4f; }
        label { color: #880e4f; font-weight: 500; }
    </style>
</head>
<body>

<nav class="navbar navbar-light bg-white shadow-sm px-4">
    <span class="navbar-brand">🌸 Toko Bunga</span>
    <a href="{{ route('flowers.index') }}" class="btn btn-outline-danger rounded-pill">← Kembali</a>
</nav>

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card p-4">
                <h3 class="page-title mb-4 text-center">✏️ Edit Bunga</h3>

                @if($errors->any())
                    <div class="alert alert-danger rounded-3">
                        <ul class="mb-0">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('flowers.update', $flower->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label>Nama Bunga</label>
                        <input type="text" name="nama" class="form-control" value="{{ $flower->nama }}">
                    </div>
                    <div class="mb-3">
                        <label>Jenis</label>
                        <select name="jenis" class="form-select">
                            <option value="Rose">🌹 Rose</option>
                            <option value="Jasmine">🌼 Jasmine</option>
                            <option value="Orchid">🌸 Orchid</option>
                            <option value="Tulip">🌷 Tulip</option>
                            <option value="Lily">🌻 Lily</option>
                            <option value="Sunflower">🌻 Sunflower</option>
                            <option value="Lavender">💜 Lavender</option>
                            <option value="Other">🌺 Other</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label>Harga (Rp)</label>
                        <input type="number" name="harga" class="form-control" value="{{ $flower->harga }}">
                    </div>
                    <div class="mb-3">
                        <label>Stok</label>
                        <input type="number" name="stok" class="form-control" value="{{ $flower->stok }}">
                    </div>
                    <div class="mb-4">
                        <label>Deskripsi & Makna Bunga</label>
                        <textarea name="deskripsi" class="form-control" rows="4">{{ $flower->deskripsi }}</textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-simpan px-5">💾 Update Bunga</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>