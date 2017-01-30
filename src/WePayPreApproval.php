<?php

namespace KevinEm\WePay\Laravel;


use KevinEm\WePay\Laravel\Base;
use KevinEm\WePay\Laravel\Traits\Cancellable;
use KevinEm\WePay\Laravel\Traits\Creatable;
use KevinEm\WePay\Laravel\Traits\Findable;
use KevinEm\WePay\Laravel\Traits\LookupAble;
use KevinEm\WePay\Laravel\Traits\Modifiable;

class WePayPreApproval extends Base
{
    use LookupAble, Findable, Creatable, Cancellable, Modifiable;

    /**
     * @return string
     */
    protected function getBasePath()
    {
        return '/preapproval';
    }
}