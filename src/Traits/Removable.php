<?php


namespace KevinEm\WePay\Laravel\Traits;


trait Removable
{

    /**
     * @param array $data
     * @return mixed
     */
    public function remove(array $data)
    {
        return $this->request('/remove', $data);
    }
}