<?php

namespace Dickens\Message;

use Illuminate\Support\ServiceProvider;

class MessagingServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/views/','dickens');
        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');
        $this->publishes([
            __DIR__ . '/views' => resource_path('/views/vendor/dickens'),
            __DIR__.'/config/message.php' => config_path('message.php'),
        ]);

        $this->mergeConfigFrom(
            __DIR__.'/config/message.php', 'dickens'
        );

        //publish custom migrations file
        $this->publishes([
            __DIR__ . '/database/migrations' => database_path('migrations')
        ],'migrations');
    }
    public function register()
    {

    }
}
