<?php namespace Bantenprov\RetribusiOnline\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * The RetribusiOnline facade.
 *
 * @package Bantenprov\RetribusiOnline
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class RetribusiOnline extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'retribusi-online';
    }
}
