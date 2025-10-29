@extends('layouts.public')

@section('title', 'Jadwal Event - Grafika Expo 2025')
@section('description', 'Jadwal lengkap acara Grafika Expo 2025. Cek seminar, workshop, dan demo produk selama 3 hari pameran.')

@section('content')
<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-blue-600 via-blue-700 to-indigo-800 text-white py-20">
    <div class="absolute inset-0 bg-black opacity-10"></div>
    <div class="container mx-auto px-4 relative z-10">
        <div class="text-center max-w-4xl mx-auto">
            <div class="inline-block bg-white/20 backdrop-blur-sm px-4 py-2 rounded-full mb-6">
                <span class="text-sm font-semibold">📅 JADWAL EVENT</span>
            </div>
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6">
                Jadwal Lengkap<br/>
                <span class="text-yellow-300">Grafika Expo 2025</span>
            </h1>
            <p class="text-lg md:text-xl text-blue-100 mb-8 max-w-2xl mx-auto">
                Ikuti rangkaian acara menarik selama 3 hari penuh. Seminar, workshop, demo produk, dan networking dengan para profesional industri percetakan.
            </p>

            <!-- Event Date Info -->
            <div class="flex flex-wrap justify-center gap-4 mb-8">
                <div class="bg-white/10 backdrop-blur-md px-6 py-4 rounded-xl border border-white/20">
                    <i class="fas fa-calendar-alt text-yellow-300 mb-2"></i>
                    <p class="text-sm text-blue-100">Tanggal</p>
                    <p class="text-xl font-bold">15-17 Desember 2025</p>
                </div>
                <div class="bg-white/10 backdrop-blur-md px-6 py-4 rounded-xl border border-white/20">
                    <i class="fas fa-clock text-yellow-300 mb-2"></i>
                    <p class="text-sm text-blue-100">Waktu</p>
                    <p class="text-xl font-bold">09:00 - 18:00 WIB</p>
                </div>
                <div class="bg-white/10 backdrop-blur-md px-6 py-4 rounded-xl border border-white/20">
                    <i class="fas fa-map-marker-alt text-yellow-300 mb-2"></i>
                    <p class="text-sm text-blue-100">Lokasi</p>
                    <p class="text-xl font-bold">Jakarta Convention Center</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Schedule Navigation -->
<section class="bg-white shadow-md sticky top-20 z-40">
    <div class="container mx-auto px-4">
        <div class="flex justify-center gap-2 py-4 overflow-x-auto">
            <button onclick="showDay(1)" id="day-btn-1" class="day-btn px-6 py-3 rounded-lg font-semibold transition whitespace-nowrap bg-blue-600 text-white">
                <i class="fas fa-calendar-day mr-2"></i>Hari 1 - 15 Des
            </button>
            <button onclick="showDay(2)" id="day-btn-2" class="day-btn px-6 py-3 rounded-lg font-semibold transition whitespace-nowrap bg-gray-200 text-gray-700 hover:bg-gray-300">
                <i class="fas fa-calendar-day mr-2"></i>Hari 2 - 16 Des
            </button>
            <button onclick="showDay(3)" id="day-btn-3" class="day-btn px-6 py-3 rounded-lg font-semibold transition whitespace-nowrap bg-gray-200 text-gray-700 hover:bg-gray-300">
                <i class="fas fa-calendar-day mr-2"></i>Hari 3 - 17 Des
            </button>
        </div>
    </div>
</section>

<!-- Schedule Content -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">

        <!-- Day 1 Schedule -->
        <div id="schedule-day-1" class="schedule-day">
            <div class="max-w-5xl mx-auto">
                <div class="text-center mb-12">
                    <h2 class="text-4xl font-bold text-gray-800 mb-4">
                        Hari Pertama
                        <span class="block text-2xl text-blue-600 mt-2">Senin, 15 Desember 2025</span>
                    </h2>
                    <p class="text-gray-600">Pembukaan & Pameran Produk Terbaru</p>
                </div>

                <!-- Timeline -->
                <div class="space-y-6">

                    <!-- Schedule Item -->
                    <div class="bg-white rounded-xl shadow-md hover:shadow-xl transition p-6 border-l-4 border-blue-600">
                        <div class="flex flex-col md:flex-row md:items-center gap-4">
                            <div class="flex-shrink-0">
                                <div class="bg-blue-100 text-blue-600 px-4 py-2 rounded-lg text-center">
                                    <i class="fas fa-clock text-sm"></i>
                                    <p class="font-bold text-lg">08:00</p>
                                    <p class="text-xs">WIB</p>
                                </div>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-bold text-gray-800 mb-2">Registrasi & Akreditasi Pengunjung</h3>
                                <p class="text-gray-600 mb-2">Pendaftaran ulang peserta dan pengunjung di lobby utama</p>
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full text-sm">
                                        <i class="fas fa-map-marker-alt mr-1"></i>Lobby Utama
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Schedule Item -->
                    <div class="bg-white rounded-xl shadow-md hover:shadow-xl transition p-6 border-l-4 border-green-600">
                        <div class="flex flex-col md:flex-row md:items-center gap-4">
                            <div class="flex-shrink-0">
                                <div class="bg-green-100 text-green-600 px-4 py-2 rounded-lg text-center">
                                    <i class="fas fa-clock text-sm"></i>
                                    <p class="font-bold text-lg">09:00</p>
                                    <p class="text-xs">WIB</p>
                                </div>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-bold text-gray-800 mb-2">🎉 Pembukaan Resmi Grafika Expo 2025</h3>
                                <p class="text-gray-600 mb-2">Sambutan dari Ketua Penyelenggara & Pemotongan Pita</p>
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-sm">
                                        <i class="fas fa-star mr-1"></i>Acara Utama
                                    </span>
                                    <span class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full text-sm">
                                        <i class="fas fa-map-marker-alt mr-1"></i>Main Hall
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Schedule Item -->
                    <div class="bg-white rounded-xl shadow-md hover:shadow-xl transition p-6 border-l-4 border-purple-600">
                        <div class="flex flex-col md:flex-row md:items-center gap-4">
                            <div class="flex-shrink-0">
                                <div class="bg-purple-100 text-purple-600 px-4 py-2 rounded-lg text-center">
                                    <i class="fas fa-clock text-sm"></i>
                                    <p class="font-bold text-lg">10:00</p>
                                    <p class="text-xs">WIB</p>
                                </div>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-bold text-gray-800 mb-2">Seminar: Tren Industri Percetakan Digital 2025</h3>
                                <p class="text-gray-600 mb-2">Pembicara: Dr. Ahmad Santoso - Expert Printing Technology</p>
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-purple-100 text-purple-700 px-3 py-1 rounded-full text-sm">
                                        <i class="fas fa-chalkboard-teacher mr-1"></i>Seminar
                                    </span>
                                    <span class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full text-sm">
                                        <i class="fas fa-map-marker-alt mr-1"></i>Seminar Room A
                                    </span>
                                    <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-sm">
                                        <i class="fas fa-users mr-1"></i>300 Peserta
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Schedule Item -->
                    <div class="bg-white rounded-xl shadow-md hover:shadow-xl transition p-6 border-l-4 border-orange-600">
                        <div class="flex flex-col md:flex-row md:items-center gap-4">
                            <div class="flex-shrink-0">
                                <div class="bg-orange-100 text-orange-600 px-4 py-2 rounded-lg text-center">
                                    <i class="fas fa-clock text-sm"></i>
                                    <p class="font-bold text-lg">12:00</p>
                                    <p class="text-xs">WIB</p>
                                </div>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-bold text-gray-800 mb-2">Istirahat & Networking Lunch</h3>
                                <p class="text-gray-600 mb-2">Makan siang bersama & kesempatan networking dengan exhibitor</p>
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-orange-100 text-orange-700 px-3 py-1 rounded-full text-sm">
                                        <i class="fas fa-utensils mr-1"></i>Lunch Break
                                    </span>
                                    <span class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full text-sm">
                                        <i class="fas fa-map-marker-alt mr-1"></i>Food Court
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Schedule Item -->
                    <div class="bg-white rounded-xl shadow-md hover:shadow-xl transition p-6 border-l-4 border-red-600">
                        <div class="flex flex-col md:flex-row md:items-center gap-4">
                            <div class="flex-shrink-0">
                                <div class="bg-red-100 text-red-600 px-4 py-2 rounded-lg text-center">
                                    <i class="fas fa-clock text-sm"></i>
                                    <p class="font-bold text-lg">13:30</p>
                                    <p class="text-xs">WIB</p>
                                </div>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-bold text-gray-800 mb-2">Workshop: Teknik Sablon Digital Modern</h3>
                                <p class="text-gray-600 mb-2">Workshop hands-on dengan mesin sablon digital terbaru</p>
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-sm">
                                        <i class="fas fa-tools mr-1"></i>Workshop
                                    </span>
                                    <span class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full text-sm">
                                        <i class="fas fa-map-marker-alt mr-1"></i>Workshop Area
                                    </span>
                                    <span class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full text-sm">
                                        <i class="fas fa-exclamation-circle mr-1"></i>Terbatas 50 Peserta
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Schedule Item -->
                    <div class="bg-white rounded-xl shadow-md hover:shadow-xl transition p-6 border-l-4 border-indigo-600">
                        <div class="flex flex-col md:flex-row md:items-center gap-4">
                            <div class="flex-shrink-0">
                                <div class="bg-indigo-100 text-indigo-600 px-4 py-2 rounded-lg text-center">
                                    <i class="fas fa-clock text-sm"></i>
                                    <p class="font-bold text-lg">15:30</p>
                                    <p class="text-xs">WIB</p>
                                </div>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-bold text-gray-800 mb-2">Demo Produk: Mesin Cetak UV LED Terbaru</h3>
                                <p class="text-gray-600 mb-2">Live demonstration mesin cetak UV LED generasi terbaru</p>
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-indigo-100 text-indigo-700 px-3 py-1 rounded-full text-sm">
                                        <i class="fas fa-desktop mr-1"></i>Demo Produk
                                    </span>
                                    <span class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full text-sm">
                                        <i class="fas fa-map-marker-alt mr-1"></i>Booth 12-15
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Schedule Item -->
                    <div class="bg-white rounded-xl shadow-md hover:shadow-xl transition p-6 border-l-4 border-gray-600">
                        <div class="flex flex-col md:flex-row md:items-center gap-4">
                            <div class="flex-shrink-0">
                                <div class="bg-gray-100 text-gray-600 px-4 py-2 rounded-lg text-center">
                                    <i class="fas fa-clock text-sm"></i>
                                    <p class="font-bold text-lg">18:00</p>
                                    <p class="text-xs">WIB</p>
                                </div>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-bold text-gray-800 mb-2">Penutupan Hari Pertama</h3>
                                <p class="text-gray-600 mb-2">Penutupan pameran hari pertama - Sampai jumpa besok!</p>
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full text-sm">
                                        <i class="fas fa-door-open mr-1"></i>Penutupan
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Day 2 Schedule -->
        <div id="schedule-day-2" class="schedule-day hidden">
            <div class="max-w-5xl mx-auto">
                <div class="text-center mb-12">
                    <h2 class="text-4xl font-bold text-gray-800 mb-4">
                        Hari Kedua
                        <span class="block text-2xl text-blue-600 mt-2">Selasa, 16 Desember 2025</span>
                    </h2>
                    <p class="text-gray-600">Workshop Intensif & Business Matching</p>
                </div>

                <!-- Timeline -->
                <div class="space-y-6">

                    <!-- Schedule Item -->
                    <div class="bg-white rounded-xl shadow-md hover:shadow-xl transition p-6 border-l-4 border-blue-600">
                        <div class="flex flex-col md:flex-row md:items-center gap-4">
                            <div class="flex-shrink-0">
                                <div class="bg-blue-100 text-blue-600 px-4 py-2 rounded-lg text-center">
                                    <i class="fas fa-clock text-sm"></i>
                                    <p class="font-bold text-lg">09:00</p>
                                    <p class="text-xs">WIB</p>
                                </div>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-bold text-gray-800 mb-2">Pembukaan Hari Kedua</h3>
                                <p class="text-gray-600 mb-2">Pameran dibuka untuk umum</p>
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full text-sm">
                                        <i class="fas fa-map-marker-alt mr-1"></i>Main Hall
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Schedule Item -->
                    <div class="bg-white rounded-xl shadow-md hover:shadow-xl transition p-6 border-l-4 border-purple-600">
                        <div class="flex flex-col md:flex-row md:items-center gap-4">
                            <div class="flex-shrink-0">
                                <div class="bg-purple-100 text-purple-600 px-4 py-2 rounded-lg text-center">
                                    <i class="fas fa-clock text-sm"></i>
                                    <p class="font-bold text-lg">10:00</p>
                                    <p class="text-xs">WIB</p>
                                </div>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-bold text-gray-800 mb-2">Seminar: Strategi Bisnis Percetakan di Era Digital</h3>
                                <p class="text-gray-600 mb-2">Pembicara: Budi Hartono - CEO PrintTech Indonesia</p>
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-purple-100 text-purple-700 px-3 py-1 rounded-full text-sm">
                                        <i class="fas fa-chalkboard-teacher mr-1"></i>Seminar
                                    </span>
                                    <span class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full text-sm">
                                        <i class="fas fa-map-marker-alt mr-1"></i>Seminar Room A
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Schedule Item -->
                    <div class="bg-white rounded-xl shadow-md hover:shadow-xl transition p-6 border-l-4 border-green-600">
                        <div class="flex flex-col md:flex-row md:items-center gap-4">
                            <div class="flex-shrink-0">
                                <div class="bg-green-100 text-green-600 px-4 py-2 rounded-lg text-center">
                                    <i class="fas fa-clock text-sm"></i>
                                    <p class="font-bold text-lg">11:30</p>
                                    <p class="text-xs">WIB</p>
                                </div>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-bold text-gray-800 mb-2">Panel Discussion: Masa Depan Industri Percetakan</h3>
                                <p class="text-gray-600 mb-2">Diskusi panel dengan para ahli industri percetakan Indonesia</p>
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-sm">
                                        <i class="fas fa-comments mr-1"></i>Panel Discussion
                                    </span>
                                    <span class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full text-sm">
                                        <i class="fas fa-map-marker-alt mr-1"></i>Seminar Room B
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Schedule Item -->
                    <div class="bg-white rounded-xl shadow-md hover:shadow-xl transition p-6 border-l-4 border-orange-600">
                        <div class="flex flex-col md:flex-row md:items-center gap-4">
                            <div class="flex-shrink-0">
                                <div class="bg-orange-100 text-orange-600 px-4 py-2 rounded-lg text-center">
                                    <i class="fas fa-clock text-sm"></i>
                                    <p class="font-bold text-lg">12:30</p>
                                    <p class="text-xs">WIB</p>
                                </div>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-bold text-gray-800 mb-2">Istirahat & Networking Lunch</h3>
                                <p class="text-gray-600 mb-2">Kesempatan networking dengan peserta & exhibitor lainnya</p>
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-orange-100 text-orange-700 px-3 py-1 rounded-full text-sm">
                                        <i class="fas fa-utensils mr-1"></i>Lunch Break
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Schedule Item -->
                    <div class="bg-white rounded-xl shadow-md hover:shadow-xl transition p-6 border-l-4 border-red-600">
                        <div class="flex flex-col md:flex-row md:items-center gap-4">
                            <div class="flex-shrink-0">
                                <div class="bg-red-100 text-red-600 px-4 py-2 rounded-lg text-center">
                                    <i class="fas fa-clock text-sm"></i>
                                    <p class="font-bold text-lg">14:00</p>
                                    <p class="text-xs">WIB</p>
                                </div>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-bold text-gray-800 mb-2">Workshop: Desain Grafis untuk Industri Percetakan</h3>
                                <p class="text-gray-600 mb-2">Pelatihan desain grafis khusus untuk produksi percetakan</p>
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-sm">
                                        <i class="fas fa-tools mr-1"></i>Workshop
                                    </span>
                                    <span class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full text-sm">
                                        <i class="fas fa-map-marker-alt mr-1"></i>Workshop Area
                                    </span>
                                    <span class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full text-sm">
                                        <i class="fas fa-exclamation-circle mr-1"></i>Terbatas 40 Peserta
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Schedule Item -->
                    <div class="bg-white rounded-xl shadow-md hover:shadow-xl transition p-6 border-l-4 border-pink-600">
                        <div class="flex flex-col md:flex-row md:items-center gap-4">
                            <div class="flex-shrink-0">
                                <div class="bg-pink-100 text-pink-600 px-4 py-2 rounded-lg text-center">
                                    <i class="fas fa-clock text-sm"></i>
                                    <p class="font-bold text-lg">15:00</p>
                                    <p class="text-xs">WIB</p>
                                </div>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-bold text-gray-800 mb-2">Business Matching Session</h3>
                                <p class="text-gray-600 mb-2">Sesi pertemuan bisnis antara buyer dan supplier</p>
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-pink-100 text-pink-700 px-3 py-1 rounded-full text-sm">
                                        <i class="fas fa-handshake mr-1"></i>Business Matching
                                    </span>
                                    <span class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full text-sm">
                                        <i class="fas fa-map-marker-alt mr-1"></i>Meeting Room C
                                    </span>
                                    <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-sm">
                                        <i class="fas fa-calendar-check mr-1"></i>By Appointment
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Schedule Item -->
                    <div class="bg-white rounded-xl shadow-md hover:shadow-xl transition p-6 border-l-4 border-indigo-600">
                        <div class="flex flex-col md:flex-row md:items-center gap-4">
                            <div class="flex-shrink-0">
                                <div class="bg-indigo-100 text-indigo-600 px-4 py-2 rounded-lg text-center">
                                    <i class="fas fa-clock text-sm"></i>
                                    <p class="font-bold text-lg">16:30</p>
                                    <p class="text-xs">WIB</p>
                                </div>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-bold text-gray-800 mb-2">Demo: Mesin Cutting Plotter Otomatis</h3>
                                <p class="text-gray-600 mb-2">Demonstrasi teknologi cutting plotter terbaru dengan AI</p>
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-indigo-100 text-indigo-700 px-3 py-1 rounded-full text-sm">
                                        <i class="fas fa-desktop mr-1"></i>Demo Produk
                                    </span>
                                    <span class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full text-sm">
                                        <i class="fas fa-map-marker-alt mr-1"></i>Booth 20-22
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Schedule Item -->
                    <div class="bg-white rounded-xl shadow-md hover:shadow-xl transition p-6 border-l-4 border-gray-600">
                        <div class="flex flex-col md:flex-row md:items-center gap-4">
                            <div class="flex-shrink-0">
                                <div class="bg-gray-100 text-gray-600 px-4 py-2 rounded-lg text-center">
                                    <i class="fas fa-clock text-sm"></i>
                                    <p class="font-bold text-lg">18:00</p>
                                    <p class="text-xs">WIB</p>
                                </div>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-bold text-gray-800 mb-2">Penutupan Hari Kedua</h3>
                                <p class="text-gray-600 mb-2">Penutupan pameran hari kedua</p>
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full text-sm">
                                        <i class="fas fa-door-open mr-1"></i>Penutupan
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Day 3 Schedule -->
        <div id="schedule-day-3" class="schedule-day hidden">
            <div class="max-w-5xl mx-auto">
                <div class="text-center mb-12">
                    <h2 class="text-4xl font-bold text-gray-800 mb-4">
                        Hari Ketiga
                        <span class="block text-2xl text-blue-600 mt-2">Rabu, 17 Desember 2025</span>
                    </h2>
                    <p class="text-gray-600">Penutupan & Grand Prize Draw</p>
                </div>

                <!-- Timeline -->
                <div class="space-y-6">

                    <!-- Schedule Item -->
                    <div class="bg-white rounded-xl shadow-md hover:shadow-xl transition p-6 border-l-4 border-blue-600">
                        <div class="flex flex-col md:flex-row md:items-center gap-4">
                            <div class="flex-shrink-0">
                                <div class="bg-blue-100 text-blue-600 px-4 py-2 rounded-lg text-center">
                                    <i class="fas fa-clock text-sm"></i>
                                    <p class="font-bold text-lg">09:00</p>
                                    <p class="text-xs">WIB</p>
                                </div>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-bold text-gray-800 mb-2">Pembukaan Hari Terakhir</h3>
                                <p class="text-gray-600 mb-2">Kesempatan terakhir untuk mengunjungi booth exhibitor</p>
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full text-sm">
                                        <i class="fas fa-map-marker-alt mr-1"></i>Main Hall
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Schedule Item -->
                    <div class="bg-white rounded-xl shadow-md hover:shadow-xl transition p-6 border-l-4 border-purple-600">
                        <div class="flex flex-col md:flex-row md:items-center gap-4">
                            <div class="flex-shrink-0">
                                <div class="bg-purple-100 text-purple-600 px-4 py-2 rounded-lg text-center">
                                    <i class="fas fa-clock text-sm"></i>
                                    <p class="font-bold text-lg">10:00</p>
                                    <p class="text-xs">WIB</p>
                                </div>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-bold text-gray-800 mb-2">Seminar: Sustainability dalam Industri Percetakan</h3>
                                <p class="text-gray-600 mb-2">Pembicara: Prof. Dr. Siti Nurjanah - Environmental Expert</p>
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-purple-100 text-purple-700 px-3 py-1 rounded-full text-sm">
                                        <i class="fas fa-chalkboard-teacher mr-1"></i>Seminar
                                    </span>
                                    <span class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full text-sm">
                                        <i class="fas fa-map-marker-alt mr-1"></i>Seminar Room A
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Schedule Item -->
                    <div class="bg-white rounded-xl shadow-md hover:shadow-xl transition p-6 border-l-4 border-red-600">
                        <div class="flex flex-col md:flex-row md:items-center gap-4">
                            <div class="flex-shrink-0">
                                <div class="bg-red-100 text-red-600 px-4 py-2 rounded-lg text-center">
                                    <i class="fas fa-clock text-sm"></i>
                                    <p class="font-bold text-lg">11:30</p>
                                    <p class="text-xs">WIB</p>
                                </div>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-bold text-gray-800 mb-2">Workshop: Perawatan Mesin Cetak Industrial</h3>
                                <p class="text-gray-600 mb-2">Tips & trik maintenance mesin cetak untuk performa optimal</p>
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-sm">
                                        <i class="fas fa-tools mr-1"></i>Workshop
                                    </span>
                                    <span class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full text-sm">
                                        <i class="fas fa-map-marker-alt mr-1"></i>Workshop Area
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Schedule Item -->
                    <div class="bg-white rounded-xl shadow-md hover:shadow-xl transition p-6 border-l-4 border-orange-600">
                        <div class="flex flex-col md:flex-row md:items-center gap-4">
                            <div class="flex-shrink-0">
                                <div class="bg-orange-100 text-orange-600 px-4 py-2 rounded-lg text-center">
                                    <i class="fas fa-clock text-sm"></i>
                                    <p class="font-bold text-lg">13:00</p>
                                    <p class="text-xs">WIB</p>
                                </div>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-bold text-gray-800 mb-2">Istirahat Siang</h3>
                                <p class="text-gray-600 mb-2">Waktu istirahat dan networking terakhir</p>
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-orange-100 text-orange-700 px-3 py-1 rounded-full text-sm">
                                        <i class="fas fa-utensils mr-1"></i>Lunch Break
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Schedule Item -->
                    <div class="bg-white rounded-xl shadow-md hover:shadow-xl transition p-6 border-l-4 border-teal-600">
                        <div class="flex flex-col md:flex-row md:items-center gap-4">
                            <div class="flex-shrink-0">
                                <div class="bg-teal-100 text-teal-600 px-4 py-2 rounded-lg text-center">
                                    <i class="fas fa-clock text-sm"></i>
                                    <p class="font-bold text-lg">14:30</p>
                                    <p class="text-xs">WIB</p>
                                </div>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-bold text-gray-800 mb-2">Talkshow: Success Story Pengusaha Percetakan</h3>
                                <p class="text-gray-600 mb-2">Inspirasi dari para pengusaha sukses di bidang percetakan</p>
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-teal-100 text-teal-700 px-3 py-1 rounded-full text-sm">
                                        <i class="fas fa-microphone mr-1"></i>Talkshow
                                    </span>
                                    <span class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full text-sm">
                                        <i class="fas fa-map-marker-alt mr-1"></i>Main Stage
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Schedule Item -->
                    <div class="bg-white rounded-xl shadow-md hover:shadow-xl transition p-6 border-l-4 border-yellow-600">
                        <div class="flex flex-col md:flex-row md:items-center gap-4">
                            <div class="flex-shrink-0">
                                <div class="bg-yellow-100 text-yellow-600 px-4 py-2 rounded-lg text-center">
                                    <i class="fas fa-clock text-sm"></i>
                                    <p class="font-bold text-lg">16:00</p>
                                    <p class="text-xs">WIB</p>
                                </div>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-bold text-gray-800 mb-2">🎁 Grand Prize Draw & Door Prize</h3>
                                <p class="text-gray-600 mb-2">Undian hadiah utama & doorprize untuk pengunjung beruntung</p>
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full text-sm">
                                        <i class="fas fa-gift mr-1"></i>Door Prize
                                    </span>
                                    <span class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full text-sm">
                                        <i class="fas fa-map-marker-alt mr-1"></i>Main Stage
                                    </span>
                                    <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-sm">
                                        <i class="fas fa-trophy mr-1"></i>Hadiah Menarik
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Schedule Item -->
                    <div class="bg-white rounded-xl shadow-md hover:shadow-xl transition p-6 border-l-4 border-green-600">
                        <div class="flex flex-col md:flex-row md:items-center gap-4">
                            <div class="flex-shrink-0">
                                <div class="bg-green-100 text-green-600 px-4 py-2 rounded-lg text-center">
                                    <i class="fas fa-clock text-sm"></i>
                                    <p class="font-bold text-lg">17:00</p>
                                    <p class="text-xs">WIB</p>
                                </div>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-bold text-gray-800 mb-2">🎊 Penutupan Resmi Grafika Expo 2025</h3>
                                <p class="text-gray-600 mb-2">Sambutan penutupan & ucapan terima kasih kepada semua peserta</p>
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-sm">
                                        <i class="fas fa-star mr-1"></i>Penutupan Resmi
                                    </span>
                                    <span class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full text-sm">
                                        <i class="fas fa-map-marker-alt mr-1"></i>Main Stage
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Schedule Item -->
                    <div class="bg-white rounded-xl shadow-md hover:shadow-xl transition p-6 border-l-4 border-gray-600">
                        <div class="flex flex-col md:flex-row md:items-center gap-4">
                            <div class="flex-shrink-0">
                                <div class="bg-gray-100 text-gray-600 px-4 py-2 rounded-lg text-center">
                                    <i class="fas fa-clock text-sm"></i>
                                    <p class="font-bold text-lg">18:00</p>
                                    <p class="text-xs">WIB</p>
                                </div>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl font-bold text-gray-800 mb-2">Sampai Jumpa di Grafika Expo 2026!</h3>
                                <p class="text-gray-600 mb-2">Terima kasih atas partisipasi Anda. Sampai jumpa tahun depan!</p>
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full text-sm">
                                        <i class="fas fa-heart mr-1"></i>See You Next Year
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</section>

<!-- Download Schedule CTA -->
<section class="py-16 bg-gradient-to-r from-blue-600 to-indigo-700 text-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-4">Download Jadwal Lengkap</h2>
        <p class="text-blue-100 mb-8 max-w-2xl mx-auto">
            Dapatkan jadwal lengkap dalam format PDF untuk kemudahan Anda
        </p>
        <div class="flex flex-wrap justify-center gap-4">
            <a href="#" class="bg-white text-blue-600 px-8 py-4 rounded-lg font-bold hover:bg-blue-50 transition inline-flex items-center shadow-lg">
                <i class="fas fa-download mr-3"></i>
                Download PDF Schedule
            </a>
            <a href="{{ route('registration') }}" class="bg-yellow-400 text-gray-900 px-8 py-4 rounded-lg font-bold hover:bg-yellow-300 transition inline-flex items-center shadow-lg">
                <i class="fas fa-ticket-alt mr-3"></i>
                Daftar Sekarang
            </a>
        </div>
    </div>
</section>

<!-- Important Notes -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center">Informasi Penting</h2>

            <div class="grid md:grid-cols-2 gap-6">
                <div class="bg-blue-50 border-l-4 border-blue-600 p-6 rounded-lg">
                    <div class="flex items-start">
                        <i class="fas fa-info-circle text-blue-600 text-2xl mr-4 mt-1"></i>
                        <div>
                            <h3 class="font-bold text-gray-800 mb-2">Registrasi Online</h3>
                            <p class="text-gray-600 text-sm">
                                Lakukan registrasi online untuk mempercepat proses check-in Anda di lokasi event.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="bg-green-50 border-l-4 border-green-600 p-6 rounded-lg">
                    <div class="flex items-start">
                        <i class="fas fa-ticket-alt text-green-600 text-2xl mr-4 mt-1"></i>
                        <div>
                            <h3 class="font-bold text-gray-800 mb-2">Tiket Gratis</h3>
                            <p class="text-gray-600 text-sm">
                                Event ini GRATIS untuk umum. Daftarkan diri Anda untuk mendapatkan e-ticket.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="bg-yellow-50 border-l-4 border-yellow-600 p-6 rounded-lg">
                    <div class="flex items-start">
                        <i class="fas fa-users text-yellow-600 text-2xl mr-4 mt-1"></i>
                        <div>
                            <h3 class="font-bold text-gray-800 mb-2">Workshop Terbatas</h3>
                            <p class="text-gray-600 text-sm">
                                Beberapa workshop memiliki kuota terbatas. Daftar lebih awal untuk mengamankan tempat Anda.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="bg-purple-50 border-l-4 border-purple-600 p-6 rounded-lg">
                    <div class="flex items-start">
                        <i class="fas fa-calendar-check text-purple-600 text-2xl mr-4 mt-1"></i>
                        <div>
                            <h3 class="font-bold text-gray-800 mb-2">Jadwal Dapat Berubah</h3>
                            <p class="text-gray-600 text-sm">
                                Jadwal dapat berubah sewaktu-waktu. Cek update terbaru di website kami atau sosial media.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@push('scripts')
<script>
    function showDay(day) {
        // Hide all schedules
        document.querySelectorAll('.schedule-day').forEach(el => {
            el.classList.add('hidden');
        });

        // Remove active state from all buttons
        document.querySelectorAll('.day-btn').forEach(btn => {
            btn.classList.remove('bg-blue-600', 'text-white');
            btn.classList.add('bg-gray-200', 'text-gray-700', 'hover:bg-gray-300');
        });

        // Show selected schedule
        document.getElementById('schedule-day-' + day).classList.remove('hidden');

        // Add active state to clicked button
        const activeBtn = document.getElementById('day-btn-' + day);
        activeBtn.classList.remove('bg-gray-200', 'text-gray-700', 'hover:bg-gray-300');
        activeBtn.classList.add('bg-blue-600', 'text-white');

        // Smooth scroll to schedule section
        document.getElementById('schedule-day-' + day).scrollIntoView({
            behavior: 'smooth',
            block: 'start'
        });
    }
</script>
@endpush

@endsection

