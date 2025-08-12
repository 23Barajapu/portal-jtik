<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KategoriBerita extends Model
{
    protected $table = 'kategori_beritas';

    protected $fillable = [
        'nama'
    ];

    public function beritas()
    {
        return $this->hasMany(Berita::class, 'kategori_berita_id');
    }
}
