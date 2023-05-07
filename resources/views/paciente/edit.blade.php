<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Paciente') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="container">
                        <h1>Editar Paciente</h1>

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('paciente.update', $paciente->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="nombre_completo">Nombre Completo:</label>
                                <input type="text" name="nombre_completo" class="form-control" value="{{ $paciente->nombre_completo }}" required>

                            </div>
                            <div class="form-group">
                                <label for="num_identificacion">Num Identificacion:</label>
                                <input type="text" name="num_identificacion" class="form-control" value="{{ $paciente->num_identificacion }}" required>
                            </div>
                            <div class="form-group">
    <label for="sexo">Sexo:</label>
    <select id="sexo" class="form-control" name="sexo" required>
        <option value="">Seleccione</option>
        <option value="Masculino" {{ $paciente->sexo == 'Masculino' ? 'selected' : '' }}>Masculino</option>
        <option value="Femenino" {{ $paciente->sexo == 'Femenino' ? 'selected' : '' }}>Femenino</option>
    </select>
</div>

                            <div class="form-group">
                                <label for="fecha_nacimiento">Fecha Nacimiento:</label>
                                <input type="date" name="fecha_nacimiento" class="form-control" value="{{ $paciente->fecha_nacimiento }}" required>
                            </div>
                            <div class="form-group">
                                <label for="domicilio">Domicilio:</label>
                                <input type="text" name="domicilio" class="form-control" value="{{ $paciente->domicilio }}" required>
                            </div>
                            <div class="form-group">
                                <label for="ocupacion">Ocupacion:</label>
                                <input type="text" name="ocupacion" class="form-control" value="{{ $paciente->ocupacion }}" required>
                            </div>
                            <div class="form-group">
    <label for="sistema_salud">Sistema Salud:</label>
    <select id="sistema_salud" class="form-control" name="sistema_salud" required>
        <option value="">Seleccione</option>
        <option value="Fonasa" {{ $paciente->sistema_salud == 'Fonasa' ? 'selected' : '' }}>Fonasa</option>
        <option value="Isapre" {{ $paciente->sistema_salud == 'Isapre' ? 'selected' : '' }}>Isapre</option>
    </select>
</div>


                            <button type="submit" class="btn btn-primary">Actualizar</button>
                            <a href="{{ route('paciente.index') }}" class="btn btn-secondary">Cancelar</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<style>
    /* Estilo para los campos de entrada */
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

/* Estilo para los botones */
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

/* Estilo para el botón Guardar */
.btn-primary {
  background-color: #3490dc;
  border-color: #3490dc;
}

/* Estilo para el botón Cancelar */
.btn-secondary {
  color: #fff;
  background-color: #6c757d;
  border-color: #6c757d;
}

/* Estilo para el título del formulario */
h1 {
  font-size: 2.5rem;
  font-weight: bold;
  margin-bottom: 1rem;
}

/* Estilo para los mensajes de error */
.alert-danger {
  color: #721c24;
  background-color: #f8d7da;
  border-color: #f5c6cb;
  padding: .75rem 1.25rem;
  margin-bottom: 1rem;
  border: 1px solid transparent;
  border-radius: .25rem;
}

    </style>