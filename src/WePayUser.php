<?php

namespace KevinEm\WePay\Laravel;


use KevinEm\WePay\Laravel\Base;
use KevinEm\WePay\Laravel\Traits\LookupAble;
use KevinEm\WePay\Laravel\Traits\Modifiable;

class WePayUser extends Base
{
    use LookupAble, Modifiable;

    /**
     * @param array $data
     * @return \StdClass
     */
    public function register(array $data)
    {
        return $this->request('/register', $data);
    }

    /**
     * @param array $data
     * @return \StdClass
     */
    public function sendConfirmation(array $data)
    {
        return $this->request('/send_confirmation', $data);
    }

    /**
     * @param array $data
     * @return \StdClass
     */
    public function markEmailVerified(array $data)
    {
        return $this->request('/mark_email_verified', $data);
    }

    /**
     * @param array $data
     * @return \StdClass
     */
    public function requestSSOToken(array $data)
    {
        return $this->request('/request_sso_token', $data);
    }

    /**
     * @return \StdClass
     */
    public function logout()
    {
        return $this->request('/logout');
    }

    /**
     * @param array $data
     * @return \StdClass
     */
    public function changeEmail(array $data)
    {
        return $this->request('/change_email', $data);
    }

    /**
     * @return string
     */
    protected function getBasePath()
    {
        return '/user';
    }
}