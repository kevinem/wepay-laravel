<?php

namespace KevinEm\WePay\Laravel;


use KevinEm\WePay\Laravel\Base;
use KevinEm\WePay\Laravel\Traits\Creatable;
use KevinEm\WePay\Laravel\Traits\Modifiable;
use KevinEm\WePay\Laravel\Traits\Removable;

class WePayAccountMembership extends Base
{
    use Creatable, Modifiable, Removable;

    /**
     * @return string
     */
    protected function getBasePath()
    {
        return '/account/membership';
    }
}