<?php

namespace Alive2212\LaravelUserTraffic\Facades;

use Illuminate\Support\Facades\Facade;

class LaravelUserTraffic extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravelusertraffic';
    }
}
