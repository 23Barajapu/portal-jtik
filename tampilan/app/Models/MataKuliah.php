<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MataKuliah extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama', 'kode', 'sks', 'semester', 'prodi_id'
    ];

    public function prodi()
    {
        return $this->belongsTo(Prodi::class);
    }
} 