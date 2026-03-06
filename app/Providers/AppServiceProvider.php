<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;

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
        // Configure rate limiting
        $this->configureRateLimiting();
    }

    /**
     * Configure the rate limiting for the application.
     */
    protected function configureRateLimiting(): void
    {
        // Rate limit contact form submissions - 5 per minute per IP
        RateLimiter::for('contact-form', function (Request $request) {
            return Limit::perMinute(5)->by($request->ip());
        });

        // Rate limit volunteer applications - 3 per hour per IP
        RateLimiter::for('volunteer-form', function (Request $request) {
            return Limit::perHour(3)->by($request->ip());
        });

        // Rate limit donation attempts - 10 per minute per IP
        RateLimiter::for('donation', function (Request $request) {
            return Limit::perMinute(10)->by($request->ip());
        });

        // Rate limit login attempts - 5 per minute
        RateLimiter::for('login', function (Request $request) {
            return Limit::perMinute(5)->by($request->ip());
        });

        // Rate limit API requests - 60 per minute
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip());
        });
    }
}
