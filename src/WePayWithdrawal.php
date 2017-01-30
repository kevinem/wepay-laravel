<?php

namespace KevinEm\WePay\Laravel;


use KevinEm\WePay\Laravel\Base;
use KevinEm\WePay\Laravel\Traits\Findable;
use KevinEm\WePay\Laravel\Traits\LookupAble;
use KevinEm\WePay\Laravel\Traits\Modifiable;

class WePayWithdrawal extends Base
{
    use LookupAble, Findable, Modifiable;

    /**
     * @return string
     */
    protected function getBasePath()
    {
        return '/withdrawal';
    }
}