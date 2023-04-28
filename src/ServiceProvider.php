<?php

namespace InShore\Bookwhen;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/bookwhen.php' => config_path('bookwhen.php')
            ]);
        }
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
}
