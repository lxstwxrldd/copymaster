<x-layout title="Авторизация">
    <x-section title="Авторизация">
        
        <form action="" class="grid gap-y-6 shadow-lg p-8 w-full lg:w-2/3 justify-self-center"> 
            <x-form.div>
                <label for="">Login</label>
                <input type="text" name="login" class="border border-gray-200 p-1">
                <x-form.error>Error</x-form.error>
            </x-form.div>
            <x-form.div>
                <label for="">Password</label>
                <input type="password" name="password" class="border border-gray-200 p-1">
                <x-form.error>Error</x-form.error>
            </x-form.div>
            <x-form.button>Login</x-form.button>
        </form>
    </x-section>
</x-layout>