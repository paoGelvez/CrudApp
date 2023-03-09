<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistroUsuariosController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});


//me da acceso a todas las rutas crea un enlace directo 
Route::resource('RegistroUsuarios',RegistroUsuariosController::class)->middleware('auth');
Auth::routes();

Route::get('/home', [RegistroUsuariosController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'],function(){
    Route::get('/', [RegistroUsuariosController::class, 'index'])->name('home');
});
