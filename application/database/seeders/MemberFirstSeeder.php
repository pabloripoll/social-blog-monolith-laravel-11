<?php

namespace Database\Seeders;

use App\Support\Debug;
use Illuminate\Database\Seeder;
use App\Http\Controllers\Auth\MemberAuthController;

class MemberFirstSeeder extends Seeder
{
    /**
     * $ php artisan db:seed --class=MemberFirstSeeder
     */
    public function run(): void
    {
        $user = (object) [
            'alias' => 'TheFirst',
            'username' => 'member@example.com',
            'password' => 'Member123#'
        ];

        $register = (new MemberAuthController)->register($user);

        if (isset($register->error)) {
            Debug::log($register);

            return;
        }
    }
}
