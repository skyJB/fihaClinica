<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Buscador') }}
        </h2>
    </x-slot>

    <div align=center class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Busqueda de pacientes") }}
                </div>
            </div>
        </div>
    </div>

    <form action="{{ route('buscar_paciente') }}" method="GET">
        <div class="flex items-center justify-center">
            <div class="mr-4">
                <input type="text" name="q" placeholder="Buscar paciente" class="px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-gray-200 focus:border-transparent">
            </div>
            <button type="submit" class="px-4 py-2 text-white bg-blue-500 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-200 focus:ring-opacity-50">Buscar</button>
        </div>
    </form>

    @if (isset($pacientes))
        <div class="mt-4">
            @if (count($pacientes) == 0)
                <p>No se encontraron pacientes con el término "{{ $query }}".</p>
            @else
                <p>Resultados de la búsqueda para "{{ $query }}":</p>
                <table class="w-full mt-4">
                    <thead>
                        <tr class="bg-gray-100 border-b border-gray-300">
                            <th class="px-4 py-2 font-semibold text-left">Nombre</th>
                            <th class="px-4 py-2 font-semibold text-left">Identificación</th>
                            <th class="px-4 py-2 font-semibold text-left"><a href="ficha_clinica">Ficha Clínica</a></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pacientes as $paciente)
                            <tr class="hover:bg-gray-50 border-b border-gray-300">
                                <td class="px-4 py-2">{{ $paciente->nombre_completo }}</td>
                                <td class="px-4 py-2">{{ $paciente->num_identificacion }}</td>
                                <td class="px-4 py-2">{{ $paciente->fichaClinica ? $paciente->fichaClinica->num_identificador : '-' }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    @endif
</x-app-layout>
<style>
   .container {
  max-width: 800px;
  margin: 0 auto;
  padding: 0 20px;
}

table {
  width: 100%;
  background-color: #f1f1f1;
  font-weight: bold;
  border-collapse: collapse;
}

th {
  background-color: #999;
  color: #fff;
  padding: 10px;
  text-align: left;
  border: 1px solid #ddd;
}

td {
  padding: 10px;
  color: #333;
  border: 1px solid #ddd;
}

.btn {
  margin-right: 5px;
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  border-radius: 5px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.btn:hover {
  background-color: #3e8e41;
}
p
{
    color:white;
}
</style>