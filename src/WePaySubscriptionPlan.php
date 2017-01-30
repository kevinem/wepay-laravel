<?php

namespace KevinEm\WePay\Laravel;


use KevinEm\WePay\Laravel\Base;
use KevinEm\WePay\Laravel\Traits\Creatable;
use KevinEm\WePay\Laravel\Traits\Deletable;
use KevinEm\WePay\Laravel\Traits\Findable;
use KevinEm\WePay\Laravel\Traits\LookupAble;
use KevinEm\WePay\Laravel\Traits\Modifiable;

class WePaySubscriptionPlan extends Base
{
    use LookupAble, Findable, Creatable, Deletable, Modifiable;

    /**
     * @return string
     */
    protected function getBasePath()
    {
        return '/subscription_plan';
    }
}