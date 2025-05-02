<footer class="bg-gray-100 text-gray-700 py-12 mt-12 border-t border-gray-200">
    <div class="container mx-auto px-4 grid grid-cols-1 md:grid-cols-4 gap-8 text-sm items-start">

        {{-- Logo --}}
        <div class="flex flex-col items-start space-y-4">
            <img src="{{ asset('images/ekapidan.png') }}" alt="Ekapıdan Logo" class="w-32">
            <p class="text-xs text-gray-500">Kargonuzun kontrol merkezi.</p>
        </div>

        {{-- Ekstra --}}
        <div>
            <h4 class="font-semibold text-lg text-gray-900 mb-3">Ekstra</h4>
            <ul class="space-y-1">
                <li><a href="#" class="hover:underline">Gizlilik Politikası</a></li>
                <li><a href="#" class="hover:underline">Kullanım Koşulları</a></li>
                <li><a href="#" class="hover:underline">Destek</a></li>
            </ul>
        </div>

        {{-- Sosyal --}}
        <div>
            <h4 class="font-semibold text-lg text-gray-900 mb-3">Sosyal</h4>
            <div class="flex space-x-4 text-xl">
                <a href="#" class="text-blue-600 hover:scale-110 transition"><i class="fab fa-facebook"></i></a>
                <a href="#" class="text-sky-400 hover:scale-110 transition"><i class="fab fa-twitter"></i></a>
                <a href="#" class="text-pink-500 hover:scale-110 transition"><i class="fab fa-instagram"></i></a>
            </div>
        </div>

        {{-- İletişim --}}
        <div>
            <h4 class="font-semibold text-lg text-gray-900 mb-3">İletişim</h4>
            <ul class="space-y-1">
                <li><a href="mailto:info@ekapidan.com" class="hover:underline">info@ekapidan.com</a></li>
                <li><a href="tel:01234657990" class="hover:underline">0123 465 79 90</a></li>
                <li>Adres Bilgisi</li>
            </ul>
        </div>
    </div>

    <div class="text-center text-xs text-gray-500 mt-8">
        © {{ now()->year }} Ekapıdan. Tüm hakları saklıdır.
    </div>
</footer>
