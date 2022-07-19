<?php

namespace Fbollon\LaraCustomErrorPages\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Fbollon\LaraCustomErrorPages\LaraCustomErrorPages
 */
class LaraCustomErrorPages extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'lara-custom-error-pages';
    }
}
