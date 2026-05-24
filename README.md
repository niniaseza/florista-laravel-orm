# Florista - Toko Bunga

## Deskripsi Proyek
Florista merupakan aplikasi web yang dibangun di atas framework Laravel dengan pendekatan arsitektur MVC (Model-View-Controller) serta memanfaatkan Eloquent ORM dalam pengelolaan data. Aplikasi ini ditujukan untuk membantu pengelolaan katalog toko bunga, mulai dari pencatatan koleksi bunga, informasi harga dan stok, hingga deskripsi makna di balik setiap bunga. Seluruh operasi data — menambah, melihat, mengubah, dan menghapus — dapat dilakukan langsung melalui antarmuka aplikasi.

---

## Penerapan Konsep MVC

### 1. Model
Bagian Model bertugas sebagai penghubung antara aplikasi dan database. Pada project ini, interaksi dengan database sepenuhnya dilakukan melalui Eloquent ORM bawaan Laravel.

**Model yang dibuat:**
- `Flower.php` — menangani data bunga dan memiliki relasi belongsTo ke Category
- `Category.php` — menangani data kategori dan memiliki relasi hasMany ke Flower

**Method Eloquent yang dipakai:**
- `create()` — untuk menyimpan data baru
- `find()` — untuk mengambil satu data berdasarkan ID
- `where()` — untuk memfilter data berdasarkan kondisi tertentu
- `update()` — untuk mengubah data yang sudah ada
- `delete()` — untuk menghapus data
- `with()` — untuk mengambil data beserta relasinya sekaligus (eager loading)

### 2. View
Bagian View menangani tampilan yang dilihat oleh pengguna. Semua tampilan dibuat menggunakan Blade, template engine bawaan Laravel.

**File View yang dibuat:**
- `flowers/index.blade.php`
- `flowers/show.blade.php`
- `flowers/create.blade.php`
- `flowers/edit.blade.php`

**Fungsi masing-masing:**
- index — menampilkan seluruh koleksi bunga lengkap dengan filter per kategori
- show — menampilkan detail satu bunga beserta makna dan informasi kategorinya
- create — menampilkan form penambahan bunga baru
- edit — menampilkan form untuk mengubah data bunga

### 3. Controller
Bagian Controller berfungsi sebagai perantara antara Model dan View, sekaligus tempat logika aplikasi dijalankan.

**Controller yang dibuat:**
- `FlowerController.php`

**Fungsi tiap method:**
- `index()` — mengambil semua data bunga beserta kategorinya lalu dikirim ke view
- `show()` — mengambil satu data bunga berdasarkan ID
- `create()` — menampilkan form tambah bunga
- `store()` — memproses dan menyimpan data bunga baru ke database
- `edit()` — menampilkan form edit dengan data bunga yang dipilih
- `update()` — memproses perubahan data bunga
- `destroy()` — menghapus data bunga dari database
- `byCategory()` — memfilter dan menampilkan bunga berdasarkan kategori tertentu

---

## Struktur Direktori

```
toko-bunga/
├── app/
│    ├── Http/
│    │    └── Controllers/
│    │         └── FlowerController.php
│    │
│    └── Models/
│         ├── Flower.php
│         └── Category.php
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
          ├── FlowerSeeder.php
          └── CategorySeeder.php
```

---

## Skema Database

### Tabel: `categories`

| Field | Type | Keterangan |
|-------|------|------------|
| id | bigint | Primary key |
| name | varchar | Nama kategori |
| icon | varchar | Ikon emoji kategori |
| description | text | Keterangan singkat kategori |
| created_at | timestamp | Waktu data dibuat |
| updated_at | timestamp | Waktu data diperbarui |

### Tabel: `flowers`

| Field | Type | Keterangan |
|-------|------|------------|
| id | bigint | Primary key |
| category_id | bigint | Foreign key ke tabel categories |
| nama | varchar | Nama bunga |
| jenis | varchar | Jenis atau varietas bunga |
| harga | integer | Harga dalam Rupiah |
| stok | integer | Jumlah stok tersedia |
| deskripsi | text | Deskripsi dan makna bunga |
| created_at | timestamp | Waktu data dibuat |
| updated_at | timestamp | Waktu data diperbarui |

---

## Fitur yang Tersedia

- Menampilkan seluruh koleksi bunga beserta statistik jumlah koleksi, stok, dan varietas
- Menyaring tampilan bunga berdasarkan kategori
- Melihat detail bunga lengkap dengan makna dan informasi kategori
- Menambahkan bunga baru ke katalog
- Mengubah data bunga yang sudah ada
- Menghapus bunga dari katalog

---

## Cara Menjalankan Proyek

### 1. Clone Repository
```bash
git clone https://github.com/niniaseza/Tugas-PBW-MVC.git
```

### 2. Masuk ke Folder Project
```bash
cd toko-bunga
```

### 3. Install Dependency
```bash
composer install
```

### 4. Salin File Environment
```bash
cp .env.example .env
```

### 5. Generate Application Key
```bash
php artisan key:generate
```

### 6. Sesuaikan Konfigurasi Database di `.env`
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=toko_bunga
DB_USERNAME=root
DB_PASSWORD=
```

### 7. Jalankan Migration
```bash
php artisan migrate
```

### 8. Jalankan Seeder
```bash
php artisan db:seed --class=FlowerSeeder
php artisan db:seed --class=CategorySeeder
```

### 9. Jalankan Server
```bash
php artisan serve
```

### 10. Buka di Browser
```
http://127.0.0.1:8000
```

---

## Daftar Routes

| Method | Route | Keterangan |
|--------|-------|------------|
| GET | / | Halaman utama, redirect ke katalog |
| GET | /flowers | Menampilkan semua bunga |
| GET | /flowers/create | Form tambah bunga |
| POST | /flowers | Proses simpan bunga baru |
| GET | /flowers/{id} | Halaman detail bunga |
| GET | /flowers/{id}/edit | Form edit bunga |
| PUT | /flowers/{id} | Proses update data bunga |
| DELETE | /flowers/{id} | Hapus bunga |
| GET | /category/{id} | Tampilkan bunga berdasarkan kategori |

---

## Teknologi yang Digunakan

- Laravel 13
- PHP 8.5
- MySQL
- Laragon
- Composer
- Bootstrap 5
- Blade Template Engine
- Eloquent ORM
- Arsitektur MVC