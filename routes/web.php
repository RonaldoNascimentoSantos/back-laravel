<?php

use App\Http\Controllers\HomeController;
use App\Models\Cidade;
use Illuminate\Support\Facades\Route;

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
Route::resource('/', HomeController::class);
Route::get('{pessoa}/edit', [HomeController::class, 'edit'])->name('edit');
Route::put('{pessoa}/update', [HomeController::class, 'update'])->name('update');
Route::get('{pessoa}/destroy', [HomeController::class, 'destroy'])->name('destroy');

Route::get('/cidades/{estado}', function ($estado) {
    $cidades = Cidade::where('estado_id', $estado)->get();
    return response()->json($cidades);
});
