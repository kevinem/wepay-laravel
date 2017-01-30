<?php

namespace KevinEm\WePay\Laravel;


use KevinEm\WePay\Laravel\Base;
use KevinEm\WePay\Laravel\Traits\Authorizable;
use KevinEm\WePay\Laravel\Traits\Creatable;
use KevinEm\WePay\Laravel\Traits\Deletable;
use KevinEm\WePay\Laravel\Traits\Findable;
use KevinEm\WePay\Laravel\Traits\LookupAble;
use KevinEm\WePay\Laravel\Traits\Modifiable;

class WePayCreditCard extends Base
{
    use LookupAble, Creatable, Findable, Modifiable, Deletable, Authorizable;

    /**
     * @param array $data
     * @return \StdClass
     */
    public function transfer(array $data)
    {
        return $this->request('/transfer', $data);
    }

    /**
     * @param array $data
     * @return \StdClass
     */
    public function enableRecurring(array $data)
    {
        return $this->request('/enable_recurring', $data);
    }

    /**
     * @return string
     */
    protected function getBasePath()
    {
        return '/credit_card';
    }
}