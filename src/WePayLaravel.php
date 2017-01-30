<?php

namespace KevinEm\WePay\Laravel;

use KevinEm\WePay\Laravel\Exceptions\WePayInvalidEnvironmentException;

class WePayLaravel
{

    /**
     * @var \WePay
     */
    protected $wePay;

    /**
     * @var array
     */
    protected $config;

    /**
     * WePay constructor.
     * @param array $config
     * @throws WePayInvalidEnvironmentException
     */
    public function __construct(array $config)
    {
        $this->config = $config;

        switch ($config['env']) {
            case 'production':
                \WePay::useProduction($config['client_id'], $config['client_secret'], $config['version']);
                break;
            case 'staging':
                \WePay::useStaging($config['client_id'], $config['client_secret'], $config['version']);
                break;
            default:
                throw new WePayInvalidEnvironmentException;
        }

        $this->wePay = new \WePay($config['access_token']);
    }

    /**
     * @param null $accessToken
     * @return \WePay
     */
    public function getWePay($accessToken = null)
    {
        return $accessToken ? (new \WePay($accessToken)) : $this->wePay;
    }

    /**
     * @param array $scope
     * @param $redirect_uri
     * @param array $options
     * @return string
     */
    public function getAuthorizationUri(array $scope, $redirect_uri, array $options = [])
    {
        return \WePay::getAuthorizationUri($scope, $redirect_uri, $options);
    }

    /**
     * @param $code
     * @param $callback
     * @return false|\StdClass
     */
    public function getToken($code, $callback)
    {
        return \WePay::getToken($code, $callback);
    }

    /**
     * @param null $accessToken
     * @return WePayAccount
     */
    public function account($accessToken = null)
    {
        return new WePayAccount($this->getWePay($accessToken), $this->config);
    }

    /**
     * @param null $accessToken
     * @return WePayAccountKYC
     */
    public function accountKYC($accessToken = null)
    {
        return new WePayAccountKYC($this->getWePay($accessToken), $this->config);
    }

    /**
     * @param null $accessToken
     * @return WePayAccountMembership
     */
    public function accountMembership($accessToken = null)
    {
        return new WePayAccountMembership($this->getWePay($accessToken), $this->config);
    }

    /**
     * @param null $accessToken
     * @return WePayApp
     */
    public function app($accessToken = null)
    {
        return new WePayApp($this->getWePay($accessToken), $this->config);
    }

    /**
     * @param null $accessToken
     * @return WePayBatch
     */
    public function batch($accessToken = null)
    {
        return new WePayBatch($this->getWePay($accessToken), $this->config);
    }

    /**
     * @param null $accessToken
     * @return WePayCheckout
     */
    public function checkout($accessToken = null)
    {
        return new WePayCheckout($this->getWePay($accessToken), $this->config);
    }

    /**
     * @param null $accessToken
     * @return WePayCreditCard
     */
    public function creditCard($accessToken = null)
    {
        return new WePayCreditCard($this->getWePay($accessToken), $this->config);
    }

    /**
     * @param null $accessToken
     * @return WePayOAuth2
     */
    public function oAuth2($accessToken = null)
    {
        return new WePayOAuth2($this->getWePay($accessToken), $this->config);
    }

    /**
     * @param null $accessToken
     * @return WePayOrder
     */
    public function order($accessToken = null)
    {
        return new WePayOrder($this->getWePay($accessToken), $this->config);
    }

    /**
     * @param null $accessToken
     * @return WePayPaymentBank
     */
    public function paymentBank($accessToken = null)
    {
        return new WePayPaymentBank($this->getWePay($accessToken), $this->config);
    }

    /**
     * @param null $accessToken
     * @return WePayPreApproval
     */
    public function preApproval($accessToken = null)
    {
        return new WePayPreApproval($this->getWePay($accessToken), $this->config);
    }

    /**
     * @param null $accessToken
     * @return WePayReport
     */
    public function report($accessToken = null)
    {
        return new WePayReport($this->getWePay($accessToken), $this->config);
    }

    /**
     * @param null $accessToken
     * @return WePayRisk
     */
    public function risk($accessToken = null)
    {
        return new WePayRisk($this->getWePay($accessToken), $this->config);
    }

    /**
     * @param null $accessToken
     * @return WePaySettlementBank
     */
    public function settlementBank($accessToken = null)
    {
        return new WePaySettlementBank($this->getWePay($accessToken), $this->config);
    }

    /**
     * @param null $accessToken
     * @return WePaySubscription
     */
    public function subscription($accessToken = null)
    {
        return new WePaySubscription($this->getWePay($accessToken), $this->config);
    }

    /**
     * @param null $accessToken
     * @return WePaySubscriptionCharge
     */
    public function subscriptionCharge($accessToken = null)
    {
        return new WePaySubscriptionCharge($this->getWePay($accessToken), $this->config);
    }

    /**
     * @param null $accessToken
     * @return WePaySubscriptionPlan
     */
    public function subscriptionPlan($accessToken = null)
    {
        return new WePaySubscriptionPlan($this->getWePay($accessToken), $this->config);
    }

    /**
     * @param null $accessToken
     * @return WePayUser
     */
    public function user($accessToken = null)
    {
        return new WePayUser($this->getWePay($accessToken), $this->config);
    }

    /**
     * @param null $accessToken
     * @return WePayUserMfa
     */
    public function userMfa($accessToken = null)
    {
        return new WePayUserMfa($this->getWePay($accessToken), $this->config);
    }

    /**
     * @param null $accessToken
     * @return WePayWithdrawal
     */
    public function withdrawal($accessToken = null)
    {
        return new WePayWithdrawal($this->getWePay($accessToken), $this->config);
    }
}