<?php


namespace KevinEm\WePay\Laravel\Traits;


trait Findable
{

    /**
     * @param array $data
     * @return mixed
     */
    public function find(array $data)
    {
        return $this->request('/find', $data);
    }
}