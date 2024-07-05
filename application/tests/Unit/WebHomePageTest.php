<?php

namespace Tests\Unit;

use Tests\TestCase;

/**
 * php artisan test --filter WebHomePageTest
 */
class WebHomePageTest extends TestCase
{
    public function test_home_page_returns_succesful_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
