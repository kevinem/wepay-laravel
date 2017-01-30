<?php


namespace KevinEm\WePay\Laravel;


use KevinEm\WePay\Laravel\Traits\LookupAble;

class WePayPaymentBank extends Base
{
    use LookupAble;

    /**
     * @param array $data
     * @return \StdClass
     */
    public function persist(array $data)
    {
        return $this->request('/persist', $data);
    }

    /**
     * @return string
     */
    protected function getBasePath()
    {
        return '/payment_bank';
    }
}