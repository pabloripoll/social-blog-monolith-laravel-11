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
            $this->session = (object) $request->session()->get('member');
        }
    }

    public function profile()
    {
        $content = new \stdClass;

        //$content->result = (new WallController)->listing($category, $paginate);

        $content->layout = 'member';
        $content->session = $this->session;

        return view('website.template', (array) $content);
    }

    public function settings()
    {
        $content = new \stdClass;

        //$content->result = (new BlogController)->listing($category, $paginate);

        $content->layout = 'member';
        $content->session = $this->session;

        return view('website.template', (array) $content);
    }

}
