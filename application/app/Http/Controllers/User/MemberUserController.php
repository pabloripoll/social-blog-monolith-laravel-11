<?php

namespace App\Http\Controllers\User;

use Domain\Member;
use App\Support\Random;
use Illuminate\Support\Facades\DB;

class MemberUserController
{
    public function createUser(object $request): array | object
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
            return (object) ['error' => 'alias', 'message' => 'User alias has already been registered'];
        }

        $username_exists = Member::user()->get()->userName($request->username);
        if ($username_exists) {
            return (object) ['error' => 'username', 'message' => 'User email has already been registered'];
        }

        try {
            DB::beginTransaction();

            $user = Member::user()->set([
                'pid' => (new Random)->integer(11),
                'is_active' => 1,
                'alias' => $input->valid->alias,
                'username' => $input->valid->username,
                'password' => $input->valid->password,
                'created_by_user_id' => $request->creator_id ?? 1
            ]);

            if (isset($user->error)) {
                return $user;
            }

            DB::commit();

            return $user;

        } catch (\Exception $e) {
            DB::rollBack();

            return (object) ['error' => json_encode($e->getMessage())];
        }
    }

    public function createProfile(object $params): array | object
    {
        if (! isset($params->user_id) || ! isset($params->email) || ! isset($params->name)) {
            return (object) ['error' => 'user_id email and name must be present'];
        }

        try {
            DB::beginTransaction();

            $profile = Member::profile()->set($params);

            if (isset($profile->error)) {
                return $profile;
            }

            DB::commit();

            return (object) ['success' => true];

        } catch (\Exception $e) {
            DB::rollBack();

            return (object) ['error' => json_encode($e->getMessage())];
        }
    }

}