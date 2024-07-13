<?php

namespace App\Http\Router\Web;

use Domain\Member;
use App\Support\Debug;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Blog\PostController;
use App\Http\Controllers\Blog\WallController;
use App\Http\Controllers\Auth\MemberAuthController;

class WebPublicRouter
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

        return Redirect::to('/posts.html');
    }

    public function signInLayout()
    {
        if ($this->session) {
            return Redirect::to('/posts.html');
        }

        $content = new \stdClass;
        $content->layout = 'sign-in';
        $content->session = $this->session;

        return view('website.template', (array) $content);
    }

    public function signUpLayout()
    {
        if ($this->session) {
            return Redirect::to('/posts.html');
        }

        $content = new \stdClass;
        $content->layout = 'sign-up';
        $content->session = $this->session;

        return view('website.template', (array) $content);
    }

    /**
     * Blog
     */
    public function postsContent(?string $category = null, ?int $paginate = null)
    {
        $content = new \stdClass;

        $content->result = (new PostController)->listing($category, $paginate);

        $content->layout = 'posts';
        $content->session = $this->session;

        return view('website.template', (array) $content);
    }

    public function postContent(?int $pid = null)
    {
        $content = new \stdClass;

        $content->result = (new PostController)->getPost($pid);

        $content->layout = 'post';
        $content->session = $this->session;

        return view('website.template', (array) $content);
    }

    public function wallContent(?string $category = null, ?int $paginate = null)
    {
        $content = new \stdClass;

        $content->result = (new WallController)->listing($category, $paginate);

        $content->layout = 'wall';
        $content->session = $this->session;

        return view('website.template', (array) $content);
    }

    /**
     * Members
     */
    public function profileContent(?string $category = null, ?int $paginate = null)
    {
        $content = new \stdClass;

        $content->result = (new WallController)->listing($category, $paginate);

        $content->layout = 'profile';
        $content->session = $this->session;

        return view('website.template', (array) $content);
    }

    public function profilePostsContent(?string $category = null, ?int $paginate = null)
    {
        $content = new \stdClass;

        $content->result = (new BlogController)->listing($category, $paginate);

        $content->layout = 'profile-posts';
        $content->session = $this->session;

        return view('website.template', (array) $content);
    }

}
