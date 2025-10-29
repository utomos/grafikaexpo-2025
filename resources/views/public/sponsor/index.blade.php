@extends('layouts.public')

@section('title', 'Sponsor & Mitra - Grafika Expo 2025')
@section('description', 'Terima kasih kepada seluruh sponsor dan mitra yang mendukung Grafika Expo 2025')

@section('content')
<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-purple-600 via-blue-600 to-indigo-800 text-white py-20">
    <div class="absolute inset-0 bg-black opacity-10"></div>
    <div class="container mx-auto px-4 relative z-10">
        <div class="text-center max-w-4xl mx-auto">
            <div class="inline-block bg-white/20 backdrop-blur-sm px-4 py-2 rounded-full mb-6">
                <span class="text-sm font-semibold">🤝 SPONSOR & MITRA</span>
            </div>
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6">
                Terima Kasih Kepada<br/>
                <span class="text-yellow-300">Para Sponsor & Mitra Kami</span>
            </h1>
            <p class="text-lg md:text-xl text-blue-100 mb-8 max-w-2xl mx-auto">
                Event ini terwujud berkat dukungan dari para sponsor dan mitra strategis kami yang luar biasa
            </p>
        </div>
    </div>
</section>

<!-- Platinum Sponsors -->
<section class="py-16 bg-gradient-to-br from-gray-100 to-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <div class="inline-block bg-gradient-to-r from-gray-300 to-gray-400 text-gray-800 px-6 py-2 rounded-full mb-4">
                <i class="fas fa-crown mr-2"></i>
                <span class="font-bold">PLATINUM SPONSORS</span>
            </div>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Sponsor Platinum</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">Partner utama yang memberikan dukungan penuh untuk kesuksesan event ini</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-5xl mx-auto">
            <!-- Sponsor Card -->
            <div class="bg-white rounded-2xl shadow-xl hover:shadow-2xl transition p-8 border-4 border-gray-200">
                <div class="flex items-center justify-center h-48 mb-6 bg-gradient-to-br from-gray-50 to-white rounded-xl">
                    <div class="text-center">
                        <div class="w-32 h-32 mx-auto bg-gradient-to-br from-blue-600 to-blue-800 rounded-2xl flex items-center justify-center mb-4 shadow-lg">
                            <i class="fas fa-print text-white text-5xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-800">PrintTech Indonesia</h3>
                    </div>
                </div>
                <p class="text-gray-600 text-center text-sm">
                    Leading provider of professional printing solutions
                </p>
            </div>

            <!-- Sponsor Card -->
            <div class="bg-white rounded-2xl shadow-xl hover:shadow-2xl transition p-8 border-4 border-gray-200">
                <div class="flex items-center justify-center h-48 mb-6 bg-gradient-to-br from-gray-50 to-white rounded-xl">
                    <div class="text-center">
                        <div class="w-32 h-32 mx-auto bg-gradient-to-br from-purple-600 to-purple-800 rounded-2xl flex items-center justify-center mb-4 shadow-lg">
                            <i class="fas fa-industry text-white text-5xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-800">Digital Press Solutions</h3>
                    </div>
                </div>
                <p class="text-gray-600 text-center text-sm">
                    Industrial digital printing equipment manufacturer
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Gold Sponsors -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <div class="inline-block bg-gradient-to-r from-yellow-400 to-yellow-600 text-white px-6 py-2 rounded-full mb-4">
                <i class="fas fa-medal mr-2"></i>
                <span class="font-bold">GOLD SPONSORS</span>
            </div>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Sponsor Gold</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">Partner strategis yang berkontribusi besar untuk event ini</p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 max-w-6xl mx-auto">
            <!-- Sponsor Card -->
            <div class="bg-gradient-to-br from-yellow-50 to-white rounded-xl shadow-lg hover:shadow-xl transition p-6 border-2 border-yellow-200">
                <div class="flex items-center justify-center h-32 mb-4">
                    <div class="w-20 h-20 bg-gradient-to-br from-red-500 to-red-700 rounded-xl flex items-center justify-center shadow-md">
                        <i class="fas fa-palette text-white text-3xl"></i>
                    </div>
                </div>
                <h3 class="text-center font-bold text-gray-800 mb-2">ColorMax Pro</h3>
                <p class="text-center text-xs text-gray-600">Premium Ink Supplier</p>
            </div>

            <!-- Sponsor Card -->
            <div class="bg-gradient-to-br from-yellow-50 to-white rounded-xl shadow-lg hover:shadow-xl transition p-6 border-2 border-yellow-200">
                <div class="flex items-center justify-center h-32 mb-4">
                    <div class="w-20 h-20 bg-gradient-to-br from-green-500 to-green-700 rounded-xl flex items-center justify-center shadow-md">
                        <i class="fas fa-cogs text-white text-3xl"></i>
                    </div>
                </div>
                <h3 class="text-center font-bold text-gray-800 mb-2">MachinePlus</h3>
                <p class="text-center text-xs text-gray-600">Printing Machinery</p>
            </div>

            <!-- Sponsor Card -->
            <div class="bg-gradient-to-br from-yellow-50 to-white rounded-xl shadow-lg hover:shadow-xl transition p-6 border-2 border-yellow-200">
                <div class="flex items-center justify-center h-32 mb-4">
                    <div class="w-20 h-20 bg-gradient-to-br from-indigo-500 to-indigo-700 rounded-xl flex items-center justify-center shadow-md">
                        <i class="fas fa-layer-group text-white text-3xl"></i>
                    </div>
                </div>
                <h3 class="text-center font-bold text-gray-800 mb-2">PaperCraft Ltd</h3>
                <p class="text-center text-xs text-gray-600">Quality Paper Products</p>
            </div>

            <!-- Sponsor Card -->
            <div class="bg-gradient-to-br from-yellow-50 to-white rounded-xl shadow-lg hover:shadow-xl transition p-6 border-2 border-yellow-200">
                <div class="flex items-center justify-center h-32 mb-4">
                    <div class="w-20 h-20 bg-gradient-to-br from-orange-500 to-orange-700 rounded-xl flex items-center justify-center shadow-md">
                        <i class="fas fa-stamp text-white text-3xl"></i>
                    </div>
                </div>
                <h3 class="text-center font-bold text-gray-800 mb-2">StampMaster</h3>
                <p class="text-center text-xs text-gray-600">Screen Printing Tools</p>
            </div>
        </div>
    </div>
</section>

<!-- Silver Sponsors -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <div class="inline-block bg-gradient-to-r from-gray-400 to-gray-600 text-white px-6 py-2 rounded-full mb-4">
                <i class="fas fa-award mr-2"></i>
                <span class="font-bold">SILVER SPONSORS</span>
            </div>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Sponsor Silver</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">Partner pendukung yang turut menyukseskan event ini</p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-6 max-w-6xl mx-auto">
            <!-- Sponsor Card -->
            <div class="bg-white rounded-lg shadow-md hover:shadow-lg transition p-4 border border-gray-200">
                <div class="flex items-center justify-center h-24 mb-3">
                    <div class="w-16 h-16 bg-gradient-to-br from-teal-500 to-teal-700 rounded-lg flex items-center justify-center">
                        <i class="fas fa-cut text-white text-2xl"></i>
                    </div>
                </div>
                <h3 class="text-center font-semibold text-gray-800 text-sm">CutPro Tech</h3>
            </div>

            <!-- Sponsor Card -->
            <div class="bg-white rounded-lg shadow-md hover:shadow-lg transition p-4 border border-gray-200">
                <div class="flex items-center justify-center h-24 mb-3">
                    <div class="w-16 h-16 bg-gradient-to-br from-pink-500 to-pink-700 rounded-lg flex items-center justify-center">
                        <i class="fas fa-swatchbook text-white text-2xl"></i>
                    </div>
                </div>
                <h3 class="text-center font-semibold text-gray-800 text-sm">DesignHub</h3>
            </div>

            <!-- Sponsor Card -->
            <div class="bg-white rounded-lg shadow-md hover:shadow-lg transition p-4 border border-gray-200">
                <div class="flex items-center justify-center h-24 mb-3">
                    <div class="w-16 h-16 bg-gradient-to-br from-cyan-500 to-cyan-700 rounded-lg flex items-center justify-center">
                        <i class="fas fa-spray-can text-white text-2xl"></i>
                    </div>
                </div>
                <h3 class="text-center font-semibold text-gray-800 text-sm">InkFlow Pro</h3>
            </div>

            <!-- Sponsor Card -->
            <div class="bg-white rounded-lg shadow-md hover:shadow-lg transition p-4 border border-gray-200">
                <div class="flex items-center justify-center h-24 mb-3">
                    <div class="w-16 h-16 bg-gradient-to-br from-amber-500 to-amber-700 rounded-lg flex items-center justify-center">
                        <i class="fas fa-film text-white text-2xl"></i>
                    </div>
                </div>
                <h3 class="text-center font-semibold text-gray-800 text-sm">VinylMax</h3>
            </div>

            <!-- Sponsor Card -->
            <div class="bg-white rounded-lg shadow-md hover:shadow-lg transition p-4 border border-gray-200">
                <div class="flex items-center justify-center h-24 mb-3">
                    <div class="w-16 h-16 bg-gradient-to-br from-lime-500 to-lime-700 rounded-lg flex items-center justify-center">
                        <i class="fas fa-th text-white text-2xl"></i>
                    </div>
                </div>
                <h3 class="text-center font-semibold text-gray-800 text-sm">GridPrint</h3>
            </div>

            <!-- Sponsor Card -->
            <div class="bg-white rounded-lg shadow-md hover:shadow-lg transition p-4 border border-gray-200">
                <div class="flex items-center justify-center h-24 mb-3">
                    <div class="w-16 h-16 bg-gradient-to-br from-violet-500 to-violet-700 rounded-lg flex items-center justify-center">
                        <i class="fas fa-tshirt text-white text-2xl"></i>
                    </div>
                </div>
                <h3 class="text-center font-semibold text-gray-800 text-sm">TextilePro</h3>
            </div>
        </div>
    </div>
</section>

<!-- Media Partners -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <div class="inline-block bg-gradient-to-r from-blue-500 to-blue-700 text-white px-6 py-2 rounded-full mb-4">
                <i class="fas fa-broadcast-tower mr-2"></i>
                <span class="font-bold">MEDIA PARTNERS</span>
            </div>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Mitra Media</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">Media partner yang membantu mempublikasikan event ini</p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-6 max-w-6xl mx-auto">
            <!-- Media Partner -->
            <div class="bg-gradient-to-br from-blue-50 to-white rounded-lg shadow-md hover:shadow-lg transition p-6 border border-blue-100">
                <div class="flex items-center justify-center h-20 mb-3">
                    <div class="w-14 h-14 bg-gradient-to-br from-blue-500 to-blue-700 rounded-full flex items-center justify-center">
                        <i class="fas fa-newspaper text-white text-xl"></i>
                    </div>
                </div>
                <h3 class="text-center font-semibold text-gray-800 text-sm">Print Magazine</h3>
            </div>

            <!-- Media Partner -->
            <div class="bg-gradient-to-br from-blue-50 to-white rounded-lg shadow-md hover:shadow-lg transition p-6 border border-blue-100">
                <div class="flex items-center justify-center h-20 mb-3">
                    <div class="w-14 h-14 bg-gradient-to-br from-red-500 to-red-700 rounded-full flex items-center justify-center">
                        <i class="fas fa-tv text-white text-xl"></i>
                    </div>
                </div>
                <h3 class="text-center font-semibold text-gray-800 text-sm">Tech TV</h3>
            </div>

            <!-- Media Partner -->
            <div class="bg-gradient-to-br from-blue-50 to-white rounded-lg shadow-md hover:shadow-lg transition p-6 border border-blue-100">
                <div class="flex items-center justify-center h-20 mb-3">
                    <div class="w-14 h-14 bg-gradient-to-br from-green-500 to-green-700 rounded-full flex items-center justify-center">
                        <i class="fas fa-globe text-white text-xl"></i>
                    </div>
                </div>
                <h3 class="text-center font-semibold text-gray-800 text-sm">IndustryWeb</h3>
            </div>

            <!-- Media Partner -->
            <div class="bg-gradient-to-br from-blue-50 to-white rounded-lg shadow-md hover:shadow-lg transition p-6 border border-blue-100">
                <div class="flex items-center justify-center h-20 mb-3">
                    <div class="w-14 h-14 bg-gradient-to-br from-purple-500 to-purple-700 rounded-full flex items-center justify-center">
                        <i class="fas fa-podcast text-white text-xl"></i>
                    </div>
                </div>
                <h3 class="text-center font-semibold text-gray-800 text-sm">BizPodcast</h3>
            </div>

            <!-- Media Partner -->
            <div class="bg-gradient-to-br from-blue-50 to-white rounded-lg shadow-md hover:shadow-lg transition p-6 border border-blue-100">
                <div class="flex items-center justify-center h-20 mb-3">
                    <div class="w-14 h-14 bg-gradient-to-br from-orange-500 to-orange-700 rounded-full flex items-center justify-center">
                        <i class="fas fa-blog text-white text-xl"></i>
                    </div>
                </div>
                <h3 class="text-center font-semibold text-gray-800 text-sm">PrintBlog</h3>
            </div>
        </div>
    </div>
</section>

<!-- Official Partners -->
<section class="py-16 bg-gradient-to-br from-gray-50 to-gray-100">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <div class="inline-block bg-gradient-to-r from-indigo-500 to-indigo-700 text-white px-6 py-2 rounded-full mb-4">
                <i class="fas fa-handshake mr-2"></i>
                <span class="font-bold">OFFICIAL PARTNERS</span>
            </div>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Mitra Resmi</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">Organisasi dan asosiasi yang mendukung event ini</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-5xl mx-auto">
            <!-- Partner Card -->
            <div class="bg-white rounded-xl shadow-lg hover:shadow-xl transition p-8 border-2 border-indigo-100">
                <div class="flex items-center justify-center h-32 mb-6">
                    <div class="w-24 h-24 bg-gradient-to-br from-indigo-600 to-indigo-800 rounded-2xl flex items-center justify-center shadow-md">
                        <i class="fas fa-building text-white text-4xl"></i>
                    </div>
                </div>
                <h3 class="text-center font-bold text-gray-800 text-lg mb-2">Asosiasi Percetakan Indonesia</h3>
                <p class="text-center text-sm text-gray-600">Official Association Partner</p>
            </div>

            <!-- Partner Card -->
            <div class="bg-white rounded-xl shadow-lg hover:shadow-xl transition p-8 border-2 border-indigo-100">
                <div class="flex items-center justify-center h-32 mb-6">
                    <div class="w-24 h-24 bg-gradient-to-br from-teal-600 to-teal-800 rounded-2xl flex items-center justify-center shadow-md">
                        <i class="fas fa-university text-white text-4xl"></i>
                    </div>
                </div>
                <h3 class="text-center font-bold text-gray-800 text-lg mb-2">Kementerian Perindustrian</h3>
                <p class="text-center text-sm text-gray-600">Government Support</p>
            </div>

            <!-- Partner Card -->
            <div class="bg-white rounded-xl shadow-lg hover:shadow-xl transition p-8 border-2 border-indigo-100">
                <div class="flex items-center justify-center h-32 mb-6">
                    <div class="w-24 h-24 bg-gradient-to-br from-rose-600 to-rose-800 rounded-2xl flex items-center justify-center shadow-md">
                        <i class="fas fa-users text-white text-4xl"></i>
                    </div>
                </div>
                <h3 class="text-center font-bold text-gray-800 text-lg mb-2">Komunitas Desainer Grafis</h3>
                <p class="text-center text-sm text-gray-600">Community Partner</p>
            </div>
        </div>
    </div>
</section>

<!-- Supporting Partners -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <div class="inline-block bg-gradient-to-r from-green-500 to-green-700 text-white px-6 py-2 rounded-full mb-4">
                <i class="fas fa-heart mr-2"></i>
                <span class="font-bold">SUPPORTING PARTNERS</span>
            </div>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Pendukung Event</h2>
        </div>

        <div class="flex flex-wrap justify-center items-center gap-8 max-w-6xl mx-auto">
            <!-- Supporting Partner Logo Placeholders -->
            <div class="bg-gray-50 rounded-lg p-6 w-40 h-32 flex items-center justify-center border-2 border-gray-200 hover:border-green-500 transition">
                <div class="text-center">
                    <div class="w-12 h-12 bg-gradient-to-br from-gray-400 to-gray-600 rounded-lg mx-auto mb-2 flex items-center justify-center">
                        <i class="fas fa-box text-white"></i>
                    </div>
                    <p class="text-xs font-semibold text-gray-700">PackPro</p>
                </div>
            </div>

            <div class="bg-gray-50 rounded-lg p-6 w-40 h-32 flex items-center justify-center border-2 border-gray-200 hover:border-green-500 transition">
                <div class="text-center">
                    <div class="w-12 h-12 bg-gradient-to-br from-blue-400 to-blue-600 rounded-lg mx-auto mb-2 flex items-center justify-center">
                        <i class="fas fa-truck text-white"></i>
                    </div>
                    <p class="text-xs font-semibold text-gray-700">LogistiXpert</p>
                </div>
            </div>

            <div class="bg-gray-50 rounded-lg p-6 w-40 h-32 flex items-center justify-center border-2 border-gray-200 hover:border-green-500 transition">
                <div class="text-center">
                    <div class="w-12 h-12 bg-gradient-to-br from-red-400 to-red-600 rounded-lg mx-auto mb-2 flex items-center justify-center">
                        <i class="fas fa-coffee text-white"></i>
                    </div>
                    <p class="text-xs font-semibold text-gray-700">CafeBiz</p>
                </div>
            </div>

            <div class="bg-gray-50 rounded-lg p-6 w-40 h-32 flex items-center justify-center border-2 border-gray-200 hover:border-green-500 transition">
                <div class="text-center">
                    <div class="w-12 h-12 bg-gradient-to-br from-yellow-400 to-yellow-600 rounded-lg mx-auto mb-2 flex items-center justify-center">
                        <i class="fas fa-hotel text-white"></i>
                    </div>
                    <p class="text-xs font-semibold text-gray-700">HotelStay</p>
                </div>
            </div>

            <div class="bg-gray-50 rounded-lg p-6 w-40 h-32 flex items-center justify-center border-2 border-gray-200 hover:border-green-500 transition">
                <div class="text-center">
                    <div class="w-12 h-12 bg-gradient-to-br from-purple-400 to-purple-600 rounded-lg mx-auto mb-2 flex items-center justify-center">
                        <i class="fas fa-utensils text-white"></i>
                    </div>
                    <p class="text-xs font-semibold text-gray-700">FoodCourt</p>
                </div>
            </div>

            <div class="bg-gray-50 rounded-lg p-6 w-40 h-32 flex items-center justify-center border-2 border-gray-200 hover:border-green-500 transition">
                <div class="text-center">
                    <div class="w-12 h-12 bg-gradient-to-br from-pink-400 to-pink-600 rounded-lg mx-auto mb-2 flex items-center justify-center">
                        <i class="fas fa-camera text-white"></i>
                    </div>
                    <p class="text-xs font-semibold text-gray-700">PhotoPro</p>
                </div>
            </div>

            <div class="bg-gray-50 rounded-lg p-6 w-40 h-32 flex items-center justify-center border-2 border-gray-200 hover:border-green-500 transition">
                <div class="text-center">
                    <div class="w-12 h-12 bg-gradient-to-br from-cyan-400 to-cyan-600 rounded-lg mx-auto mb-2 flex items-center justify-center">
                        <i class="fas fa-wifi text-white"></i>
                    </div>
                    <p class="text-xs font-semibold text-gray-700">NetConnect</p>
                </div>
            </div>

            <div class="bg-gray-50 rounded-lg p-6 w-40 h-32 flex items-center justify-center border-2 border-gray-200 hover:border-green-500 transition">
                <div class="text-center">
                    <div class="w-12 h-12 bg-gradient-to-br from-emerald-400 to-emerald-600 rounded-lg mx-auto mb-2 flex items-center justify-center">
                        <i class="fas fa-leaf text-white"></i>
                    </div>
                    <p class="text-xs font-semibold text-gray-700">EcoSolution</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Become a Sponsor CTA -->
<section class="py-20 bg-gradient-to-r from-blue-600 via-purple-600 to-indigo-700 text-white relative overflow-hidden">
    <div class="absolute inset-0 bg-black opacity-20"></div>
    <div class="container mx-auto px-4 text-center relative z-10">
        <div class="max-w-3xl mx-auto">
            <div class="inline-block bg-white/20 backdrop-blur-sm px-4 py-2 rounded-full mb-6">
                <i class="fas fa-star text-yellow-300 mr-2"></i>
                <span class="text-sm font-semibold">BERGABUNG DENGAN KAMI</span>
            </div>
            <h2 class="text-3xl md:text-5xl font-bold mb-6">
                Tertarik Menjadi Sponsor?
            </h2>
            <p class="text-lg md:text-xl text-blue-100 mb-8">
                Bergabunglah dengan para leader industri dan tingkatkan brand awareness Anda di depan ribuan profesional percetakan
            </p>

            <!-- Benefits -->
            <div class="grid md:grid-cols-3 gap-6 mb-10">
                <div class="bg-white/10 backdrop-blur-md rounded-xl p-6 border border-white/20">
                    <i class="fas fa-users text-4xl text-yellow-300 mb-3"></i>
                    <h3 class="font-bold text-lg mb-2">Jangkauan Luas</h3>
                    <p class="text-sm text-blue-100">Lebih dari 5000+ pengunjung dari seluruh Indonesia</p>
                </div>
                <div class="bg-white/10 backdrop-blur-md rounded-xl p-6 border border-white/20">
                    <i class="fas fa-bullhorn text-4xl text-yellow-300 mb-3"></i>
                    <h3 class="font-bold text-lg mb-2">Brand Exposure</h3>
                    <p class="text-sm text-blue-100">Promosi di semua channel media dan publikasi event</p>
                </div>
                <div class="bg-white/10 backdrop-blur-md rounded-xl p-6 border border-white/20">
                    <i class="fas fa-handshake text-4xl text-yellow-300 mb-3"></i>
                    <h3 class="font-bold text-lg mb-2">Networking</h3>
                    <p class="text-sm text-blue-100">Kesempatan eksklusif bertemu decision makers</p>
                </div>
            </div>

            <!-- CTA Buttons -->
            <div class="flex flex-wrap justify-center gap-4">
                <a href="#" class="bg-white text-blue-600 px-8 py-4 rounded-lg font-bold hover:bg-blue-50 transition inline-flex items-center shadow-xl">
                    <i class="fas fa-file-pdf mr-3"></i>
                    Download Sponsorship Package
                </a>
                <a href="#" class="bg-yellow-400 text-gray-900 px-8 py-4 rounded-lg font-bold hover:bg-yellow-300 transition inline-flex items-center shadow-xl">
                    <i class="fas fa-envelope mr-3"></i>
                    Hubungi Kami
                </a>
            </div>

            <!-- Contact Info -->
            <div class="mt-8 pt-8 border-t border-white/30">
                <p class="text-blue-100 mb-4">Untuk informasi lebih lanjut tentang sponsorship:</p>
                <div class="flex flex-wrap justify-center gap-6 text-sm">
                    <a href="mailto:sponsor@grafikaexpo.com" class="hover:text-yellow-300 transition">
                        <i class="fas fa-envelope mr-2"></i>sponsor@grafikaexpo.com
                    </a>
                    <a href="tel:+622112345678" class="hover:text-yellow-300 transition">
                        <i class="fas fa-phone mr-2"></i>+62 21 1234 5678
                    </a>
                    <a href="https://wa.me/628123456789" class="hover:text-yellow-300 transition">
                        <i class="fab fa-whatsapp mr-2"></i>+62 812 3456 7890
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Sponsorship Levels Info -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Paket Sponsorship</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">Pilih paket sponsorship yang sesuai dengan kebutuhan perusahaan Anda</p>
        </div>

        <div class="grid md:grid-cols-4 gap-6 max-w-6xl mx-auto">
            <!-- Platinum Package -->
            <div class="bg-gradient-to-br from-gray-100 to-gray-200 rounded-xl shadow-lg p-6 border-4 border-gray-300 transform hover:scale-105 transition">
                <div class="text-center mb-4">
                    <i class="fas fa-crown text-4xl text-gray-600 mb-2"></i>
                    <h3 class="text-2xl font-bold text-gray-800">PLATINUM</h3>
                    <div class="text-3xl font-bold text-gray-700 mt-3">Rp 150 Jt</div>
                </div>
                <ul class="space-y-2 text-sm text-gray-700">
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-green-600 mr-2 mt-1"></i>
                        <span>Booth premium 9x9m</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-green-600 mr-2 mt-1"></i>
                        <span>Logo di semua media</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-green-600 mr-2 mt-1"></i>
                        <span>Speaking slot 60 menit</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-green-600 mr-2 mt-1"></i>
                        <span>50 tiket VIP</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-green-600 mr-2 mt-1"></i>
                        <span>Branding eksklusif</span>
                    </li>
                </ul>
            </div>

            <!-- Gold Package -->
            <div class="bg-gradient-to-br from-yellow-100 to-yellow-200 rounded-xl shadow-lg p-6 border-4 border-yellow-400 transform hover:scale-105 transition">
                <div class="text-center mb-4">
                    <i class="fas fa-medal text-4xl text-yellow-600 mb-2"></i>
                    <h3 class="text-2xl font-bold text-yellow-800">GOLD</h3>
                    <div class="text-3xl font-bold text-yellow-700 mt-3">Rp 75 Jt</div>
                </div>
                <ul class="space-y-2 text-sm text-gray-700">
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-green-600 mr-2 mt-1"></i>
                        <span>Booth 6x6m</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-green-600 mr-2 mt-1"></i>
                        <span>Logo di website & banner</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-green-600 mr-2 mt-1"></i>
                        <span>Speaking slot 30 menit</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-green-600 mr-2 mt-1"></i>
                        <span>30 tiket VIP</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-green-600 mr-2 mt-1"></i>
                        <span>Social media mention</span>
                    </li>
                </ul>
            </div>

            <!-- Silver Package -->
            <div class="bg-gradient-to-br from-gray-100 to-gray-300 rounded-xl shadow-lg p-6 border-4 border-gray-400 transform hover:scale-105 transition">
                <div class="text-center mb-4">
                    <i class="fas fa-award text-4xl text-gray-600 mb-2"></i>
                    <h3 class="text-2xl font-bold text-gray-800">SILVER</h3>
                    <div class="text-3xl font-bold text-gray-700 mt-3">Rp 40 Jt</div>
                </div>
                <ul class="space-y-2 text-sm text-gray-700">
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-green-600 mr-2 mt-1"></i>
                        <span>Booth 3x3m</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-green-600 mr-2 mt-1"></i>
                        <span>Logo di website</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-green-600 mr-2 mt-1"></i>
                        <span>Speaking slot 15 menit</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-green-600 mr-2 mt-1"></i>
                        <span>15 tiket gratis</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-green-600 mr-2 mt-1"></i>
                        <span>Listing di katalog</span>
                    </li>
                </ul>
            </div>

            <!-- Bronze Package -->
            <div class="bg-gradient-to-br from-orange-100 to-orange-200 rounded-xl shadow-lg p-6 border-4 border-orange-400 transform hover:scale-105 transition">
                <div class="text-center mb-4">
                    <i class="fas fa-certificate text-4xl text-orange-600 mb-2"></i>
                    <h3 class="text-2xl font-bold text-orange-800">BRONZE</h3>
                    <div class="text-3xl font-bold text-orange-700 mt-3">Rp 20 Jt</div>
                </div>
                <ul class="space-y-2 text-sm text-gray-700">
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-green-600 mr-2 mt-1"></i>
                        <span>Booth 2x2m</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-green-600 mr-2 mt-1"></i>
                        <span>Logo di website</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-green-600 mr-2 mt-1"></i>
                        <span>Display brochure</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-green-600 mr-2 mt-1"></i>
                        <span>10 tiket gratis</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-green-600 mr-2 mt-1"></i>
                        <span>Listing di katalog</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

@endsection

