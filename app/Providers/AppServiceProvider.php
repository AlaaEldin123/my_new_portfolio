<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\Validator;
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
        Validator::extend('no_js_code', function ($attribute, $value, $parameters, $validator) {
            // Custom validation to prevent JavaScript code
            if (preg_match('/<\s*script.*?>.*?<\s*\/\s*script\s*>/i', $value)) {
                return false;
            }
            return true;
        });
    }
}
