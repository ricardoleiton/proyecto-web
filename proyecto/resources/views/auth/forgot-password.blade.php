@include('components.layout')
@include('components.header')

<x-guest-layout>
    <div class="mb-4 text-sm" style="color: rgb(31, 33, 138);">
        {{ __('¿Olvidaste tu contraseña? Simplemente háganos saber su dirección de correo electrónico y le enviaremos un enlace para restablecer su contraseña que le permitirá elegir una nueva.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Correo')" style="color: rgb(31, 33, 138);" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus 
                style="border: 1px solid rgb(31, 33, 138); color: rgb(31, 33, 138); background-color: rgba(31, 33, 138, 0.1);" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button style="background-color: rgb(31, 33, 138); color: white; border: 1px solid rgb(31, 33, 138);">
                {{ __('Enviar enlace de restablecimiento de contraseña') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>

@include('partials.slidebar2')
@include('components.footer')