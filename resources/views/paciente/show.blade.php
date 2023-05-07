<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $paciente->nombre_completo }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <p><strong>Número de Identificación:</strong> {{ $paciente->num_identificacion }}</p>
                    <p><strong>Sexo:</strong> {{ $paciente->sexo }}</p>
                    <p><strong>Fecha de Nacimiento:</strong> {{ $paciente->fecha_nacimiento }}</p>
                    <p><strong>Domicilio:</strong> {{ $paciente->domicilio }}</p>
                    <p><strong>Ocupación:</strong> {{ $paciente->ocupacion }}</p>
                    <p><strong>Sistema de Salud:</strong> {{ $paciente->sistema_salud }}</p>
                    <a href="{{ route('paciente.index') }}" class="btn btn-secondary">Volver</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
