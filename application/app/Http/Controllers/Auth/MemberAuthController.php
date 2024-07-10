<?php

namespace App\Http\Controllers\Auth;

use Domain\Member;
use App\Support\Debug;
use Illuminate\Http\Request;

class MemberAuthController
{
    public function createSession(object $user): array | object
    {
        $response = new \stdClass;

        $session = Member::session()->set([
            'user_id' => $user->id
        ]);

        $response->session = [
            'toke' => $session->token
        ];

        return $response;
    }

    public function updateSession(object $user): array | object
    {
        $response = new \stdClass;

        $response->session = Member::session()->set([
            'user_id' => $user->id
        ]);

        return $response;
    }

    public function terminateSession(?int $session_token): array | object
    {
        $response = new \stdClass;

        $response->session = Member::session()->delete($session_token);

        return $response;
    }

    public function login(object $request): array | object
    {
        $input = Member::user()->object()->isValid([
            'alias' => $request->alias ?? null,
            'username' => $request->username ?? null,
            'password' => $request->password ?? null
        ]);

        if ($input->has_errors) {

        }

        $user = Member::user()->get()->forAuth([
            'username' => $input->username,
            'password' => $input->password
        ]);

        $session = $this->createSession($user);

        return [];
    }

    public function register(object $request): array | object
    {
        $input = Member::user()->object()->isValid([
            'alias' => $request->alias ?? null,
            'username' => $request->username ?? null,
            'password' => $request->password ?? null
        ]);

        $response = new \stdClass;

        if ($input->errors) {

        }

        $user = Member::user()->set([
            'alias' => $input->alias,
            'username' => $input->username,
            'password' => $input->password
        ]);

        $profile = Member::profile()->set([
            'user_id' => $user->id,
            'username' => $input->username,
            'password' => $input->password
        ]);

        $session = $this->createSession($user);

        return $response;
    }

    public function createToken()
    {

    }

}
