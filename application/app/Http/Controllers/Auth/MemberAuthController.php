<?php

namespace App\Http\Controllers\Auth;

use Domain\Member;
use App\Support\Debug;
use App\Support\Random;
use Illuminate\Support\Facades\DB;

class MemberAuthController
{
    /**
     * Session
     */
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

    /**
     * Access
     */
    public function login(object $request): array | object
    {
        $input = Member::user()->object()->isValid([
            'username' => $request->username ?? null,
            'password' => $request->password ?? null
        ]);

        if ($input->has_errors) {
            return (object) [
                'error' => $input->error,
                'message' => 'values are not valid',
                'errors' => $input->errors,
                'has_errors' => $input->has_errors
            ];
        }

        $user = Member::user()->get()->rowByColumns([
            'username' => $input->valid->username,
            'password' => $input->valid->password
        ]);

        if (! $user) {
            return (object) [
                'error' => 'not-found',
                'message' => 'member is not registered'
            ];
        }

        return $request;
    }

    /**
     * Register
     */
    public function register(object $request): array | object
    {
        $input = Member::user()->object()->isValid([
            'alias' => $request->alias,
            'username' => $request->username,
            'password' => $request->password
        ]);

        if ($input->has_errors) {
            return $input;
        }

        $alias_exists = Member::user()->get()->alias($request->alias);
        if ($alias_exists) {
            return (object) ['error' => 'alias', 'message' => 'name already exists'];
        }

        $username_exists = Member::user()->get()->userName($request->username);
        if ($username_exists) {
            return (object) ['error' => 'username', 'message' => 'username already exists'];
        }

        try {
            DB::beginTransaction();

            $user = Member::user()->set([
                'pid' => (new Random)->integer(11),
                'is_active' => 1,
                'alias' => $input->valid->alias,
                'username' => $input->valid->username,
                'password' => $input->valid->password,
                'created_by_user_id' => 1
            ]);

            if (isset($user->error)) {
                return $user;
            }

            $profile = (object) Member::profile()->set([
                'user_id' => $user->id,
                'email' => $user->username,
                'name' => $user->alias
            ]);

            if (isset($profile->error)) {
                return $profile;
            }

            $setting = (object) Member::setting()->set([
                'user_id' => $user->id,
                'params' => json_encode([])
            ]);

            if (isset($setting->error)) {
                return $setting;
            }

            DB::commit();

            return $request;

        } catch (\Exception $e) {
            DB::rollBack();

            Debug::log($e->getMessage());
        }
    }

    public function createToken()
    {

    }

}
