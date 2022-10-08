<?php

namespace Jorzel\Focus\Facades;

use Illuminate\Support\Facades\Facade;

class Focus extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'focus';
    }
}