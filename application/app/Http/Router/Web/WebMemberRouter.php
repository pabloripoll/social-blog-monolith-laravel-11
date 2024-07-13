<?php

namespace App\Http\Router\Web;

use Carbon\Carbon;
use Domain\Member;
use App\Support\Debug;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Auth\MemberAuthController;

class WebMemberRouter
{
    protected $session;

    public function __construct(Request $request)
    {
        if ($request->session()->has('member')) {
            $this->session = $request->session()->get('member');
        }
    }

    /**
     * Auth
     */

}
