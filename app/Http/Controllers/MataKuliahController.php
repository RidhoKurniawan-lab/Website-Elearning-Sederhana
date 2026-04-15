<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use App\Models\MataKuliah;
use Illuminate\Http\Request;

class MataKuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $mataKuliah = MataKuliah::with('jurusan')
            ->filter($request->query('search'))
            ->latest()
            ->paginate(10)
            ->withQueryString();

        return view('matakuliahs.index', compact('mataKuliah'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $jurusan = Jurusan::select('id', 'nama_jurusan')->get();

        return view('matakuliahs.add', compact('jurusan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'nama_matakuliah' => 'required',
            'sks' => 'required|integer|min:2',
            'jurusan_id' => 'required|exists:jurusans,id'
        ],[
            'jurusan_id.required' => 'Wajib pilih jurusan dulu, Min!',
            'sks.required' => 'Wajib pilih beban Sks dulu, Min!',
        ]);

        MataKuliah::create($validate);

        return redirect()->route('matakuliah.index')->with('success', 'Data Sudah Tersimpan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(MataKuliah $mataKuliah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MataKuliah $matakuliah)
    {
        $jurusan = Jurusan::select('id', 'nama_jurusan')->get();

        return view('matakuliahs.edit', compact('matakuliah', 'jurusan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MataKuliah $matakuliah)
    {
        $validate = $request->validate([
            'nama_matakuliah' => 'required',
            'sks' => 'required|integer|min:2',
            'jurusan_id' => 'required|exists:jurusans,id'
        ],[
            'jurusan_id.required' => 'Wajib pilih jurusan dulu, Min!',
            'sks.required' => 'Wajib pilih beban Sks dulu, Min!',
        ]);

        $matakuliah->update($validate);

        return redirect()->route('matakuliah.index')->with('success', 'Data Mata Kuliah berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MataKuliah $matakuliah)
    {
        $matakuliah->delete();

        return redirect()->route('matakuliah.index')->with('success', 'Data mata kuliah berhasil dihapus!');

    }
}
