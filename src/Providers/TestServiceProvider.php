<?php

namespace Ilbullo\Test\Providers;

use Illuminate\Support\ServiceProvider;

class TestServiceProvider extends ServiceProvider {

    public function boot() {
        dd("We are loading our package service provider");
    }

    public function register() {}
}
