<?php

namespace App\Http\Controllers\Blog;

use Domain\Blog;
use App\Support\Debug;
use Illuminate\Http\Request;

class WallController
{
    public function listing(?string $category = null, ?int $paginate = null)
    {
        $category = $category ?? 'all';
        $paginate = $paginate ?? '1';

        /*
        $input = Blog::category()->validate()->name($category);
        if (! $input->safe) {

        }

        $category_id = Blog::category()->get()->byName($category);

        $result = Blog::posts()->get()->all($category_id, $paginate);
        */

        return [];
    }

    public function getPost(?int $pid = null)
    {
        /*
        $input = Blog::post()->validate()->pid($pid);
        if (! $input->is_valid) {

        }

        $post = Blog::posts()->get()->byPid($category_id, $paginate);
        */

        return [];
    }

    public function getPostComments(?int $post_pid = null)
    {
        /*
        $input = Blog::post()->validate()->pid($pid);
        if (! $input->is_valid) {

        }

        $post = Blog::posts()->get()->byPid($category_id, $paginate);
        */

        return [];
    }

}
