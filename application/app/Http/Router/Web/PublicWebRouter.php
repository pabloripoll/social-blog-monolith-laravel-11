<?php

namespace App\Http\Router\Web;

use Carbon\Carbon;
use App\Support\Debug;
use Illuminate\Http\Request;
use App\Http\Controllers\BlogController;

class PublicWebRouter
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

    public function blogContent(?string $category = null, ?int $paginate = null)
    {
        $content = new \stdClass;

        $content->result = (new BlogController)->listing($category, $paginate);

        $content->layout = 'blog';

        return view('website.template', (array) $content);
    }

    public function asyncBlogContent()
    {
        return view('website.layout.blog', []);
    }

    public function postContent(?int $pid = null)
    {
        $content = new \stdClass;

        //$content->result = (new BlogController)->listing($category, $paginate);

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

        $content->result = (new BlogController)->listing($category, $paginate);

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

        $content->result = (new BlogController)->listing($category, $paginate);

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
