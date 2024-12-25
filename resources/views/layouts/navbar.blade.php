<nav class="bg-white shadow-lg fixed w-full z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <!-- Logo -->
            <a href="{{ url('/') }}" class="flex items-center space-x-3">
                <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                </svg>
                <span class="text-xl font-bold text-gray-800">SLP INSTIKI</span>
            </a>

            <!-- Desktop Menu -->
            <div class="hidden md:flex items-center space-x-8">
                <a href="{{ url('/') }}" class="text-gray-600 hover:text-blue-600 font-medium transition-colors duration-200">Beranda</a>
                <a href="{{ url('/about') }}" class="text-gray-600 hover:text-blue-600 font-medium transition-colors duration-200">Tentang</a>
                <a href="{{ url('/contact') }}" class="text-gray-600 hover:text-blue-600 font-medium transition-colors duration-200">Kontak</a>
                <div class="flex items-center space-x-4">
                    <a href="" class="text-gray-600 hover:text-blue-600 font-medium transition-colors duration-200">Masuk</a>
                    <a href="" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors duration-200">Daftar</a>
                </div>
            </div>

            <!-- Mobile Menu Button -->
            <button class="md:hidden text-gray-600 hover:text-blue-600" id="mobile-menu-button">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>

        <!-- Mobile Menu -->
        <div class="md:hidden hidden" id="mobile-menu">
            <div class="px-2 pt-2 pb-3 space-y-1">
                <a href="{{ url('/') }}" class="block px-3 py-2 rounded-md text-gray-600 hover:text-blue-600 hover:bg-gray-50">Beranda</a>
                <a href="{{ url('/about') }}" class="block px-3 py-2 rounded-md text-gray-600 hover:text-blue-600 hover:bg-gray-50">Tentang</a>
                <a href="{{ url('/contact') }}" class="block px-3 py-2 rounded-md text-gray-600 hover:text-blue-600 hover:bg-gray-50">Kontak</a>
                <a href="" class="block px-3 py-2 rounded-md text-gray-600 hover:text-blue-600 hover:bg-gray-50">Masuk</a>
                <a href="" class="block px-3 py-2 rounded-md text-blue-600 hover:bg-blue-700 hover:text-white">Daftar</a>
            </div>
        </div>
    </div>
</nav>

<script>
    document.getElementById('mobile-menu-button').addEventListener('click', function() {
        document.getElementById('mobile-menu').classList.toggle('hidden');
    });
</script>