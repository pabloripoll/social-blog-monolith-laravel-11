<?php

namespace App\Http\Router\Api;

use Domain\Member;
use App\Support\Debug;
use Illuminate\Http\Request;
use App\Http\Controllers\Auth\MemberAuthController;

class ApiAuthRouter
{
    public function login(Request $request)
    {
        $request = json_decode($request->getContent());

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
