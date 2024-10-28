@include('components.layout')
@include('components.header')

<x-guest-layout>
    <form method="POST" action="{{ route('register') }}" style="border: 1px solid rgb(31, 33, 138); padding: 20px; border-radius: 8px;">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Nombre')" style="color: rgb(31, 33, 138);" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" 
                          style="border: 1px solid rgb(31, 33, 138); color: rgb(31, 33, 138); background-color: rgba(31, 33, 138, 0.1);" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" style="color: rgb(31, 33, 138);" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Correo')" style="color: rgb(31, 33, 138);" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" 
                          style="border: 1px solid rgb(31, 33, 138); color: rgb(31, 33, 138); background-color: rgba(31, 33, 138, 0.1);" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" style="color: rgb(31, 33, 138);" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Contraseña')" style="color: rgb(31, 33, 138);" />
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" 
                          style="border: 1px solid rgb(31, 33, 138); color: rgb(31, 33, 138); background-color: rgba(31, 33, 138, 0.1);" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" style="color: rgb(31, 33, 138);" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirmar Contraseña')" style="color: rgb(31, 33, 138);" />
            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" 
                          style="border: 1px solid rgb(31, 33, 138); color: rgb(31, 33, 138); background-color: rgba(31, 33, 138, 0.1);" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" style="color: rgb(31, 33, 138);" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}" style="color: rgb(31, 33, 138);">
                {{ __('¿Ya estás registrado?') }}
            </a>

            <x-primary-button class="ms-4" style="background-color: rgb(31, 33, 138); color: white;">
                {{ __('Registrar') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>

@include('partials.slidebar2')
@include('components.footer')