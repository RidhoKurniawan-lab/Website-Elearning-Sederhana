<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Learning | Masuk ke Akun Anda</title>
    <!-- Tailwind CSS CDN - pure, tanpa konfigurasi tambahan -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-gray-50">

    <!-- Container utama dengan grid split 2 kolom -->
    <div class="flex min-h-screen">

        <!-- Sisi Kiri - Header/Hero Section dengan background gradien -->
        <div
            class="relative hidden overflow-hidden lg:flex lg:w-1/2 bg-linear-to-br from-blue-600 via-blue-700 to-indigo-800">
            <!-- Background decorative elements -->
            <div class="absolute inset-0 opacity-10">
                <div class="absolute w-64 h-64 bg-white rounded-full top-20 left-10 blur-3xl"></div>
                <div class="absolute bg-white rounded-full bottom-20 right-10 w-80 h-80 blur-3xl"></div>
                <div
                    class="absolute transform -translate-x-1/2 -translate-y-1/2 bg-blue-300 rounded-full top-1/2 left-1/2 w-96 h-96 blur-3xl">
                </div>
            </div>

            <!-- Konten kiri dengan centering -->
            <div class="relative z-10 flex flex-col items-center justify-center w-full px-8 py-12 text-center">
                <!-- Logo/Icon E-Learning -->
                <div
                    class="flex items-center justify-center w-24 h-24 mx-auto mb-6 shadow-lg bg-white/20 rounded-2xl backdrop-blur-sm">
                    <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
                        </path>
                    </svg>
                </div>
                <h1 class="text-4xl font-bold text-white lg:text-5xl">E-Learning Platform</h1>
                <p class="mt-4 text-lg text-blue-100">Akses materi belajar kapan saja</p>

                <!-- Fitur-fitur unggulan -->
                <div class="w-full max-w-sm mt-12 space-y-4">
                    <div class="flex items-center gap-3 text-left">
                        <div class="flex items-center justify-center w-8 h-8 rounded-full shrink-0 bg-white/20">
                            <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                        <span class="text-sm text-blue-50">1000+ Video Pembelajaran Interaktif</span>
                    </div>
                    <div class="flex items-center gap-3 text-left">
                        <div class="flex items-center justify-center w-8 h-8 rounded-full shrink-0 bg-white/20">
                            <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                        <span class="text-sm text-blue-50">Sertifikat Resmi Setiap Materi</span>
                    </div>
                    <div class="flex items-center gap-3 text-left">
                        <div class="flex items-center justify-center w-8 h-8 rounded-full shrink-0 bg-white/20">
                            <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                        <span class="text-sm text-blue-50">Akses Seumur Hidup + Update Gratis</span>
                    </div>
                </div>

                <!-- Testimonial mini -->

            </div>
        </div>

        <!-- Sisi Kanan - Form Login -->
        <div class="flex items-center justify-center w-full px-6 py-12 lg:w-1/2 lg:px-12">
            <div class="w-full max-w-md">
                <!-- Logo mobile (hanya tampil di mobile) -->
                <div class="flex flex-col items-center mb-8 lg:hidden">
                    <div
                        class="flex items-center justify-center w-16 h-16 mb-4 shadow-lg bg-linear-to-br from-blue-600 to-indigo-700 rounded-2xl">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
                            </path>
                        </svg>
                    </div>
                    <h2 class="text-2xl font-bold text-gray-800">Selamat Datang Kembali!</h2>
                    <p class="mt-1 text-sm text-gray-500">Masuk ke akun e-learning Anda</p>
                </div>

                <!-- Header form untuk desktop -->
                <div class="hidden mb-12 lg:block">
                    <h2 class="text-3xl font-bold text-gray-800">Masuk ke Akun</h2>
                    <p class="mt-2 text-gray-500">Silakan masukkan kredensial Anda untuk melanjutkan belajar</p>
                </div>

                <!-- Alert demo -->
                <div class="p-3 mb-6 border border-blue-200 bg-blue-50 rounded-xl">
                    <p class="text-xs text-center text-blue-700">
                        🎓 Demo: gunakan <span class="font-semibold">Admin@gmail.com</span> / <span
                            class="font-semibold">Admin123</span>
                    </p>
                </div>

                <!-- Form -->
                <form class="space-y-5" action="{{ route('loginProcess') }}" method="POST">

                    @csrf
                    <!-- Email field -->
                    <div>
                        <label class="block mb-2 text-sm font-semibold text-gray-700">Alamat Email</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207">
                                    </path>
                                </svg>
                            </div>
                            <input type="email"
                                name="email"
                                class="w-full py-3 pl-10 pr-3 transition duration-200 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                placeholder="Cth: alamatgmail123@gmail.com">
                        </div>
                    </div>

                    <!-- Password field -->
                    <div>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z">

                                    </path>
                                </svg>
                            </div>
                            <input type="password"
                                name="password"
                                class="w-full py-3 pl-10 pr-3 transition duration-200 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                placeholder="Masukkan kata sandi">
                        </div>
                    </div>

                    <!-- Tombol Login -->
                    <button type="submit"
                        class="w-full px-4 py-3 mt-10 font-bold text-white transition-all duration-200 transform shadow-md bg-linear-to-r from-blue-600 to-indigo-600 rounded-xl hover:from-blue-700 hover:to-indigo-700 hover:shadow-lg">
                        Masuk ke Dashboard
                    </button>

                    <!-- Atau login dengan -->
                    {{-- <div class="relative my-6">
                        <div class="absolute inset-0 flex items-center">
                            <div class="w-full border-t border-gray-300"></div>
                        </div>
                        <div class="relative flex justify-center text-sm">
                            <span class="px-2 text-gray-500 bg-white">Atau masuk dengan</span>
                        </div>
                    </div> --}}

                    <!-- Social login buttons -->
                    {{-- <div class="grid grid-cols-2 gap-3">
                        <button type="button" class="flex items-center justify-center gap-2 border border-gray-300 rounded-xl py-2.5 px-4 hover:bg-gray-50 transition duration-200">
                            <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"/>
                                <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/>
                                <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/>
                                <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/>
                            </svg>
                            <span class="text-sm font-medium text-gray-700">Google</span>
                        </button>
                        <button type="button" class="flex items-center justify-center gap-2 border border-gray-300 rounded-xl py-2.5 px-4 hover:bg-gray-50 transition duration-200">
                            <svg class="w-5 h-5 text-blue-800" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.879v-6.99h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.99C18.343 21.128 22 16.991 22 12z"/>
                            </svg>
                            <span class="text-sm font-medium text-gray-700">Facebook</span>
                        </button>
                    </div> --}}
                </form>

                <!-- Link daftar -->
                {{-- <p class="mt-8 text-sm text-center text-gray-600">
                    Belum punya akun?
                    <a href="#" class="font-semibold text-blue-600 hover:text-blue-800 hover:underline">Daftar sekarang</a>
                </p> --}}

                <!-- Footer mini -->
                <div class="pt-6 mt-8 text-center border-t border-gray-200">
                    <p class="text-xs text-gray-400">
                        © 2026 E-Learning Platform. Semua hak dilindungi.
                    </p>
                </div>
            </div>
        </div>
    </div>
    @include('components.sweetalert')
</body>

</html>
