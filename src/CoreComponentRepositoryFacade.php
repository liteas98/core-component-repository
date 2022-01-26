<?php

namespace Liteas98\CoreComponentRepository;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Liteas98\CoreComponentRepository\Skeleton\SkeletonClass
 */
class CoreComponentRepositoryFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'core-component-repository';
    }
}
