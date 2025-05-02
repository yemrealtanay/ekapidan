<nav class="bg-white border-b border-gray-200">
    <div class="container mx-auto px-4 py-4 flex items-center justify-between">
        {{-- Logo --}}
        <a href="{{ url('/') }}" class="text-2xl font-bold text-blue-700">
            <img src="{{ asset('images/ekapidan.png') }}" alt="Ekapıdan" class="mx-auto h-16">
        </a>

        {{-- Menü (Desktop) --}}
        <div class="hidden md:flex space-x-6 items-center">
            <a href="{{ url('/') }}" class="text-gray-700 hover:text-blue-600">Ana Sayfa</a>
            <a href="#about" class="text-gray-700 hover:text-blue-600">Hakkımızda</a>
            <a href="#contact" class="text-gray-700 hover:text-blue-600">İletişim</a>

            @auth
                <a href="{{ route('dashboard') }}" class="text-gray-700 hover:text-blue-600">Panel</a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="text-gray-700 hover:text-red-500">Çıkış Yap</button>
                </form>
            @else
                <a href="{{ route('login') }}" class="text-gray-700 hover:text-blue-600">Giriş Yap</a>
                <a href="{{ route('register') }}" class="text-white bg-blue-600 hover:bg-blue-700 px-4 py-2 rounded">Kayıt Ol</a>
            @endauth
        </div>

        {{-- Hamburger (Mobile) --}}
        <div class="md:hidden">
            <button id="nav-toggle" class="text-blue-600 focus:outline-none">
                ☰
            </button>
        </div>
    </div>

    {{-- Mobile Menu (optional, JS toggle gerekir) --}}
    {{-- JS ile açılır/kapanır mobil menü istiyorsan Alpine.js ekleyebiliriz --}}
</nav>
