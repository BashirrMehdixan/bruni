<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FineArtController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\MoreController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\WorksController;
use Illuminate\Support\Facades\Route;

Route::prefix('/')->group(function () {
    Route::get('/', [IndexController::class, 'index'])->name('index');
    Route::get('/about', [AboutController::class, 'index'])->name('about');
    Route::get('/contact', [ContactController::class, 'index'])->name('contact');
    Route::get('/works', [WorksController::class, 'index'])->name('works.index');
    Route::get('/fine-arts', [FineArtController::class, 'index'])->name('fine.index');
    Route::get('/fine-arts/{slug}', [FineArtController::class, 'show'])->name('fine.show');
    Route::get('/more', [MoreController::class, 'index'])->name('more.index');
    Route::get('/more/{slug}', [MoreController::class, 'show'])->name('more.show');
    Route::get('/{slug}', [MoreController::class, 'press'])->name('more.press');
    Route::get('/store', [StoreController::class, 'index'])->name('store.index');
    Route::get('/portfolio', [StoreController::class, 'portfolio'])->name('store.portfolio');
    Route::get('/scarves', [StoreController::class, 'scarves'])->name('store.scarves');
});
