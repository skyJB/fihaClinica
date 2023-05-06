<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="container">
                        <h1>Editar Usuario</h1>

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form  method="POST">
    @csrf
    @method('PUT')

    <label for="name">Nombre:</label>
    <input type="text" name="name" value="{{ $user->name }}" required>
    <br>

    <label for="email">Correo electrónico:</label>
    <input type="email" name="email" value="{{ $user->email }}" required>
    <br>

    <label for="password">Contraseña:</label>
    <input type="password" name="password" minlength="6">
    <br>

    <label for="rol">Rol:</label>
    <select name="rol" required>
        <option value="">Seleccione un rol</option>
        <option value="administrador" {{ $user->rol == 'administrador' ? 'selected' : '' }}>Administrador</option>
        <option value="usuario" {{ $user->rol == 'usuario' ? 'selected' : '' }}>Usuario</option>
    </select>
    <br>

    <button type="submit">Guardar cambios</button>
</form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>