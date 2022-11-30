<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RegistromedicoController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MedicoController;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\PerfiladminController;
use App\Http\Controllers\UserController;
use App\Models\Medico;
use App\Models\User;

/*Route::get('/', function () {
    return view('pagina_principal.index');
});*/

Route::get('/', function () {
    return view('home');
});

Route::get('/register', [RegisterController::class, 'create'])
    ->middleware('guest')
    ->name('register.index');

Route::post('/register', [RegisterController::class, 'store'])
    ->name('register.store');

Route::get('/registromedico', [RegistromedicoController::class, 'create'])
    ->middleware('guest')
    ->name('registromedico.index');

Route::post('/registromedico', [RegistromedicoController::class, 'store'])
    ->name('registromedico.store');


Route::get('/login', [SessionsController::class, 'create'])
    ->middleware('guest')
    ->name('login.index');

Route::post('/login', [SessionsController::class, 'store'])
    ->name('login.store');

Route::get('/logout', [SessionsController::class, 'destroy'])
    ->middleware('auth')
    ->name('login.destroy');


Route::get('/admin', [AdminController::class, 'index'])
    ->middleware('auth.admin')
    ->name('admin.index');

Route::get('/medico', [MedicoController::class, 'index'])
    ->middleware('auth.medico')
    ->name('medico.index');

Route::get('/paciente', [PacienteController::class, 'index'])
    ->middleware('auth.paciente')
    ->name('paciente.index');

Route::resource('perfiladmin', PerfiladminController::class);

Route::resource('paciente', PacienteController::class);

Route::resource('medico', MedicoController::class);