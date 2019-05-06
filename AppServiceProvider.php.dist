<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Page;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $page = Page::all()->first();
        view()->share('page', $page);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
