<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <title>Dashboard Admin | E-Learning Platform</title>
    <!-- Tailwind CSS CDN -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Font Awesome 6 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .sidebar-scroll::-webkit-scrollbar {
            width: 4px;
        }

        .sidebar-scroll::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        .sidebar-scroll::-webkit-scrollbar-thumb {
            background: #cbd5e1;
            border-radius: 10px;
        }

        .sidebar-scroll::-webkit-scrollbar-thumb:hover {
            background: #94a3b8;
        }

        /* Transisi halus untuk sidebar */
        .sidebar-transition {
            transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
    </style>
</head>

<body class="font-sans antialiased bg-gray-50">

    <!-- Wrapper dengan flex -->
    <div class="flex h-screen overflow-hidden">

        @include('partials.sidebar')

        @include('partials.topbar')

        <main class="p-4 md:p-6 lg:p-8">
            @yield('content')
        </main>


    </div>
    </div>
    @include('components.sweetalert')

    <script>
        // Mobile sidebar toggle - sandwich button terintegrasi di navbar
        const mobileMenuBtn = document.getElementById('mobileMenuBtn');
        const sidebar = document.getElementById('sidebar');
        const overlay = document.getElementById('sidebarOverlay');

        function closeSidebar() {
            if (sidebar && overlay) {
                sidebar.classList.add('-translate-x-full');
                overlay.classList.add('hidden');
                document.body.style.overflow = '';
            }
        }

        function openSidebar() {
            if (sidebar && overlay) {
                sidebar.classList.remove('-translate-x-full');
                overlay.classList.remove('hidden');
                document.body.style.overflow = 'hidden';
            }
        }

        if (mobileMenuBtn) {
            mobileMenuBtn.addEventListener('click', (e) => {
                e.stopPropagation();
                if (sidebar.classList.contains('-translate-x-full')) {
                    openSidebar();
                } else {
                    closeSidebar();
                }
            });
        }

        if (overlay) {
            overlay.addEventListener('click', closeSidebar);
        }

        // Tutup sidebar saat window diresize ke desktop
        window.addEventListener('resize', () => {
            if (window.innerWidth >= 1024) {
                if (sidebar) sidebar.classList.remove('-translate-x-full');
                if (overlay) overlay.classList.add('hidden');
                document.body.style.overflow = '';
            }
        });

        // Mobile search toggle
        const mobileSearchBtn = document.getElementById('mobileSearchBtn');
        const mobileSearchBar = document.getElementById('mobileSearchBar');
        if (mobileSearchBtn && mobileSearchBar) {
            mobileSearchBtn.addEventListener('click', () => {
                mobileSearchBar.classList.toggle('hidden');
            });
        }

        // Logout
        const logoutBtn = document.querySelector('.border-t.border-gray-100 a');
        if (logoutBtn) {
            logoutBtn.addEventListener('click', (e) => {
                e.preventDefault();
                window.confirmAction({
                    title: 'Keluar dari Sistem?',
                    text: 'Anda akan logout dari dashboard admin.',
                    formId: 'logout-form' // ID form logout
                });
            });
        }
    </script>
</body>

</html>
