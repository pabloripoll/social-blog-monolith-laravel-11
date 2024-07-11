<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Support\Random;

/**
 * $ php artisan test --filter SupportRandomTest
 */
class SupportRandomTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_random_class_integer_lenght_is_true_response(): void
    {
        if (\strlen((new Random)->integer(11)) == 11) {
            $this->assertTrue(true);
        } else {
            $this->assertTrue(false);
        }
    }

    public function test_random_class_integer_lenght_is_false_response(): void
    {
        if (\strlen((new Random)->integer(11)) == 10) {
            $this->assertFalse(true);
        } else {
            $this->assertFalse(false);
        }
    }

}
