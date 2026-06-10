<?php

namespace App\Exports;

use App\Models\Mahasiswa;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class MahasiswaExport implements FromCollection, WithHeadings, WithMapping
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Mahasiswa::all();
    }

    /**
    * Tentukan judul kolom di baris pertama Excel
    */
    public function headings(): array
    {
        return [
            'ID',
            'NIM',
            'Nama',
            'Jurusan',
            'Tanggal'
        ];
    }

    /**
    * Petakan data dari model ke kolom Excel (opsional, agar data rapi)
    */
    public function map($mahasiswa): array
    {
        return [
            $mahasiswa->id,
            $mahasiswa->nim,
            $mahasiswa->nama,
            $mahasiswa->jurusan->nama_jurusan ?? 'Unknows',
            $mahasiswa->created_at->format('Y-m-d'),
        ];
    }
}
