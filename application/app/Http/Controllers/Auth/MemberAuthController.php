<?php

namespace App\Http\Controllers\Auth;

use Domain\Member;
use App\Support\Random;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\User\MemberUserController;

class MemberAuthController
{
    /**
     * Session
     */
    public function createToken()
    {
        return (new Random)->token();
    }

    public function isValidToken(string $token): object
    {
        return Member::session()->object()->isValid([
            'token' => $token
        ]);
    }

    public function session(string $token): object
    {
        return Member::session()->get()->token($token);
    }

    public function user(int $user_id): object
    {
        return Member::user()->get()->id($user_id);
    }

    public function extendSessionTime(string $token): object
    {
        $session = $this->session($token);
        if (! $session) {
            return (object) ['error' => 'session not found'];
        }

        $user = $this->user($session->user_id);

        return Member::session()->set([
            'id' => $session->id,
            'reused' => $session->reused + 1,
            'expires_at' => strtotime('now', strtotime("+".$user->session_time." minutes")),
        ]);
    }

    public function stopSession(int $session_id): object
    {
        return Member::session()->set([
            'id' => $session_id,
            'in_standby' => 0,
            'is_opened' => 0,
            'is_expired' => 1,
            'stopped_at' => strtotime('now'),
            'token' => ''
        ]);
    }

    public function startSession(int $session_id): object
    {
        return Member::session()->set([
            'id' => $session_id,
            'in_standby' => 0,
            'is_opened' => 1,
            'is_expired' => 0
        ]);
    }

    public function createSession(object $user, object $client): object
    {
        return Member::session()->set([
            'user_id' => $user->id,
            'ip_address' => $client->ip,
            'in_standby' => 1,
            'is_opened' => 0,
            'is_expired' => 0,
            'expires_at' => strtotime(date("Y/m/d H:i:s", strtotime("+".$user->session_time." minutes"))),
            'token' => $this->createToken(),
            'user_agent' => $client->browser,
        ]);
    }

    public function createServerSession(Request $request, string $token): object
    {
        $input = $this->isValidToken($token);

        if ($input->has_errors) {
            return $input;
        }

        $session = $this->session($token);
        if (! $session) {
            return (object) ['error' => 'session not found'];
        }

        if (! $session->in_standby || $session->is_expired || ! ($session->expires_at > strtotime('now'))) {
            return (object) ['error' => 'session is not valid'];
        }

        $start = $this->startSession($session->id);

        $user = $this->user($session->user_id);

        $payload = [
            'token' => $token,
            'alias' => $user->alias,
            'image' => null,
            'expires_at' => $session->expires_at
        ];

        $request->session()->put('member', $payload);

        return (object) ['member' => $payload];
    }

    public function deleteServerSession(Request $request): object
    {
        $token = $request->session()->get('member.token');

        if ($token) {
            $session = $this->session($token);

            if (! $session) {
                return (object) ['error' => 'session not found'];
            }

            $session = $this->stopSession($session->id);

            $request->session()->forget('member');
        }

        return (object) ['removed' => $session ?? $token];
    }

    public function login(Request $request): array | object
    {
        $payload = json_decode($request->getContent());
        $client = (object) [
            'ip' => $request->ip(),
            'browser' => $request->userAgent()
        ];

        $input = Member::user()->object()->isValid([
            'username' => $payload->username,
            'password' => $payload->password
        ]);

        if ($input->has_errors) {
            $input->message = 'login values are not valid';

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

        $session = $this->createSession($user, $client);

        if (isset($session->error)) {
            return $session;
        }

        return (object) [
            'success' => true,
            'session' => [
                'token' => $session->token,
                'expires_at' => $session->expires_at,
            ]
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

        $profile = (new MemberUserController)->createProfile((object) [
            'user_id' => $user->id,
            'email' => $user->username,
            'name' => $user->alias
        ]);
        if (isset($profile->error)) {
            return $profile;
        }

        return (object) [
            'success' => true,
            'username' => $user->username
        ];
    }

}
