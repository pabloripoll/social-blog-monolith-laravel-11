<?php

namespace App\Http\Router\Web;

use Carbon\Carbon;
use App\Support\Debug;
use Illuminate\Http\Request;
use App\Http\Controllers\Blog\PostController;
use App\Http\Controllers\Blog\WallController;

class WebPublicRouter
{
    public function exit()
    {
        return null;
    }

    public function signInLayout()
    {
        $content = new \stdClass;

        $content->layout = 'sign-in';

        return view('website.template', (array) $content);
    }

    public function signUpLayout()
    {
        $content = new \stdClass;

        $content->layout = 'sign-up';

        return view('website.template', (array) $content);
    }

    public function postsContent(?string $category = null, ?int $paginate = null)
    {
        $content = new \stdClass;

        $content->result = (new PostController)->listing($category, $paginate);

        $content->layout = 'posts';

        return view('website.template', (array) $content);
    }

    public function asyncPostsContent()
    {
        return view('website.layout.posts', []);
    }

    public function postContent(?int $pid = null)
    {
        $content = new \stdClass;

        $content->result = (new PostController)->getPost($pid);

        $content->layout = 'post';

        return view('website.template', (array) $content);
    }

    public function asyncPostContent()
    {
        return view('website.layout.post', []);
    }

    public function wallContent(?string $category = null, ?int $paginate = null)
    {
        $content = new \stdClass;

        $content->result = (new WallController)->listing($category, $paginate);

        $content->layout = 'wall';

        return view('website.template', (array) $content);
    }

    public function asyncWallContent()
    {
        return view('website.layout.wall', []);
    }

    public function profileContent(?string $category = null, ?int $paginate = null)
    {
        $content = new \stdClass;

        $content->result = (new WallController)->listing($category, $paginate);

        $content->layout = 'profile';

        return view('website.template', (array) $content);
    }

    public function asyncProfileContent()
    {
        return view('website.layout.profile', []);
    }

    public function profilePostsContent(?string $category = null, ?int $paginate = null)
    {
        $content = new \stdClass;

        $content->result = (new BlogController)->listing($category, $paginate);

        $content->layout = 'profile-posts';

        return view('website.template', (array) $content);
    }

    public function asyncProfilePostsContent()
    {
        return view('website.layout.posts', []);
    }

}
