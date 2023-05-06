<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ ('Paciente') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="container">
                        

                        <a href="{{ route('paciente.create') }}" class="btn-primary-custom btn btn-primary mb-3">Crear Nuevo Paciente</a>

                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <table class="table table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre Completo</th>
                                    <th>Num Identificación</th>
                                    <th>Sexo</th>
                                    <th>Fecha Nacimiento</th>
                                    <th>Domicilio</th>
                                    <th>Ocupación</th>
                                    <th>Sistema Salud</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($pacientes as $paciente)
                                    <tr>
                                        <td>{{ $paciente->id }}</td>
                                        <td>{{ $paciente->nombre_completo }}</td>
                                        <td>{{ $paciente->num_identificacion }}</td>
                                        <td>{{ $paciente->sexo }}</td>
                                        <td>{{ $paciente->fecha_nacimiento }}</td>
                                        <td>{{ $paciente->domicilio }}</td>
                                        <td>{{ $paciente->ocupacion }}</td>
                                        <td>{{ $paciente->sistema_salud }}</td>
                                        <td>
                                            
                                            <a href="{{ route('paciente.edit', $paciente->id) }}" class="btn btn-secondary">Editar</a>
                                            <form action="{{ route('paciente.destroy', $paciente->id) }}" method="POST" style="display: inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de eliminar este paciente?')">Eliminar</button>
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


<style>
    table {
        background-color: #f1f1f1;
        font-weight: bold;
        
    }
    
    th {
        background-color: #999;
        color: #fff;
        padding: 10px;
    }
    
    td {
        padding: 10px;
        color:black;
    }
    
    .btn {
        margin-right: 5px;
       
    }
    .btn-primary-custom {
    background-color: #138496;
    border-color: #138496;
    border-radius: 20px;
}

.btn-primary-custom:hover {
    background-color: #0e6d7a;
    border-color: #0e6d7a;
}

.btn-primary-custom:focus,
.btn-primary-custom.focus {
    box-shadow: 0 0 0 0.2rem rgba(19, 132, 150, 0.5);
}

.btn-primary-custom.disabled,
.btn-primary-custom:disabled {
    background-color: #138496;
    border-color: #138496;
}



    </style>