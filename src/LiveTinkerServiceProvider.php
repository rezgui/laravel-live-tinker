<?php

namespace Rezgui\LiveTinker;

use Illuminate\Support\ServiceProvider;


class LiveTinkerServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/resources/views', 'live-tinker');

        $this->publishes([
            __DIR__. '/resources/assets' => public_path('vendor/live-tinker'),
        ], 'live-tinker');
    }

    public function register()
    {
        if (env('APP_DEBUG')) {
            include __DIR__.'/routes.php';
            $this->app->make('Rezgui\LiveTinker\Controllers\LiveTinkerController');
        };
    }
}
