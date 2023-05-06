<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Ficha Clínicas</title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.7.0/dist/css/bootstrap.min.css%22%3E">

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.7.0/dist/js/bootstrap.bundle.min.js%22%3E"></script>
</head>
<body>
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
                    

                        <a href="{{ route('ficha_clinica.create') }}" class="btn-primary-custom btn btn-primary mt-4">Crear Nueva Ficha Clínica</a>


                            @if(session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif

                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Num Identificador</th>
                                        <th>ID Paciente</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($fichaClinicas as $fichaClinica)
                                        <tr>
                                            <td>{{ $fichaClinica->id }}</td>
                                            <td>{{ $fichaClinica->num_identificador }}</td>
                                            <td>{{ $fichaClinica->id_paciente }}</td>
                                            <td>
                                                <a href="{{ route('ficha_clinica.show', $fichaClinica->id) }}" class="btn btn-primary">View</a>
                                                <a href="{{ route('ficha_clinica.edit', $fichaClinica->id) }}" class="btn btn-secondary">Edit</a>
                                                <form action="{{ route('ficha_clinica.destroy', $fichaClinica->id) }}" method="POST" style="display: inline-block;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this Ficha Clínica?')">Delete</button>
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
</body>
</html>

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