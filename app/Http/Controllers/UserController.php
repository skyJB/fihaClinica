<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Hash;
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
        return view('users.edit', ['user' => $user]);
    }
    
    

    public function update(Request $request, $id)
    {
        $user = User::find($id);

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->rol = $request->input('rol');
    
        $user->save();
    
        return redirect()->route('usuario.index')->with('success', 'Usuario actualizado exitosamente');
    }
    

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
    
        return redirect()->route('usuario.index')->with('success', 'Usuario eliminado correctamente');
    }
    
}
