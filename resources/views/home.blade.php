<x-layout title="Home">
    <x-section title="Home">
        <h2 class="text-4xl font-bold text-gray-900 mb-8 text-center border-b-2 border-blue-500 pb-4">Новинки компании</h2>
            <div class="flex flex-wrap md:flex-nowrap justify-center gap-8 overflow-x-auto pb-6 scrollbar-hide">
                @php
                    // Данные для 5 последних добавленных товаров
                    $products = [
                        ['name' => 'Интеллектуальный МФУ X-Pro', 'image' => 'logo.png'],
                        ['name' => 'Высокоскоростной цветной принтер UltraMax', 'image' => 'logo.png'],
                        ['name' => 'Копировальный робот-ассистент А3', 'image' => 'logo.png'],
                        ['name' => 'Картриджи с эко-чернилами HD-K', 'image' => 'logo.png'],
                        ['name' => 'Премиум бумага для фотопечати GlossyLux', 'image' => 'logo.png'],
                    ];
                @endphp

                @foreach ($products as $product)
                    <div class="flex-shrink-0 w-72 bg-white rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 border border-gray-200">
                        <img src="{{ asset('logo.png') }}" alt="{{ $product['name'] }}" class="w-full h-56 object-contain p-4 bg-gray-50 rounded-t-xl">
                        <div class="p-5 text-center">
                            <h3 class="text-2xl font-semibold text-gray-800 mb-2">{{ $product['name'] }}</h3>
                            <p class="text-gray-600 text-md">Непревзойденное качество!</p>
                        </div>
                    </div>
                @endforeach
    </x-section>
</x-layout>
