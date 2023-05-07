<?php

namespace App\Http\Controllers;

use App\Models\FichaClinica;
use Illuminate\Http\Request;
use App\Models\Paciente;

class FichaClinicaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
public function index()
{
    $ficha_clinicas = FichaClinica::with('paciente')->get();
    return view('ficha_clinica.index', compact('ficha_clinicas'));
}


        
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
     public function create()
     {
         $pacientes = Paciente::all();
         return view('ficha_clinica.create', compact('pacientes'));
 
     }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate and save the new FichaClinica
        $validatedData = $request->validate([
            'num_identificador' => 'required|string|max:20',
            'id_paciente' => 'required|exists:paciente,id',
        ]);

        $fichaClinica = FichaClinica::create($validatedData);
        $fichaClinicas = FichaClinica::all();
        

        return redirect()->route('ficha_clinica.index', compact('fichaClinicas'))
                         ->with('success', 'Ficha Clínica created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FichaClinica  $fichaClinica
     * @return \Illuminate\Http\Response
     */
    public function show(FichaClinica $fichaClinica)
    {
        return view('ficha_clinica.show', compact('fichaClinica'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FichaClinica  $fichaClinica
     * @return \Illuminate\Http\Response
     */
    public function edit(FichaClinica $fichaClinica)
    {
        return view('ficha_clinica.edit', compact('fichaClinica'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FichaClinica  $fichaClinica
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FichaClinica $fichaClinica)
    {
        // Validate and update the FichaClinica
        $validatedData = $request->validate([
            'num_identificador' => 'required|string|max:20',
            'id_paciente' => 'required|exists:paciente,id',
        ]);

        $fichaClinica->update($validatedData);

        return redirect()->route('ficha_clinica.show', $fichaClinica->id)
                         ->with('success', 'Ficha Clínica updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FichaClinica  $fichaClinica
     * @return \Illuminate\Http\Response
     */
    public function destroy(FichaClinica $fichaClinica)
    {
        $fichaClinica->delete();

        return redirect()->route('ficha_clinica.index')
                         ->with('success', 'Ficha Clínica deleted successfully.');
    }
}