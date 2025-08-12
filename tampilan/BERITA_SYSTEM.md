# Sistem Berita Website JTIK

## Fitur yang Telah Diimplementasikan

### 1. Tampilan Berita di Halaman Utama
- **Lokasi**: Section "Berita" di halaman utama (`resources/views/index.blade.php`)
- **Fitur**:
  - Menampilkan 6 berita terbaru dengan pagination
  - Gambar berita (base64 dari database)
  - Judul berita dengan link ke detail
  - Ringkasan berita (120 karakter)
  - Tanggal publikasi
  - Tombol "Baca Selengkapnya"

### 2. Halaman Detail Berita
- **Lokasi**: `resources/views/berita/detail.blade.php`
- **Route**: `/berita/{id}`
- **Fitur**:
  - Judul berita lengkap
  - Meta informasi (tanggal, kategori)
  - Gambar berita (jika ada)
  - Ringkasan berita
  - Konten berita lengkap
  - Tombol share (Facebook, Twitter, WhatsApp)
  - Sidebar dengan berita terbaru
  - Informasi kontak

### 3. Sistem Base64 Image
- **Penyimpanan**: Gambar disimpan sebagai base64 di database
- **Keuntungan**: Tidak ada masalah file storage
- **Fallback**: Mendukung data lama yang masih menggunakan file path

## Struktur Database

### Tabel `beritas`
```sql
- id (primary key)
- judul (string)
- isi (text)
- ringkasan (text, nullable)
- gambar (longText, nullable) - base64 image
- tanggal (date)
- kategori_berita_id (foreign key)
- created_at, updated_at
```

### Relasi
- `beritas` belongs to `kategori_beritas`

## Route yang Digunakan

### Frontend Routes
```php
// Halaman utama dengan berita
Route::get('/', [RoutingController::class, 'root'])->name('root');

// Detail berita
Route::get('berita/{id}', [RoutingController::class, 'beritaDetail'])->name('berita.detail');
```

### Admin Routes
```php
// Manajemen berita (admin panel)
Route::get('admin/berita', [AdminController::class, 'berita'])->name('admin.berita.index');
Route::get('admin/berita/create', [AdminController::class, 'beritaCreate'])->name('admin.berita.create');
Route::post('admin/berita', [AdminController::class, 'beritaStore'])->name('admin.berita.store');
Route::get('admin/berita/{id}/edit', [AdminController::class, 'beritaEdit'])->name('admin.berita.edit');
Route::put('admin/berita/{id}', [AdminController::class, 'beritaUpdate'])->name('admin.berita.update');
Route::delete('admin/berita/{id}', [AdminController::class, 'beritaDestroy'])->name('admin.berita.destroy');
```

## Controller Methods

### RoutingController
- `root()` - Menampilkan halaman utama dengan berita
- `beritaDetail($id)` - Menampilkan detail berita

### AdminController
- `berita()` - Daftar berita (admin)
- `beritaCreate()` - Form tambah berita
- `beritaStore()` - Simpan berita baru
- `beritaEdit()` - Form edit berita
- `beritaUpdate()` - Update berita
- `beritaDestroy()` - Hapus berita

## View Files

### Frontend Views
- `resources/views/index.blade.php` - Halaman utama dengan section berita
- `resources/views/berita/detail.blade.php` - Halaman detail berita

### Admin Views
- `resources/views/admin/berita/index.blade.php` - Daftar berita (admin)
- `resources/views/admin/berita/create.blade.php` - Form tambah berita
- `resources/views/admin/berita/edit.blade.php` - Form edit berita

## Styling CSS

### Berita Section (Homepage)
- Menggunakan class `vl-service-icon-box-4` untuk konsistensi desain
- Responsive grid (col-lg-4 col-md-6)
- Animation dengan AOS (Animate On Scroll)

### Berita Detail Page
- Breadcrumb navigation
- Two-column layout (content + sidebar)
- Social media sharing buttons
- Related news sidebar

## Cara Penggunaan

### 1. Menambah Berita Baru
1. Login ke admin panel (`/admin/login`)
2. Klik menu "Berita"
3. Klik "Tambah Berita"
4. Isi form dan upload gambar
5. Klik "Simpan"

### 2. Mengedit Berita
1. Login ke admin panel
2. Klik menu "Berita"
3. Klik icon edit pada berita yang ingin diedit
4. Ubah data dan klik "Update"

### 3. Menghapus Berita
1. Login ke admin panel
2. Klik menu "Berita"
3. Klik icon hapus pada berita yang ingin dihapus
4. Konfirmasi penghapusan

## Troubleshooting

### Gambar Tidak Muncul
1. Pastikan gambar sudah dikonversi ke base64
2. Clear cache: `php artisan cache:clear`
3. Periksa apakah data di database berformat base64

### Link Detail Berita Tidak Berfungsi
1. Pastikan route sudah terdaftar
2. Periksa apakah ID berita valid
3. Clear route cache: `php artisan route:clear`

### Pagination Tidak Berfungsi
1. Pastikan data berita ada di database
2. Periksa query di RoutingController
3. Clear cache: `php artisan cache:clear` 
