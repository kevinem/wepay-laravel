<?php


namespace KevinEm\WePay\Laravel;


use KevinEm\WePay\Laravel\Traits\Creatable;
use KevinEm\WePay\Laravel\Traits\Findable;

class WePayOrder extends Base
{
    use Findable, Creatable;

    /**
     * @return string
     */
    protected function getBasePath()
    {
        return '/order';
    }
}