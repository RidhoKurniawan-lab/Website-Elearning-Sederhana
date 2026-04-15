@extends('layouts.app')
@section('content')
    <div class="overflow-hidden bg-white border border-gray-100 shadow-sm rounded-2xl">
        <!-- Header Section -->
        <div class="px-4 py-4 border-b border-gray-200 md:px-6 md:py-5">
            <div class="flex flex-col gap-2 sm:flex-row sm:items-center sm:justify-between">
                <div>
                    <h3 class="text-base font-semibold text-gray-800 md:text-lg">Edit Mata Kuliah</h3>
                    <p class="mt-0.5 text-xs text-gray-500 md:text-sm">Isi formulir di bawah ini untuk mengedit data
                        Mata Kuliah</p>
                </div>
                <a href="{{ route('mahasiswa.index') }}"
                    class="inline-flex items-center gap-1.5 text-sm text-gray-600 transition hover:text-blue-600">
                    <i class="text-xs fas fa-arrow-left"></i>
                    <span>Kembali</span>
                </a>
            </div>
        </div>

        <!-- Form Section -->
        <div class="p-4 md:p-6">
            <form action="{{ route('matakuliah.update', $matakuliah->id) }}" method="POST" class="space-y-5 md:space-y-6">
                @csrf
                @method('PUT')
                <!-- Field Nama Mata Kuliah -->
                <div>
                    <label class="block text-sm font-semibold text-gray-700 md:text-base">
                        Nama Mata Kuliah <span class="text-red-500">*</span>
                    </label>
                    <div class="mt-1.5">
                        <input type="text" name="nama_matakuliah" value="{{ old('nama_matakuliah', $matakuliah->nama_matakuliah) }}"
                            class="w-full px-3 py-2 text-sm border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition md:px-4 md:py-2.5 md:text-base"
                            placeholder="Masukkan Nama Mata Kuliah"
                            required >
                    </div>
                </div>

                <!-- Field Sks (Dropdown) -->
                <div>
                    <label class="block text-sm font-semibold text-gray-700 md:text-base">
                        Sks <span class="text-red-500">*</span>
                    </label>
                    <div class="relative mt-1.5">
                        <select name="sks" required
                            class="w-full px-3 py-2 text-sm border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent appearance-none bg-white transition md:px-4 md:py-2.5 md:text-base">
                            <option selected hidden value="{{ $matakuliah->sks }}" >{{ $matakuliah->sks . ' Sks' }}</option>
                                <option value="2">2 Sks</option>
                                <option value="3">3 Sks</option>
                                <option value="4">4 Sks</option>
                        </select>
                        <div class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none">
                            <i class="text-xs text-gray-400 fas fa-chevron-down md:text-sm"></i>
                        </div>
                    </div>
                </div>

                <!-- Field Jurusan (Dropdown) -->
                <div>
                    <label class="block text-sm font-semibold text-gray-700 md:text-base">
                        Jurusan <span class="text-red-500">*</span>
                    </label>
                    <div class="relative mt-1.5">
                        <select name="jurusan_id" required
                            class="w-full px-3 py-2 text-sm border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent appearance-none bg-white transition md:px-4 md:py-2.5 md:text-base">
                            @foreach ($jurusan as $major)
                                <option value="{{ $major->id }}" {{ $matakuliah->jurusan_id == $major->id ? 'selected' : '' }}>{{ $major->nama_jurusan }}</option>
                            @endforeach
                        </select>
                        <div class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none">
                            <i class="text-xs text-gray-400 fas fa-chevron-down md:text-sm"></i>
                        </div>
                    </div>
                </div>

                <!-- Divider -->
                <div class="my-4 border-t border-gray-200 md:my-6"></div>

                <!-- Action Buttons -->
                <div class="flex flex-col-reverse gap-3 sm:flex-row sm:justify-end">
                    <a href="{{ route('matakuliah.index') }}"
                        class="px-4 py-2 text-sm font-medium text-gray-700 transition bg-white border border-gray-300 rounded-lg hover:bg-gray-50 md:px-6 md:py-2.5">
                        Batal
                    </a>
                    <button type="submit"
                        class="px-4 py-2 text-sm font-semibold text-white transition bg-blue-600 rounded-lg shadow-sm hover:bg-blue-700 md:px-6 md:py-2.5">
                        <i class="mr-2 text-xs fas fa-save"></i>
                        Simpan Mata Kuliah
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
