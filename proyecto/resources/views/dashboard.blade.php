<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl" style="color: rgb(31, 33, 138); font-size: 28px; font-weight: bold;"> 
            {{ __('Panel') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-light-blue-200 dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100" style="background-color: #add8e6;"> 
                    <!-- Mostrar nombre y rol del usuario autenticado -->
                    <p style="color: rgb(31, 33, 138); font-size: 24px; font-weight: bold;"> 
                        {{ __("Bienvenido, " . Auth::user()->name . "! Tu rol asignado es " . Auth::user()->role . ".") }}
                    </p>

                    @if(Auth::user()->role == 'admin')
                        <!-- Mostrar enlace al CRUD de usuarios si es admin -->
                        <div class="mt-4">
                            <a href="{{ route('users.index') }}" style="color: rgb(31, 33, 138); font-size: 24px; font-weight: bold;" class="flex items-center"> <!-- Aumentar tamaño y poner en negrita -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="mr-2" width="30" height="30" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14c-1.333 0-2.667-.333-4-1-1.333-.667-2-1.667-2-3s.667-2.333 2-3c1.333-.667 2.667-1 4-1s2.667.333 4 1c1.333.667 2 1.667 2 3s-.667 2.333-2 3c-1.333.667-2.667 1-4 1zM12 14v5m0-5l4-2m-4 2l-4-2" />
                                </svg>
                                {{ __('Gestionar Usuarios') }}
                            </a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>