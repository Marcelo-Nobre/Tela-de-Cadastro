<?php

use App\Http\Controllers\CadastroController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

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
    return view('cadastro');
})->name('cadastro');

// Route::get('/', [CadastroController::class, 'update'])->name('cadastro.update');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/error', function () {
    return view('error');
})->name('error');


Route::get('/', [CadastroController::class, 'index'])->name('cadastro');
Route::post('/', [CadastroController::class, 'create']);


Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/dashboard/edit/{cadastro}', [DashboardController::class, 'edit'])->name('dashboard.edit');
Route::put('/dashboard/edit/{cadastro}', [DashboardController::class, 'update'])->name('dashboard.edit');
Route::delete('/dashboard/{cadastro}', [DashboardController::class, 'destroy'])->name('dashboard.destroy');






// Route::resource('/dashboard', CadastroController::class);
