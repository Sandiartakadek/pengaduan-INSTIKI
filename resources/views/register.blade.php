@extends('layouts.app')

@section('title', 'Daftar - SLP INSTIKI')

@section('content')
<div class="min-h-screen bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-7xl mx-auto">
        <div class="flex flex-col lg:flex-row-reverse items-center justify-between gap-12">
            <!-- Form Section -->
            <div class="lg:w-1/2 space-y-8 animate-fade-in">

                <div class="pt-10">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900">
                        Buat Akun Baru
                        <span class="block text-blue-600">SLP INSTIKI</span>
                    </h2>
                    <p class="mt-4 text-lg text-gray-600">
                        Sudah punya akun?
                        <a href="" class="font-medium text-blue-600 hover:text-blue-500 transition-colors duration-200">
                            Masuk di sini
                        </a>
                    </p>
                </div>

                <!-- Registration Form -->
                <div class="bg-white p-8 rounded-xl shadow-lg">
                    <form class="space-y-6" action="" method="POST">
                        @csrf

                        <!-- NIM -->
                        <div>
                            <label for="nim" class="block text-sm font-medium text-gray-700">
                                Nomor Induk Mahasiswa
                            </label>
                            <div class="mt-1">
                                <input id="nim" name="nim" type="text" required
                                       class="appearance-none block w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 @error('nim') border-red-500 @enderror"
                                       placeholder="Masukkan NIM Anda">
                            </div>
                            @error('nim')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Nama -->
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700">
                                Nama Lengkap
                            </label>
                            <div class="mt-1">
                                <input id="name" name="name" type="text" required
                                       class="appearance-none block w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 @error('name') border-red-500 @enderror"
                                       placeholder="Masukkan nama lengkap">
                            </div>
                            @error('name')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Username -->
                        <div>
                            <label for="username" class="block text-sm font-medium text-gray-700">
                                Username
                            </label>
                            <div class="mt-1">
                                <input id="username" name="username" type="text" required
                                       class="appearance-none block w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 @error('username') border-red-500 @enderror"
                                       placeholder="Pilih username Anda">
                            </div>
                            @error('username')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Password -->
                        <div>
                            <label for="password" class="block text-sm font-medium text-gray-700">
                                Password
                            </label>
                            <div class="mt-1 relative">
                                <input id="password" name="password" type="password" required
                                       class="appearance-none block w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 @error('password') border-red-500 @enderror"
                                       placeholder="Buat password yang kuat">
                                <button type="button" onclick="togglePassword('password')"
                                        class="absolute inset-y-0 right-0 pr-3 flex items-center text-gray-400 hover:text-gray-600 transition-colors duration-200">
                                    <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                    </svg>
                                </button>
                            </div>
                            @error('password')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- No. Telepon -->
                        <div>
                            <label for="phone" class="block text-sm font-medium text-gray-700">
                                Nomor Telepon
                            </label>
                            <div class="mt-1">
                                <input id="phone" name="phone" type="tel" required
                                       class="appearance-none block w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 @error('phone') border-red-500 @enderror"
                                       placeholder="Contoh: 08123456789">
                            </div>
                            @error('phone')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <button type="submit"
                                    class="w-full flex justify-center px-6 py-3 bg-blue-600 text-white font-semibold rounded-lg transform hover:scale-105 transition-all duration-300 shadow-lg">
                                Daftar Sekarang
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Illustration Section -->
            <div class="lg:w-1/2 animate-float">
                <img src="{{ asset('image/undraw_authentication_tbfc.svg') }}"
                    alt="Ilustrasi Pengaduan" 
                    class="w-full max-w-xl mx-auto">
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

<script>
function togglePassword(inputId) {
    const input = document.getElementById(inputId);
    input.type = input.type === 'password' ? 'text' : 'password';
}
</script>
@endsection
