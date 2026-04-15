<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use App\Models\Mahasiswa;
use App\Models\MataKuliah;

class DashboardController extends Controller
{
    public function index()
    {
        $totalMhs = Mahasiswa::count();

        $totalMatkul = MataKuliah::count();

        $totalJrs = Jurusan::count();

        $jurusanUnggulan = Jurusan::withCount('mahasiswas')
                            ->orderBy('mahasiswas_count', 'desc')
                            ->first();

        return view('dashboard.index', compact(
            'totalMhs',
            'totalMatkul',
            'totalJrs',
            'jurusanUnggulan'
        ));
    }
}
