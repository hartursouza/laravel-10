<?php

use App\Http\Controllers\Admin\SupportController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

Route::get('/supports/create', [SupportController::class, 'create'])->name('supports.create');
Route::put('/supports/{id}', [SupportController::class, 'update'])->name('supports.update');
Route::get('/supports/{id}/edit', [SupportController::class, 'edit'])->name('supports.edit');
Route::get('/supports/{id}', [SupportController::class, 'show'])->name('supports.show');
Route::delete('/supports/{id}', [SupportController::class, 'destroy'])->name('supports.destroy');
Route::get('/supports', [SupportController::class, 'index'])->name('supports.index');
Route::post('/supports', [SupportController::class, 'store'])->name('supports.store');

Route::get('/contact', [SiteController::class, 'contact']);

Route::get('/', function () {
    return view('welcome');
});
