<?php

namespace Hocza\Sendy\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class Sendy
 *
 * @package Hocza\Sendy\Facades
 */
class Sendy extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'Hocza\Sendy\Sendy';
    }
}
