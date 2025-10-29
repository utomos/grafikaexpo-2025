@extends('layouts.public')

@section('title', 'Grafika Expo 2025 - Pameran Alat & Mesin Cetak Sablon Digital Terbesar')
@section('description', 'Pameran alat dan mesin cetak sablon digital terbesar di Indonesia. Temukan teknologi terkini dan networking dengan profesional industri percetakan.')

@section('content')
<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-blue-900 via-blue-800 to-indigo-900 text-white overflow-hidden">
    <div class="absolute inset-0 bg-black opacity-20"></div>
    <div class="absolute inset-0">
        <div class="absolute top-0 left-0 w-96 h-96 bg-blue-500 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob"></div>
        <div class="absolute top-0 right-0 w-96 h-96 bg-indigo-500 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob animation-delay-2000"></div>
        <div class="absolute bottom-0 left-1/2 w-96 h-96 bg-purple-500 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob animation-delay-4000"></div>
    </div>

    <div class="container mx-auto px-4 py-24 md:py-32 relative z-10">
        <div class="max-w-4xl mx-auto text-center">
            <div class="inline-block bg-blue-600 bg-opacity-30 backdrop-blur-sm px-4 py-2 rounded-full mb-6">
                <span class="text-blue-200 text-sm font-semibold">15-18 Maret 2025</span>
            </div>
            <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">
                Grafika Expo 2025
            </h1>
            <p class="text-xl md:text-2xl text-blue-100 mb-4">
                Pameran Alat & Mesin Cetak Sablon Digital
            </p>
            <p class="text-lg text-blue-200 mb-8 max-w-2xl mx-auto">
                Temukan teknologi percetakan terkini, jalin networking dengan para profesional, dan kembangkan bisnis Anda di pameran terbesar tahun ini.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                <a href="{{ route('registration') }}" class="bg-white text-blue-900 px-8 py-4 rounded-lg font-bold text-lg hover:bg-blue-50 transition shadow-xl hover:scale-105 transform">
                    <i class="fas fa-ticket-alt mr-2"></i>Daftar Sekarang
                </a>
                <a href="{{ route('schedule') }}" class="bg-blue-600 bg-opacity-30 backdrop-blur-sm border-2 border-white text-white px-8 py-4 rounded-lg font-bold text-lg hover:bg-opacity-50 transition">
                    <i class="far fa-calendar mr-2"></i>Lihat Jadwal
                </a>
            </div>

            <!-- Stats -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mt-16">
                <div class="bg-white bg-opacity-10 backdrop-blur-sm rounded-lg p-6">
                    <div class="text-3xl md:text-4xl font-bold text-white mb-2">150+</div>
                    <div class="text-blue-200 text-sm">Peserta Pameran</div>
                </div>
                <div class="bg-white bg-opacity-10 backdrop-blur-sm rounded-lg p-6">
                    <div class="text-3xl md:text-4xl font-bold text-white mb-2">5000+</div>
                    <div class="text-blue-200 text-sm">Pengunjung</div>
                </div>
                <div class="bg-white bg-opacity-10 backdrop-blur-sm rounded-lg p-6">
                    <div class="text-3xl md:text-4xl font-bold text-white mb-2">20+</div>
                    <div class="text-blue-200 text-sm">Seminar & Workshop</div>
                </div>
                <div class="bg-white bg-opacity-10 backdrop-blur-sm rounded-lg p-6">
                    <div class="text-3xl md:text-4xl font-bold text-white mb-2">4</div>
                    <div class="text-blue-200 text-sm">Hari Event</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Wave -->
    <div class="absolute bottom-0 left-0 right-0">
        <svg viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 120L60 105C120 90 240 60 360 45C480 30 600 30 720 37.5C840 45 960 60 1080 67.5C1200 75 1320 75 1380 75L1440 75V120H1380C1320 120 1200 120 1080 120C960 120 840 120 720 120C600 120 480 120 360 120C240 120 120 120 60 120H0Z" fill="#F9FAFB"/>
        </svg>
    </div>
</section>

<!-- Event Info -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-8 text-center hover:shadow-xl transition">
                <div class="w-16 h-16 bg-gradient-to-br from-blue-600 to-blue-800 rounded-full mx-auto mb-4 flex items-center justify-center">
                    <i class="fas fa-calendar-alt text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-2">Tanggal</h3>
                <p class="text-gray-600">15-18 Maret 2025</p>
                <p class="text-sm text-gray-500 mt-1">4 Hari Penuh</p>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-8 text-center hover:shadow-xl transition">
                <div class="w-16 h-16 bg-gradient-to-br from-indigo-600 to-indigo-800 rounded-full mx-auto mb-4 flex items-center justify-center">
                    <i class="fas fa-map-marker-alt text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-2">Lokasi</h3>
                <p class="text-gray-600">Jakarta Convention Center</p>
                <p class="text-sm text-gray-500 mt-1">Jl. Gatot Subroto, Jakarta</p>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-8 text-center hover:shadow-xl transition">
                <div class="w-16 h-16 bg-gradient-to-br from-purple-600 to-purple-800 rounded-full mx-auto mb-4 flex items-center justify-center">
                    <i class="fas fa-clock text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-2">Waktu</h3>
                <p class="text-gray-600">09:00 - 18:00 WIB</p>
                <p class="text-sm text-gray-500 mt-1">Setiap Hari</p>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Tentang Grafika Expo 2025</h2>
                <div class="w-20 h-1 bg-gradient-to-r from-blue-600 to-indigo-600 mx-auto mb-6"></div>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Pameran perdana yang mempertemukan seluruh pemangku kepentingan industri percetakan digital dan sablon di Indonesia
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div>
                    <div class="bg-gradient-to-br from-blue-600 to-indigo-600 rounded-2xl p-8 text-white">
                        <h3 class="text-2xl font-bold mb-4">Mengapa Menghadiri?</h3>
                        <ul class="space-y-4">
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-blue-200 text-xl mr-3 mt-1"></i>
                                <span>Lihat demo langsung mesin cetak terkini dari brand ternama</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-blue-200 text-xl mr-3 mt-1"></i>
                                <span>Networking dengan supplier, distributor, dan pelaku industri</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-blue-200 text-xl mr-3 mt-1"></i>
                                <span>Ikuti seminar dan workshop dari para ahli</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-blue-200 text-xl mr-3 mt-1"></i>
                                <span>Dapatkan penawaran spesial dan diskon eksklusif</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-blue-200 text-xl mr-3 mt-1"></i>
                                <span>Pelajari tren dan inovasi terbaru industri percetakan</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="space-y-6">
                    <div class="bg-gray-50 rounded-xl p-6 border-l-4 border-blue-600">
                        <div class="flex items-center mb-3">
                            <i class="fas fa-print text-blue-600 text-2xl mr-3"></i>
                            <h4 class="text-xl font-bold text-gray-800">Mesin & Alat Cetak</h4>
                        </div>
                        <p class="text-gray-600">
                            Digital printing, screen printing, offset, DTF, DTG, sublimation, dan teknologi terkini lainnya.
                        </p>
                    </div>

                    <div class="bg-gray-50 rounded-xl p-6 border-l-4 border-indigo-600">
                        <div class="flex items-center mb-3">
                            <i class="fas fa-shopping-bag text-indigo-600 text-2xl mr-3"></i>
                            <h4 class="text-xl font-bold text-gray-800">Material & Supplies</h4>
                        </div>
                        <p class="text-gray-600">
                            Tinta, bahan baku, film, kertas, tekstil, dan semua kebutuhan produksi percetakan Anda.
                        </p>
                    </div>

                    <div class="bg-gray-50 rounded-xl p-6 border-l-4 border-purple-600">
                        <div class="flex items-center mb-3">
                            <i class="fas fa-graduation-cap text-purple-600 text-2xl mr-3"></i>
                            <h4 class="text-xl font-bold text-gray-800">Edukasi & Pelatihan</h4>
                        </div>
                        <p class="text-gray-600">
                            Workshop praktis, seminar bisnis, dan sharing session dengan praktisi berpengalaman.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Categories Section -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Kategori Produk</h2>
            <div class="w-20 h-1 bg-gradient-to-r from-blue-600 to-indigo-600 mx-auto mb-6"></div>
            <p class="text-lg text-gray-600">Temukan berbagai kategori produk dan layanan di Grafika Expo 2025</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-xl transition group">
                <div class="w-14 h-14 bg-gradient-to-br from-blue-500 to-blue-600 rounded-lg flex items-center justify-center mb-4 group-hover:scale-110 transition">
                    <i class="fas fa-desktop text-white text-2xl"></i>
                </div>
                <h3 class="text-lg font-bold text-gray-800 mb-2">Digital Printing</h3>
                <p class="text-gray-600 text-sm">Mesin digital printing, large format, eco-solvent, UV printing</p>
            </div>

            <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-xl transition group">
                <div class="w-14 h-14 bg-gradient-to-br from-indigo-500 to-indigo-600 rounded-lg flex items-center justify-center mb-4 group-hover:scale-110 transition">
                    <i class="fas fa-paint-brush text-white text-2xl"></i>
                </div>
                <h3 class="text-lg font-bold text-gray-800 mb-2">Screen Printing</h3>
                <p class="text-gray-600 text-sm">Sablon manual, otomatis, kaos, rotary, flash dryer</p>
            </div>

            <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-xl transition group">
                <div class="w-14 h-14 bg-gradient-to-br from-purple-500 to-purple-600 rounded-lg flex items-center justify-center mb-4 group-hover:scale-110 transition">
                    <i class="fas fa-tshirt text-white text-2xl"></i>
                </div>
                <h3 class="text-lg font-bold text-gray-800 mb-2">DTF & DTG</h3>
                <p class="text-gray-600 text-sm">Direct to Film, Direct to Garment, heat press, transfer paper</p>
            </div>

            <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-xl transition group">
                <div class="w-14 h-14 bg-gradient-to-br from-pink-500 to-pink-600 rounded-lg flex items-center justify-center mb-4 group-hover:scale-110 transition">
                    <i class="fas fa-palette text-white text-2xl"></i>
                </div>
                <h3 class="text-lg font-bold text-gray-800 mb-2">Sublimation</h3>
                <p class="text-gray-600 text-sm">Mesin sublimasi, tinta, kertas, mug press, tumbler press</p>
            </div>

            <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-xl transition group">
                <div class="w-14 h-14 bg-gradient-to-br from-cyan-500 to-cyan-600 rounded-lg flex items-center justify-center mb-4 group-hover:scale-110 transition">
                    <i class="fas fa-cut text-white text-2xl"></i>
                </div>
                <h3 class="text-lg font-bold text-gray-800 mb-2">Cutting & Finishing</h3>
                <p class="text-gray-600 text-sm">Mesin potong, laminating, guillotine, laser cutting</p>
            </div>

            <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-xl transition group">
                <div class="w-14 h-14 bg-gradient-to-br from-green-500 to-green-600 rounded-lg flex items-center justify-center mb-4 group-hover:scale-110 transition">
                    <i class="fas fa-fill-drip text-white text-2xl"></i>
                </div>
                <h3 class="text-lg font-bold text-gray-800 mb-2">Tinta & Bahan Baku</h3>
                <p class="text-gray-600 text-sm">Berbagai jenis tinta, plastisol, emulsi, thinner, cat</p>
            </div>

            <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-xl transition group">
                <div class="w-14 h-14 bg-gradient-to-br from-orange-500 to-orange-600 rounded-lg flex items-center justify-center mb-4 group-hover:scale-110 transition">
                    <i class="fas fa-box-open text-white text-2xl"></i>
                </div>
                <h3 class="text-lg font-bold text-gray-800 mb-2">Material & Media</h3>
                <p class="text-gray-600 text-sm">Vinyl, banner, kanvas, kertas, tekstil, sticker</p>
            </div>

            <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-xl transition group">
                <div class="w-14 h-14 bg-gradient-to-br from-red-500 to-red-600 rounded-lg flex items-center justify-center mb-4 group-hover:scale-110 transition">
                    <i class="fas fa-tools text-white text-2xl"></i>
                </div>
                <h3 class="text-lg font-bold text-gray-800 mb-2">Peralatan Pendukung</h3>
                <p class="text-gray-600 text-sm">Software, RIP, spare parts, maintenance tools</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-gradient-to-r from-blue-600 to-indigo-600 text-white">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">Siap Bergabung dengan Kami?</h2>
            <p class="text-xl text-blue-100 mb-8">
                Jangan lewatkan kesempatan emas untuk mengembangkan bisnis percetakan Anda. Daftar sekarang dan dapatkan berbagai keuntungan eksklusif!
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('registration') }}" class="bg-white text-blue-600 px-8 py-4 rounded-lg font-bold text-lg hover:bg-blue-50 transition shadow-xl inline-flex items-center justify-center">
                    <i class="fas fa-user-plus mr-2"></i>Daftar sebagai Pengunjung
                </a>
                <a href="#" class="bg-blue-800 border-2 border-white text-white px-8 py-4 rounded-lg font-bold text-lg hover:bg-blue-900 transition inline-flex items-center justify-center">
                    <i class="fas fa-store mr-2"></i>Daftar sebagai Peserta
                </a>
            </div>

            <div class="mt-12 grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white bg-opacity-10 backdrop-blur-sm rounded-lg p-6">
                    <i class="fas fa-tags text-4xl mb-3"></i>
                    <h3 class="font-bold text-lg mb-2">Harga Spesial</h3>
                    <p class="text-blue-100 text-sm">Dapatkan diskon early bird untuk pendaftaran awal</p>
                </div>
                <div class="bg-white bg-opacity-10 backdrop-blur-sm rounded-lg p-6">
                    <i class="fas fa-gift text-4xl mb-3"></i>
                    <h3 class="font-bold text-lg mb-2">Free Merchandise</h3>
                    <p class="text-blue-100 text-sm">Goodie bag dan merchandise eksklusif untuk peserta</p>
                </div>
                <div class="bg-white bg-opacity-10 backdrop-blur-sm rounded-lg p-6">
                    <i class="fas fa-certificate text-4xl mb-3"></i>
                    <h3 class="font-bold text-lg mb-2">Sertifikat</h3>
                    <p class="text-blue-100 text-sm">Sertifikat resmi untuk peserta workshop dan seminar</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Participants Preview -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Peserta Pameran</h2>
            <div class="w-20 h-1 bg-gradient-to-r from-blue-600 to-indigo-600 mx-auto mb-6"></div>
            <p class="text-lg text-gray-600">Brand-brand ternama yang akan hadir di Grafika Expo 2025</p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-6 mb-12">
            <div class="bg-gray-50 rounded-lg p-6 flex items-center justify-center hover:shadow-lg transition h-32">
                <div class="text-center">
                    <div class="text-3xl font-bold text-gray-400">LOGO</div>
                    <div class="text-xs text-gray-500 mt-1">Brand 1</div>
                </div>
            </div>
            <div class="bg-gray-50 rounded-lg p-6 flex items-center justify-center hover:shadow-lg transition h-32">
                <div class="text-center">
                    <div class="text-3xl font-bold text-gray-400">LOGO</div>
                    <div class="text-xs text-gray-500 mt-1">Brand 2</div>
                </div>
            </div>
            <div class="bg-gray-50 rounded-lg p-6 flex items-center justify-center hover:shadow-lg transition h-32">
                <div class="text-center">
                    <div class="text-3xl font-bold text-gray-400">LOGO</div>
                    <div class="text-xs text-gray-500 mt-1">Brand 3</div>
                </div>
            </div>
            <div class="bg-gray-50 rounded-lg p-6 flex items-center justify-center hover:shadow-lg transition h-32">
                <div class="text-center">
                    <div class="text-3xl font-bold text-gray-400">LOGO</div>
                    <div class="text-xs text-gray-500 mt-1">Brand 4</div>
                </div>
            </div>
            <div class="bg-gray-50 rounded-lg p-6 flex items-center justify-center hover:shadow-lg transition h-32">
                <div class="text-center">
                    <div class="text-3xl font-bold text-gray-400">LOGO</div>
                    <div class="text-xs text-gray-500 mt-1">Brand 5</div>
                </div>
            </div>
            <div class="bg-gray-50 rounded-lg p-6 flex items-center justify-center hover:shadow-lg transition h-32">
                <div class="text-center">
                    <div class="text-3xl font-bold text-gray-400">LOGO</div>
                    <div class="text-xs text-gray-500 mt-1">Brand 6</div>
                </div>
            </div>
        </div>

        <div class="text-center">
            <a href="{{ route('participant') }}" class="inline-flex items-center text-blue-600 font-semibold hover:text-blue-700 transition">
                Lihat Semua Peserta <i class="fas fa-arrow-right ml-2"></i>
            </a>
        </div>
    </div>
</section>

@endsection

@push('styles')
<style>
    @keyframes blob {
        0%, 100% { transform: translate(0, 0) scale(1); }
        33% { transform: translate(30px, -50px) scale(1.1); }
        66% { transform: translate(-20px, 20px) scale(0.9); }
    }
    .animate-blob {
        animation: blob 7s infinite;
    }
    .animation-delay-2000 {
        animation-delay: 2s;
    }
    .animation-delay-4000 {
        animation-delay: 4s;
    }
</style>
@endpush

