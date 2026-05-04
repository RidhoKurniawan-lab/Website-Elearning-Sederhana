<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['nama_jurusan', 'akreditasi',])]

class Jurusan extends Model
{
    use HasFactory;

    public function mahasiswas()
    {
        return $this->hasMany(Mahasiswa::class);
    }

    public function mataKuliahs()
    {
        return $this->hasMany(MataKuliah::class);
    }

    public function scopeFilter($query, $search)
    {
        if ($search) {
            return $query->where('nama_jurusan', 'LIKE', '%'. $search . '%');
        }

        return $query;
    }
}
