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
                        <h1 class="text-2xl font-bold mb-4">Crear Nueva Ficha Clínica</h1>

                        <form action="{{ route('ficha_clinica.store') }}" method="POST" class="space-y-4">
                            @csrf

                            <div>
                                <label for="num_identificador" class="block text-lg font-medium text-gray-700">Num Identificador:</label>
                                <input type="text" class="form-input rounded-md shadow-sm block w-full" id="num_identificador" name="num_identificador">
                            </div>

                            <div>
                                <label for="id_paciente" class="block text-lg font-medium text-gray-700">ID Paciente:</label>
                                <select name="id_paciente" id="id_paciente" class="form-select rounded-md shadow-sm block w-full">
                                    @foreach ($pacientes as $paciente)
                                        <option value="{{ $paciente->id }}">{{ $paciente->nombre_completo }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div>
                                <button type="submit" class="btn btn-primary bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                    Create
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<style>
    select{
        color:black;
    }
    input{
        color:black;
    }
    .btn-primary-custom {
    background-color: #138496;
    border-color: #138496;
    border-radius: 20px;
}


.btn {
  display: inline-block;
  font-weight: 400;
  color: #fff;
  text-align: center;
  vertical-align: middle;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  background-color: #3490dc;
  border: 1px solid #3490dc;
  padding: 0.375rem 0.75rem;
  font-size: 1rem;
  line-height: 1.5;
  border-radius: 0.25rem;
  transition: all 0.15s ease-in-out;
}

.btn-secondary {
  color: #fff;
  background-color: #6c757d;
  border-color: #6c757d;
}

.btn-primary:hover,
.btn-secondary:hover {
  background-color: #2779bd;
  border-color: #2779bd;
}
    </style>