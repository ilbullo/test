<?php

namespace Ilbullo\Test\Providers;

use Illuminate\Support\ServiceProvider;

class TestServiceProvider extends ServiceProvider {

    public function boot() {

        // if need routes
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        //if need views
        $this->loadViewsFrom(__DIR__.'/../views','test');

    }

    public function register() {}
}
