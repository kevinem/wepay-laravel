<?php


namespace KevinEm\WePay\Laravel\Traits;


trait Creatable
{

    /**
     * @param array $data
     * @return mixed
     */
    public function create(array $data)
    {
        return $this->request('/create', $data);
    }
}