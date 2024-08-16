<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\NosotrosController;
use App\Http\Controllers\ServiciosController;
use App\Http\Controllers\NoticiasController;
use App\Http\Controllers\ContactosController;
use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Route;


Route::get('/', [InicioController::class, 'index'])->name('inicio');
Route::get('/nosotros', [NosotrosController::class, 'nosotros'])->name('nosotros');
Route::get('/servicios', [ServiciosController::class, 'servicios'])->name('servicios');
Route::get('/noticias', [NoticiasController::class, 'noticias'])->name('noticias');
Route::get('/contactos', [ContactosController::class, 'contactos'])->name('contactos');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/comentarios', [CommentController::class, 'comment'])->name('comment');
Route::get('/comentarios/crear', [CommentController::class, 'create'])->name('create');
Route::post('/comentarios/crear', [CommentController::class, 'store'])->name('store');
Route::get('/comentarios/editar/{comment}', [CommentController::class, 'edit'])->name('edit');
Route::put('/comentarios/actualizar/{comment}', [CommentController::class, 'update'])->name('update');
Route::get('/comentarios/{comment}', [CommentController::class, 'show'])->name('show');
Route::delete('/comentarios/{comment}', [CommentController::class, 'delete'])->name('delete');





 
