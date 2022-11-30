<?php

namespace App\Http\Controllers;

use App\Models\Medico;
use App\Models\Perfiladmin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PerfiladminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       /*  select('*')->where('role', 'paciente') */
        /* $user = User::; */
        $users = DB::select('select * from users where role = "medico"');

        $perfiladmins = Perfiladmin::All();
        return view('perfiladmin.index', compact('perfiladmins', 'users'));
    }

    public function administradores()
    {
        $users = DB::select('select * from users where role = "admin"');

        $perfiladmins = Perfiladmin::All();
        return view('perfiladmin.administradores', compact('perfiladmins', 'users'));
      
    }
    public function pacientes()
    {
        $users = DB::select('select * from users where role = "paciente"');

        $perfiladmins = Perfiladmin::All();
        return view('perfiladmin.pacientes', compact('perfiladmins', 'users'));
      
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('perfiladmin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Perfiladmin  $perfiladmin
     * @return \Illuminate\Http\Response
     */
    public function show(Perfiladmin $perfiladmin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Perfiladmin  $perfiladmin
     * @return \Illuminate\Http\Response
     */
    public function edit(Perfiladmin $perfiladmin)
    {
        return view('perfiladmin.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Perfiladmin  $perfiladmin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Perfiladmin $perfiladmin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Perfiladmin  $perfiladmin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Perfiladmin $perfiladmin)
    {
        //
    }
}
