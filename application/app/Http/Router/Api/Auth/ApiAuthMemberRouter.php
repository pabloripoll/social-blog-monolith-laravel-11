<?php

namespace App\Http\Router\Api\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Auth\MemberAuthController;

class ApiAuthMemberRouter
{
    public function login(Request $request)
    {
        $response = (new MemberAuthController)->login($request);

        return response()->json($response);
    }

    public function register(Request $request)
    {
        $request = json_decode($request->getContent());

        $response = (new MemberAuthController)->register($request);

        return response()->json($response);
    }

}
