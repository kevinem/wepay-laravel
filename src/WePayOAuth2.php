<?php


namespace KevinEm\WePay\Laravel;


use KevinEm\WePay\Laravel\Traits\Authorizable;

class WePayOAuth2 extends Base
{
    use Authorizable;

    /**
     * @param array $data
     * @return \StdClass
     */
    public function token(array $data)
    {
        return $this->request('/token', $data);
    }

    /**
     * @return string
     */
    protected function getBasePath()
    {
        return '/oauth2';
    }
}