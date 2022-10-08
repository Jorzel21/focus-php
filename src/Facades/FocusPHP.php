<?php

namespace Jorzel\FocusPHP\Facades;

use Illuminate\Support\Facades\Facade;

class FocusPHP extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'focusphp';
    }
}