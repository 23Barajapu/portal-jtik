<?php

use App\Http\Controllers\RoutingController;
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
Route::get('prodi/d4trpl', [RoutingController::class, 'd4trpl'])->name('prodi.d4trpl');

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
Route::get('berita/{id}', function($id) {
    return 'Detail Berita ID: ' . $id;
})->name('berita.detail');

// Route dinamis (catch-all) - letakkan di paling bawah
Route::get('{first}/{second}/{third}', [RoutingController::class, 'thirdLevel'])->name('third');
Route::get('{first}/{second}', [RoutingController::class, 'secondLevel'])->name('second');
Route::get('{any}', [RoutingController::class, 'firstLevel'])->name('any');