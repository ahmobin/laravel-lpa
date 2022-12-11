<?php

namespace Ahmobin\LaravelLpa\Facades;

use Illuminate\Support\Facades\Facade;

class Lpa extends Facade
{

    /**
     * Get the registered name of the component.
     *
     * @return string
     *
     * @throws \RuntimeException
     */
    protected static function getFacadeAccessor(): string
    {
        return "Lpa";
    }
}
