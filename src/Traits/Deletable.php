<?php


namespace KevinEm\WePay\Laravel\Traits;


trait Deletable
{

    /**
     * @param array $data
     * @return \StdClass
     */
    public function delete(array $data)
    {
        return $this->request('/delete', $data);
    }
}