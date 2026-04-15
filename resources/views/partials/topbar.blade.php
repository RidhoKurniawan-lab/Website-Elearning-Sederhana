<div class="flex flex-col flex-1 overflow-y-auto bg-gray-50">

    <!-- Top Navigation Bar - Profesional dengan sandwich button terintegrasi -->
    <header class="sticky top-0 z-20 bg-white border-b border-gray-200 shadow-sm">
        <div class="flex items-center justify-between px-4 py-3 md:px-6 lg:px-8 lg:py-4">

            <!-- Left Section: Sandwich Button + Page Title (Desktop Title) -->
            <div class="flex items-center gap-3 lg:gap-4">
                <!-- Sandwich Button - Tidak melayang, terintegrasi di navbar -->
                <button id="mobileMenuBtn"
                    class="flex items-center justify-center text-gray-600 transition-colors rounded-lg lg:hidden w-9 h-9 hover:bg-gray-100">
                    <i class="text-xl fas fa-bars"></i>
                </button>

                <!-- Page Title Desktop -->
                <h1 class="hidden text-xl font-semibold text-gray-800 lg:block">
                    {{ Str::ucfirst(Str::before(Route::currentRouteName(), '.')) }}</h1>

                <!-- Breadcrumb (Desktop) -->
                <div class="items-center hidden gap-2 text-sm text-gray-500 lg:flex">
                    <span class="text-gray-400">/</span>
                    <span
                        class="font-medium text-blue-600">{{ Str::ucfirst(Str::after(Route::currentRouteName(), '.')) }}</span>
                </div>
            </div>

            <!-- Right Actions -->
            <div class="flex items-center gap-2 md:gap-4">
                <!-- Divider -->
                <div class="hidden w-px h-8 mx-1 bg-gray-200 sm:block"></div>

                <!-- Profile Dropdown (simulasi) -->
                <div class="flex items-center gap-2 cursor-pointer md:gap-3 group">
                    <div class="hidden text-right sm:block">
                        <p class="text-sm font-semibold text-gray-800">{{ auth()->user()->name; }}</p>
                        <p class="text-xs text-gray-500">Super Admin</p>
                    </div>
                    <div
                        class="flex items-center justify-center font-bold text-white rounded-full shadow-md w-9 h-9 md:w-10 md:h-10 bg-linear-to-br from-blue-600 to-blue-700 ring-2 ring-white">
                        RK
                    </div>
                </div>
            </div>
        </div>
    </header>
