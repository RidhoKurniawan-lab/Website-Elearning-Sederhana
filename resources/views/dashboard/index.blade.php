@extends('layouts.app')
@section('content')
                <!-- Welcome Banner -->
                <div class="p-5 mb-6 bg-white border border-gray-100 shadow-sm rounded-2xl md:p-6">
                    <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
                        <div>
                            <h1 class="text-xl font-bold text-gray-800 md:text-2xl lg:text-3xl">Selamat datang, {{ auth()->user()->name }}</h1>
                            <p class="mt-1 text-sm text-gray-500 md:text-base">Berikut ringkasan performa platform e-learning Anda hari ini.</p>
                        </div>
                    </div>
                </div>

                <!-- Stats Cards Grid -->
                <div class="grid grid-cols-1 gap-4 mb-6 sm:grid-cols-2 lg:grid-cols-4 md:gap-6 md:mb-8">
                    <div class="p-5 transition bg-white border border-gray-100 shadow-sm rounded-2xl hover:shadow-md">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm text-gray-500">Total Mahasiswa</p>
                                <p class="mt-1 text-2xl font-bold text-gray-800 md:text-3xl">{{ $totalMhs }}</p>
                            </div>
                            <div class="flex items-center justify-center w-11 h-11 md:w-12 md:h-12 bg-blue-50 rounded-xl">
                                <i class="text-lg text-blue-600 fas fa-users md:text-xl"></i>
                            </div>
                        </div>
                    </div>

                    <div class="p-5 transition bg-white border border-gray-100 shadow-sm rounded-2xl hover:shadow-md">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm text-gray-500">Total Mata Kuliah</p>
                                <p class="mt-1 text-2xl font-bold text-gray-800 md:text-3xl">{{ $totalMatkul }}</p>
                            </div>
                            <div class="flex items-center justify-center w-11 h-11 md:w-12 md:h-12 bg-indigo-50 rounded-xl">
                                <i class="text-lg text-indigo-600 fas fa-chalkboard-teacher md:text-xl"></i>
                            </div>
                        </div>
                    </div>

                    <div class="p-5 transition bg-white border border-gray-100 shadow-sm rounded-2xl hover:shadow-md">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm text-gray-500">Total Jurusan</p>
                                <p class="mt-1 text-2xl font-bold text-gray-800 md:text-3xl">{{ $totalJrs }}</p>
                            </div>
                            <div class="flex items-center justify-center w-11 h-11 md:w-12 md:h-12 bg-purple-50 rounded-xl">
                                <i class="text-lg text-purple-600 fas fa-chalkboard md:text-xl"></i>
                            </div>
                        </div>
                    </div>

                    <div class="p-5 transition bg-white border border-gray-100 shadow-sm rounded-2xl hover:shadow-md">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm text-gray-500">Jurusan Ungulan</p>
                                <p class="mt-1 text-2xl font-bold text-gray-800 md:text-xl">{{ $jurusanUnggulan->nama_jurusan . ' (' . $jurusanUnggulan->mahasiswas_count . ')' }}</p>
                            </div>
                            <div class="flex items-center justify-center w-11 h-11 md:w-12 md:h-12 bg-emerald-50 rounded-xl">
                                <i class="text-lg fas fa-chart-line text-emerald-600 md:text-xl"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
@endsection
