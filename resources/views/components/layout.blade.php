<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <script src="{{ asset('public/tailwindcss.js') }}"></script>
</head>
<body class="flex flex-col h-screen">
    <header class="flex justify-between">
        <div>
            <x-link href="{{ route('home')}}" class="flex items-center gap-x-2"><img src="{{ asset('public/logo.png') }}" alt="" class="h-6 w-6">Copy Master</x-link>
        </div>
        <nav class="flex gap-x-4">
            <li><x-link href="{{ route('home')}}">О нас</x-link></li>
            <li><x-link href="{{ route('catalog')}}">Каталог</x-link></li>
            <li><x-link href="{{ route('where')}}">Где нас искать?</x-link></li>
        </nav>
        <ul class="flex gap-x-4">
        @guest
            <li><x-link>Регистрация</x-link></li>
            <li><x-link>Авторизация</x-link></li>
        @endguest
        @auth
                <li><x-link>Корзина</x-link></li>
                <li><x-link>Выход</x-link></li>
        @endauth
        </ul>
    </header>
    <main>
        {{ $slot }}
    </main>
    <footer>
        footer
    </footer>
</body>
</html>
