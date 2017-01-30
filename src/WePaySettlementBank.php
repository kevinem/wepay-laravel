<?php


namespace KevinEm\WePay\Laravel;


use KevinEm\WePay\Laravel\Traits\Authorizable;
use KevinEm\WePay\Laravel\Traits\Creatable;

class WePaySettlementBank extends Base
{
    use Creatable, Authorizable;

    /**
     * @return string
     */
    protected function getBasePath()
    {
        return '/settlement_bank';
    }
}