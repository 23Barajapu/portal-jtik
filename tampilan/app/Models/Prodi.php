<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    public function mataKuliahs()
    {
        return $this->hasMany(MataKuliah::class);
    }
}
