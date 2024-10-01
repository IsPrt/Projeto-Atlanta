<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;

/*
|----------------------------------------------------------------------
| Web Routes
|----------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/index', function () {
    return view('index');
});

Route::prefix('cardapio')->name('menu.')->group(function () {
    Route::get('/', [MenuController::class, 'index'])->name('index');
    Route::get('/adicionar', [MenuController::class, 'create'])->name('create');
    Route::post('/adicionar', [MenuController::class, 'store'])->name('store');
    Route::get('/editar/{id}', [MenuController::class, 'edit'])->name('edit');
    Route::put('/editar/{id}', [MenuController::class, 'update'])->name('update');
    Route::get('/excluir/{id}', [MenuController::class, 'destroy'])->name('destroy');
});


Route::get('/teste', function() {
    return view('teste');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
