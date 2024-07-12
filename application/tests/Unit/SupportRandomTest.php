<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Support\Random;

/**
 * $ php artisan test --filter SupportRandomTest
 */
class SupportRandomTest extends TestCase
{
    public function test_integer_method_output_lenght_is_equal_as_required(): void
    {
        if (\strlen((new Random)->integer(8)) == 8) {
            $this->assertTrue(true);
        } else {
            $this->assertTrue(false);
        }
    }

    public function test_integer_method_output_lenght_is_not_equal_as_required(): void
    {
        if (\strlen((new Random)->integer(8)) == 10) {
            $this->assertFalse(true);
        } else {
            $this->assertFalse(false);
        }
    }

    public function test_token_method_default_lenght_is_64_char(): void
    {
        if (\strlen((new Random)->token()) == 64) {
            $this->assertTrue(true);
        } else {
            $this->assertTrue(false);
        }
    }

    public function test_token_method_custom_lenght_is_16_char(): void
    {
        if (\strlen((new Random)->token(16)) == 16) {
            $this->assertTrue(true);
        } else {
            $this->assertTrue(false);
        }
    }

}
