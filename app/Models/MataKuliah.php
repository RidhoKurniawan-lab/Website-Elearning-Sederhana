<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['nama_matakuliah', 'sks', 'jurusan_id'])]

class MataKuliah extends Model
{
    use HasFactory;

    public function jurusan()
    {
        return $this->belongsTo(Jurusan::class);
    }

    public function scopeFilter($query, $search)
    {
        if ($search) {
            return $query->where('nama_matakuliah', 'LIKE', '%'. $search . '%');
        }

        return $query;
    }
}
