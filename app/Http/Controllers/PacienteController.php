<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    public function index()
    {
        $pacientes = Paciente::all();
        return view('paciente.index', compact('pacientes'));
    }

    public function create()
    {
        return view('paciente.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nombre_completo' => 'required|string|max:100',
            'num_identificacion' => 'required|string|max:20',
            'sexo' => 'required|string|max:10',
            'fecha_nacimiento' => 'required|date',
            'domicilio' => 'required|string|max:200',
            'ocupacion' => 'required|string|max:100',
            'sistema_salud' => 'required|string|max:100',

        ]);

        $paciente = Paciente::create($validatedData);
        $pacientes = Paciente::all();
        return redirect()->route('paciente.index', compact($pacientes))
            ->with('success', 'Paciente created successfully.');
    }

    public function show(Paciente $paciente)
    {
        return view('paciente.show', compact('paciente'));
    }

    public function edit(Paciente $paciente)
    {
        return view('paciente.edit', compact('paciente'));
    }

    public function update(Request $request, Paciente $paciente)
    {
        $validatedData = $request->validate([
            'nombre_completo' => 'required|string|max:100',
            'num_identificacion' => 'required|string|max:20',
            'sexo' => 'required|string|max:10',
            'fecha_nacimiento' => 'required|date',
            'domicilio' => 'required|string|max:200',
            'ocupacion' => 'required|string|max:100',
            'sistema_salud' => 'required|string|max:100',
        ]);

        $paciente->update($validatedData);

        return redirect()->route('paciente.show', $paciente->id)
            ->with('success', 'Paciente updated successfully.');
    }

    public function destroy(Paciente $paciente)
    {
        $paciente->delete();

        return redirect()->route('paciente.index')
            ->with('success', 'Paciente deleted successfully.');
    }
}