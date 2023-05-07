<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Ficha Clínicas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="container">
                        <h1 class="text-2xl font-bold mb-4">Fichas Clínicas</h1>

                        <table class="table-auto w-full mb-6">
                            <thead>
                                <tr class="bg-gray-200 dark:bg-gray-700">
                                    <th class="px-4 py-2">ID</th>
                                    <th class="px-4 py-2">Num Identificador</th>
                                    <th class="px-4 py-2">Paciente</th>
                                    <th class="px-4 py-2">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($ficha_clinicas as $ficha_clinica)
                                <tr>
                                    <td class="border px-4 py-2">{{ $ficha_clinica->id }}</td>
                                    <td class="border px-4 py-2">{{ $ficha_clinica->num_identificador }}</td>
                                    <td class="border px-4 py-2">{{ $ficha_clinica->paciente->nombre_completo }}</td>
                                    <td class="border px-4 py-2">
                                        <a href="{{ route('ficha_clinica.show', $ficha_clinica) }}" class="text-blue-600 dark:text-blue-400">Ver</a>
                                       
                                        <form action="{{ route('ficha_clinica.destroy', $ficha_clinica) }}" method="POST" class="inline-block">
                                            @csrf
                                            @method('DELETE')
                                            
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @if (Auth::user()->rol === 'ADMINISTRADOR')
                        <a href="{{ route('ficha_clinica.create') }}" class="btn btn-primary-custom">
                            Crear Nueva Ficha Clínica
                        </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
