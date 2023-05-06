<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'rol' => 'required',
        ]);

        $user = User::create($validatedData);

        return redirect()->route('usuario.index')->with('success', 'Usuario creado correctamente.');
    }

 

    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
    
        // Validar datos del formulario
    
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$user->id,
            'password' => 'nullable|min:6',
            'rol' => 'required',
        ]);
    
        // Actualizar usuario
    
        $user->update($validatedData);
    
        return redirect()->route('usuario.index')->with('success', 'Usuario actualizado correctamente.');
    }
    

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
    
        return redirect()->route('usuario.index')->with('success', 'Usuario eliminado correctamente');
    }
    
}
