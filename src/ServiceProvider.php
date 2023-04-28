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
