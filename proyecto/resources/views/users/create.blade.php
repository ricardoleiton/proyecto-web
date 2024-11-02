<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight" style="color: rgb(31, 33, 138);">
            {{ __('Crear Usuario') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-light-blue-200 dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6" style="background-color: #add8e6; border: 2px solid rgb(31, 33, 138);">
                    @if ($errors->any())
                        <div class="mb-4">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li class="text-red-500">{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('users.store') }}">
                        @csrf

                        <!-- Nombre -->
                        <div>
                            <label for="name" class="block font-medium text-lg" style="color: rgb(31, 33, 138);">{{ __('Nombre') }}</label>
                            <input id="name" type="text" name="name" value="{{ old('name') }}"
                                class="block mt-1 w-full bg-white text-[rgb(31,33,138)] border border-[rgb(31,33,138)] rounded-md shadow-sm focus:outline-none focus:ring focus:ring-[rgb(31,33,138)]" required autofocus>
                        </div>

                        <!-- Email -->
                        <div class="mt-4">
                            <label for="email" class="block font-medium text-lg" style="color: rgb(31, 33, 138);">{{ __('Email') }}</label>
                            <input id="email" type="email" name="email" value="{{ old('email') }}"
                                class="block mt-1 w-full bg-white text-[rgb(31,33,138)] border border-[rgb(31,33,138)] rounded-md shadow-sm focus:outline-none focus:ring focus:ring-[rgb(31,33,138)]" required>
                        </div>

                        <!-- Password -->
                        <div class="mt-4">
                            <label for="password" class="block font-medium text-lg" style="color: rgb(31, 33, 138);">{{ __('Password') }}</label>
                            <input id="password" type="password" name="password" 
                                class="block mt-1 w-full bg-white text-[rgb(31,33,138)] border border-[rgb(31,33,138)] rounded-md shadow-sm focus:outline-none focus:ring focus:ring-[rgb(31,33,138)]" required>
                        </div>

                        <!-- Rol -->
                        <div class="mt-4">
                            <label for="role" class="block font-medium text-lg" style="color: rgb(31, 33, 138);">{{ __('Rol') }}</label>
                            <select id="role" name="role" 
                                class="block mt-1 w-full bg-white text-[rgb(31,33,138)] border border-[rgb(31,33,138)] rounded-md shadow-sm focus:outline-none focus:ring focus:ring-[rgb(31,33,138)]" required>
                                <option value="user" {{ old('role') == 'user' ? 'selected' : '' }}>
                                    {{ __('Usuario') }}</option>
                                <option value="vendor" {{ old('role') == 'vendor' ? 'selected' : '' }}>
                                    {{ __('Vendedor') }}</option>
                                <option value="admin" {{ old('role') == 'admin' ? 'selected' : '' }}>
                                    {{ __('Admin') }}</option>
                            </select>
                        </div>

                        <!-- Estado -->
                        <div class="mt-4">
                            <label for="status" class="block font-medium text-lg" style="color: rgb(31, 33, 138);">{{ __('Estado') }}</label>
                            <select id="status" name="status" 
                                class="block mt-1 w-full bg-white text-[rgb(31,33,138)] border border-[rgb(31,33,138)] rounded-md shadow-sm focus:outline-none focus:ring focus:ring-[rgb(31,33,138)]" required>
                                <option value="active" {{ old('status') == 'active' ? 'selected' : '' }}>
                                    {{ __('Activo') }}</option>
                                <option value="inactive" {{ old('status') == 'inactive' ? 'selected' : '' }}>
                                    {{ __('Inactivo') }}</option>
                            </select>
                        </div>

                        <div class="mt-4">
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded flex items-center" style="color: rgb(31, 33, 138); font-size: 1.25rem; font-weight: bold;">
                                <svg xmlns="http://www.w3.org/2000/svg" class="inline-block w-6 h-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 2h-4m0 0L6 9m4-7v9m0 0h4m-4 0l8 8-8-8zm0 0l4-4m-4 4l-4-4" />
                                </svg>
                                {{ __('Crear Usuario') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>