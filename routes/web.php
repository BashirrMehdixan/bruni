<?php

use App\Http\Controllers\FineArtController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\MoreController;
use App\Http\Controllers\WorksController;
use Illuminate\Support\Facades\Route;

Route::prefix('/')->group(function () {
    Route::get('/', [IndexController::class, 'index'])->name('index');
    Route::get('/works', [WorksController::class, 'index'])->name('works.index');
    Route::get('/fine-arts', [FineArtController::class, 'index'])->name('fine.index');
    Route::get('/fine-arts/{slug}', [FineArtController::class, 'show'])->name('fine.show');
    Route::get('/more', [MoreController::class, 'index'])->name('more.index');
    Route::get('/more/{slug}', [MoreController::class, 'show'])->name('more.show');
});
