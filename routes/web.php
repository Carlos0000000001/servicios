<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServicioController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\EmpleadosController;
use App\Http\Controllers\DetalleServicioController;
/* de aqui agremos la web */

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
    return view('welcome');
});
Route::get('/servios/mostrar', function () {




    return view('welcome');
});



Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//Route::get('/servicios', [ServicioController::class ,'crear']);
Route::resource('/servicios',ServicioController::class );
Route::resource('/cliente',ClienteController::class );
/* de aqui agremos la ruta */
Route::resource('/empleados',EmpleadosController::class );
Route::resource('/detallesservicio',DetalleServicioController::class);





