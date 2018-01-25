<?php namespace Bantenprov\ProfilBpjs\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * The ProfilBpjs facade.
 *
 * @package Bantenprov\ProfilBpjs
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class ProfilBpjs extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'profil-bpjs';
    }
}
