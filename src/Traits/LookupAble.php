<?php


namespace KevinEm\WePay\Laravel\Traits;


trait LookupAble
{

    /**
     * @param array $data
     * @return mixed
     */
    public function lookup(array $data)
    {
        return $this->request('', $data);
    }
}