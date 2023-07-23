<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        $users = User::all();
        return $users;
    }

    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->apellidos = $request->apellidos;
        $user->celular = $request->celular;
        $user->direccion = $request->direccion;
        $user->email = $request->email;
        $user->role = $request->role;
        $user->status = $request->status;
        $user->genero = $request->genero;
        $user->email_verified_at = $request->email_verified_at;
        $user->password = $request->password;
        

        $user->save();
        return $user;
    }

    public function show($id)
    {
        $user = User::find($id);
        return $user;
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->apellidos = $request->apellidos;
        $user->email = $request->email;
        $user->celular = $request->celular;
        $user->direccion = $request->direccion;
        $user->role = $request->role;
        $user->status = $request->status;
        $user->genero = $request->genero;
        $user->save();
        return $user;
    }

    public function destroy($id)
    {
       User::destroy($id);
    }
}
