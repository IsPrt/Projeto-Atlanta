<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\TesteCrudController;
use App\Http\Controllers\TestesController;
use App\Http\Controllers\UserController;
use App\Models\TesteCrud;

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








Route::prefix('/')->name('profile.')->group(function () {
    Route::get('/', [TestesController::class,'index']) ->name('index');
});


Route::prefix('crud')->name('crud.')->group(function () {
    Route::get('/', [TesteCrudController::class, 'index'])->name('index');
    Route::get('/adicionar', [TesteCrudController::class, 'create'])->name('create');
    Route::post('/adicionar', [TesteCrudController::class, 'store'])->name('store');
    Route::get('/editar/{id}', [TesteCrudController::class, 'edit'])->name('edit');
    Route::put('/editar/{id}', [TesteCrudController::class, 'update'])->name('update');
    Route::get('/excluir/{id}', [TesteCrudController::class, 'destroy'])->name('destroy');
    
});

Route::prefix('cardapio')->name('menu.')->group(function () {
    Route::get('/', [MenuController::class, 'index'])->name('index');
    Route::get('/adicionar', [MenuController::class, 'create'])->name('create');
    Route::post('/adicionar', [MenuController::class, 'store'])->name('store');
    Route::get('/editar/{id}', [MenuController::class, 'edit'])->name('edit');
    Route::put('/editar/{id}', [MenuController::class, 'update'])->name('update');
    Route::get('/excluir/{id}', [MenuController::class, 'destroy'])->name('destroy');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::prefix('usuarios')->name('users.')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('index');
    Route::get('/adicionar', [UserController::class, 'create'])->name('create');
    Route::post('/adicionar', [UserController::class, 'store'])->name('store');
    Route::get('/editar/{id}', [UserController::class, 'edit'])->name('edit');
    Route::put('/editar/{id}', [UserController::class, 'update'])->name('update');
    Route::get('/excluir/{id}', [UserController::class, 'destroy'])->name('destroy');
});







require __DIR__.'/auth.php';


