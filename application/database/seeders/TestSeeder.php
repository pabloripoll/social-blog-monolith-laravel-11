<?php

namespace Database\Seeders;

use Domain\Member;
use App\Support\Debug;
use Illuminate\Database\Seeder;

class TestSeeder extends Seeder
{
    /**
     * $ php artisan db:seed --class=TestSeeder
     */
    public function run(): void
    {
        $user = Member::user()->get()->id(1);

        $update = Member::user()->set([
            'id' => $user->id,
            'alias' => 'ThyMember'
        ]);

        Debug::log($update);
    }
}
