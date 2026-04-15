<aside id="sidebar"
    class="fixed inset-y-0 left-0 z-30 flex flex-col overflow-y-auto transform -translate-x-full bg-white shadow-2xl sidebar-transition lg:relative w-72 lg:shadow-md sidebar-scroll lg:translate-x-0">

    <!-- Header Sidebar dengan logo -->
    <div class="sticky top-0 z-10 px-6 pt-6 pb-4 bg-white border-b border-gray-100">
        <div class="flex items-center gap-3">
            <div class="flex items-center justify-center w-10 h-10 bg-blue-600 shadow-md rounded-xl">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
                    </path>
                </svg>
            </div>
            <div>
                <h1 class="text-xl font-bold text-gray-800">E-Learning <span class="text-blue-600">Admin</span></h1>
                <p class="text-xs text-gray-400">Platform Management</p>
            </div>
        </div>
    </div>

    <!-- Navigation Menu -->
    <nav class="flex-1 px-4 py-6 space-y-1.5">
        @php
            // Definisikan class
            $activeClass = 'flex items-center gap-3 px-4 py-3 font-medium text-blue-700 rounded-xl bg-blue-50';
            $inactiveClass =
                'flex items-center gap-3 px-4 py-3 text-gray-600 transition-all duration-200 rounded-xl hover:bg-gray-50 hover:text-blue-600 group';
            $iconActive = 'w-5 text-blue-600';
            $iconInactive = 'w-5 fas group-hover:text-blue-600';
        @endphp

        <a href="{{ route('dashboard') }}" class="{{ Route::is('dashboard') ? $activeClass : $inactiveClass }}">
            <i class="fas fa-tachometer-alt {{ Route::is('dashboard') ? $iconActive : $iconInactive }}"></i>
            <span>Dashboard</span>
        </a>

        <a href="{{ route('mahasiswa.index') }}" class="{{ Route::is('mahasiswa*') ? $activeClass : $inactiveClass }}">
            <i class="fas fa-users {{ Route::is('mahasiswa*') ? $iconActive : $iconInactive }}"></i>
            <span>Mahasiswa</span>
        </a>

        <a href="{{ route('matakuliah.index') }}" class="{{ Route::is('matakuliah*') ? $activeClass : $inactiveClass }}">
            <i class="fas fa-chalkboard-teacher {{ Route::is('matakuliah*') ? $iconActive : $iconInactive }}"></i>
            <span>Matakuliah</span>
        </a>

        <a href="{{ route('jurusan.index') }}" class="{{ Route::is('jurusan*') ? $activeClass : $inactiveClass }}">
            <i class="fas fa-graduation-cap {{ Route::is('jurusan*') ? $iconActive : $iconInactive }}"></i>
            <span>Jurusan</span>
        </a>
    </nav>

    <!-- Bottom Section Sidebar -->
    <div class="sticky bottom-0 p-4 bg-white border-t border-gray-100">
        <a href="#"
            class="flex items-center gap-3 px-4 py-3 text-gray-600 transition-all duration-200 rounded-xl hover:bg-red-50 hover:text-red-600 group">
            <i class="w-5 fas fa-sign-out-alt"></i>
            <span>Logout</span>
        </a>
        <div class="px-4 py-3 mt-4 bg-gray-50 rounded-xl">
            <p class="text-xs text-gray-500">Versi 2.0.0</p>
            <p class="text-xs text-gray-400 mt-0.5">© 2025 E-Learning</p>
        </div>
    </div>
</aside>

<!-- Overlay untuk mobile (gelap) -->
<div id="sidebarOverlay" class="fixed inset-0 z-20 hidden transition-opacity duration-300 bg-black/50 lg:hidden"></div>

<form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
    @csrf
</form>
