<?php

namespace Becold\MikuiaApi\Facades;

use Illuminate\Support\Facades\Facade;
use Becold\MikuiaApi\Services\MikuiaApiService;

class MikuiaApiServiceFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return MikuiaApiService::class;
    }
}