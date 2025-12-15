<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FineArtController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\MoreController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\WorksController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::group(['prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localize']], function () {
    Route::name('front.')->group(function () {
        // Static
        Route::get(LaravelLocalization::transRoute('routes.index'), [IndexController::class, 'index'])->name('index');
        Route::get(LaravelLocalization::transRoute('routes.about'), [AboutController::class, 'index'])->name('about.index');
        Route::get(LaravelLocalization::transRoute('routes.privacy'), [AboutController::class, 'privacy'])->name('about.privacy');
        Route::get(LaravelLocalization::transRoute('routes.contact'), [ContactController::class, 'index'])->name('contact.index');
        Route::prefix('contact')->group(function () {
            Route::post(LaravelLocalization::transRoute('routes.send'), [ContactController::class, 'contact'])->name('contact.send');
            Route::get(LaravelLocalization::transRoute('routes.works'), [WorksController::class, 'index'])->name('works.index');
        });
        // Fine arts
        Route::get(LaravelLocalization::transRoute('routes.fine'), [FineArtController::class, 'index'])->name('fine.index');
        Route::get(LaravelLocalization::transRoute('routes.fine.show'), [FineArtController::class, 'show'])->name('fine.show');
        // More
        Route::get(LaravelLocalization::transRoute('routes.more'), [MoreController::class, 'index'])->name('more.index');
        Route::get(LaravelLocalization::transRoute('routes.more.show'), [MoreController::class, 'show'])->name('more.show');
        Route::get(LaravelLocalization::transRoute('routes.more.press'), [MoreController::class, 'press'])->name('more.press');
        // Store
        Route::prefix('store')->group(function () {
            Route::get(LaravelLocalization::transRoute('routes.store'), [StoreController::class, 'index'])->name('store.index');
            Route::get(LaravelLocalization::transRoute('routes.store.portfolio'), [StoreController::class, 'portfolio'])->name('store.portfolio');
            Route::get(LaravelLocalization::transRoute('routes.store.scarves'), [StoreController::class, 'scarves'])->name('store.scarves');
        });
    });
});
