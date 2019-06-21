<?php

namespace App\Etherscan;

class Etherscan
{

    protected $config;

    public function __construct(array $config)
    {
        $this->config = $config;
    }

    public function getConfig(string $key)
    {
        return $this->config['key'];
    }

    protected function client()
    {
        return new \GuzzleHttp\Client(['timeout' => $this->getConfig('timeout')]);
    }

    public static function getPrice()
    {
        $client = new \GuzzleHttp\Client();
        $response = $client->get('https://api.etherscan.io/api?module=stats&action=ethprice')->getBody();
        $obj = json_decode($response);
        return $obj->result->ethusd;
    }
}