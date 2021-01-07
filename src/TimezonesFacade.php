<?php

namespace Laracon21\Timezones;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Laracon21\Timezones\Skeleton\SkeletonClass
 */
class TimezonesFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'timezones';
    }
}
