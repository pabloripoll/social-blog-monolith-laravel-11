<?php

namespace App\Http\Router\Web;

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
            $this->session = (object) $request->session()->get('member');
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

        $session = (new MemberAuthController)->createServerSession($request, $token);

        if (isset($session->error)) {
            return Redirect::to('/sign-in.html');
        }

        if (isset($session->member)) {
            return Redirect::to('/posts.html');
        }
    }

    public function exit(Request $request)
    {
        if (! $this->session) {
            return Redirect::to('/sign-in.html');
        }

        $session = (new MemberAuthController)->deleteServerSession($request);

        if (isset($session->removed)) {
            return Redirect::to('/posts.html');
        }

        return response()->json($session);
    }

    /**
     * Member
     */
    public function profile()
    {
        $content = new \stdClass;

        //$content->result = (new WallController)->listing($category, $paginate);

        $content->layout = 'profile';
        $content->session = $this->session;

        return view('website.member', (array) $content);
    }

    public function settings()
    {
        $content = new \stdClass;

        //$content->result = (new BlogController)->listing($category, $paginate);

        $content->layout = 'settings';
        $content->session = $this->session;

        return view('website.member', (array) $content);
    }

}
