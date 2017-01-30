<?php


namespace KevinEm\WePay\Laravel;


use KevinEm\WePay\Laravel\Traits\Creatable;
use KevinEm\WePay\Laravel\Traits\Deletable;
use KevinEm\WePay\Laravel\Traits\Findable;
use KevinEm\WePay\Laravel\Traits\LookupAble;

class WePayRisk extends Base
{
    use LookupAble, Findable, Creatable, Deletable;

    /**
     * @return string
     */
    protected function getBasePath()
    {
        return '/rbit';
    }
}