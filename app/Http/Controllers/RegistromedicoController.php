<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medico;
use App\Models\User;

class RegistromedicoController extends Controller
{
    public function create()
    {

        return view('auth.registromedico');
    }

    public function store(Request $request)
    {
        // $this->validate(request(), [
        // $validaciones = request()->validate([
        //     'nombres_y_apellidos' => 'required',
        //     'email' => 'required|email',
        //     'password' => 'required|confirmed',
        //     'role' => 'required',
        // ]);

        // if (isset($validaciones)) {
        //     $registro1 = User::create(request(['nombres_y_apellidos', 'email', 'password', 'cedula', 'role']));
        $registro1 = new User();
        $registro1->nombres_y_apellidos = $request->nombres_y_apellidos;
        $registro1->email = $request->email;
        $registro1->password = $request->password;
        $registro1->cedula = $request->cedula;
        $registro1->role = "medico";
        $registro1->save();

        $registro = new Medico();
        $registro->users_id = $registro1->id;
        $registro->certificacion = $request->certificacion;
        $registro->diploma = $request->diploma;
        $registro->cedulafotocopia = $request->cedulafotocopia;


        $registro->save();
    
        auth()->login($registro1);
        return redirect()->to('medico');
    }
}
