<?php

namespace App\Http\Controllers\Api;

use App\Models\Wallet;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class E2CController extends Controller
{
    public function getWallet ()
    {
        $client = new \GuzzleHttp\Client();
        $response = $client->get('https://api.etherscan.io/api?module=stats&action=ethprice')->getBody();
        $obj = json_decode($response);
        $address = new Wallet();
        $address->address = $obj->result->ethusd;
        $address->save();
        return $obj->result->ethusd;
    }
}
