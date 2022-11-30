<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{

    public function create()
    {

        return view('auth.register');
    }

    public function store(Request $request)
    {

        /*  $role = $request->paciente;
        if ($role == 'paciente') {
            $this->validate(request(), [
                'nombres_y_apellidos' => 'required',
                'email' => 'required|email',
                'password' => 'required|confirmed',
                'cedula' => 'required',
                'role' => 'required',
            ]);

            $user = User::create(request(['nombres_y_apellidos', 'email', 'password','cedula','role']));
        } else {
            if ($role == 'medico') {

                /* $this->validate(request(), [
                    'nombres_y_apellidos' => 'required',
                    'email' => 'required|email',
                    'password' => 'required|confirmed',
                ]);

            $user = User::create(request(['nombres_y_apellidos', 'email', 'password','cedula','role']));

                $registro = new Medico();
                $registro->users_id = $user->id;
                $registro->certificacion = $request->certificacion;
                $registro->diploma = $request->diploma;
                $registro->cedulafotocopia= $request->cedulafotocopia;


                $registro->save();
                return  $registro; /* redirect()->route('medico.index') ;

            }
        }



        auth()->login($user);
        return redirect()->to('/');

 */

        // $this->validate(request(), [
        //     'nombres_y_apellidos' => 'required',
        //     'email' => 'required|email',
        //     'password' => 'required|confirmed',
        //     'cedula' => 'required',
        //     'role' => 'required',

        // ]);

        // $user = User::create(request(['nombres_y_apellidos', 'email', 'password', 'cedula', 'role']));
        $registro1 = new User();
        $registro1->nombres_y_apellidos = $request->nombres_y_apellidos;
        $registro1->email = $request->email;
        $registro1->password = $request->password;
        $registro1->cedula = $request->cedula;
        $registro1->role = "paciente";
        $registro1->save();
        auth()->login($registro1);
        return redirect()->to('paciente');
    }

}
