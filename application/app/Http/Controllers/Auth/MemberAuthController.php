<?php

namespace App\Http\Controllers\Auth;

use Domain\Member;
use App\Support\Debug;
use App\Support\Random;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\User\MemberUserController;

class MemberAuthController
{
    /**
     * Session
     */
    public function createToken()
    {

    }

    public function updateSession(object $session): array | object
    {
        $response = new \stdClass;

        $response->session = Member::session()->set([
            'id' => $session->id
        ]);

        return $response;
    }

    public function terminateSession(?int $session_token): array | object
    {
        $response = new \stdClass;

        $response->session = Member::session()->delete($session_token);

        return $response;
    }

    public function createSession(object $user, object $client): array | object
    {
        return Member::session()->set([
            'user_id' => $user->id,
            'ip_address' => $client->ip,
            'in_standby' => 1,
            'is_opened' => 0,
            'is_expired' => 0,
            'expires_at' => \date("Y/m/d H:i:s", strtotime("+30 minutes")),
            'token' => (new Random)->token(16),
            'user_agent' => $client->browser,
        ]);
    }

    public function login(Request $request): array | object
    {
        $payload = json_decode($request->getContent());
        $client = (object) [
            'ip' => $request->ip(),
            'browser' => $request->userAgent()
        ];

        $input = Member::user()->object()->isValid([
            'username' => $payload->username ?? null,
            'password' => $payload->password ?? null
        ]);

        if ($input->has_errors) {
            $input->message = 'values are not valid';

            return $input;
        }

        $user = Member::user()->get()->userName($input->valid->username);
        if (! $user) {
            return (object) [
                'error' => 'not-found',
                'message' => 'user is not registered'
            ];
        }

        if (! Hash::check($input->valid->password, $user->password)) {
            return (object) [
                'error' => 'password',
                'message' => 'password does not match'
            ];
        }

        // create session
        $session = $this->createSession($user, $client);
        if (isset($session->error)) {
            return $session;
        }

        return (object) [
            'success' => true,
            'alias' => $user->alias
        ];
    }

    /**
     * Register
     */
    public function register(object $request): array | object
    {
        $user = (new MemberUserController)->createUser($request);
        if (isset($user->error)) {
            return $user;
        }

        $params = new \stdClass;
        $params->user_id = $user->id;
        $params->email = $user->username;
        $params->name = $user->alias;
        $profile = (new MemberUserController)->createProfile($params);
        if (isset($profile->error)) {
            return $profile;
        }

        return (object) [
            'success' => true,
            'username' => $user->username
        ];
    }

}
