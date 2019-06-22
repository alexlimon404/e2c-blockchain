<?php

namespace App\Etherscan;

use GuzzleHttp\Client;

class Etherscan
{

    protected $config;

    public function __construct(array $config)
    {
        $this->config = $config;
    }

    public function getConfig(string $key)
    {
        return $this->config['timeout']['token'];
    }

    protected function client()
    {
        return new Client([
            'timeout' => $this->getConfig('timeout'),
            'headers' => $this->getConfig('token')
        ]);
    }

    public function getPrice()
    {
        $response = $this->client()->get('https://api.etherscan.io/api?module=stats&action=ethprice')->getBody();
        $obj = json_decode($response);
        return $obj->result->ethusd;
    }

    public function getWallet()
    {
        $response = $this->client()->get('http://104.248.88.197/wallet')->getBody();
        $obj = json_decode($response);
        return $obj;
    }
}