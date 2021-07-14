<?php

namespace Sinnrrr\Diia;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Sinnrrr\Diia\Diia
 */
class DiiaFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-diia';
    }
}
