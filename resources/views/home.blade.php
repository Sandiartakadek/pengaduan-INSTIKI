@extends('layouts.app')

@section('title', 'Sistem Layanan Pengaduan Masyarakat')

@section('content')
<div class="min-h-screen bg-gray-50 py-12 px-4 sm:px-6 lg:px-8 pt-6 mt-6">
    <div class="max-w-7xl mx-auto">
        <!-- Hero Section -->
        <div class="flex flex-col lg:flex-row items-center justify-between gap-12">
            <!-- Text Content -->
            <div class="lg:w-1/2 space-y-8 animate-fade-in">
                <h1 class="text-4xl md:text-5xl font-bold leading-tight text-gray-900">
                    Suara Anda Penting<br/>
                    <span class="text-blue-600">Untuk Perubahan</span>
                </h1>
                <p class="text-lg md:text-xl text-gray-600">
                    Sistem Layanan Pengaduan INSTIKI.
                    Platform pengaduan modern yang memudahkan Anda menyampaikan aspirasi. 
                    Kami memastikan setiap keluhan anda dapat tersalurkan dan tersampaikan dengan baik.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="#buat-pengaduan" 
                       class="inline-flex items-center justify-center px-6 py-3 bg-blue-600 text-white font-semibold rounded-lg transform hover:scale-105 transition-all duration-300 shadow-lg">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z" />
                        </svg>
                        Buat Pengaduan
                    </a>
                    <a href="" 
                       class="inline-flex items-center justify-center px-6 py-3 bg-gray-100 text-gray-700 font-semibold rounded-lg hover:bg-gray-200 transition-all duration-300">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
                        </svg>
                        Masuk
                    </a>
                </div>
            </div>

            <!-- Illustration -->
            <div class="lg:w-1/2 animate-float pt-6 mt-6">
                <img src="{{ asset('image/undraw_feedback_tmp7.svg')}}" 
                     alt="Ilustrasi Pengaduan" 
                     class="w-full max-w-xl mx-auto">
            </div>
        </div>

        <!-- Features Section -->
        <div class="mt-24 grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl p-6 shadow-lg transform hover:-translate-y-2 transition-all duration-300">
                <div class="w-12 h-12 bg-blue-100 text-blue-600 rounded-lg flex items-center justify-center mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-2 text-gray-900">Cepat & Mudah</h3>
                <p class="text-gray-600">Laporkan keluhan Anda dalam hitungan menit dengan antarmuka yang sederhana.</p>
            </div>

            <div class="bg-white rounded-xl p-6 shadow-lg transform hover:-translate-y-2 transition-all duration-300">
                <div class="w-12 h-12 bg-blue-100 text-blue-600 rounded-lg flex items-center justify-center mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-2 text-gray-900">Aman & Terpercaya</h3>
                <p class="text-gray-600">Data Anda dilindungi dengan sistem keamanan terbaik dan ditangani secara profesional.</p>
            </div>

            <div class="bg-white rounded-xl p-6 shadow-lg transform hover:-translate-y-2 transition-all duration-300">
                <div class="w-12 h-12 bg-blue-100 text-blue-600 rounded-lg flex items-center justify-center mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-2 text-gray-900">Transparan</h3>
                <p class="text-gray-600">Pantau status pengaduan Anda secara real-time dan dapatkan update berkala.</p>
            </div>
        </div>
    </div>
</div>

<style>
    @keyframes float {
        0% { transform: translateY(0px); }
        50% { transform: translateY(-20px); }
        100% { transform: translateY(0px); }
    }
    
    .animate-float {
        animation: float 6s ease-in-out infinite;
    }
    
    .animate-fade-in {
        animation: fadeIn 1s ease-out;
    }
    
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }
</style>
@endsection