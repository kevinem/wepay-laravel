<?php

namespace KevinEm\WePay\Laravel;


use KevinEm\WePay\Laravel\Base;
use KevinEm\WePay\Laravel\Traits\LookupAble;
use KevinEm\WePay\Laravel\Traits\Modifiable;

class WePayApp extends Base
{
    use LookupAble, Modifiable;

    /**
     * @return string
     */
    protected function getBasePath()
    {
        return '/app';
    }
}