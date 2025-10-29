@extends('layouts.public')

@section('title', 'Tentang Kami - Grafika Expo 2025')
@section('description', 'Pelajari lebih lanjut tentang Grafika Expo 2025, pameran alat dan mesin cetak sablon digital terbesar di Indonesia')

@section('content')
<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-blue-900 via-blue-800 to-indigo-900 text-white py-20 overflow-hidden">
    <div class="absolute inset-0 bg-black opacity-20"></div>
    <div class="absolute inset-0">
        <div class="absolute top-0 left-0 w-96 h-96 bg-blue-500 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-indigo-500 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob animation-delay-2000"></div>
    </div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-4xl mx-auto text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-6">Tentang Grafika Expo 2025</h1>
            <p class="text-xl text-blue-100 mb-4">
                Pameran Industri Percetakan Digital & Sablon Terbesar di Indonesia
            </p>
            <div class="w-20 h-1 bg-yellow-300 mx-auto"></div>
        </div>
    </div>
</section>

<!-- Introduction -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-6">Apa itu Grafika Expo?</h2>
                    <p class="text-lg text-gray-600 mb-4">
                        <strong>Grafika Expo 2025</strong> adalah pameran perdana yang dirancang khusus untuk mempertemukan seluruh ekosistem industri percetakan digital dan sablon di Indonesia. Acara ini menjadi platform terbaik bagi pelaku industri untuk bertemu, berbagi pengetahuan, dan mengembangkan bisnis.
                    </p>
                    <p class="text-lg text-gray-600 mb-4">
                        Kami menghadirkan lebih dari 150 peserta pameran dari brand-brand ternama dalam dan luar negeri, menampilkan teknologi terkini dalam industri percetakan digital, screen printing, sublimasi, DTF, DTG, dan berbagai inovasi lainnya.
                    </p>
                    <p class="text-lg text-gray-600">
                        Dengan lebih dari 5000 pengunjung yang diharapkan hadir, Grafika Expo 2025 menjadi ajang networking terbesar bagi supplier, distributor, produsen, dan end-user untuk saling terhubung dan berbisnis.
                    </p>
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <div class="bg-gradient-to-br from-blue-600 to-blue-700 rounded-xl p-6 text-white text-center">
                        <div class="text-4xl font-bold mb-2">150+</div>
                        <div class="text-sm text-blue-100">Peserta Pameran</div>
                    </div>
                    <div class="bg-gradient-to-br from-indigo-600 to-indigo-700 rounded-xl p-6 text-white text-center">
                        <div class="text-4xl font-bold mb-2">5000+</div>
                        <div class="text-sm text-indigo-100">Pengunjung</div>
                    </div>
                    <div class="bg-gradient-to-br from-purple-600 to-purple-700 rounded-xl p-6 text-white text-center">
                        <div class="text-4xl font-bold mb-2">20+</div>
                        <div class="text-sm text-purple-100">Seminar</div>
                    </div>
                    <div class="bg-gradient-to-br from-pink-600 to-pink-700 rounded-xl p-6 text-white text-center">
                        <div class="text-4xl font-bold mb-2">4</div>
                        <div class="text-sm text-pink-100">Hari Event</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Vision & Mission -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Visi & Misi</h2>
                <div class="w-20 h-1 bg-gradient-to-r from-blue-600 to-indigo-600 mx-auto"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-white rounded-2xl p-8 shadow-lg">
                    <div class="w-16 h-16 bg-gradient-to-br from-blue-600 to-blue-800 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-eye text-white text-3xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Visi Kami</h3>
                    <p class="text-gray-600 text-lg">
                        Menjadi pameran industri percetakan digital dan sablon terbesar dan paling berpengaruh di Indonesia, yang menghubungkan seluruh pelaku industri untuk bersama-sama berkembang dan berinovasi.
                    </p>
                </div>

                <div class="bg-white rounded-2xl p-8 shadow-lg">
                    <div class="w-16 h-16 bg-gradient-to-br from-indigo-600 to-indigo-800 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-bullseye text-white text-3xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Misi Kami</h3>
                    <ul class="space-y-3 text-gray-600">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-blue-600 mr-3 mt-1"></i>
                            <span>Memfasilitasi pertemuan antara supplier dan buyer dalam industri percetakan</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-blue-600 mr-3 mt-1"></i>
                            <span>Menampilkan teknologi dan inovasi terkini dalam industri percetakan digital</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-blue-600 mr-3 mt-1"></i>
                            <span>Memberikan edukasi dan pelatihan untuk meningkatkan kompetensi pelaku industri</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-blue-600 mr-3 mt-1"></i>
                            <span>Mendorong pertumbuhan dan perkembangan industri percetakan di Indonesia</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Milestone -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Milestone & Timeline</h2>
                <div class="w-20 h-1 bg-gradient-to-r from-blue-600 to-indigo-600 mx-auto mb-6"></div>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Perjalanan menuju pameran percetakan digital terbesar di Indonesia
                </p>
            </div>

            <div class="relative">
                <!-- Timeline Line -->
                <div class="hidden md:block absolute left-1/2 transform -translate-x-1/2 w-1 h-full bg-gradient-to-b from-blue-200 via-indigo-200 to-purple-200"></div>

                <div class="space-y-12">
                    <!-- Milestone 1 -->
                    <div class="relative grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                        <div class="md:text-right">
                            <div class="bg-gradient-to-br from-blue-50 to-white rounded-xl p-6 shadow-lg border-2 border-blue-100 hover:border-blue-300 transition">
                                <div class="inline-block bg-gradient-to-r from-blue-600 to-blue-700 text-white px-4 py-1 rounded-full text-sm font-semibold mb-3">
                                    Oktober 2024
                                </div>
                                <h3 class="text-2xl font-bold text-gray-800 mb-2">Ide & Konsep</h3>
                                <p class="text-gray-600">
                                    Lahirnya ide untuk menghadirkan pameran percetakan digital pertama di Indonesia yang fokus pada teknologi digital printing dan sablon modern.
                                </p>
                            </div>
                        </div>
                        <div class="hidden md:block"></div>
                        <!-- Timeline Dot -->
                        <div class="hidden md:block absolute left-1/2 transform -translate-x-1/2 -translate-y-1/2 top-1/2">
                            <div class="w-6 h-6 bg-blue-600 rounded-full border-4 border-white shadow-lg"></div>
                        </div>
                    </div>

                    <!-- Milestone 2 -->
                    <div class="relative grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                        <div class="hidden md:block"></div>
                        <div>
                            <div class="bg-gradient-to-br from-indigo-50 to-white rounded-xl p-6 shadow-lg border-2 border-indigo-100 hover:border-indigo-300 transition">
                                <div class="inline-block bg-gradient-to-r from-indigo-600 to-indigo-700 text-white px-4 py-1 rounded-full text-sm font-semibold mb-3">
                                    November 2024
                                </div>
                                <h3 class="text-2xl font-bold text-gray-800 mb-2">Tim & Partnership</h3>
                                <p class="text-gray-600">
                                    Pembentukan tim profesional dan menjalin kerjasama strategis dengan asosiasi percetakan dan brand-brand ternama.
                                </p>
                            </div>
                        </div>
                        <!-- Timeline Dot -->
                        <div class="hidden md:block absolute left-1/2 transform -translate-x-1/2 -translate-y-1/2 top-1/2">
                            <div class="w-6 h-6 bg-indigo-600 rounded-full border-4 border-white shadow-lg"></div>
                        </div>
                    </div>

                    <!-- Milestone 3 -->
                    <div class="relative grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                        <div class="md:text-right">
                            <div class="bg-gradient-to-br from-purple-50 to-white rounded-xl p-6 shadow-lg border-2 border-purple-100 hover:border-purple-300 transition">
                                <div class="inline-block bg-gradient-to-r from-purple-600 to-purple-700 text-white px-4 py-1 rounded-full text-sm font-semibold mb-3">
                                    Desember 2024
                                </div>
                                <h3 class="text-2xl font-bold text-gray-800 mb-2">Venue Booking</h3>
                                <p class="text-gray-600">
                                    Konfirmasi dan booking Jakarta Convention Center sebagai venue utama pameran dengan total area 5000 m².
                                </p>
                            </div>
                        </div>
                        <div class="hidden md:block"></div>
                        <!-- Timeline Dot -->
                        <div class="hidden md:block absolute left-1/2 transform -translate-x-1/2 -translate-y-1/2 top-1/2">
                            <div class="w-6 h-6 bg-purple-600 rounded-full border-4 border-white shadow-lg"></div>
                        </div>
                    </div>

                    <!-- Milestone 4 -->
                    <div class="relative grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                        <div class="hidden md:block"></div>
                        <div>
                            <div class="bg-gradient-to-br from-pink-50 to-white rounded-xl p-6 shadow-lg border-2 border-pink-100 hover:border-pink-300 transition">
                                <div class="inline-block bg-gradient-to-r from-pink-600 to-pink-700 text-white px-4 py-1 rounded-full text-sm font-semibold mb-3">
                                    Januari 2025
                                </div>
                                <h3 class="text-2xl font-bold text-gray-800 mb-2">Registrasi Peserta</h3>
                                <p class="text-gray-600">
                                    Pembukaan pendaftaran peserta pameran dengan respons luar biasa, 50+ brand sudah mendaftar di bulan pertama.
                                </p>
                            </div>
                        </div>
                        <!-- Timeline Dot -->
                        <div class="hidden md:block absolute left-1/2 transform -translate-x-1/2 -translate-y-1/2 top-1/2">
                            <div class="w-6 h-6 bg-pink-600 rounded-full border-4 border-white shadow-lg"></div>
                        </div>
                    </div>

                    <!-- Milestone 5 -->
                    <div class="relative grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                        <div class="md:text-right">
                            <div class="bg-gradient-to-br from-cyan-50 to-white rounded-xl p-6 shadow-lg border-2 border-cyan-100 hover:border-cyan-300 transition">
                                <div class="inline-block bg-gradient-to-r from-cyan-600 to-cyan-700 text-white px-4 py-1 rounded-full text-sm font-semibold mb-3">
                                    Februari 2025
                                </div>
                                <h3 class="text-2xl font-bold text-gray-800 mb-2">Program Edukasi</h3>
                                <p class="text-gray-600">
                                    Finalisasi program seminar dan workshop dengan 20+ pembicara dari praktisi dan ahli industri percetakan.
                                </p>
                            </div>
                        </div>
                        <div class="hidden md:block"></div>
                        <!-- Timeline Dot -->
                        <div class="hidden md:block absolute left-1/2 transform -translate-x-1/2 -translate-y-1/2 top-1/2">
                            <div class="w-6 h-6 bg-cyan-600 rounded-full border-4 border-white shadow-lg"></div>
                        </div>
                    </div>

                    <!-- Milestone 6 - Current/Future -->
                    <div class="relative grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                        <div class="hidden md:block"></div>
                        <div>
                            <div class="bg-gradient-to-br from-yellow-50 to-white rounded-xl p-6 shadow-lg border-2 border-yellow-300 hover:border-yellow-400 transition">
                                <div class="inline-block bg-gradient-to-r from-yellow-500 to-yellow-600 text-white px-4 py-1 rounded-full text-sm font-semibold mb-3">
                                    15-18 Maret 2025
                                </div>
                                <h3 class="text-2xl font-bold text-gray-800 mb-2 flex items-center">
                                    Grafika Expo 2025
                                    <i class="fas fa-star text-yellow-500 ml-2"></i>
                                </h3>
                                <p class="text-gray-600 mb-3">
                                    Grand opening pameran dengan 150+ peserta, 5000+ pengunjung, dan puluhan seminar inspiratif!
                                </p>
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-yellow-100 text-yellow-800 px-3 py-1 rounded-full text-sm font-semibold">
                                        <i class="fas fa-store mr-1"></i>150+ Booth
                                    </span>
                                    <span class="bg-yellow-100 text-yellow-800 px-3 py-1 rounded-full text-sm font-semibold">
                                        <i class="fas fa-users mr-1"></i>5000+ Visitor
                                    </span>
                                    <span class="bg-yellow-100 text-yellow-800 px-3 py-1 rounded-full text-sm font-semibold">
                                        <i class="fas fa-chalkboard-teacher mr-1"></i>20+ Seminar
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- Timeline Dot - Special -->
                        <div class="hidden md:block absolute left-1/2 transform -translate-x-1/2 -translate-y-1/2 top-1/2">
                            <div class="w-8 h-8 bg-gradient-to-r from-yellow-500 to-yellow-600 rounded-full border-4 border-white shadow-xl animate-pulse">
                                <i class="fas fa-star text-white text-xs absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Achievement Stats -->
            <div class="mt-16 grid grid-cols-2 md:grid-cols-4 gap-6">
                <div class="text-center">
                    <div class="text-4xl font-bold text-blue-600 mb-2">150+</div>
                    <div class="text-gray-600 font-medium">Brand Terdaftar</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl font-bold text-indigo-600 mb-2">5000+</div>
                    <div class="text-gray-600 font-medium">Target Pengunjung</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl font-bold text-purple-600 mb-2">5000m²</div>
                    <div class="text-gray-600 font-medium">Luas Area</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl font-bold text-pink-600 mb-2">20+</div>
                    <div class="text-gray-600 font-medium">Program Edukasi</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Attend -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Mengapa Menghadiri Grafika Expo?</h2>
                <div class="w-20 h-1 bg-gradient-to-r from-blue-600 to-indigo-600 mx-auto mb-6"></div>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Grafika Expo 2025 menawarkan berbagai keuntungan dan peluang yang tidak akan Anda temukan di tempat lain
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-gradient-to-br from-blue-50 to-white rounded-xl p-6 border-2 border-blue-100 hover:border-blue-300 transition">
                    <div class="w-14 h-14 bg-gradient-to-br from-blue-600 to-blue-700 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-handshake text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Networking Premium</h3>
                    <p class="text-gray-600">
                        Bertemu langsung dengan supplier, distributor, dan pelaku industri percetakan dari seluruh Indonesia
                    </p>
                </div>

                <div class="bg-gradient-to-br from-indigo-50 to-white rounded-xl p-6 border-2 border-indigo-100 hover:border-indigo-300 transition">
                    <div class="w-14 h-14 bg-gradient-to-br from-indigo-600 to-indigo-700 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-microscope text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Demo Produk Langsung</h3>
                    <p class="text-gray-600">
                        Lihat dan coba langsung mesin-mesin cetak terbaru dari berbagai brand ternama
                    </p>
                </div>

                <div class="bg-gradient-to-br from-purple-50 to-white rounded-xl p-6 border-2 border-purple-100 hover:border-purple-300 transition">
                    <div class="w-14 h-14 bg-gradient-to-br from-purple-600 to-purple-700 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-graduation-cap text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Seminar & Workshop</h3>
                    <p class="text-gray-600">
                        Ikuti 20+ seminar dan workshop dari para ahli dan praktisi berpengalaman
                    </p>
                </div>

                <div class="bg-gradient-to-br from-pink-50 to-white rounded-xl p-6 border-2 border-pink-100 hover:border-pink-300 transition">
                    <div class="w-14 h-14 bg-gradient-to-br from-pink-600 to-pink-700 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-tags text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Promo Eksklusif</h3>
                    <p class="text-gray-600">
                        Dapatkan penawaran khusus dan diskon besar hanya di event ini
                    </p>
                </div>

                <div class="bg-gradient-to-br from-cyan-50 to-white rounded-xl p-6 border-2 border-cyan-100 hover:border-cyan-300 transition">
                    <div class="w-14 h-14 bg-gradient-to-br from-cyan-600 to-cyan-700 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-lightbulb text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Inspirasi & Inovasi</h3>
                    <p class="text-gray-600">
                        Pelajari tren terbaru dan inovasi dalam industri percetakan digital
                    </p>
                </div>

                <div class="bg-gradient-to-br from-green-50 to-white rounded-xl p-6 border-2 border-green-100 hover:border-green-300 transition">
                    <div class="w-14 h-14 bg-gradient-to-br from-green-600 to-green-700 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-chart-line text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Peluang Bisnis</h3>
                    <p class="text-gray-600">
                        Temukan peluang kerjasama dan partnership untuk mengembangkan bisnis Anda
                    </p>
                </div>
            </div>
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
</style>
@endpush

