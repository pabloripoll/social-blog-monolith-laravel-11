<?php

namespace Tests\Unit\Domain;

use Tests\TestCase;

/**
 * $ php artisan test --filter MemberDomainTest
 */
class MemberDomainTest extends TestCase
{
    public function test_home_page_returns_succesful_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
