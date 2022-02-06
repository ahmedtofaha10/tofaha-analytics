<?php

namespace Tofaha\TofahaAnalytics;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Tofaha\TofahaAnalytics\Skeleton\SkeletonClass
 */
class TofahaAnalyticsFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'tofaha-analytics';
    }
}
