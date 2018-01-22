<?php

namespace Becold\MikuiaApi\Facades;

use Illuminate\Support\Facades\Facade;

class MikuiaApiServiceFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'Becold\MikuiaApi\Services\MikuiaApiService';
    }
}