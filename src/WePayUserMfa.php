<?php

namespace KevinEm\WePay\Laravel;


use KevinEm\WePay\Laravel\Base;
use KevinEm\WePay\Laravel\Traits\Creatable;
use KevinEm\WePay\Laravel\Traits\Findable;
use KevinEm\WePay\Laravel\Traits\Modifiable;

class WePayUserMfa extends Base
{
    use Creatable, Findable, Modifiable;

    /**
     * @param array $data
     * @return \StdClass
     */
    public function validateCookie(array $data)
    {
        return $this->request('/validate_cookie', $data);
    }

    /**
     * @param array $data
     * @return \StdClass
     */
    public function sendChallenge(array $data)
    {
        return $this->request('/send_challenge', $data);
    }

    /**
     * @param array $data
     * @return \StdClass
     */
    public function sendDefaultChallenge(array $data)
    {
        return $this->request('/send_default_challenge', $data);
    }

    /**
     * @param array $data
     * @return \StdClass
     */
    public function confirm(array $data)
    {
        return $this->request('/confirm', $data);
    }

    /**
     * @param array $data
     * @return \StdClass
     */
    public function reset(array $data)
    {
        return $this->request('/reset', $data);
    }

    /**
     * @return string
     */
    protected function getBasePath()
    {
        return '/user/mfa';
    }
}