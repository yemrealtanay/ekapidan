@extends('layouts.landing')

@section('content')
    <section class="bg-white py-20">
        <div class="container mx-auto px-4 grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
            <div>
                <h1 class="text-4xl font-bold mb-4">Kargo Şirketleri ve Göndericileri Bir Araya Getiriyoruz</h1>
                <p class="text-lg mb-6">Platformumuz sayesinde gönderilerinizi uygun fiyatlarla kolayca gönderin.</p>
                <a href="{{ route('register') }}" class="inline-block bg-blue-600 text-white px-6 py-3 rounded">Kargo Gönder</a>
            </div>
            <div>
                <img src="{{ asset('images/hero.png') }}" alt="Kargo teslim" class="w-full max-w-md mx-auto">
            </div>
        </div>
    </section>

    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold mb-8 text-center">Hizmetlerimiz</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
                <div>
                    <img src="{{ asset('images/online-order.png') }}" alt="Çevrimiçi Sipariş" class="mx-auto h-64 md:h-56 lg:h-64">
                    <h3 class="font-bold text-xl mt-4">Çevrimici Sipariş</h3>
                    <p class="text-gray-600">Siparişinizi web sitemizi kullanarak hızlıca oluşturun.</p>
                </div>
                <div>
                    <img src="{{ asset('images/many-companies.png') }}" alt="Birçok Firma" class="mx-auto h-64 md:h-56 lg:h-64">
                    <h3 class="font-bold text-xl mt-4">Birçok Firma</h3>
                    <p class="text-gray-600">Yüzlerce firmanın kargo fiyatlarını bir arada görüntüleyin.</p>
                </div>
                <div>
                    <img src="{{ asset('images/fast-delivery.png') }}" alt="Hızlı Teslimat" class="mx-auto h-64 md:h-56 lg:h-64">
                    <h3 class="font-bold text-xl mt-4">Hızlı Teslimat</h3>
                    <p class="text-gray-600">Gönderilerinizi hızlı ve kolay bir şekilde teslim edin.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-white border-t border-gray-100">
        <div class="container mx-auto px-4 grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            {{-- Görsel --}}
            <div>
                <img src="{{ asset('images/faqs.png') }}" alt="SSS Görseli" class="w-full max-w-md mx-auto">
            </div>

            {{-- FAQ Alanı --}}
            <div>
                <h2 class="text-3xl font-bold mb-6">Sıkça Sorulan Sorular</h2>
                <div class="space-y-5 text-sm text-gray-700">
                    <div>
                        <h3 class="font-semibold text-lg text-gray-900">Ekapıdan nedir?</h3>
                        <p class="mt-1">Ekapıdan, kargo firmaları ve göndericileri bir araya getirerek uygun fiyatlarla gönderim yapmanızı sağlayan bir platformdur.</p>
                    </div>

                    <div>
                        <h3 class="font-semibold text-lg text-gray-900">Hangi kargo firmalarıyla çalışıyorsunuz?</h3>
                        <p class="mt-1">Sisteme kayıtlı onlarca firma bulunmaktadır. Gönderi detaylarınıza göre en uygun seçenekleri listeliyoruz.</p>
                    </div>

                    <div>
                        <h3 class="font-semibold text-lg text-gray-900">Üyelik ücretli mi?</h3>
                        <p class="mt-1">Hayır, platforma kayıt olmak tamamen ücretsizdir.</p>
                    </div>

                    <div>
                        <h3 class="font-semibold text-lg text-gray-900">Gönderi takibini nasıl yaparım?</h3>
                        <p class="mt-1">Hesabınıza giriş yaptıktan sonra "Gönderilerim" bölümünden tüm kargo hareketlerinizi görüntüleyebilirsiniz.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
