<?php


namespace KevinEm\WePay\Laravel\Traits;


trait Authorizable
{

    /**
     * @param array $data
     * @return \StdClass
     */
    public function authorize(array $data)
    {
        return $this->request('/authorize', $data);
    }
}