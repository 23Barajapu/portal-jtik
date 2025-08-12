<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    protected $fillable = [
        'nama',
        'nip',
        'jabatan',
        'prodi',
        'foto',
        'foto_base64',
        'bidang_keahlian'
    ];

    /**
     * Get the foto attribute
     */
    public function getFotoAttribute($value)
    {
        // Jika ada foto_base64, gunakan itu
        if ($this->foto_base64) {
            return $this->foto_base64;
        }

        // Fallback ke foto lama (file path)
        return $value;
    }
}
