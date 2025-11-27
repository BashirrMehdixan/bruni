<?php

namespace App\Providers;

use App\Models\Menu;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $menus = Menu::where('status', 1)->select('name', 'slug', 'order')->orderBy('order', 'asc')->get();
        view()->share('menus', $menus);
    }
}
