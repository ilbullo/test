<?php

namespace Ilbullo\Test\Providers;

use Illuminate\Support\ServiceProvider;

class TestServiceProvider extends ServiceProvider {

    public function boot() {

        // if need routes
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        //if need views
        $this->loadViewsFrom(__DIR__.'/../views','test');
        //if need migrations
        $this->loadMigrationsFrom(__DIR__ .'/../database/migrations');
        $this->mergeConfigFrom(
            __DIR__ .'/../config/test.php',
            'test'
        );

        //pubblish data when do vendor:publish
        $this->publishes([
            __DIR__ .'/../config/test.php' => config_path('test.php'),
            __DIR__.'/../views' => resource_path('views/vendor/test')
        ]);

    }

    public function register() {}
}
