<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FurnitureController;
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
    return view('welcome');
});

Route::get('/mostrar', [FurnitureController::class, 'index'])->name('Index');
Route::post('/crearMueble', [FurnitureController::class, 'create'])->name('create');
Route::get('/verMueble/{id}', [FurnitureController::class, 'show'])->name('furniture.show');
Route::put('/actualizarMueble/{id}', [FurnitureController::class, 'update'])->name('furniture.update');
Route::delete('/eliminarMueble/{id}', [FurnitureController::class, 'destroy'])->name('furniture.destroy');