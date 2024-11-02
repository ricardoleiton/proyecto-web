<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight" style="color: rgb(31, 33, 138);">
            {{ __('Usuarios') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-light-blue-200 dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100" style="background-color: #add8e6;">
                    <style>
                        table {
                            border-collapse: collapse;
                        }
                        th, td {
                            border: 1px solid rgb(31, 33, 138); /* Cambia el color de las líneas de la tabla */
                            text-align: center; /* Centra el texto */
                            padding: 8px; /* Espaciado interior */
                        }
                    </style>

                    <a href="{{ route('users.create') }}" class="bg-blue-500 hover:bg-blue-700 font-bold py-2 px-4 rounded flex items-center" style="color: rgb(31, 33, 138);">
                        <svg xmlns="http://www.w3.org/2000/svg" class="inline-block w-4 h-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 2h-4m0 0L6 9m4-7v9m0 0h4m-4 0l8 8-8-8zm0 0l4-4m-4 4l-4-4" /></svg> <strong>{{ __('Crear Usuario') }}</strong>
                    </a>

                    <div class="overflow-x-auto mt-4"> <!-- Permite desplazamiento horizontal -->
                        <table class="table-auto w-full">
                            <thead>
                                <tr>
                                    <th class="px-2 py-2" style="color: rgb(31, 33, 138); width: 50px;">{{ __('ID') }}</th>
                                    <th class="px-2 py-2" style="color: rgb(31, 33, 138); width: 150px;">{{ __('Nombre') }}</th>
                                    <th class="px-2 py-2" style="color: rgb(31, 33, 138); width: 200px;">{{ __('Email') }}</th>
                                    <th class="px-2 py-2" style="color: rgb(31, 33, 138); width: 100px;">{{ __('Rol') }}</th>
                                    <th class="px-2 py-2" style="color: rgb(31, 33, 138); width: 100px;">{{ __('Estado') }}</th>
                                    <th class="px-2 py-2" style="color: rgb(31, 33, 138); width: 150px;">{{ __('Acciones') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <td class="border px-2 py-2" style="color: rgb(31, 33, 138);">{{ $user->id }}</td>
                                        <td class="border px-2 py-2" style="color: rgb(31, 33, 138);">{{ $user->name }}</td>
                                        <td class="border px-2 py-2" style="color: rgb(31, 33, 138);">{{ $user->email }}</td>
                                        <td class="border px-2 py-2" style="color: rgb(31, 33, 138);">{{ $user->role }}</td>
                                        <td class="border px-2 py-2" style="color: rgb(31, 33, 138);">{{ $user->status }}</td>
                                        <td class="border px-2 py-2">
                                            <a href="{{ route('users.edit', $user->id) }}" class="bg-yellow-500 hover:bg-yellow-700 font-bold py-1 px-3 rounded flex items-center" style="color: rgb(31, 33, 138);">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="inline-block w-4 h-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232a4 4 0 00-5.464 0l-6.416 6.415A2 2 0 003 14.414V21h6.586a2 2 0 001.414-.586l6.416-6.416a4 4 0 000-5.464l-1.414-1.414z" /></svg> <strong>{{ __('Editar') }}</strong>
                                            </a>

                                            <form action="{{ route('users.destroy', $user->id) }}" method="POST" class="inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="bg-red-500 hover:bg-red-700 font-bold py-1 px-3 rounded flex items-center" style="color: rgb(31, 33, 138);">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="inline-block w-4 h-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg> <strong>{{ __('Eliminar') }}</strong>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>