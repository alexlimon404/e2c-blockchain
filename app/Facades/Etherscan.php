<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class Etherscan extends Facade
{
    public static function getFacadeAccessor()
    {
        return 'etherscan';
    }
}