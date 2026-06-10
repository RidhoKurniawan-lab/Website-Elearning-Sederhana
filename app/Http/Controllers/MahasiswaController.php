<?php

namespace App\Http\Controllers;

use App\Exports\MahasiswaExport;
use App\Models\Jurusan;
use App\Models\Mahasiswa;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $mahasiswa = Mahasiswa::with('jurusan')
            ->filter($request->query('search'))
            ->latest()
            ->paginate(10)
            ->withQueryString(); //biar search ga hilang saat paginate

        return view('mahasiswas.index', compact('mahasiswa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $jurusan = Jurusan::select('id', 'nama_jurusan')->get();

        return view('mahasiswas.add', compact('jurusan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'nama' => 'required',
            'jurusan_id' => 'required|exists:jurusans,id'
        ],[
            'jurusan_id.required' => 'Wajib pilih jurusan dulu, Min!',
        ]
        );

        Mahasiswa::create($validate);

        return redirect()->route('mahasiswa.index')->with('success', 'Data Sudah Tersimpan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mahasiswa $mahasiswa)
    {
        $jurusan = Jurusan::select('id', 'nama_jurusan')->get();

        return view('mahasiswas.edit', compact('mahasiswa', 'jurusan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        $validate = $request->validate([
            'nama' => 'required',
            'jurusan_id' => 'required|exists:jurusans,id'
        ],[
            'jurusan_id.required' => 'Wajib pilih jurusan dulu, Bos!',
        ]);

        $mahasiswa->update($validate);

        return redirect()->route('mahasiswa.index')->with('success', 'Data mahasiswa berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mahasiswa $mahasiswa)
    {
        $mahasiswa->delete();

        return redirect()->route('mahasiswa.index')->with('success', 'Data mahasiswa berhasil dihapus!');
    }

    public function exportExcel(){
        return Excel::download(new MahasiswaExport, 'mahasiswa.xlsx');
    }

    public function exportPdf(){
        $mahasiswa = Mahasiswa::with('jurusan')->get();

        $data = [
            'title' => 'Laporan Data Mahasiswa',
            'date' => date('d M Y'),
            'mahasiswa' => $mahasiswa,
        ];

        $pdf = Pdf::loadView('mahasiswas.pdf', $data);

        return $pdf->download('laporan-mahasiswa.pdf');
    }
}
