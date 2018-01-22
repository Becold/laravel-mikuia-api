<?php

namespace Becold\MikuiaApi\Providers;

use Illuminate\Support\ServiceProvider;

class MikuiaApiServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('Becold\MikuiaApi\Services\MikuiaApiService', 'Becold\MikuiaApi\Services\MikuiaApiService');
    }

    public function boot()
    {
        // ...
    }
}