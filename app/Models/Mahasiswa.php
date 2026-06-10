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

    /**
     * @param  string  $search
     */
    public function scopeGetLastestPaginated($query, $search)
    {
        return $query->with('jurusan')
            ->filter($search)
            ->latest()
            ->paginate(10)
            ->withQueryString();
    }

    protected static function booted()
    {
        static::creating(function ($mahasiswa) {
            $tahun = date('y');
            do {
                $nim = $tahun.random_int(1000000000, 9999999999);

            } while (static::query()->where('nim', $nim)->exists());

            $mahasiswa->nim = $nim;
        });
    }

    public function scopeFilter($query, $search)
    {
        if ($search) {
            if (is_numeric($search)) {
                return $query->where('nim', $search);
            }

            return $query->where('nama', 'LIKE', '%'.$search.'%');
        }

        return $query;
    }
}
