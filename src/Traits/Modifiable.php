<?php


namespace KevinEm\WePay\Laravel\Traits;


trait Modifiable
{

    /**
     * @param array $data
     * @return mixed
     */
    public function modify(array $data)
    {
        return $this->request('/modify', $data);
    }
}