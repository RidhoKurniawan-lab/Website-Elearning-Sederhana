<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use Illuminate\Http\Request;

class JurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $jurusan = Jurusan::latest()
            ->filter($request->query('search'))
            ->paginate(10)
            ->withQueryString();

        return view('jurusans.index', compact('jurusan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jurusans.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'nama_jurusan' => 'required',
            'akreditasi' => 'required|in:A,B,C,D,E'
        ]);

        Jurusan::create($validate);

        return redirect()->route('jurusan.index')->with('success', 'Data Sudah Tersimpan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Jurusan $jurusan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Jurusan $jurusan)
    {
        return view('jurusans.edit', compact('jurusan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Jurusan $jurusan)
    {
        $validate = $request->validate([
            'nama_jurusan' => 'required',
            'akreditasi' => 'required|in:A,B,C,D,E'
        ]);

        $jurusan->update($validate);

        return redirect()->route('jurusan.index')->with('success', 'Data Jurusan berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jurusan $jurusan)
    {
        $jurusan->delete();

        return redirect()->route('jurusan.index')->with('success', 'Data jurusan berhasil dihapus!');
    }
}
