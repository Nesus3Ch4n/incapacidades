<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaboratorioController;
use App\Http\Controllers\Controller;

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

Route::get('/index', [Controller::class, 'index'])->name('index');

Route::get('/laboratorios', [LaboratorioController::class, 'index'])->name('laboratorio.index');

Route::get('/laboratorios/crear', [LaboratorioController::class, 'create'])->name('laboratorio.create');

Route::post('/laboratorios/store', [LaboratorioController::class, 'store'])->name('laboratorio.store');

Route::get('/laboratorios/{id}/edit', [LaboratorioController::class, 'edit'])->name('laboratorio.edit');

Route::put('/laboratorios/{id}', [LaboratorioController::class, 'update'])->name('laboratorio.update');

Route::delete('/laboratorios/{id}', [LaboratorioController::class, 'destroy'])->name('laboratorio.destroy');



