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
    public function init(Request $request, $token)
    {
        if ($this->session) {
            return Redirect::to('/posts.html');
        }

        $session = (new MemberAuthController)->localSessionInit($request, $token);

        if (isset($session->error)) {
            //return response()->json($session);
            return Redirect::to('/sign-in.html');
        }

        if (isset($session->member)) {
            return Redirect::to('/posts.html');
        }
    }

    public function exit()
    {
        return null;
    }


}
