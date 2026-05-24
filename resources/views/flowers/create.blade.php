<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Flower</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&family=DM+Sans:wght@300;400;500&display=swap" rel="stylesheet">
    <style>
        body { background: #f7f3ee; font-family: 'DM Sans', sans-serif; }
        .topbar { background: #2c2c2c; padding: 14px 40px; display: flex; justify-content: space-between; align-items: center; }
        .topbar-brand { font-family: 'DM Serif Display', serif; color: #f7f3ee; font-size: 1.6rem; letter-spacing: 2px; }
        .topbar-brand span { color: #c9a96e; }
        .card { border: none; border-radius: 8px; border: 1px solid #e8e0d5; }
        .form-control, .form-select { border-radius: 6px; border: 1px solid #e8e0d5; }
        .form-control:focus, .form-select:focus { border-color: #c9a96e; box-shadow: 0 0 0 0.2rem rgba(201,169,110,0.15); }
        .btn-save { background: #2c2c2c; color: #f7f3ee; border: none; padding: 10px 30px; border-radius: 4px; font-size: 0.9rem; }
        .btn-save:hover { background: #444; color: #f7f3ee; }
        .btn-back { border: 1.5px solid #2c2c2c; color: #2c2c2c; padding: 9px 22px; border-radius: 4px; font-size: 0.85rem; }
        .btn-back:hover { background: #2c2c2c; color: #f7f3ee; }
        .page-title { font-family: 'DM Serif Display', serif; color: #2c2c2c; font-size: 1.8rem; }
        label { color: #555; font-size: 0.88rem; font-weight: 500; }
        .section-label { font-size: 0.75rem; text-transform: uppercase; letter-spacing: 3px; color: #c9a96e; }
    </style>
</head>
<body>

<div class="topbar">
    <div class="topbar-brand">FLORI<span>STA</span></div>
    <a href="{{ route('flowers.index') }}" class="btn btn-back" style="color:#f7f3ee; border-color:#f7f3ee;">← Back</a>
</div>

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="mb-4">
                <div class="section-label">Catalog Management</div>
                <div class="page-title">Add New Flower</div>
            </div>

            <div class="card p-4">
                @if($errors->any())
                    <div class="alert alert-danger rounded-3 mb-4">
                        <ul class="mb-0">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('flowers.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label>Flower Name</label>
                        <input type="text" name="nama" class="form-control" placeholder="e.g. Red Rose" value="{{ old('nama') }}">
                    </div>
                    <div class="mb-3">
                        <label>Category</label>
                        <select name="category_id" class="form-select">
                            <option value="">-- Select Category --</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                    {{ $category->icon }} {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label>Price (Rp)</label>
                        <input type="number" name="harga" class="form-control" placeholder="e.g. 25000" value="{{ old('harga') }}">
                    </div>
                    <div class="mb-3">
                        <label>Stock</label>
                        <input type="number" name="stok" class="form-control" placeholder="e.g. 50" value="{{ old('stok') }}">
                    </div>
                    <div class="mb-4">
                        <label>Description & Meaning</label>
                        <textarea name="deskripsi" class="form-control" rows="4" placeholder="Write the meaning and description...">{{ old('deskripsi') }}</textarea>
                    </div>
                    <div class="text-end">
                        <a href="{{ route('flowers.index') }}" class="btn btn-back me-2">Cancel</a>
                        <button type="submit" class="btn btn-save">Save Flower</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>