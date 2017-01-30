<?php

namespace KevinEm\WePay\Laravel;


use KevinEm\WePay\Laravel\Base;
use KevinEm\WePay\Laravel\Traits\Findable;
use KevinEm\WePay\Laravel\Traits\LookupAble;
use KevinEm\WePay\Laravel\Traits\Refundable;

class WePaySubscriptionCharge extends Base
{
    use LookupAble, Findable, Refundable;

    /**
     * @return string
     */
    protected function getBasePath()
    {
        return '/subscription_charge';
    }
}