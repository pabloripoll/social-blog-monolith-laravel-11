<?php

namespace Tests\Feature\Web;

use Tests\TestCase;
use App\Support\Random;
use Illuminate\Support\Str;

/**
 * $ php artisan test --filter PublicPagesTest
 */
class PublicPagesTest extends TestCase
{
    public function test_home_page_returns_succesful_response(): void
    {
        $response = $this->get('/home.html');

        $response->assertStatus(200);
    }

    public function test_posts_page_returns_succesful_response(): void
    {
        $response = $this->get('/posts.html');

        $response->assertStatus(200);
    }

    public function test_wall_page_returns_succesful_response(): void
    {
        $response = $this->get('/wall.html');

        $response->assertStatus(200);
    }

    public function test_post_page_returns_succesful_response(): void
    {
        $random_pid = (new Random)->integer(11);
        $random_slug = Str::slug('Example Title');

        $response = $this->get('/post/'.$random_pid.'/'.$random_slug.'.html');

        $response->assertStatus(200);
    }

    public function test_sign_in_page_returns_succesful_response(): void
    {
        $response = $this->get('/sign-in.html');

        $response->assertStatus(200);
    }

    public function test_sign_up_page_returns_succesful_response(): void
    {
        $response = $this->get('/sign-up.html');

        $response->assertStatus(200);
    }
}
