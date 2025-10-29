<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Grafika Expo 2025 - Pameran Alat & Mesin Cetak Sablon Digital')</title>
    <meta name="description" content="@yield('description', 'Pameran alat dan mesin cetak sablon digital terbesar di Indonesia')">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Instrument+Sans:wght@400;500;600;700&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @stack('styles')
</head>
<body class="font-sans antialiased bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-white shadow-md fixed w-full top-0 z-50">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center h-20">
                <!-- Logo -->
                <div class="flex items-center">
                    <a href="{{ route('home') }}" class="flex items-center space-x-3">
                        <div class="w-12 h-12 bg-gradient-to-br from-blue-600 to-blue-800 rounded-lg flex items-center justify-center">
                            <i class="fas fa-print text-white text-2xl"></i>
                        </div>
                        <div>
                            <h1 class="text-xl font-bold text-gray-800">GRAFIKA EXPO</h1>
                            <p class="text-xs text-gray-600">2025</p>
                        </div>
                    </a>
                </div>

                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="{{ route('home') }}" class="text-gray-700 hover:text-blue-600 font-medium transition {{ request()->routeIs('home') ? 'text-blue-600' : '' }}">
                        Beranda
                    </a>
                    <a href="{{ route('about') }}" class="text-gray-700 hover:text-blue-600 font-medium transition {{ request()->routeIs('about') ? 'text-blue-600' : '' }}">
                        Tentang
                    </a>
                    <a href="{{ route('participant') }}" class="text-gray-700 hover:text-blue-600 font-medium transition {{ request()->routeIs('participant*') ? 'text-blue-600' : '' }}">
                        Peserta
                    </a>
                    <a href="{{ route('schedule') }}" class="text-gray-700 hover:text-blue-600 font-medium transition {{ request()->routeIs('schedule') ? 'text-blue-600' : '' }}">
                        Jadwal
                    </a>
                    <a href="{{ route('sponsor') }}" class="text-gray-700 hover:text-blue-600 font-medium transition {{ request()->routeIs('sponsor') ? 'text-blue-600' : '' }}">
                        Sponsor
                    </a>
                    <a href="{{ route('registration') }}" class="bg-gradient-to-r from-blue-600 to-blue-700 text-white px-6 py-2.5 rounded-lg font-semibold hover:from-blue-700 hover:to-blue-800 transition shadow-md">
                        Daftar Sekarang
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <button id="mobile-menu-btn" class="md:hidden text-gray-700 focus:outline-none">
                    <i class="fas fa-bars text-2xl"></i>
                </button>
            </div>

            <!-- Mobile Menu -->
            <div id="mobile-menu" class="hidden md:hidden pb-4">
                <div class="flex flex-col space-y-3">
                    <a href="{{ route('home') }}" class="text-gray-700 hover:text-blue-600 font-medium py-2 {{ request()->routeIs('home') ? 'text-blue-600' : '' }}">
                        Beranda
                    </a>
                    <a href="{{ route('about') }}" class="text-gray-700 hover:text-blue-600 font-medium py-2 {{ request()->routeIs('about') ? 'text-blue-600' : '' }}">
                        Tentang
                    </a>
                    <a href="{{ route('participant') }}" class="text-gray-700 hover:text-blue-600 font-medium py-2 {{ request()->routeIs('participant*') ? 'text-blue-600' : '' }}">
                        Peserta
                    </a>
                    <a href="{{ route('schedule') }}" class="text-gray-700 hover:text-blue-600 font-medium py-2 {{ request()->routeIs('schedule') ? 'text-blue-600' : '' }}">
                        Jadwal
                    </a>
                    <a href="{{ route('sponsor') }}" class="text-gray-700 hover:text-blue-600 font-medium py-2 {{ request()->routeIs('sponsor') ? 'text-blue-600' : '' }}">
                        Sponsor
                    </a>
                    <a href="{{ route('registration') }}" class="bg-gradient-to-r from-blue-600 to-blue-700 text-white px-6 py-2.5 rounded-lg font-semibold text-center hover:from-blue-700 hover:to-blue-800 transition">
                        Daftar Sekarang
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="pt-20">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 text-white pt-16 pb-8">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-8">
                <!-- About -->
                <div class="col-span-1 md:col-span-2">
                    <div class="flex items-center space-x-3 mb-4">
                        <div class="w-12 h-12 bg-gradient-to-br from-blue-600 to-blue-800 rounded-lg flex items-center justify-center">
                            <i class="fas fa-print text-white text-2xl"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold">GRAFIKA EXPO 2025</h3>
                            <p class="text-sm text-gray-400">Printing Exhibition</p>
                        </div>
                    </div>
                    <p class="text-gray-300 mb-4">
                        Pameran alat dan mesin cetak sablon digital terbesar di Indonesia. Temukan teknologi terkini dan jalin networking dengan para profesional industri percetakan.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="w-10 h-10 bg-gray-700 hover:bg-blue-600 rounded-lg flex items-center justify-center transition">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-gray-700 hover:bg-blue-600 rounded-lg flex items-center justify-center transition">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-gray-700 hover:bg-blue-600 rounded-lg flex items-center justify-center transition">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-gray-700 hover:bg-blue-600 rounded-lg flex items-center justify-center transition">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div>
                    <h4 class="text-lg font-semibold mb-4">Menu</h4>
                    <ul class="space-y-2">
                        <li><a href="{{ route('home') }}" class="text-gray-300 hover:text-blue-400 transition">Beranda</a></li>
                        <li><a href="{{ route('about') }}" class="text-gray-300 hover:text-blue-400 transition">Tentang</a></li>
                        <li><a href="{{ route('participant') }}" class="text-gray-300 hover:text-blue-400 transition">Peserta</a></li>
                        <li><a href="{{ route('schedule') }}" class="text-gray-300 hover:text-blue-400 transition">Jadwal</a></li>
                        <li><a href="{{ route('sponsor') }}" class="text-gray-300 hover:text-blue-400 transition">Sponsor</a></li>
                    </ul>
                </div>

                <!-- Contact -->
                <div>
                    <h4 class="text-lg font-semibold mb-4">Kontak</h4>
                    <ul class="space-y-3 text-gray-300">
                        <li class="flex items-start space-x-3">
                            <i class="fas fa-map-marker-alt mt-1 text-blue-400"></i>
                            <span>Jakarta Convention Center<br>Jl. Gatot Subroto, Jakarta</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <i class="fas fa-phone text-blue-400"></i>
                            <span>+62 21 1234 5678</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <i class="fas fa-envelope text-blue-400"></i>
                            <span>info@grafikaexpo.com</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-gray-700 pt-8 text-center text-gray-400">
                <p>&copy; {{ date('Y') }} Grafika Expo. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Mobile Menu Toggle Script -->
    <script>
        document.getElementById('mobile-menu-btn').addEventListener('click', function() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        });
    </script>

    @stack('scripts')
</body>
</html>

