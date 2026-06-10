<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMahasiswaRequest;
use App\Http\Resources\MahasiswaResource;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $mahasiswa = Mahasiswa::getLastestPaginated($request->search);

        return MahasiswaResource::collection($mahasiswa)
            ->additional([
                'status' => 200,
                'success' => true,
                'message' => 'Student data was successfully retrieved',
            ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMahasiswaRequest $request)
    {
        $credentials = $request->validated();

        $mahasiswa = Mahasiswa::create($credentials);

        return (new MahasiswaResource($mahasiswa->fresh('jurusan')))
            ->additional([
                'status' => 201,
                'success' => true,
                'message' => 'Student data was successfully added',
            ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Mahasiswa $mahasiswa)
    {

        return (new MahasiswaResource($mahasiswa->fresh('jurusan')))
            ->additional([
                'status' => 200,
                'success' => true,
                'message' => 'Student data was successfully retrieved',
            ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreMahasiswaRequest $request, Mahasiswa $mahasiswa)
    {
        $credentials = $request->validated();

        $mahasiswa->update($credentials);


        return (new MahasiswaResource($mahasiswa->fresh('jurusan')))
            ->additional([
                'status' => 200,
                'success' => true,
                'message' => 'Student data was successfully updated',
            ]);
    }

    // /**
    //  * Remove the specified resource from storage.
    //  */
    public function destroy(Mahasiswa $mahasiswa)
    {

        $mahasiswa->load('jurusan');

        $deletedData = clone $mahasiswa;

        $mahasiswa->delete();

        return (new MahasiswaResource($deletedData))
            ->additional([
                'status' => 200,
                'success' => true,
                'message' => 'Student data was successfully deleted',
            ]);
    }
}
