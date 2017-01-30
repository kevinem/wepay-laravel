<?php


namespace KevinEm\WePay\Laravel\Traits;


trait Refundable
{

    /**
     * @param array $data
     * @return mixed
     */
    public function refund(array $data)
    {
        return $this->request('/refund', $data);
    }
}