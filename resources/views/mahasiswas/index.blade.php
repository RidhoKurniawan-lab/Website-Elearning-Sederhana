@extends('layouts.app')
@section('content')
    <div class="overflow-hidden bg-white border border-gray-100 shadow-sm rounded-2xl">

        <!-- Header Table -->
        <div
            class="flex flex-col gap-3 px-4 py-4 border-b border-gray-200 md:px-5 sm:flex-row sm:items-center sm:justify-between">
            <div>
                <h3 class="text-base font-semibold text-gray-800 md:text-lg">Daftar Mahasiswa</h3>
                <p class="text-xs md:text-sm text-gray-500 mt-0.5">Menampilkan semua mahasiswa yang tersedia di Database</p>
            </div>
            <div class="flex gap-2">
                <a href="{{ route('mahasiswa.create') }}"
                    class="px-2.5 md:px-3 py-1.5 text-xs md:text-sm bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition flex items-center gap-1 md:gap-2 shadow-sm cursor-pointer">
                    <i class="text-xs fas fa-plus"></i>
                    <span class="hidden sm:inline">Mahasiswa Baru</span>
                </a>
            </div>
        </div>

        <!-- Search & Filter Bar -->
        <div
            class="flex flex-col gap-3 px-4 py-3 border-b border-gray-100 md:px-5 bg-gray-50/50 sm:flex-row sm:items-center sm:justify-between">
            <div class="relative w-full sm:w-64">
                <i class="absolute text-xs text-gray-400 transform -translate-y-1/2 fas fa-search left-3 top-1/2"></i>
                <form action="{{ route('mahasiswa.index') }}" method="GET">

                    <input type="text"
                        name="search"
                        value="{{ request('search') }}"
                        placeholder="Cari NIM atau Nama..."
                        {{ request('search') ? 'autofocus' : '' }}
                        onfocus="this.setSelectionRange(this.value.length, this.value.length)"
                        class="w-full pl-8 pr-3 py-1.5 text-sm border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent bg-white">
                </form>
            </div>
        </div>

        <!-- Container tabel dengan scroll horizontal hanya untuk mobile -->
        <div class="overflow-x-auto table-container lg:overflow-x-visible" style="-webkit-overflow-scrolling: touch;">
            <!-- Lebar tabel ditentukan: di desktop mengikuti container, di mobile lebar penuh agar bisa discroll -->
            <table class="w-full table-auto md:min-w-500 lg:min-w-0 lg:w-full">
                <!-- Table Header - padding responsif -->
                <thead class="border-b border-gray-200 bg-gray-50">
                    <tr>
                        <th class="w-12 px-3 py-3 text-left md:px-4">
                            <input type="checkbox"
                                class="w-3.5 h-3.5 rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                        </th>
                        <th
                            class="px-3 py-3 text-left text-[11px] font-semibold text-gray-600 uppercase tracking-wider md:px-4 md:text-xs">
                            NIM
                        </th>
                        <th
                            class="px-3 py-3 text-left text-[11px] font-semibold text-gray-600 uppercase tracking-wider md:px-4 md:text-xs">
                            Nama Mahasiswa
                        </th>
                        <th
                            class="px-3 py-3 text-left text-[11px] font-semibold text-gray-600 uppercase tracking-wider md:px-4 md:text-xs">
                            Jurusan
                        </th>
                        <th
                            class="w-24 px-3 py-3 text-left text-[11px] font-semibold text-gray-600 uppercase tracking-wider md:px-4 md:text-xs">
                            Aksi
                        </th>
                    </tr>
                </thead>

                <!-- Table Body -->
                <tbody class="divide-y divide-gray-100">
                    @foreach ($mahasiswa as $mhs)
                        <tr class="transition duration-150 hover:bg-gray-50/80">

                            <!-- Checkbox Column -->
                            <td class="px-2 py-2 align-middle md:px-4 md:py-3">
                                <input type="checkbox"
                                    class="w-3.5 h-3.5 rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                            </td>

                            <!-- NIM Column -->
                            <td class="px-2 py-2 align-middle md:px-4 md:py-3">
                                <div class="text-xs font-medium text-gray-900 md:text-sm">
                                    {{ $mhs->nim }}
                                </div>
                            </td>

                            <!-- Nama Mahasiswa Column -->
                            <td class="px-2 py-2 align-middle md:px-4 md:py-3">
                                <div class="text-xs font-semibold text-gray-900 md:text-sm">
                                    {{ $mhs->nama }}
                                </div>
                            </td>

                            <!-- Jurusan Column -->
                            <td class="px-2 py-2 align-middle md:px-4 md:py-3">
                                <div class="text-xs text-gray-700 md:text-sm">
                                    {{ $mhs->jurusan->nama_jurusan }}
                                </div>
                            </td>

                            <!-- Aksi Column -->
                            <td class="px-2 py-2 align-middle md:px-4 md:py-3">
                                <div class="flex items-center gap-0.5 md:gap-1.5">
                                    {{-- <a href=""
                                        class="p-1 text-gray-400 transition rounded-lg hover:text-blue-600 hover:bg-blue-50 md:p-1.5 cursor-pointer">
                                        <i class="text-xs fas fa-eye md:text-sm"></i>
                                    </a> --}}
                                    <a href="{{ route('mahasiswa.edit', $mhs) }}"
                                        class="p-1 text-gray-400 transition rounded-lg hover:text-amber-600 hover:bg-amber-50 md:p-1.5 cursor-pointer">
                                        <i class="text-xs fas fa-edit md:text-sm"></i>
                                    </a>

                                    <form id="delete-form-{{ $mhs->id }}"
                                        action="{{ route('mahasiswa.destroy', $mhs->id) }}" method="POST" class="hidden">
                                        @csrf
                                        @method('DELETE')
                                    </form>

                                    <button type="button"
                                        onclick="confirmAction({
                                            title: 'Hapus Mahasiswa?',
                                            text: 'Data {{ $mhs->nama }} akan dihapus permanen!',
                                            formId: 'delete-form-{{ $mhs->id }}',
                                        })"
                                        class="delete p-1 text-gray-400 transition rounded-lg hover:text-red-600 hover:bg-red-50 md:p-1.5 cursor-pointer">
                                        <i class="text-xs fas fa-trash-alt md:text-sm"></i>
                                    </button>
                                </div>
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Footer Table: Pagination & Info -->
        <div
            class="flex flex-col gap-3 px-4 py-3 border-t border-gray-200 md:px-5 bg-gray-50/50 sm:flex-row sm:items-center sm:justify-between">
            <div class="text-[11px] md:text-xs text-gray-500">
                Menampilkan <span class="font-semibold text-gray-700">{{ $mahasiswa->firstItem() }}</span> - <span
                    class="font-semibold text-gray-700">{{ $mahasiswa->lastItem() }}</span> dari <span class="font-semibold text-gray-700">{{ $mahasiswa->total() }}</span>
                Mahasiswa
            </div>
            <div class="flex items-center gap-1">
                @if ($mahasiswa->onFirstPage())
                    <button
                        class="px-2 md:px-2.5 py-1 text-[11px] md:text-xs border border-gray-200 rounded-lg text-gray-500 hover:bg-white transition disabled:opacity-50"
                        disabled>
                        <i class="fas fa-chevron-left text-[8px] md:text-[10px]"></i>
                    </button>
                @else
                    <a href="{{ $mahasiswa->previousPageUrl() }}"
                        class="px-2 md:px-2.5 py-1 text-[11px] md:text-xs border border-gray-200 rounded-lg text-gray-500 hover:bg-white transition">
                        <i class="fas fa-chevron-left text-[8px] md:text-[10px]"></i>
                    </a>
                    <a href="{{ $mahasiswa->url(1) }}"
                        class="px-2 md:px-2.5 py-1 text-[11px] md:text-xs border border-gray-200 rounded-lg text-gray-500 hover:bg-white transition">
                        First</i>
                    </a>
                @endif

                @foreach ($mahasiswa->getUrlRange(max(1, $mahasiswa->currentPage() - 2) , min($mahasiswa->lastPage(), $mahasiswa->currentPage() + 2)) as $page => $url)
                    @if ($page == $mahasiswa->currentPage())
                        {{-- Halaman Aktif --}}
                        <button
                            class="px-2.5 md:px-3 py-1 text-[11px] md:text-xs bg-blue-600 text-white rounded-lg shadow-sm">
                            {{ $page }}
                        </button>
                    @else
                        {{-- Halaman Lain --}}
                        <a href="{{ $url }}"
                            class="px-2.5 md:px-3 py-1 text-[11px] md:text-xs border border-gray-200 rounded-lg text-gray-600 hover:bg-white transition">
                            {{ $page }}
                        </a>
                    @endif
                @endforeach


                @if ($mahasiswa->hasMorePages())
                    <a href="{{ $mahasiswa->url($mahasiswa->lastPage()) }}"
                        class="px-2 md:px-2.5 py-1 text-[11px] md:text-xs border border-gray-200 rounded-lg text-gray-500 hover:bg-white transition">
                        lastest
                    </a>
                    <a href="{{ $mahasiswa->nextPageUrl() }}"
                        class="px-2 md:px-2.5 py-1 text-[11px] md:text-xs border border-gray-200 rounded-lg text-gray-500 hover:bg-white transition">
                        <i class="fas fa-chevron-right text-[8px] md:text-[10px]"></i>
                    </a>
                @else
                    <button
                        class="px-2 md:px-2.5 py-1 text-[11px] md:text-xs border border-gray-200 rounded-lg text-gray-500 hover:bg-white transition disabled:opacity-50"
                        disabled>
                        <i class="fas fa-chevron-right text-[8px] md:text-[10px]"></i>
                    </button>
                @endif
            </div>
        </div>
    </div>
@endsection
