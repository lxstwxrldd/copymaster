<x-layout title="Где нас найти?">
    <x-section title="Где нас найти?">
        <ul class="flex items-center">
            <li>
                <ul class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 ">
                    <li class="uppercase"><span>Адрес:</span><b class="font-semibold">г. Усть-Катав</b></li>
                    <li class="uppercase"><span>Номер телефона:</span><b class="font-semibold">+7 (919) 123 45 67</b></li>
                    <li class="uppercase"><span>Email:</span><b class="font-semibold">copymaster@gmail.com</b></li>
                </ul>
            </li>
            <li>
                <img src="{{ asset('public/map.jpg') }}" alt="" class="h-full w-full object-ceven">
            </li>
        </ul>
    </x-section>
</x-layout>
