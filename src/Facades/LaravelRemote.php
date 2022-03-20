<?php

namespace Jfunulab\LaravelRemote\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Jfunulab\LaravelRemote\LaravelRemote
 */
class LaravelRemote extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-remote';
    }
}
