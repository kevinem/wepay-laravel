<?php


namespace KevinEm\WePay\Laravel;


use KevinEm\WePay\Laravel\Traits\Authorizable;
use KevinEm\WePay\Laravel\Traits\Creatable;
use KevinEm\WePay\Laravel\Traits\LookupAble;

class WePayAccountKYC extends Base
{
    use LookupAble, Creatable, Authorizable;

    /**
     * @return string
     */
    protected function getBasePath()
    {
        return 'account/kyc';
    }
}