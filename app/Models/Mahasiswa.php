<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['nim', 'nama', 'jurusan_id'])]

class Mahasiswa extends Model
{
    use HasFactory;

    public function jurusan()
    {
        return $this->belongsTo(Jurusan::class);
    }

    protected static function booted()
    {
        static::creating(function ($mahasiswa) {
            $tahun = date('y');
            do {
                $nim = $tahun . mt_rand(1000000000, 9999999999);
            } while (static::where('nim', $nim)->exists());

            $mahasiswa->nim = $nim;
        });
    }

    public function scopeFilter($query, $search)
    {
        if ($search) {
            if (is_numeric($search)) {
                return $query->where('nim', $search);
            }

            return $query->where('nama', 'LIKE', '%'. $search . '%');
        }

        return $query;
    }
}
