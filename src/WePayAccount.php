<?php

namespace KevinEm\WePay\Laravel;


use KevinEm\WePay\Laravel\Base;
use KevinEm\WePay\Laravel\Traits\Creatable;
use KevinEm\WePay\Laravel\Traits\Deletable;
use KevinEm\WePay\Laravel\Traits\Findable;
use KevinEm\WePay\Laravel\Traits\LookupAble;
use KevinEm\WePay\Laravel\Traits\Modifiable;

class WePayAccount extends Base
{
    use LookupAble, Findable, Creatable, Modifiable, Deletable;

    /**
     * @param array $data
     * @return \StdClass
     */
    public function getUpdateUri(array $data)
    {
        return $this->request('/get_update_uri', $data);
    }

    /**
     * @param array $data
     * @return \StdClass
     */
    public function getReserveDetails(array $data)
    {
        return $this->request('/get_reserve_details', $data);
    }

    /**
     * @param array $data
     * @return \StdClass
     */
    public function settlementSetup(array $data)
    {
        return $this->request('/settlement_setup', $data);
    }

    /**
     * @return string
     */
    protected function getBasePath()
    {
        return '/account';
    }
}