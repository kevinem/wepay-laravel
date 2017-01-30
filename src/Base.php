<?php


namespace KevinEm\WePay\Laravel;


abstract class Base
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
     * Base constructor.
     * @param \WePay $wePay
     * @param array $config
     */
    public function __construct(\WePay $wePay, array $config)
    {
        $this->wePay = $wePay;
        $this->config = $config;
    }

    /**
     * @return string
     */
    abstract protected function getBasePath();

    /**
     * @return array
     */
    public function mergeData()
    {
        return [];
    }

    /**
     * @param $endpoint
     * @param array $data
     * @return \StdClass
     */
    protected function request($endpoint, array $data = [])
    {
        return $this->wePay->request($this->getBasePath() . $endpoint, $data);
    }
}