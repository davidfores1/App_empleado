<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;
use App\Models\Empleado;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $empleado = Empleado::search();
    return view('empleados.index',compact('empleado'));
});

Route::resource('empleados', EmpleadoController::class);
Route::get('crear', [EmpleadoController::class, 'create']);
Route::get('inicio', [EmpleadoController::class, 'index']);
Route::get('/show/{empleado}', [EmpleadoController::class, 'show'])->name('show');