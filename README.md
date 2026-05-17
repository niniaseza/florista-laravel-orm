<<<<<<< HEAD
# 🌸 Florista — Toko Bunga

## Deskripsi Proyek
Florista adalah aplikasi berbasis web yang dibuat menggunakan framework Laravel dengan menerapkan konsep MVC (Model-View-Controller). Aplikasi ini membantu pengguna dalam mengelola katalog toko bunga secara lebih terstruktur. Pengguna dapat menambahkan koleksi bunga, melihat deskripsi dan makna dari setiap bunga. 

## Konsep MVC yang Diterapkan

Project ini menerapkan konsep MVC (Model-View-Controller) pada framework Laravel.

### 1. Model
Model digunakan untuk menghubungkan aplikasi dengan database serta mengelola data aplikasi.

**Model yang digunakan:**
- `Flower.php`

**Fungsi:**
- Mengambil data bunga dari database
- Menyimpan data bunga baru
- Memperbarui data bunga yang ada
- Menghapus data bunga

### 2. View
View digunakan untuk menampilkan antarmuka aplikasi kepada pengguna.

**View yang digunakan:**
- `flowers/index.blade.php`
- `flowers/show.blade.php`
- `flowers/create.blade.php`
- `flowers/edit.blade.php`

**Fungsi:**
- Menampilkan katalog koleksi bunga
- Menampilkan detail bunga beserta makna dan deskripsinya
- Menampilkan form untuk menambah bunga baru
- Menampilkan form untuk mengedit data bunga

### 3. Controller
Controller digunakan untuk mengatur logika aplikasi dan penghubung antara Model dan View.

**Controller yang digunakan:**
- `FlowerController.php`

**Fungsi:**
- Menampilkan semua bunga (index)
- Menampilkan detail bunga (show)
- Menampilkan form tambah bunga (create)
- Menyimpan bunga baru ke database (store)
- Menampilkan form edit bunga (edit)
- Memperbarui data bunga (update)
- Menghapus bunga dari database (destroy)

## Struktur Direktori
```
Toko-bunga/
├── app/
│    ├── Http/
│    │    └── Controllers/
│    │         └── FlowerController.php
│    │
│    └── Models/
│         └── Flower.php
│
├── resources/
│    └── views/
│         └── flowers/
│               ├── index.blade.php
│               ├── show.blade.php
│               ├── create.blade.php
│               └── edit.blade.php
│
├── routes/
│    └── web.php
│
└── database/
     ├── migrations/
     └── seeders/
          └── FlowerSeeder.php
```

## Skema Database

### Tabel: `flowers`

| Field | Type | Keterangan |
|-------|------|------------|
| id | bigint | Primary key |
| nama | varchar | Nama bunga |
| jenis | varchar | Jenis/varietas bunga |
| harga | integer | Harga dalam Rupiah |
| stok | integer | Jumlah stok |
| deskripsi | text | Deskripsi dan makna bunga |
| created_at | timestamp | Tanggal dibuat |
| updated_at | timestamp | Tanggal diperbarui |

## Fitur Aplikasi

### Katalog Bunga
Pengguna dapat:
- Melihat semua koleksi bunga
- Melihat statistik bunga (total koleksi, stok, varietas)

### Detail Bunga
Pengguna dapat:
- Melihat deskripsi lengkap dan makna bunga
- Melihat informasi harga dan stok

### Operasi CRUD
Pengguna dapat:
- ➕ Menambah bunga baru
- ✏️ Mengedit informasi bunga
- 🗑️ Menghapus bunga dari katalog

## Cara Menjalankan Proyek

### 1. Clone Repository
```bash
git clone https://github.com/yourusername/toko-bunga.git
```

### 2. Masuk ke Folder Project
```bash
cd toko-bunga
```

### 3. Install Dependency
```bash
composer install
```

### 4. Copy File Environment
```bash
cp .env.example .env
```

### 5. Generate Application Key
```bash
php artisan key:generate
```

### 6. Atur Database di File `.env`
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=toko_bunga
DB_USERNAME=root
DB_PASSWORD=

### 7. Jalankan Migration
```bash
php artisan migrate
```

### 8. Jalankan Seeder
```bash
php artisan db:seed --class=FlowerSeeder
```

### 9. Jalankan Server
```bash
php artisan serve
```

### 10. Buka Browser
http://127.0.0.1:8000

## Alur Kerja Aplikasi
1. User membuka aplikasi
↓
2. FlowerController@index mengambil semua data bunga dari database
↓
3. Data dikirim ke flowers/index.blade.php (View)
↓
4. User klik "View Detail"
↓
5. FlowerController@show mengambil data bunga berdasarkan ID
↓
6. Data ditampilkan di flowers/show.blade.php
↓
7. User dapat Tambah / Edit / Hapus data bunga

## Routes

| Method | Route | Fungsi |
|--------|-------|--------|
| GET | / | Redirect ke katalog bunga |
| GET | /flowers | Menampilkan semua bunga |
| GET | /flowers/create | Form tambah bunga |
| POST | /flowers | Simpan bunga baru |
| GET | /flowers/{id} | Detail bunga |
| GET | /flowers/{id}/edit | Form edit bunga |
| PUT | /flowers/{id} | Update data bunga |
| DELETE | /flowers/{id} | Hapus bunga |

## Data Sample

| Nama | Jenis | Harga | Stok |
|------|-------|-------|------|
| Red Rose | Rose | Rp 25.000 | 50 |
| Pink Rose | Rose | Rp 20.000 | 40 |
| White Rose | Rose | Rp 22.000 | 35 |
| White Jasmine | Jasmine | Rp 15.000 | 60 |
| Purple Orchid | Orchid | Rp 75.000 | 20 |
| White Orchid | Orchid | Rp 80.000 | 15 |
| Yellow Tulip | Tulip | Rp 45.000 | 30 |
| Purple Tulip | Tulip | Rp 48.000 | 25 |
| White Lily | Lily | Rp 35.000 | 25 |
| Stargazer Lily | Lily | Rp 55.000 | 18 |
| Sunflower | Sunflower | Rp 30.000 | 45 |
| Lavender | Lavender | Rp 40.000 | 35 |

## Teknologi yang Digunakan

- Laravel 13
- PHP 8.5
- MySQL
- Laragon
- Composer
- Bootstrap 5
- Blade Template Engine
- Arsitektur MVC
=======
# Tugas-PBW-MVC
>>>>>>> f1ec4c902a0d8616b2eb6cd312d1fac50d3fc7eb
