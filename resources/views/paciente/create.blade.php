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
                        <h1>Crear Nuevo Paciente</h1>

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('paciente.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="nombre_completo">Nombre Completo:</label>
                                <input type="text" name="nombre_completo" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="num_identificacion">Num Identificacion:</label>
                                <input type="text" name="num_identificacion" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="sexo">Sexo:</label>
                                <input type="text" name="sexo" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="fecha_nacimiento">Fecha Nacimiento:</label>
                                <input type="date" name="fecha_nacimiento" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="domicilio">Domicilio:</label>
                                <input type="text" name="domicilio" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="ocupacion">Ocupacion:</label>
                                <input type="text" name="ocupacion" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="sistema_salud">Sistema Salud:</label>
                                <input type="text" name="sistema_salud" class="form-control" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Guardar</button>
                            <a href="{{ route('paciente.index') }}" class="btn btn-secondary">Cancelar</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<style>
    /* Estilo para los botones */
    .form-control {
  width: 100%;
  height: 40px;
  padding: 0.375rem 0.75rem;
  font-size: 1rem;
  line-height: 1.5;
  color: #495057;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid #ced4da;
  border-radius: 0.25rem;
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
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
h1 {
  font-size: 2.5rem;
  font-weight: bold;
  margin-bottom: 1rem;
}

</style>