<?php

namespace KevinEm\WePay\Laravel\Implementations;


use KevinEm\WePay\Laravel\Base;
use KevinEm\WePay\Laravel\Traits\Creatable;

class WePayBatch extends Base
{
    use Creatable;

    /**
     * @return string
     */
    protected function getBasePath()
    {
        return '/batch';
    }
}