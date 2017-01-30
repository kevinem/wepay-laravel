<?php

namespace KevinEm\WePay\Laravel\Facades;


use Illuminate\Support\Facades\Facade;

class WePayLaravel extends Facade
{

    /**
     * Get the registered name of the component.
     *
     * @return string
     *
     * @throws \RuntimeException
     */
    protected static function getFacadeAccessor()
    {
        return 'wepay';
    }
}