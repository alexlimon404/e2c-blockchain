<?php

namespace App\Http\Controllers\Api;

use App\Models\Wallet;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class E2CController extends Controller
{
    public function getWallet (Request $request)
    {
        dd(app('Etherscan')->foo());
        if(Wallet::where('id', $request->id)->exists()) {
            $wallet = Wallet::find($request->id);
            return $wallet;
        }
        return response(array(
            'message' => 'такого кошелька не существует',
        ), 404);
    }
}
