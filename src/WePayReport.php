<?php


namespace KevinEm\WePay\Laravel;


use KevinEm\WePay\Laravel\Traits\Creatable;
use KevinEm\WePay\Laravel\Traits\LookupAble;

class WePayReport extends Base
{
    use LookupAble, Creatable;

    /**
     * @return string
     */
    protected function getBasePath()
    {
        return '/report';
    }
}