<?php

namespace App\Providers;

use App\Models\Report;
use App\Models\Section_Report;
use Illuminate\Support\Facades\Schema;
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
        Schema::defaultStringLength(191); // الحل السحري

        // pass data to layout page in laravel
        view()->composer(
            'dasboard.layouts.aside',
            function ($view) {
                $view->with('section_reports', Section_Report::all());
                $view->with('reports', Report::all());
            }
        );
    }
}
