<?php

use App\Http\Controllers\RoutingController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

// Route utama homepage kembali ke '/'
Route::get('/', [RoutingController::class, 'root'])->name('root');

// Route dinamis (catch-all) - letakkan di paling bawah agar tidak override route lain
// About Us
Route::view('about', 'about.index')->name('about.index');
Route::view('about/visimisi', 'about.visimisi')->name('about.visimisi');
Route::view('about/tujuan', 'about.tujuan')->name('about.tujuan');
Route::view('about/sejarah', 'about.sejarah')->name('about.sejarah');
Route::view('about/struktur', 'about.struktur')->name('about.struktur');
Route::view('about/dosen', 'about.dosen')->name('about.dosen');
Route::view('about/cpl', 'about.cpl')->name('about.cpl');
Route::view('about/fasilitas', 'about.fasilitas')->name('about.fasilitas');

// Program Studi
Route::view('prodi', 'prodi.index')->name('prodi.index');
Route::get('prodi/d3si', [RoutingController::class, 'd3si'])->name('prodi.d3si');
Route::get('prodi/d3ak', [RoutingController::class, 'd3ak'])->name('prodi.d3ak');
Route::get('prodi/d4trpl', [RoutingController::class, 'd4trpl'])->name('prodi.d4trpl');
Route::get('prodi/d4bd', [RoutingController::class, 'd4bd'])->name('prodi.d4bd');

// Route detail prodi (dynamic)
Route::get('prodi/{id}', function($id) {
    return 'Detail Prodi ID: ' . $id;
})->name('prodi.detail');

// Program
Route::view('program', 'program.index')->name('program.index');
Route::view('program/polsub', 'program.polsub')->name('program.polsub');
Route::view('program/elearning', 'program.elearning')->name('program.elearning');
Route::view('program/berita', 'program.berita')->name('program.berita');
Route::view('program/siakad', 'program.siakad')->name('program.siakad');

// Route detail berita (dynamic)
Route::get('berita/{id}', [RoutingController::class, 'beritaDetail'])->name('berita.detail');

// Admin Routes
Route::get('admin/login', [AuthController::class, 'showLogin'])->name('admin.login');
Route::post('admin/login', [AuthController::class, 'login'])->name('admin.login.post');
Route::post('admin/logout', [AuthController::class, 'logout'])->name('admin.logout');

// Admin Protected Routes
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminController::class, 'dashboard'])->name('dashboard');

    // Berita Management
    Route::get('berita', [AdminController::class, 'berita'])->name('berita.index');
    Route::get('berita/create', [AdminController::class, 'beritaCreate'])->name('berita.create');
    Route::post('berita', [AdminController::class, 'beritaStore'])->name('berita.store');
    Route::get('berita/{id}/edit', [AdminController::class, 'beritaEdit'])->name('berita.edit');
    Route::put('berita/{id}', [AdminController::class, 'beritaUpdate'])->name('berita.update');
    Route::delete('berita/{id}', [AdminController::class, 'beritaDestroy'])->name('berita.destroy');

    // Dosen Management
    Route::get('dosen', [AdminController::class, 'dosen'])->name('dosen.index');
    Route::get('dosen/create', [AdminController::class, 'dosenCreate'])->name('dosen.create');
    Route::post('dosen', [AdminController::class, 'dosenStore'])->name('dosen.store');
    Route::get('dosen/{id}/edit', [AdminController::class, 'dosenEdit'])->name('dosen.edit');
    Route::put('dosen/{id}', [AdminController::class, 'dosenUpdate'])->name('dosen.update');
    Route::delete('dosen/{id}', [AdminController::class, 'dosenDestroy'])->name('dosen.destroy');

    // Kategori Berita Management
    Route::get('kategori', [AdminController::class, 'kategori'])->name('kategori.index');
    Route::post('kategori', [AdminController::class, 'kategoriStore'])->name('kategori.store');
    Route::put('kategori/{id}', [AdminController::class, 'kategoriUpdate'])->name('kategori.update');
    Route::delete('kategori/{id}', [AdminController::class, 'kategoriDestroy'])->name('kategori.destroy');
});

// Route dinamis (catch-all) - letakkan di paling bawah
Route::get('{first}/{second}/{third}', [RoutingController::class, 'thirdLevel'])->name('third');
Route::get('{first}/{second}', [RoutingController::class, 'secondLevel'])->name('second');
Route::get('{any}', [RoutingController::class, 'firstLevel'])->name('any');
