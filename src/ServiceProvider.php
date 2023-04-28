<?php

namespace InShore\Bookwhen;

use Illuminate\Foundation\Console\AboutCommand;
use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function boot(): void
    {
        // About
        AboutCommand::add('Bookwhen', fn () => ['Version' => '1.0.0']);

        // Config
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/bookwhen.php' => config_path('bookwhen.php')
            ]);
        }
        
        // Routes
        $this->registerRoutes();
        
        // Views
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'bookwhen');
    }
    
    /**
     * Get the services provided by the provider.
     *
     * @return array<int, string>
     */
    public function provides(): array
    {
        return [
            Bookwhen::class,
            'bookwhen',
        ];
    }
    
    /**
     * 
     */
    protected function registerRoutes()
    {
        Route::group($this->routeConfiguration(), function () {
            $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        });
    }
    
    /**
     * 
     */
    protected function routeConfiguration(): array
    {
        return [
            'prefix' => config('bookwhen.prefix'),
            'middleware' => config('bookwhen.middleware'),
        ];
    }
    
}
