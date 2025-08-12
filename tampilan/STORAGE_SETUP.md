# Setup Storage untuk Upload Gambar

## Masalah yang Ditemukan
File gambar berita tidak muncul karena:
1. File gambar tersimpan di `storage/app/private/public/berita/` 
2. Tapi aplikasi mencari di `storage/app/public/berita/`
3. Storage link sudah ada tapi folder berita kosong

## Solusi yang Diterapkan
1. ✅ Membuat folder `public/storage/berita` dan `public/storage/dosen`
2. ✅ Memindahkan file gambar dari `storage/app/private/public/berita/` ke `storage/app/public/berita/`
3. ✅ Memindahkan file `vl-blog-4.3.png` dari `public/img/blog/` ke `storage/app/public/berita/`
4. ✅ Memperbaiki view untuk menangani kasus file tidak ditemukan

## File yang Dipindahkan
- `1753814724_Screenshot 2025-03-14 094546.png`
- `1753814710_Screenshot 2025-03-14 094546.png` 
- `vl-blog-4.3.png`

## Setup Storage yang Benar

### 1. Buat Storage Link
```bash
php artisan storage:link
```

### 2. Buat Folder yang Diperlukan
```bash
mkdir storage/app/public/berita
mkdir storage/app/public/dosen
mkdir public/storage/berita
mkdir public/storage/dosen
```

### 3. Pastikan Permission Benar
```bash
chmod -R 755 storage/app/public
chmod -R 755 public/storage
```

## Konfigurasi Upload di Controller
File gambar disimpan di `storage/app/public/berita/` dan dapat diakses melalui `/storage/berita/`

## Troubleshooting
Jika gambar tidak muncul:
1. Periksa apakah file ada di `storage/app/public/berita/`
2. Periksa apakah storage link sudah dibuat
3. Periksa permission folder
4. Clear cache: `php artisan cache:clear` 
