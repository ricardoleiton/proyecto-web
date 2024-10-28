@include('components.layout')
@include('components.header')

<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}" style="padding: 20px; border-radius: 8px;">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Correo')" class="block mt-1 w-full" style="color: rgb(31, 33, 138);" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" 
                style="border: 1px solid rgb(31, 33, 138); color: rgb(31, 33, 138); background-color: rgba(31, 33, 138, 0.1);" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Contraseña')" class="block mt-1 w-full" style="color: rgb(31, 33, 138);" />
            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" 
                            style="border: 1px solid rgb(31, 33, 138); color: rgb(31, 33, 138); background-color: rgba(31, 33, 138, 0.1);" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center" style="color: rgb(31, 33, 138);">
                <input id="remember_me" type="checkbox" class="rounded border-2 border-rgb(31, 33, 138) text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember" style="accent-color: rgb(31, 33, 138);">
                <span class="ms-2 text-sm" style="color: rgb(31, 33, 138);">{{ __('Recuérdame') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}" style="color: rgb(31, 33, 138);">
                    {{ __('¿Olvidaste tu contraseña?') }}
                </a>
            @endif

            <x-primary-button class="ms-3" style="background-color: rgb(31, 33, 138); color: white;">
                {{ __('Iniciar sesión') }}
            </x-primary-button>
        </div>
    </form>

    <!-- Botón de Registro de Usuario -->
    <div class="flex items-center justify-center mt-4">
        <a href="{{ route('register') }}">
            <x-primary-button style="background-color: rgb(31, 33, 138); color: white; border: 1px solid rgb(31, 33, 138);">
                {{ __('Registrar Nuevo Usuario') }}
            </x-primary-button>
        </a>
    </div>
</x-guest-layout>

@include('partials.slidebar2')
@include('components.footer')