<?php


namespace KevinEm\WePay\Laravel\Traits;


trait Cancellable
{

    /**
     * @param array $data
     * @return mixed
     */
    public function cancel(array $data)
    {
        return $this->request('/cancel', $data);
    }
}