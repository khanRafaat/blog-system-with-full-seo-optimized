<?php

namespace App\Providers;

// use paginator;

use App\Models\HomeContent;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $contents = HomeContent::get();
        View::share('contents', $contents);
        Schema::defaultStringLength(191);   
        Paginator::useBootstrap();
        date_default_timezone_set('EST');
    }
}