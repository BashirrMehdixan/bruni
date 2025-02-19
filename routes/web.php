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


//Route::name('front.')->group(function () {
//    Route::get('/', [IndexController::class, 'index'])->name('index');
//    Route::get('/about', [AboutController::class, 'index'])->name('about.index');
//    Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
//    Route::get('/works', [WorksController::class, 'index'])->name('works.index');
//    Route::get('/fine-arts', [FineArtController::class, 'index'])->name('fine.index');
//    Route::get('/fine-arts/{slug}', [FineArtController::class, 'show'])->name('fine.show');
//    Route::get('/more', [MoreController::class, 'index'])->name('more.index');
//    Route::get('/more/{slug}', [MoreController::class, 'show'])->name('more.show');
//    Route::get('/{slug}', [MoreController::class, 'press'])->name('more.press');
//    Route::get('/store', [StoreController::class, 'index'])->name('store.index');
//    Route::get('/portfolio', [StoreController::class, 'portfolio'])->name('store.portfolio');
//    Route::get('/scarves', [StoreController::class, 'scarves'])->name('store.scarves');
//});

Route::group(['prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localize']], function () {
    Route::name('front.')->group(function () {
        // Static
        Route::get(LaravelLocalization::transRoute('routes.index'), [IndexController::class, 'index'])->name('index');
        Route::get(LaravelLocalization::transRoute('routes.about'), [AboutController::class, 'index'])->name('about.index');
        Route::get(LaravelLocalization::transRoute('routes.privacy'), [AboutController::class, 'privacy'])->name('about.privacy');
        Route::get(LaravelLocalization::transRoute('routes.contact'), [ContactController::class, 'index'])->name('contact.index');
        Route::get(LaravelLocalization::transRoute('routes.works'), [WorksController::class, 'index'])->name('works.index');
        // Fine arts
        Route::get(LaravelLocalization::transRoute('routes.fine'), [FineArtController::class, 'index'])->name('fine.index');
        Route::get(LaravelLocalization::transRoute('routes.fine.show'), [FineArtController::class, 'show'])->name('fine.show');
        // More
        Route::get(LaravelLocalization::transRoute('routes.more'), [MoreController::class, 'index'])->name('more.index');
        Route::get(LaravelLocalization::transRoute('routes.more.show'), [MoreController::class, 'show'])->name('more.show');
        Route::get(LaravelLocalization::transRoute('routes.more.press'), [MoreController::class, 'press'])->name('more.press');
        // Store
        Route::get(LaravelLocalization::transRoute('routes.store'), [StoreController::class, 'index'])->name('store.index');
        Route::get(LaravelLocalization::transRoute('routes.store.portfolio'), [StoreController::class, 'portfolio'])->name('store.portfolio');
        Route::get(LaravelLocalization::transRoute('routes.store.scarves'), [StoreController::class, 'scarves'])->name('store.scarves');
    });
});
