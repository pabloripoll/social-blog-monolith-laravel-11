<?php

namespace Database\Seeders;

use Domain\Admin;
use App\Support\Debug;
use Illuminate\Database\Seeder;

class TestSeeder extends Seeder
{
    /**
     * $ php artisan db:seed --class=TestSeeder
     */
    public function run(): void
    {
        Debug::log(Admin::user()->model()->table());
    }
}
