<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SalientesController;
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


Route::get('/incapacidades', [SalientesController::class, 'index'])->name('incapacidades.index');

Route::get('/incapacidades/crear', [SalientesController::class, 'create'])->name('incapacidades.create');

Route::post('/incapacidades/store', [SalientesController::class, 'store'])->name('incapacidades.store');

Route::get('/incapacidades/{id}/edit', [SalientesController::class, 'edit'])->name('incapacidades.edit');

Route::get('/incapacidades/{id}/view', [SalientesController::class, 'view'])->name('incapacidades.view');

Route::put('/incapacidades/{id}', [SalientesController::class, 'update'])->name('incapacidades.update');

Route::delete('/incapacidades/{id}', [SalientesController::class, 'destroy'])->name('incapacidades.destroy');



