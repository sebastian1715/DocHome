<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Paciente;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    public function index() {

        return view('paciente.index');

    }


    public function edit(User $paciente)
    {
        return view('paciente.edit', compact('paciente'));
    }

    
    public function create()
    {
        return view('paciente.create');
    }

    public function update(Request $request, User $paciente)
    {
        
        $paciente->nombres_y_apellidos = $request->nombres_y_apellidos;
        $paciente->email = $request->email;
        $paciente->password = $request->password;
        $paciente->cedula_ciudadania = $request->cedula_ciudadania;

        // $registromedico->especialidades_id = $request->especialidades_id;

        $paciente->save();

        return redirect()->route('paciente.create');
    }

    public function show(User $paciente)
    {
        //
    }
}
