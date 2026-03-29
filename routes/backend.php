<?php

declare(strict_types=1);

use App\Http\Controllers\LawController;
use Illuminate\Support\Facades\Route;

Route::prefix('Areas-of-law')->group(function () {
    Route::get('index', [LawController::class, 'index'])->name('law.index');
    Route::get('create', [LawController::class, 'create'])->name('law.create');
    Route::post('store', [LawController::class, 'store'])->name('law.store');
    Route::get('{id}/edit', [LawController::class, 'edit'])->name('law.edit');
    Route::put('{id}/update', [LawController::class, 'update'])->name('law.update');
    Route::delete('{id}/delete', [LawController::class, 'delete'])->name('law.delete');
});