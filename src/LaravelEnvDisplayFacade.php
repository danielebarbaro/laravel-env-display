<?php

namespace Danielebarbaro\LaravelEnvDisplay;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Danielebarbaro\LaravelEnvDisplay\Skeleton\SkeletonClass
 */
class LaravelEnvDisplayFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-env-display';
    }
}
