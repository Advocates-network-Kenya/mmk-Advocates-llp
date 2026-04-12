<?php

declare(strict_types=1);

use App\Http\Controllers\LawController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Route;

Route::prefix('Areas-of-law')->group(function () {
    Route::get('index', [LawController::class, 'index'])->name('law.index');
    Route::get('create', [LawController::class, 'create'])->name('law.create');
    Route::post('store', [LawController::class, 'store'])->name('law.store');
    Route::get('{id}/edit', [LawController::class, 'edit'])->name('law.edit');
    Route::put('{id}/update', [LawController::class, 'update'])->name('law.update');
    Route::delete('{id}/delete', [LawController::class, 'delete'])->name('law.destroy');
});
//team routes
Route::prefix('teams')->group(function () {
    Route::get('index', [TeamController::class, 'index'])->name('team.index');
    Route::get('create', [TeamController::class, 'create'])->name('team.create');
    Route::post('store', [TeamController::class, 'store'])->name('team.store');
    Route::get('{id}/edit', [TeamController::class, 'edit'])->name('team.edit');
    Route::put('{id}/update', [TeamController::class, 'update'])->name('team.update');
    Route::delete('{id}/delete', [TeamController::class, 'delete'])->name('team.destroy');
}); 
