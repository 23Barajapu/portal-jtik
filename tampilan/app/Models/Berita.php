<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $fillable = [
        'judul',
        'isi',
        'ringkasan',
        'gambar',
        'tanggal',
        'kategori_berita_id'
    ];

    protected $casts = [
        'tanggal' => 'date',
    ];

    public function kategori()
    {
        return $this->belongsTo(KategoriBerita::class, 'kategori_berita_id');
    }
}
