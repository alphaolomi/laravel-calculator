<?php

namespace JasiriLabs\Calculator;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Jasirilabs\Calculator\Skeleton\SkeletonClass
 */
class CalculatorFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-calculator';
    }
}
