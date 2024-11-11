<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\TesteCrudController;
use App\Http\Controllers\TestesController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserPhoneController;
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


Route::get('/teste', function () {
    return view('testpage.index');
});

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
    Route::get('/infos/{id}', [UserController::class, 'show'])->name('show');
    Route::get('/lista', [UserController::class, 'list'])->name('list');

});

Route::prefix('usuarios-telefones')->name('userphone.')->group(function () {
    Route::post('/adicionar/{id}', [UserPhoneController::class, 'store'])->name('store');
    Route::get('/editar/{id}', [UserPhoneController::class, 'edit'])->name('edit');
    Route::put('/editar/{id}', [UserPhoneController::class, 'update'])->name('update');
    Route::get('/excluir/{id}', [UserPhoneController::class, 'destroy'])->name('destroy');
    Route::get('/infos/{id}', [UserPhoneController::class, 'show'])->name('show');

});

use App\Http\Controllers\FileUploadController;

Route::get('/upload', [FileUploadController::class, 'showUploadForm'])->name('upload.form');
Route::post('/upload', [FileUploadController::class, 'uploadFile'])->name('upload.file');


require __DIR__.'/auth.php';


