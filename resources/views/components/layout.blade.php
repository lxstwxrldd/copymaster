<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <script src="{{ asset('tailwindcss.js') }}"></script>
</head>
<body class="flex flex-col min-h-screen">
    <header class="flex justify-between bg-gray-600 shadow-md p-4">
        <div>
            <x-link href="{{ route('home')}}" class="flex items-center gap-x-2 text-white"><img src="{{ asset('logo.png') }}" alt="" class="h-6 w-6">Copy Master</x-link>
        </div>
        <nav class="flex gap-x-4">
            <x-link class="text-white" href="{{ route('home')}}">О нас</x-link>
            <x-link class="text-white" href="{{ route('catalog')}}">Каталог</x-link>
            <x-link class="text-white" href="{{ route('where')}}">Где нас искать?</x-link> 
        </nav>
        <ul class="flex gap-x-4">
        @guest
            <li><x-link class="text-white cursor-pointer">Регистрация</x-link></li>
            <li><x-link class="text-white cursor-pointer">Авторизация</x-link></li>
        @endguest
        @auth
                <li><x-link class="text-white">Корзина</x-link></li>
                <li><x-link class="text-white">Выход</x-link></li>
        @endauth
        </ul>
    </header>
    <main class="flex-grow">
        {{ $slot }}
    </main>
    <footer class="bg-gray-600 text-white p-6 text-center mt-12">
        <p>&copy; {{ date('Y') }} Copymaster. Все права защищены.</p>
        <p class="text-gray-400 text-sm mt-2">Инновации в каждом отпечатке.</p>
    </footer>
</body>
</html>
