<?php

namespace KevinEm\WePay\Laravel;


use KevinEm\WePay\Laravel\Base;
use KevinEm\WePay\Laravel\Traits\Cancellable;
use KevinEm\WePay\Laravel\Traits\Creatable;
use KevinEm\WePay\Laravel\Traits\Findable;
use KevinEm\WePay\Laravel\Traits\LookupAble;
use KevinEm\WePay\Laravel\Traits\Modifiable;
use KevinEm\WePay\Laravel\Traits\Refundable;

class WePayCheckout extends Base
{
    use LookupAble, Findable, Creatable, Cancellable, Modifiable, Refundable;

    /**
     * @param array $data
     * @return \StdClass
     */
    public function capture(array $data)
    {
        return $this->request('/capture', $data);
    }

    /**
     * @param array $data
     * @return \StdClass
     */
    public function release(array $data)
    {
        return $this->request('/release', $data);
    }

    /**
     * @return string
     */
    protected function getBasePath()
    {
        return '/checkout';
    }
}